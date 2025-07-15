<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
class AnggotaGuestController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $anggota = Anggota::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('angkatan', 'LIKE', '%' . $s . '%')
                        ->orWhere('domisili', 'LIKE', '%' . $s . '%')
                        ->orWhere('prodi', 'LIKE', '%' . $s . '%')
                        ->orWhere('phone', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('angkatan', 'desc')->orderBy('prodi', 'asc')->paginate(50);

        return view('guest.anggota', compact('anggota'));

        //$anggota = Anggota::all();
        //return view('guest.anggota')->with('anggota', $anggota);
    }

    
}
