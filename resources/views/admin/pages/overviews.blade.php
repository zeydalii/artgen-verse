@extends('admin.partials.master')
@section('content')
  
@include('admin.partials.sidebar')

<div class="text-black ml-[300px] w-[calc(100%-300px)] py-4 pr-4 flex justify-center items-center">
  <div class="bg-white rounded-2xl h-[calc(100vh-40px)] w-full p-10">
    <div class="">
      <p class="text-gray-400">Hi, <span class="font-bold text-black">{{ auth()->user()->username }}</span>! Welcome to <span class="font-bold">ZA</span>'s Dashboard!</p>
      <h2 class="mt-10 text-[35px] font-[500]">Overviews</h2>
    </div>
  </div>
</div>

@endsection