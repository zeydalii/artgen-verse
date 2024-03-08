<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $tesSearch = $request->input('tesSearch');
        $sesiSearch = $request->input('sesiSearch');
        $query = Score::query();

        $pagination = 10;

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('skor_total', 'LIKE', '%' . $search . '%')
                        ->orWhereHas('user', function ($subQuery) use ($search) {
                        $subQuery->where('username', 'LIKE', '%' . $search . '%')
                            ->orWhere('nama_lengkap', 'LIKE', '%' . $search . '%');
                    });
            });
        }

        if ($tesSearch) {
            $query->where(function ($query) use ($tesSearch) {
                $query->where('tes_ke', 'LIKE', '%' . $tesSearch . '%');
            });
        }

        if ($sesiSearch) {
            $query->where(function ($query) use ($sesiSearch) {
                $query->where('sesi_ke', 'LIKE', '%' . $sesiSearch . '%');
            });
        }

        $scores = $query->with('user')->paginate($pagination);

        return view('admin.pages.scores', compact('scores', 'search', 'tesSearch', 'sesiSearch'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
}
