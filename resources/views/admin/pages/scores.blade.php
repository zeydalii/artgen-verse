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
        <form action="/admin/scores" method="GET" class="flex items-center mb-[1px]">
          <input type="text" name="search" autocomplete="off" placeholder="Search" class="focus:outline-none p-2 border border-gray-200 rounded-l-lg" value="{{ request('search') }}">
          <button type="submit" class="px-2 py-2 rounded-r-lg border border-l-0 border-gray-200 hover:bg-gray-100 transition duration-300"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
    </div>

    <div class="border border-gray-200 rounded-xl flex flex-col mt-10">
      <table>
        <tr class="text-[14px]">
          <th class="text-start pr-4 px-4 py-2">No</th>
          <th class="text-start w-3/12">Username</th>
          <th class="text-start w-3/12">Nama Lengkap</th>
          <th class="text-start w-2/12">Tanggal Ditambahkan</th>
          <th class="text-center w-1/12">Tes ke-</th>
          <th class="text-center w-1/12">Sesi ke-</th>
          <th class="text-center w-2/12">Skor</th>
        </tr>
        @if ($scores->count() > 0)
          @foreach($scores as $score)
            <tr class="border-t">
              <td class="px-4 py-3">{{ ++$i }}</td>
              <td>{{ $score->user->username }}</td>
              <td class="text-gray-400">{{ $score->user->nama_lengkap }}</td>
              <td class="text-gray-400">{{ \Carbon\Carbon::parse($score->created_at)->locale('id')->isoFormat('MMMM D, YYYY') }}</td>
              <td class="text-center">{{ $score->tes_ke }}</td>
              <td class="text-center">{{ $score->sesi_ke }}</td>
              <td class="text-center">{{ $score->skor_total }}</td>
            </tr>
          @endforeach
        @else
          <tr class="border-t">
            <td></td>
            <td></td>
            <td class="px-4 py-3 text-center">Tidak ada data.</td>
            <td></td>
            <td></td>
          </tr>
        @endif
      </table>
    </div>

    <div class="text-gray-600 dark:text-gray-400 bg-secondary-50 dark:bg-secondary-900">
			{{ $scores->appends(['search' => $search])->links() }}
		</div>
  </div>
</div>

@endsection