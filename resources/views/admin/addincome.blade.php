@extends('admin.layouts.master')
@section('title', 'Add Income - Nilapond Dashboard')
@section('content')

<section id="multiple-column-form" class="container">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Income</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="#" enctype="multipart/form-data">
                        <!-- <form class="form" method="POST" action="{{ route('store_product') }}" enctype="multipart/form-data"> -->
                            @csrf <!-- CSRF token -->
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="input-group mb-3 mt-4">
                                        <label class="input-group-text" for="productName">Product Name</label>
                                        <select class="form-select" id="productName" name="name">
                                            <option value="Nila Merah">Nila Merah</option>
                                            <option value="Nila Hitam">Nila Hitam</option>
                                            <option value="Lele">Lele</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
    <div class="form-group">
        <label class="mb-1" for="productDate">Tanggal Pembelian</label><br />
        <input type="date" class="form-control" id="productDate" name="date">
    </div>
</div>
                                <div class="col-md-6 col-12">
                                    <div class="col mb-1">
                                        <label class="mb-2" for="productPrice">Income</label> <br />
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" id="productPrice" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="col mb-1">
                                        <label class="mb-2" for="productPrice">Total Weight</label> <br />
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Kg</span>
                                            <input type="text" class="form-control" id="totalWeight" name="total">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="productDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="productDescription" name="description" rows="3"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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