<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index() {
        $device = Device::paginate(5);

        return view('device.index', ['title' => 'Data Device'], compact('device'));
    }


    public function create() {

        return view('device.create', ['title' => 'Tambah data device']);
    }


    public function store(Request $request) {
        $request->validate([
            'serial_number' => ['required'],
            'meta_data' => ['required'],
        ], [
            'serial_number' => 'Serial number tidak boleh kosong',
            'meta data' => 'Meta data tidak boleh kosong',
        ]);

        $deviceData = [
            'serial_number' => $request->serial_number,
            'meta_data' => $request->meta_data,
        ];

        Device::create($deviceData);

        return redirect('/device')->with('success', 'Berhasil Menambahkan Data Device');
    }


    public function edit($id) {
        $device = Device::findOrFail($id);

        return view('device.edit', ['title' => 'Ubah Data Device'], compact('device'));
    }



    public function update(Request $request, $id) {
        $request->validate([
            'serial_number' => ['required'],
            'meta_data' => ['required'],
        ], [
            'serial_number' => 'Serial number tidak boleh kosong',
            'meta data' => 'Meta data tidak boleh kosong',
        ]);

        $deviceData = [
            'serial_number' => $request->serial_number,
            'meta_data' => $request->meta_data,
        ];

        Device::findOrFail($id)->update($deviceData);

        return redirect('/device')->with('success', 'Berhasil Menubah Data Device');
    }


    public function delete($id) {
       $device =  Device::findOrFail($id);
       $device->delete();

        return redirect('/device')->with('success', 'Berhasil Menghapus Data Device dengan Serial number ' . $device->serial_number);
    }
}
