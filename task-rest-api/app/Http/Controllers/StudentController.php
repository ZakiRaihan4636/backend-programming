<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # menggunakan model Student untuk select data
        $students = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $students,
        ];

        # menggunakan response json laravel
        # otomatis set header content type json
        # otomatis mengubah data array ke JSON
        # mengatur status code
        return response()->json($data, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # menangkap data request
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];

        # menggunakan Student untuk insert data
        $student = Student::create($input);

        $data = [
            'message' => 'Student is created successfully',
            'data' => $student,
        ];

        # mengembalikan data (json) status code 201
        return response()->json($data, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Student::find($id);

        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->email = $request->email;
        $data->jurusan = $request->jurusan;

        $data->save();

        $result = [
            "message" => "Student id $id is updated",
            "data" => $data
        ];

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);

        $result = [
            "message" => "Student id $id is destroyed",
            "data" => $this->index()
        ];

        return $result;
    }
}
