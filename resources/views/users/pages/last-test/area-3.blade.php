@extends('users.partials.master')
@section('content')


<div class="w-full h-screen bg-mainHeader flex flex-col justify-center items-center font-montserrat">
  <img src="{{ asset('assets/pecahan/traps-test-7.png') }}" alt="" class="phone:hidden w-14 absolute top-0 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-7.png') }}" alt="" class="hidden phone:block w-24 absolute top-0 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-8.png') }}" alt="" class="phone:hidden w-16 absolute top-60 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-8.png') }}" alt="" class="hidden phone:block w-28 absolute top-80 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-9.png') }}" alt="" class="phone:hidden w-24 absolute bottom-5 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-9.png') }}" alt="" class="hidden phone:block w-44 absolute bottom-10 right-0 z-10" draggable="false">

  <div class="flex flex-col gap-y-16 justify-start items-center h-[calc(100vh-130px)] text-white font-bold w-full py-7 overflow-y-scroll relative z-20">
    <div class="flex flex-col justify-center items-center gap-y-3">
      <h2 class="text-xl">AREA 3</h2>
      <p class="text-xs">DI AREA INI KALIAN HARUS MENEBAK ALIRAN SENI</p>
      <p class="text-xs">YANG COCOK DENGAN CIRI-CIRI YANG DISEBUTKAN YA!</p>
    </div>

    @foreach($questions as $question)
      <form action="/last-test/area-3" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <div class="w-[500px] flex flex-col gap-y-10 items-center justify-center bg-black/25 px-10 py-5">
          <p class="text-center uppercase text-xs phone:text-base px-10 phone:px-0">{{ $question->soal }}</p>
          <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
            @php
              $userTestsForQuestion = $userTests[$question->id][$userAuth->id] ?? [];
              $isAnswered = count($userTestsForQuestion) > 0;
              $skorTmp = $isAnswered ? collect($userTestsForQuestion)->first()->skor_tmp : null;
              $skorBenar = $skorTmp === 100;
              $skorSalah = $skorTmp === 0;
            @endphp
            @if($isAnswered)
              @if($skorBenar)
                @foreach($question->answers as $answer)
                  <p class="{{ $skorBenar && $answer->benar ? 'bg-green-500 scale-110 text-white' : 'bg-red-800 scale-90 text-white/40' }} h-[70px] w-[150px] phone:w-[300px] rounded-xl uppercase flex justify-center items-center text-center">
                    {{ $answer->jawaban }}
                  </p>
                @endforeach
              @else
                @foreach($question->answers as $answer)
                  <p class="{{ $skorSalah && !$answer->benar ? 'bg-red-500 scale-110 text-white' : 'bg-green-800 scale-90 text-white/40' }} h-[70px] w-[150px] phone:w-[300px] rounded-xl uppercase flex justify-center items-center text-center">
                    {{ $answer->jawaban }}
                  </p>
                @endforeach
              @endif
            @else
              @foreach($question->answers as $answer)
                <button type="submit" name="selected_answer" value="{{ $answer->jawaban }}" class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl uppercase">
                  {{ $answer->jawaban }}
                </button>
              @endforeach
            @endif
          </div>
        </div>
      </form>
    @endforeach
  </div>

  @if(count($userTests3) == 15)
    <form action="/last-test/submit" method="POST" class="flex justify-center items-center z-20 fixed bottom-0 text-white font-bold w-full py-2">
      @csrf
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
      <button type="submit">
        <img src="{{ asset('assets/pecahan/next-icon.png') }}" alt="" class="w-20" draggable="false">
      </button>
    </form>
  @endif
</div>

@endsection