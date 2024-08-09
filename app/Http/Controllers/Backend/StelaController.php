<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Stela;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StelaController extends Controller
{
    public function AllStela()
    {
        $allStela = Stela::get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('backend.stela.all_stela', compact('allStela'));
    }

    public function AddStela()
    {
        $client = new Client();
        $url = "http://khanzaapi.test:90/api/pegawais";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $responseArray = json_decode($content, true);
        $data = $responseArray['data'];
        // print_r($data);
        return view('backend.stela.add_stela', ['pegawai' => $data]);
    }

    public function StoreStela(Request $request)
    {
        Stela::insert([
            'petugas' => $request->petugas,
            'nama_ibu' => ucfirst($request->nama_ibu),
            'nama_ayah' => ucfirst($request->nama_ayah),
            'alamat' => $request->alamat,
            'nama_anak' => ucfirst($request->nama_anak),
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => Carbon::parse($request->tgl_lahir)->format('Y-m-d'),
            'jam_lahir' => Carbon::parse($request->jam_lahir)->format('H:i:s'),
            'anak_ke' => $request->anak_ke,
            'status' => '0',
            'user_id' => Auth::user()->id,
            'ipaddress' => $request->ip(),
            'created_at' => Carbon::Now(),
        ]);

        $notification = array(
            'message' => 'New STELA Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.stela')->with($notification);
    }

    public function EditStela($id)
    {
        $stela = Stela::findOrFail($id);

        $client = new Client();
        $url = "http://khanzaapi.test:90/api/pegawais";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $responseArray = json_decode($content, true);
        $data = $responseArray['data'];

        return view('backend.stela.edit_stela', ['pegawai' => $data], compact('stela'));
    }

    public function UpdateStela(Request $request)
    {
        $stela_id = $request->id;

        Stela::findOrFail($stela_id)->update([
            'petugas' => $request->petugas,
            'nama_ibu' => ucfirst($request->nama_ibu),
            'nama_ayah' => ucfirst($request->nama_ayah),
            'alamat' => $request->alamat,
            'nama_anak' => ucfirst($request->nama_anak),
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => Carbon::parse($request->tgl_lahir)->format('Y-m-d'),
            'jam_lahir' => Carbon::parse($request->jam_lahir)->format('H:i:s'),
            'anak_ke' => $request->anak_ke,
            'ipaddress' => $request->ip(),
            'updated_at' => Carbon::Now(),
        ]);

        $notification = array(
            'message' => 'STELA Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.stela')->with($notification);
    }

    public function DeleteStela($id)
    {
        Stela::findOrFail($id)->delete();

        $notification = array(
            'message' => 'STELA Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function PrintStela($id)
    {
        $stela = Stela::findOrFail($id);
        return view('backend.stela.print_stela', compact('stela'));
    }
}
