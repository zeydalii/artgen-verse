@extends('admin.partials.master')
@section('content')
  
@include('admin.partials.sidebar')

<div class="text-black ml-[300px] w-[calc(100%-300px)] py-4 pr-4 flex justify-center items-center">
  <div class="bg-white rounded-2xl h-[calc(100vh-40px)] w-full p-10">
    <div class="border border-gray-200 rounded-xl px-5 py-2 flex flex-col">
      <div class="flex justify-between items-center pb-2">
        <h2 class="text-[35px] font-[500]">Daftar Skor</h2>
      </div>
      <div class="flex justify-end border-t border-gray-200 pt-3 pb-1">
        <div class="flex items-center">
          <input type="text" name="search" autocomplete="off" placeholder="Search" class="focus:outline-none p-2 border border-gray-200 rounded-l-lg">
          <button class="p-2 rounded-r-lg border border-l-0 border-gray-200 hover:bg-gray-100 transition duration-300"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </div>
    </div>

    <div class="border border-gray-200 rounded-xl flex flex-col mt-10">
      <table>
        <tr class="text-[14px]">
          <th class="text-start pr-4 px-4 py-2">No</th>
          <th class="text-start w-4/12">Username</th>
          <th class="text-start w-4/12">Nama Lengkap</th>
          <th class="text-start w-2/12">Tanggal Ditambahkan</th>
          <th class="text-center w-2/12">Skor</th>
        </tr>
        <tr class="border-t">
          <td class="px-4 py-3">1</td>
          <td>JohnD</td>
          <td class="text-gray-400">John Doe Iskandar</td>
          <td class="text-gray-400">20 Januari 2021</td>
          <td class="text-center">500</td>
        </tr>
        <tr class="border-t">
          <td class="px-4 py-3">1</td>
          <td>JohnD</td>
          <td class="text-gray-400">John Doe Iskandar</td>
          <td class="text-gray-400">20 Januari 2021</td>
          <td class="text-center">500</td>
        </tr>
      </table>
    </div>
  </div>
</div>

@endsection