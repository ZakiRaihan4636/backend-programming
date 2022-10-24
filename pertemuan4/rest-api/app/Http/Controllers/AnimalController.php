<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        echo "Menampilkan data animals";
    }

    public function store(Request $request)
    {
        echo "Menambahkan data animals - ";
        echo "Nama hewan: $request->nama";
    }

    public function update(Request $request, $id)
    {
        echo "Mengubah data animal id $id - ";
        echo "Nama hewan: $request->nama";
    }

    public function destroy($id)
    {
        echo "Menghapus data animal id $id";
    }
}
