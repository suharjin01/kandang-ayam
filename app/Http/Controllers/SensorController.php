<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{


    public function sensor() {

        $sensor = DB::table('sensor')->get();


        $sensor = Sensor::orderBy('id', 'asc')->paginate(5)->withQueryString();

        return view('sensor.sensor', ['title' => 'Data Sensor'], compact('sensor'));
    }


    public function create() {

        return view('sensor.create', ['title' => 'Tambah data sensor']);
    }


    public function store(Request $request) {

        $request->validate([
            "nama_sensor" => ['required'],
            "data_sensor" => ['required', 'numeric'],
            "topic" => ['required'],
        ], [
            "nama_sensor.required" => "Nama Sensor Tidak Boleh Kosong,",
            "data_sensor.required" => "Data Sensor Tidak Boleh Kosong,",
            "data_sensor.numeric" => "Data Harus Diisi Dengan Angka,",
            "topic.required" => "Topic Harus Diisi,",
        ]);

        $sensorData = [
            "nama_sensor" => $request->nama_sensor,
            "data_sensor" => $request->data_sensor,
            "topic" => $request->topic,
        ];

        //DB::table('sensor')->insert($sensorData);

        $sensor = Sensor::create($sensorData);

        return redirect('/sensor')->with('success', 'Berhasil Menambahkan Data');
    }


    public function edit($id) {

        $sensor = Sensor::findOrFail($id);

        return view('sensor.edit', ['title' => 'Ubah Data Sensor'], compact('sensor'));
    }


    public function update(Request $request, $id) {

        $request->validate([
            "nama_sensor" => ['required'],
            "data_sensor" => ['required', 'numeric'],
            "topic" => ['required'],
        ], [
            "nama_sensor.required" => "Nama Sensor Tidak Boleh Kosong,",
            "data_sensor.required" => "Data Sensor Tidak Boleh Kosong,",
            "data_sensor.numeric" => "Data Harus Diisi Dengan Angka,",
            "topic.required" => "Topic Tidak Boleh Kosong,",
        ]);

        $sensorData = [
            "nama_sensor" => $request->nama_sensor,
            "data_sensor" => $request->data_sensor,
            "topic" => $request->topic,
        ];

        //DB::table('sensor')
        //    ->where('id', $id)
        //    ->update($sensorData);

        $sensor = Sensor::findOrFail($id)->update($sensorData);

        return redirect('/sensor')->with('success', 'Berhasil Mengubah Data');;
    }


    public function delete($id) {
        //DB::table('sensor')
        //    ->where('id', $id)
        //    ->delete();

        $sensor = Sensor::findOrFail($id);
        $sensor->delete();

        return redirect('/sensor')->with('success', 'Berhasil Menghapus Data Sensor ' . $sensor->nama_sensor);
    }
}
