<?php


namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::all()->where('no_induk', '=', auth()->user()->no_induk);
        return view('nilai.index', compact('nilais'));
    }

    public function show_by_no_induk($no_induk)
    {
        $nilais = Nilai::where('no_induk', $no_induk)->get();
        return view('nilai.show_by_no_induk', compact('nilais'));
    }
}
