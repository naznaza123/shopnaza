@extends('beranda')
@section('content')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

<button class="btn btn-primary">
    <a href="{{ url('jual/add') }} " class="btn btn-primary">Tambah barang</a>
</button>
<table class="table table-hover  table-bordered table-striped" border="1">
    <tr>
        <th>NO</th>
        <th>Nama Barang</th>
        <th>kategori</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    @foreach ( $jual as $key=>$item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->nama_barang }}</td>
        <td>{{ $item->kategori }}</td>
        <td>{{ $item->harga }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>
            <img src="/storage/{{ $item->gambar }}" class="w-50" alt="" srcset="">
        </td>
        <td>
            <a href="jual/hapus/{{ $item->id }}" onclick="return window.confirm('hapus?')" class="btn btn-danger">Hapus</a>
            <a href="jual/edit/{{ $item->id }}" class="btn btn-success">edit</a>
        </td>
    </tr>
        
    @endforeach
</table>
@endsection