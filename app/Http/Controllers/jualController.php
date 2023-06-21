<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jual;

class jualController extends Controller
{
    function show (){
        $data['jual']=jual::paginate(2);
        return view ('jual',$data);
    }

    function add(){
        $data=[
            'action'=>url('jual/create'),
            'tombol'=>'simpan',
            'jual'=>(object)[
                'nama_barang'=>'',
                'kategori'=>'',
                'harga'=>'',
                'deskripsi'=>'',
                'gambar'=>''
            ]
            ];
            return view('form_jual',$data);
    }

    function create(Request $request){
        $validate=$this->validate($request,[
            'nama_barang'=>'required|string',
            'kategori'=>'required|string|max:30',
            'harga'=>'required|string',
            'deskripsi'=>'required|string',
            'gambar'=>'required|mimes:jpg,png,jpeg'
        ]);
        $namafile=$request->kategori.".".$request->file('gambar')->getClientOriginalExtension();
        $validate['gambar']=$request->file('gambar')->storeAs('gambar',$namafile);
        jual::create($validate);
        return redirect('jual');

    }
    function hapus($id) {
        jual::where('id',$id)->delete();
        return redirect ('jual');
    }
    function edit($id) {
        $data['jual']=jual::find($id);
        $data['action']=url('jual/update').'/'.$data['jual']->id;
        $data['tombol']="update";
        return view ('form_jual',$data);
    }
    function update(Request $request){
        $namafile=$request->kategori.".".$request->file('gambar')->getClientOriginalExtension();
        jual::where('id',$request->id)->update([
            'nama_barang'=>$request->nama_barang,
            'kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$request->file('gambar')->storeAs('gambar',$namafile),

        ]);
        return redirect ('jual');
    }
}
