<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use Illuminate\Validation\ValidationException;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('manajer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::latest('updated_at')->paginate(5);
        return view('manajer.menu.index', compact('menus'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manajer.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $nama_menu = $request->nama_menu;
        $harga = $request->harga;
        $desc = $request->desc;
        $kategori = $request->kategori;
        $availability = $request->ketersediaan;

        Menu::create([
            'nama_menu' => $nama_menu,
            'harga' => $harga,
            'deskripsi' => $desc,
            'kategori' => $kategori,
            'ketersediaan' => $availability,
        ]);

        return redirect()->route('manajer.menu.index')->with('success', 'Menu Baru Telah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $data = $menu;
        return view('manajer.menu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        $nama_menu = $request->nama_menu;
        $harga = $request->harga;
        $desc = $request->desc;
        $kategori = $request->kategori;
        $availability = $request->ketersediaan;

        $menu->update([
            'nama_menu' => $nama_menu,
            'harga' => $harga,
            'deskripsi' => $desc,
            'kategori' => $kategori,
            'ketersediaan' => $availability,
        ]);

        return redirect()->route('manajer.menu.index')->with('success', 'Menu Telah Berhasil Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('manajer.menu.index')->with('success', 'Menu Telah Berhasil Dihapus!');
    }
}
