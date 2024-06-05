<form method="post" action="{{route('tambahmodalproduk')}}" enctype="multipart/form-data" class="form-material">
    @csrf
    <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Produk</h4>
                    <button type="button" class="btn-close text-dark" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-xl-12">
                                <div class="rounded h-100 p-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="text" name="produk" class="form-control">
                                            @error('produk')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Produk</label>
                                        </div>
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="number" name="harga" class="form-control">
                                            @error('harga')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Harga</label>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="text" name="detail" class="form-control">
                                            @error('detail')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Detail</label>
                                        </div>
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="text" name="warna" class="form-control">
                                            @error('warna')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Warna</label>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <select name="kategoriId" id="" class="form-control mt-4">
                                                <option hidden>Pilih Kategori</option>
                                                    @foreach ($querykategori as $item)
                                                        <option value="{{$item->id}}">
                                                            {{$item->nama_kategori}}
                                                        </option>
                                                    @endforeach
                                            </select>
                                            <label class="float-label" style="font-size: 17px;">Kategori</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>