@extends('admin.partials.master')
@section('content')
  
@include('admin.partials.sidebar')

<div class="text-black ml-[300px] w-[calc(100%-300px)] py-4 pr-4 flex justify-center items-center">
  <div class="bg-white rounded-2xl h-[calc(100vh-40px)] w-full p-10">
    <div class="">
      <p class="text-gray-400">Hi, <span class="font-bold text-black">{{ auth()->user()->username }}</span>! Welcome to <span class="font-bold">ZA</span>'s Dashboard!</p>
      <h2 class="mt-10 text-[35px] font-[500]">Overviews</h2>
    </div>

    <div class="mt-10 flex gap-x-7">
      <div class="w-[230px] flex flex-col rounded-lg border">
        <div class="flex gap-x-4 p-4">
          <div class="bg-adminMain h-16 w-16 flex justify-center items-center rounded-full">
            <i class="fa-regular fa-user text-green-600" style="font-size: 20px;"></i>
          </div>
          <div class="flex flex-col items-start justify-center">
            <h2 class="text-2xl font-[500]">{{ $userData }}</h2>
            <p class="text-base text-gray-400">Data user</p>
          </div>
        </div>
        <a href="/admin/users" class="w-full bg-adminMain text-gray-300 rounded-b-lg py-2 px-3 text-sm flex justify-between items-center hover:text-white transition duration-300"><span>Lihat selengkapnya</span> <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>

      <div class="w-[230px] flex flex-col rounded-lg border">
        <div class="flex gap-x-4 p-4">
          <div class="bg-adminMain h-16 w-16 flex justify-center items-center rounded-full">
            <i class="fa-regular fa-file-lines text-green-600" style="font-size: 20px;"></i>
          </div>
          <div class="flex flex-col items-start justify-center">
            <h2 class="text-2xl font-[500]">{{ $scoreData }}</h2>
            <p class="text-base text-gray-400">Data skor</p>
          </div>
        </div>
        <a href="/admin/scores" class="w-full bg-adminMain text-gray-300 rounded-b-lg py-2 px-3 text-sm flex justify-between items-center hover:text-white transition duration-300"><span>Lihat selengkapnya</span> <i class="fa-solid fa-arrow-right-long"></i></a>
      </div>
    </div>
  </div>
</div>

@endsection