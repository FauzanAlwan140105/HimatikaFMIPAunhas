<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::latest()->paginate(21);
        return view('galeri.index', ['galeri' => $galeri])->with('i', (request()->input('page', 1) - 1) * 21);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $uploadedImage = $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $params = $request->all();

        $galeri = Galeri::create($params);
        $galeri->image = $imagePath;
        $galeri->save();
        try {
            $galeri->save();
            return redirect(route('galeri.index'))->with('message', 'Added successfully!');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal Menambahkan data : ' . $e->getMessage());
            return redirect(route('galeri.index'))->with('error', 'Gagal menambahkan!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try {
            $galeri = Galeri::find($id);
            return view('galeri.edit')->with('message', $galeri->name . ' edited successfully');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal Mengedit data : ' . $e->getMessage());
            return view('galeri.edit')->with('error', $galeri->name . ' Gagal di edit ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            Galeri::destroy($id);
            return redirect('galeri')->with('message', ' hapus successfully');
        } catch (Exception $e) {
            // Tangani kesalahan
            Log::error('Gagal Mengedit data : ' . $e->getMessage());
            return redirect('galeri')->with('error',  ' Gagal di menghapus ');
        }
    }
}
