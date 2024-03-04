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

    <div class="w-[500px] flex flex-col gap-y-10 items-center justify-center bg-black/25 px-10 py-5">
      <p class="text-center uppercase text-xs phone:text-base px-10 phone:px-0">LUKISANNYA MENGGAMBARKAN ALAM MIMPI, SEMUA OBJEKNYA TIDAK MASUK AKAL, KUDA BERKEPALA AYAM, MANUSIA BERKAKI T-REX, DAN LAIN-LAIN. MENURUT KALIAN ALIRAN APAKAH LUKISAN YANG SEPERTI ITU?</p>
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">EKSPRESIONISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">SUREALISME</button>
      </div>
    </div>

    <div class="w-[500px] flex flex-col gap-y-10 items-center justify-center bg-black/25 px-10 py-5">
      <p class="text-center uppercase text-xs phone:text-base px-10 phone:px-0">Seniman dari aliran ini cenderung menggambarkan kehidupan sehari-hari dan kondisi sosial, dengan fokus pada detail yang akurat dan penggambaran yang jujur. Aliran seni apakah ITU?</p>
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">NATURALISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">REALISME</button>
      </div>
    </div>

    <div class="w-[500px] flex flex-col gap-y-10 items-center justify-center bg-black/25 px-10 py-5">
      <p class="text-center uppercase text-xs phone:text-base px-10 phone:px-0">GERAKAN YANG BANYAK MENAMPILKAN patung dan lukisan yang menampilkan dewa-dewi, pahlawan, atau adegan mitologis, DENGAN MENONJOLKAN WARNA-WARNA PUTIH, KREM, ADALAH GERAKAN DARI ALIRAN?</p>
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">DADAISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">NEOKLASIK</button>
      </div>
    </div>

    <div class="w-[500px] flex flex-col gap-y-10 items-center justify-center bg-black/25 px-10 py-5">
      <p class="text-center uppercase text-xs phone:text-base px-10 phone:px-0">Aliran seni yang menekankan pada perasaan individu, ekspresi emosional, dan sering menggunakan warna-warna yang tidak realistis atau ekspresif, kadang-kadang dengan bentuk yang berlebihan dan distorsi, ADALAH ALIRAN...</p>
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">EKSPRESIONISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">NATURALISME</button>
      </div>
    </div>

    <div class="w-[500px] flex flex-col gap-y-10 items-center justify-center bg-black/25 px-10 py-5">
      <p class="text-center uppercase text-xs phone:text-base px-10 phone:px-0">ALIRAN DENGAN NUANSA PEMANDANGAN ALAM, MEMILIKI PALET WARNA YANG CENDERUNG KEBUMIAN, MERUPAKAN ALIRAN SENI RUPA APA YA?</p>
      <div class="flex justify-center w-full gap-x-8 phone:gap-x-20 text-black text-xs">
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">NATURALISME</button>
        <button class="bg-senimanBg h-[70px] w-[150px] phone:w-[300px] rounded-xl">SUREALISME</button>
      </div>
    </div>
  </div>

  <div class="flex justify-center items-center z-20 fixed bottom-0 text-white font-bold w-full py-2">
    <button onclick="location.href='/last-test/result'">
      <img src="{{ asset('assets/pecahan/next-icon.png') }}" alt="" class="w-20" draggable="false">
    </button>
  </div>
</div>

@endsection