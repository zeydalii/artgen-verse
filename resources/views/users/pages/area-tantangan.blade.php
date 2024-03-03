@extends('users.partials.master')
@section('content')


<div class="w-full h-screen bg-mainHeader flex justify-center items-center font-montserrat">
  <img src="{{ asset('assets/pecahan/traps-area-1.png') }}" alt="" class="phone:hidden w-32 absolute top-0 left-20 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-area-1.png') }}" alt="" class="hidden phone:block w-56 absolute top-0 left-40 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-area-2.png') }}" alt="" class="phone:hidden w-28 absolute bottom-60 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-area-2.png') }}" alt="" class="hidden phone:block w-48 absolute bottom-60 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-area-3.png') }}" alt="" class="phone:hidden w-20 absolute bottom-10 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-area-3.png') }}" alt="" class="hidden phone:block w-36 absolute bottom-10 left-0 z-10" draggable="false">

  <div class="flex flex-col gap-y-10 justify-center items-center relative z-20">
    <img src="{{ asset('assets/pecahan/logo-white.png') }}" alt="" class="w-28 phone:w-48" draggable="false">
    <div class="flex flex-col gap-y-3 justify-center items-center text-white">
      <h2 class="text-2xl phone:text-4xl font-extrabold">SELAMAT DATANG</h2>
      <h2 class="text-2xl phone:text-4xl font-extrabold">DI AREA TANTANGAN</h2>
      <div class="text-bgNavbar font-bold flex flex-col gap-y-10 mt-10">
        <button class="bg-senimanBg px-16 py-2 rounded-2xl" onclick="location.href='/first-test/area-1'">Petualang <br> Baru</button>
        <button class="bg-senimanBg px-16 py-2 rounded-2xl">Akhir <br> Petualangan</button>
        <button class="bg-senimanBg px-16 py-2 rounded-2xl">Rapot <br> Petualangan</button>
      </div>
    </div>
  </div>
</div>

@endsection