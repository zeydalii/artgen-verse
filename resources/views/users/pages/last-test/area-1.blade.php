@extends('users.partials.master')
@section('content')


<div class="w-full h-screen bg-mainHeader flex flex-col justify-center items-center font-montserrat">
  <img src="{{ asset('assets/pecahan/traps-test-1.png') }}" alt="" class="phone:hidden w-20 absolute top-20 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-1.png') }}" alt="" class="hidden phone:block w-32 absolute top-20 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-2.png') }}" alt="" class="phone:hidden w-20 absolute bottom-60 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-2.png') }}" alt="" class="hidden phone:block w-36 absolute bottom-60 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-3.png') }}" alt="" class="phone:hidden w-24 absolute bottom-0 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-3.png') }}" alt="" class="hidden phone:block w-44 absolute bottom-0 right-0 z-10" draggable="false">

  <div class="flex flex-col gap-y-7 phone:gap-y-10 justify-center items-center z-20 fixed top-0 text-white font-bold bg-white/15 w-full py-7">
    <div class="flex flex-col justify-center items-center gap-y-2">
      <h2 class="text-xl phone:text-3xl">SELESAIKAN PETUALANGAN!</h2>
      <p class="text-phone phone:text-xs">SETELAH MENGUMPULKAN BEKAL INFORMASI, AYO UJI INGATAN KALIAN!</p>
    </div>
    <p class="text-sm phone:text-base tracking-[13px]">LET’S GO!</p>
  </div>

  <div class="flex flex-col gap-y-10 justify-start items-center h-[calc(100vh-300px)] mt-[150px] text-white font-bold w-full py-7 overflow-y-scroll relative z-20">
    <div class="flex flex-col justify-center items-center gap-y-3">
      <h2 class="text-xl">AREA 1</h2>
      <p class="text-xs">DI AREA INI KALIAN HARUS MENEBAK ALIRAN SENI</p>
      <p class="text-xs">YANG COCOK DENGAN LUKISAN YANG ADA!</p>
    </div>

    @foreach($questions as $question)
      <form action="/last-test/area-1" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
          <img src="{{ asset( $question->soal ) }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
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

  @if(count($userTests) == 5)
    <div class="flex justify-center items-center z-20 fixed bottom-0 text-white font-bold w-full py-2">
      <button onclick="location.href='/last-test/area-2'">
        <img src="{{ asset('assets/pecahan/next-icon.png') }}" alt="" class="w-20" draggable="false">
      </button>
    </div>
  @endif
</div>

@endsection