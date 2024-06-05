@extends('template.admin')
@section('konten')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h2 class="m-b-10">Data Produk</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <a href="{{route('produk.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!--  project and team member start -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-block">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-hover"> 
                                            <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Produk</th>
                                                <th class="text-center">Harga</th>
                                                <th class="text-center">Detail</th>
                                                <th class="text-center">Warna</th>
                                                <th class="text-center">Kategori</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{-- <?php
                                                $no =1;    
                                            ?> --}}
                                            @foreach ($queryproduk as $item)
                                            <tr class="text-center">
                                                <td>{{$no++}}</td>
                                                <td>{{$item->nama_produk}}</td>
                                                <td>{{$item->harga_produk}}</td>
                                                <td>{{$item->detail_produk}}</td>
                                                <td>{{$item->warna_produk}}</td>
                                                <td>@if($item->id)
                                                        {{ $item->nama_kategori}}
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" data-toggle="modal" data-target="#modaledit{{$item->id}}" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
                                                    <a href="{{route('hapusproduk',$item->id)}}" onclick="return confirm('Apakah yakin data ini akan dihapus?')" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                                $no++;
                                            ?>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>   
@endsection