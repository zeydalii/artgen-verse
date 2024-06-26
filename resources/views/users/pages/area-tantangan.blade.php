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
        @if (auth()->user()->first_test === 0)
          <button class="bg-senimanBg px-16 py-2 rounded-2xl" onclick="location.href='/first-test/area-1'">Petualang <br> Baru</button>
        @else
          <p class="bg-senimanBg/35 px-16 py-2 rounded-2xl flex justify-center items-center text-center">Petualang <br> Baru</p>
        @endif
        @if (auth()->user()->first_test === 1 && auth()->user()->last_test === 0)
          <button class="bg-senimanBg px-16 py-2 rounded-2xl" onclick="location.href='/last-test/area-1'">Akhir <br> Petualangan</button>
        @else
          <p class="bg-senimanBg/35 px-16 py-2 rounded-2xl flex justify-center items-center text-center">Akhir <br> Petualangan</p>
        @endif
      </div>
      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="bg-bgNavbar px-12 py-3 rounded-full text-white mt-10 font-bold text-sm shadow-buttonSubmit">Logout</button>
      </form>
    </div>
  </div>
</div>

@endsection