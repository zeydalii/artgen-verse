@extends('admin.partials.master')
@section('content')
  
@include('admin.partials.sidebar')

<div class="text-black ml-[300px] w-[calc(100%-300px)] py-4 pr-4 flex justify-center items-center relative">
  <div class="bg-white rounded-2xl h-[calc(100vh-40px)] w-full p-10">
    <div class="border border-gray-200 rounded-xl px-5 py-2 flex flex-col">
      <div class="flex justify-between items-center pb-2">
        <h2 class="text-[35px] font-[500]">Data user</h2>
        <button id="dialogButton" class="border border-gray-200 rounded-lg px-2 py-1 flex items-center gap-x-1 font-[500] hover:bg-gray-100 transition duration-300">
          <p class="">Tambah baru</p>
          <p class="text-2xl">+</p>
        </button>
      </div>
      <div class="flex justify-end border-t border-gray-200 pt-3 pb-1">
        <div class="flex items-center">
          <input type="text" name="search" autocomplete="off" placeholder="Search" class="focus:outline-none p-2 border border-gray-200 rounded-l-lg">
          <button class="px-2 py-3 rounded-r-lg border border-l-0 border-gray-200 hover:bg-gray-100 transition duration-300"><i class="fa-solid fa-magnifying-glass"></i></button>
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
          <th class="w-2/12">Aksi</th>
        </tr>
        <tr class="border-t">
          <td class="px-4 py-3">1</td>
          <td>JohnD</td>
          <td class="text-gray-400">John Doe Iskandar</td>
          <td class="text-gray-400">20 Januari 2021</td>
          <td class="text-center">
            <button class="mr-2"><i class="fa-solid fa-pen"></i></button>
            <button class="ml-2"><i class="fa-solid fa-trash-can"></i></button>
          </td>
        </tr>
        <tr class="border-t">
          <td class="px-4 py-3">1</td>
          <td>JohnD</td>
          <td class="text-gray-400">John Doe Iskandar</td>
          <td class="text-gray-400">20 Januari 2021</td>
          <td class="text-center">
            <button class="mr-2"><i class="fa-solid fa-pen"></i></button>
            <button class="ml-2"><i class="fa-solid fa-trash-can"></i></button>
          </td>
        </tr>
      </table>
    </div>
  </div>

  <div id="bg-blur" class="absolute hidden z-10 bg-black/45 top-4 right-4 left-0 bottom-4 rounded-2xl"></div>

  <div id="box-open" class="absolute hidden z-20 w-[500px] h-[370px] bg-white rounded-xl px-7 py-5 border-2 shadow-md">
    <form action="" class="flex flex-col gap-y-5">
      <div class="flex flex-col gap-y-2">
        <label for="username">Username <span class="text-red-500">*</span></label>
        <input type="text" name="username" id="username" autocomplete="off" placeholder="Masukkan Username" class="focus:outline-none p-2 border border-gray-200 rounded-lg w-[300px]">
      </div>
      <div class="flex flex-col gap-y-2">
        <label for="nama_lengkap">Nama Lengkap <span class="text-red-500">*</span></label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" autocomplete="off" placeholder="Masukkan Nama Lengkap" class="focus:outline-none p-2 border border-gray-200 rounded-lg">
      </div>
      <div class="flex flex-col gap-y-2">
        <label for="password">Password <span class="text-red-500">*</span></label>
        <input type="password" name="password" id="password" autocomplete="off" placeholder="Masukkan Password" class="focus:outline-none p-2 border border-gray-200 rounded-lg">
      </div>
      <div class="flex justify-end gap-x-3">
        <button id="closeDialogButton" type="button" class="hover:bg-red-400 transition duration-300 px-5 py-2 border rounded-lg font-[500]">Batal</button>
        <button class="hover:bg-green-400 transition duration-300 px-5 py-2 border rounded-lg font-[500]">Simpan</button>
      </div>
    </form>
  </div>
</div>

@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('dialogButton');
    const closeButton = document.getElementById('closeDialogButton');
    const boxOpen = document.getElementById('box-open');
    const bgBlur = document.getElementById('bg-blur');

    button.addEventListener('click', function () {
      const expanded = button.getAttribute('aria-expanded') === 'true' || false;
      
      if (expanded) {
        boxOpen.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      } else {
        boxOpen.classList.remove('hidden');
        button.setAttribute('aria-expanded', 'true');
        bgBlur.classList.remove('hidden');
      }
    });

    closeButton.addEventListener('click', function () {
        boxOpen.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
    });

    document.addEventListener('click', function (event) {
      if (!button.contains(event.target) && !boxOpen.contains(event.target)) {
        boxOpen.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        bgBlur.classList.add('hidden');
      }
    });
  });
</script>