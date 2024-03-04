<div class="fixed left-0 w-[300px] h-screen flex flex-col justify-between">
  <div>
    <div class="mb-10 p-5">
      <h2 class="text-adminMain bg-white w-10 h-10 flex justify-center items-center font-extrabold rounded-2xl">ZA</h2>
    </div>
    <div class="w-full p-5 flex flex-col gap-y-2 text-gray-400">
      <button class="w-full px-5 py-4 flex items-center group hover:bg-navbarActive rounded-lg hover:text-white {{ Request::is('admin') ? 'bg-navbarActive text-white' : '' }} transition duration-300" onclick="location.href='/admin'">
        <div class="w-1/6 group-hover:text-green-400"><i class="fa-regular fa-chart-bar mr-5 {{ Request::is('admin') ? 'text-green-600' : '' }}" style="font-size: 20px;"></i></div>
        <p class="5/6">Overviews</p>
      </button>
      <button class="w-full px-5 py-4 flex items-center group hover:bg-navbarActive rounded-lg hover:text-white {{ Request::is('admin/users') ? 'bg-navbarActive text-white' : '' }} transition duration-300" onclick="location.href='/admin/users'">
        <div class="w-1/6 group-hover:text-green-400"><i class="fa-regular fa-user mr-5 {{ Request::is('admin/users') ? 'text-green-600' : '' }}" style="font-size: 20px;"></i></div>
        <p class="5/6">Data user</p>
      </button>
      <button class="w-full px-5 py-4 flex items-center group hover:bg-navbarActive rounded-lg hover:text-white {{ Request::is('admin/scores') ? 'bg-navbarActive text-white' : '' }} transition duration-300" onclick="location.href='/admin/scores'">
        <div class="w-1/6 group-hover:text-green-400"><i class="fa-regular fa-file-lines mr-5 {{ Request::is('admin/scores') ? 'text-green-600' : '' }}" style="font-size: 20px;"></i></div>
        <p class="5/6">Daftar skor</p>
      </button>
      <button class="w-full px-5 py-4 flex items-center group hover:bg-navbarActive rounded-lg hover:text-white transition duration-300" onclick="location.href='/admin/logout'">
        <div class="w-1/6 group-hover:text-green-400"><i class="fa-solid fa-arrow-right-from-bracket mr-5" style="font-size: 20px;"></i></div>
        <p class="5/6">Logout</p>
      </button>
    </div>
  </div>
  <div class="w-full p-7">
    <div class="pt-5 w-full flex gap-x-4 justify-start items-center border-t-[1px] border-zinc-700">
      <img src="{{ asset('assets/admin/pp1.png') }}" alt="" class="rounded-full w-12 h-12">
      <div class="flex flex-col gap-y-1">
        <h2 class="text-white">adawd</h2>
        <p class="text-gray-400 text-sm">awdwad@awdwa</p>
      </div>
    </div>
  </div>
</div>