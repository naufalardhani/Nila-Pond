@extends('admin.layouts.master')
@section('title', 'List Product - Nilapond Dashboard')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List of Products</h3>
                <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>Rp{{ $product->price }}</td>
                            <td><img src="{{ asset($product->photo_url) }}" height="100" \></td>
                            <td>
                            @if($product->is_active == 1)
                                <span class="badge bg-success">Active</span>
                            @elseif($product->is_active == 0)
                                <span class="badge bg-danger">Non-Active</span>
                            @endif
                            </td>
                            <td>
                            <div class="row row-2">
    <div class="col-md-3">
        <a href="{{ route('edit_product', ['id' => $product->id]) }}" class="btn icon btn-primary"><i data-feather="edit"></i></a>
    </div>
    <div class="col-md-3">
    <a href="{{ route('destroy_product', ['id' => $product->id]) }}" class="btn icon btn-danger"><i data-feather="trash"></i></a>
    </div>
</div>
                            </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Product belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

@endsection