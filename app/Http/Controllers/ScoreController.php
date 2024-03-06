<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Score::query();

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('skor_total', 'LIKE', '%' . $search . '%')
                    ->orWhere('tes_ke', 'LIKE', '%' . $search . '%')
                    ->orWhere('sesi_ke', 'LIKE', '%' . $search . '%')
                        ->orWhereHas('user', function ($subQuery) use ($search) {
                        $subQuery->where('username', 'LIKE', '%' . $search . '%')
                            ->orWhere('nama_lengkap', 'LIKE', '%' . $search . '%');
                    });
            });
        }

        $scores = $query->with('user')->paginate(10);

        return view('admin.pages.scores', compact('scores', 'search'));
    }
}
