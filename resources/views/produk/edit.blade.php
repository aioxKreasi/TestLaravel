<form method="post" action="{{route('editmodalproduk')}}" enctype="multipart/form-data" class="form-material">
    @csrf
    @method('PUT')
    @foreach ($queryproduk as $item)
    <div class="modal fade" id="modaledit{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Produk</h4>
                    <button type="button" class="btn-close text-dark" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-xl-12">
                                <div class="rounded h-100 p-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="hidden" name="id" class="form-control" value="{{$item->id}}">
                                            <input type="text" name="produk" class="form-control" value="{{$item->nama_produk}}">
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Produk</label>
                                        </div>
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="number" name="harga" class="form-control" value="{{$item->harga_produk}}">
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Harga</label>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="text" name="detail" class="form-control" value="{{$item->detail_produk}}">
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Detail</label>
                                        </div>
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <input type="text" name="warna" class="form-control" value="{{$item->warna_produk}}">
                                            <span class="form-bar"></span>
                                            <label class="float-label" style="font-size: 17px;">Warna</label>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12 col-xl-6 form-group text-dark form-static-label">
                                            <select name="kategoriId" id="" class="form-control mt-4">
                                                <option hidden value="{{$item->id}}">{{$item->nama_kategori}}</option>
                                                    @foreach ($querykategori as $item)
                                                        <option value="{{$item->id}}">
                                                            {{$item->nama_kategori}}
                                                        </option>
                                                    @endforeach
                                            </select>
                                            <label class="float-label" style="font-size: 17px;">Kategori</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-warning">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</form>