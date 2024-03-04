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

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center">
      <img src="{{ asset('assets/test/last/abstrak2-p3.png') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">ABSTRAK EKSPRESIONISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">SUREALISME</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/kubisme2-p6.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">KUBISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">IMPRESIONISME</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/romantisme2-p5.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">ROMANTISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">REALISME</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/neoklasik2-p5.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">ROMANTISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">NEOKLASIK</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/naturalism_2.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">NATURALISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">SUREALISME</button>
      </div>
    </div>
  </div>

  <div class="flex justify-center items-center z-20 fixed bottom-0 text-white font-bold w-full py-2">
    <button onclick="location.href='/last-test/area-2'">
      <img src="{{ asset('assets/pecahan/next-icon.png') }}" alt="" class="w-20" draggable="false">
    </button>
  </div>
</div>

@endsection