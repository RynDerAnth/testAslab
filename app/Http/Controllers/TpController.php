<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tp;
use Illuminate\Support\Facades\Auth;

class TpController extends Controller
{
    public function auth(Request $request) {
        $user = $request->em;
        $pass = $request->pwd;
        if (Auth::attempt([
            'email' => $user,
            'password' => $pass
        ])) {
            // berhasil login
            return redirect()->route('tp.index');    
        }
        // gagal login
        return redirect('/login')->with('message', "Username/password salah");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tp = Tp::orderBy("created_at","desc")->paginate(10);
        return view("tp.index", compact('tp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tp.input", [
            'method' => 'POST',
            'data' => new Tp(),
            'route' => route('tp.store'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string', 
            'sub_judul' => 'required|string', 
            'kategori' => 'required|string', 
            'deadline' => 'required', 
            'deskripsi' => 'required|string',
        ]);

        Tp::create($request->all());
        return redirect()->route("to.index")->with("success","Tp berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Tp $tp)
    {
        return view("tp.index", compact("tp"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tp $tp)
    {
        return view("tp.input", compact("tp"), [
            "method"=> "PUT",
            'data' => $tp,
            'route' => route('tp.update', $tp),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tp $tp)
    {
        $valid = $request->validate([
            'judul' => 'required|string', 
            'sub_judul' => 'required|string', 
            'kategori' => 'required|string', 
            'deadline' => 'required', 
            'deskripsi' => 'required|string',
        ]);
        $tp->update($valid);
        return redirect()->route("tp.index")->with("success","Tp berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tp $tp)
    {
        $tp->delete();
        return redirect()->route("tp.index")->with("success","tp berhasil dihapus");
    }
}
