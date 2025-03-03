<?php

namespace App\Http\Controllers;

use database;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        // Validasi input
        $request->validate([
            'img_event' => 'image|mimes:jpeg,jpg,png,webp|max:40960',
            'nama_event' => 'required|string|max:255',
            'tgl_event' => 'required|max:255',
            'waktu' => 'required|max:255',
            'status' => 'required|string|max:255',
            'jmlh_tiket' => 'required|max:255',
            'jmlh_tiket_vip' => 'required|max:255',
            'hrg_tiket' => 'required|max:255',
            'hrg_tiket_vip' => 'required|max:255',
            'desk' => 'nullable|string|max:255',
            'id_penyelenggara' => 'max:10',
        ]);

        // Simpan gambar ke storage
        if ($request->hasFile('img_event')) {
            $image = $request->file('img_event');
            $imageName = $image->hashName();
            $image->store('img', 'public');
        } else {
            $imageName = null;
        }

        // Simpan data siswa ke database
        Event::create([
            'id_penyelenggara' => $request->id_penyelenggara,
            'gambar' => $imageName,
            'nama_event' => $request->nama_event,
            'tanggal_event' => $request->tgl_event,
            'waktu' => $request->waktu,
            'status' => $request->status,
            'jmlh_tiket' => $request->jmlh_tiket,
            'jmlh_tiket_vip' => $request->jmlh_tiket_vip,
            'hrg_tiket' => $request->hrg_tiket,
            'hrg_tiket_vip' => $request->hrg_tiket_vip,
            'deskripsi' => $request->desk,
        ]);

        return back()->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}