@extends('admin.layouts.master')
@section('title', 'Add Product - Nilapond Dashboard')
@section('content')

<section id="multiple-column-form" class="container">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Produk</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('store_product') }}" enctype="multipart/form-data">
                            @csrf <!-- CSRF token -->
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="productName">Nama Produk</label>
                                        <input type="text" class="form-control" id="productName" name="name" placeholder="Nama Produk...">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="mb-1" for="productThumbnail">Thumbnail</label><br />
                                        <input type="file" class="form-file-input" id="productThumbnail" name="thumbnail">
                                        <label class="form-file-label" for="productThumbnail">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="col mb-1">
                                        <label class="mb-2" for="productPrice">Harga (per kilogram)</label> <br />
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" id="productPrice" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="col mb-1">
                                        <label class="mb-2" for="productPrice">Stok</label> <br />
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Kg</span>
                                            <input type="text" class="form-control" id="productStock" name="stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="productDescription" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="productDescription" name="description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="input-group mb-3 mt-4">
                                        <label class="input-group-text" for="productIsActive">Apakah produk in aktif?</label>
                                        <select class="form-select" id="productIsActive" name="is_active">
                                            <option value="1">Aktif</option>
                                            <option value="0">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Atur Ulang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection