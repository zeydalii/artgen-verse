@extends('users.partials.master')
@section('content')


<div class="w-full h-screen bg-mainHeader flex justify-center items-center font-montserrat">
  <img src="{{ asset('assets/pecahan/traps-login-1.png') }}" alt="" class="phone:hidden w-20 absolute top-20 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-login-1.png') }}" alt="" class="hidden phone:block w-28 absolute top-10 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-login-2.png') }}" alt="" class="phone:hidden w-20 absolute bottom-40 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-login-2.png') }}" alt="" class="hidden phone:block w-40 absolute bottom-60 left-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-login-3.png') }}" alt="" class="phone:hidden w-28 absolute bottom-10 right-0 z-10" draggable="false">
  <img src="{{ asset('assets/pecahan/traps-login-3.png') }}" alt="" class="hidden phone:block w-48 absolute bottom-10 right-0 z-10" draggable="false">

  <div class="flex flex-col gap-y-10 justify-center items-center relative z-20">
    <div class="flex flex-col gap-y-3 justify-center items-center text-white">
      <h2 class="text-2xl phone:text-4xl font-extrabold">Registrasi Akun</h2>
      <p class="text-xs phone:text-base font-bold">Isi identitas Artgen People kamu di bawah ini ya!</p>
      @if (session()->has('registerSuccess'))
          <div class="bg-green-500 text-white py-2 px-4 rounded-md text-sm w-[250px] text-center font-bold">
              {{ session('registerSuccess') }}
          </div>
      @endif
      @error('username')
        <div class="bg-red-500 text-white py-2 px-4 rounded-md text-sm w-[250px] text-center font-bold">
            {{ $message }}
        </div>
      @enderror
      @error('nama_lengkap')
        <div class="bg-red-500 text-white py-2 px-4 rounded-md text-sm w-[250px] text-center font-bold">
          {{ $message }}
        </div>
      @enderror
      @error('password')
        <div class="bg-red-500 text-white py-2 px-4 rounded-md text-sm w-[250px] text-center font-bold">
          {{ $message }}
        </div>
      @enderror
      <form action="/register" method="POST" class="flex flex-col justify-center items-center gap-y-5 mt-3 mb-10 text-mainHeader font-bold text-sm">
        @csrf
        <div class="relative h-14 w-full flex items-center">
          <div class="h-14 w-14 bg-white rounded-full absolute left-0 z-10 flex items-center justify-center shadow-button">
            <img src="{{ asset('assets/pecahan/user-icon.png') }}" alt="" class="w-7 h-7" draggable="false">
          </div>
          <input type="text" name="username" autocomplete="off" placeholder="Username" class="pl-16 pr-5 py-2.5 bg-white rounded-full placeholder-mainHeader focus:outline-none shadow-buttonSubmit">
        </div>
        <div class="relative h-14 w-full flex items-center">
          <div class="h-14 w-14 bg-white rounded-full absolute left-0 z-10 flex items-center justify-center shadow-button">
            <img src="{{ asset('assets/pecahan/user-icon.png') }}" alt="" class="w-7 h-7" draggable="false">
          </div>
          <input type="text" name="nama_lengkap" autocomplete="off" placeholder="Nama Lengkap" class="pl-16 pr-5 py-2.5 bg-white rounded-full placeholder-mainHeader focus:outline-none shadow-buttonSubmit">
        </div>
        <div class="relative h-14 w-full flex items-center">
          <div class="h-14 w-14 bg-white rounded-full absolute left-0 z-10 flex items-center justify-center shadow-button">
            <img src="{{ asset('assets/pecahan/lock-icon.png') }}" alt="" class="w-7 h-7" draggable="false">
          </div>
          <input type="password" name="password" autocomplete="off" placeholder="Password" class="pl-16 pr-5 py-2.5 bg-white rounded-full placeholder-mainHeader focus:outline-none shadow-buttonSubmit">
        </div>
        <button type="submit" class="bg-bgNavbar px-12 py-3 rounded-full text-white mt-3 shadow-buttonSubmit">Daftar</button>
      </form>
      <p class="font-bold">Sudah menjadi Artgen People?</p>
      <a href="/login" class="font-bold underline">Login disini!</a>
    </div>
  </div>
</div>

@endsection