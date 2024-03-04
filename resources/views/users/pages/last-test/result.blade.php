@extends('users.partials.master')
@section('content')


<div class="w-full h-screen bg-mainHeader flex justify-center items-center font-montserrat">
  <img src="{{ asset('assets/pecahan/confetti.png') }}" alt="" class="phone:hidden w-full absolute top-20 right-0 z-10" draggable="false">

  <div class="flex flex-col gap-y-10 justify-center items-center relative z-20">
    <img src="{{ asset('assets/pecahan/logo-white.png') }}" alt="" class="w-28 phone:w-48" draggable="false">
    <div class="flex flex-col gap-y-3 justify-center items-center text-white bg-white/10 relative pt-20 px-20 phone:px-24 pb-10 mt-10 rounded-3xl">
      <div class="flex flex-col gap-y-3 justify-center items-center text-mainHeader bg-senimanBg rounded-full px-10 py-5 absolute -top-10">
        <h2 class="text-xl phone:text-2xl font-extrabold">AREA</h2>
        <h2 class="text-xl phone:text-2xl font-extrabold">TERSELESAIKAN!</h2>
      </div>
      <div class="text-white font-bold flex flex-col justify-center items-center mt-10">
        <p class="text-xl">Your Score</p>
        <div class="relative w-36 mt-3 mb-2">
          <img src="{{ asset('assets/pecahan/result-box.png') }}" alt="" class="w-full" draggable="false">
          <p class="w-full h-full text-2xl absolute bottom-0 flex justify-center items-center text-mainHeader font-extrabold">1300</p>
        </div>
        <p class="text-sm"><span class="text-[#FFCD26]">Perfect target:</span> 1500</p>
      </div>
      <button type="button" onclick="location.href='/area-tantangan'" class="bg-bgNavbar px-12 py-3 font-bold mt-10 rounded-full text-white shadow-buttonSubmit">Selesai</button>
    </div>
  </div>
</div>

@endsection