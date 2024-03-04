@extends('users.partials.master')
@section('content')


<div class="w-full h-screen bg-mainHeader flex flex-col justify-center items-center font-montserrat">
  <img src="{{ asset('assets/pecahan/traps-test-4.png') }}" alt="" class="phone:hidden w-20 absolute top-0 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-4.png') }}" alt="" class="hidden phone:block w-32 absolute top-0 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-5.png') }}" alt="" class="phone:hidden w-16 absolute bottom-60 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-5.png') }}" alt="" class="hidden phone:block w-28 absolute bottom-80 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-6.png') }}" alt="" class="phone:hidden w-28 absolute bottom-20 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-test-6.png') }}" alt="" class="hidden phone:block w-44 absolute bottom-20 left-0 z-10" draggable="false">

  <div class="flex flex-col gap-y-10 justify-start items-center h-[calc(100vh-130px)] text-white font-bold w-full py-7 overflow-y-scroll relative z-20">
    <div class="flex flex-col justify-center items-center gap-y-3">
      <h2 class="text-xl">AREA 2</h2>
      <p class="text-xs">DI AREA INI KALIAN HARUS MENEBAK SENIMAN</p>
      <p class="text-xs">YANG MELUKIS KARYA YANG AKAN DITUNJUKKAN!</p>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center">
      <img src="{{ asset('assets/test/last/salvador-art1.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">SALVADOR DALI</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">VAN GOGH</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/ekspresionisme2-p2.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">VAN GOGH</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">EDVARD MUNCH</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/kontemporer-1.png') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">YAYOI KUSAMA</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">AFFANDI</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/leonardo-art5.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">LEONARDO DA VINCI</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">PICASSO</button>
      </div>
    </div>

    <div class="w-[400px] flex flex-col gap-y-10 items-center justify-center mt-12">
      <img src="{{ asset('assets/test/last/affandi-art3.jpg') }}" alt="" class="w-[250px] phone:w-[300px] rounded-xl" draggable="false">
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">AFFANDI</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">RADEN SALEH</button>
      </div>
    </div>
  </div>

  <div class="flex justify-center items-center z-20 fixed bottom-0 text-white font-bold w-full py-2">
    <button onclick="location.href='/last-test/area-3'">
      <img src="{{ asset('assets/pecahan/next-icon.png') }}" alt="" class="w-20" draggable="false">
    </button>
  </div>
</div>

@endsection