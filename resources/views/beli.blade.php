@extends('beranda')
@section('content')



<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <div class="container">
        <div class="row">
            @foreach ( $jual as $item )
            
            <div class="col-4">
                <div class="card h-100" style="width: 16rem;">
                    <img src="/storage/{{ $item->gambar }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <div class="">
                            <div class="card-tittle">
                                <h5>
                                    {{ $item->nama_barang }}
                                </h5>

                                <p>
                                    {{ $item->harga }}

                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary"> 
                                <a href="https://api.whatsapp.com/send?phone=6283841742172&text=PESENNN!!!" class="btn btn-primary">Beli Sekarang</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection