<?php

namespace App\Http\Controllers;

use App\Models\bintang_testimoni;
use Illuminate\Http\Request;

class BintangTestimoniController extends Controller
{
   // Menampilkan daftar data
   public function index()
   {
       $testimonis = bintang_testimoni::all();
       return view('back.bintang_testimoni.index', compact('testimonis'));
   }

   // Menampilkan form tambah data
   public function create()
   {
       return view('back.bintang_testimoni.create');
   }

   // Menyimpan data baru
   public function store(Request $request)
   {
       $request->validate([
           'kode_blog' => 'required|string|max:255',
           'jumlah_bintang' => 'required|integer|min:1|max:5',
       ]);

       bintang_testimoni::create($request->all());

       return redirect()->route('bintang_testimoni.index')->with('success', 'Testimoni berhasil ditambahkan');
   }

   // Menampilkan form edit data
   public function edit($id)
   {
       $testimoni = bintang_testimoni::findOrFail($id);
       return view('back.bintang_testimoni.edit', compact('testimoni'));
   }

   // Memperbarui data
   public function update(Request $request, $id)
   {
       $request->validate([
           'kode_blog' => 'required|string|max:255',
           'jumlah_bintang' => 'required|integer|min:1|max:5',
       ]);

       $testimoni = bintang_testimoni::findOrFail($id);
       $testimoni->update($request->all());

       return redirect()->route('bintang_testimoni.index')->with('success', 'Testimoni berhasil diperbarui');
   }

   // Menghapus data
   public function destroy($id)
   {
       $testimoni = bintang_testimoni::findOrFail($id);
       $testimoni->delete();

       return redirect()->route('bintang_testimoni.index')->with('success', 'Testimoni berhasil dihapus');
   }
}