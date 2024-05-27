@extends('admin.layouts.master')
@section('title', 'Profit Analyst - Nilapond Dashboard')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profit Analyst</h3>
                <br />
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
    <div class="table-responsive">
        <table class='table table-striped' id="table1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>#</td>
                    <td>#</td>
                    <td>#</td>
                    <td>#Kg</td>
                    <td><img src="#" height="100" \></td>
                    <td>
                        <span class="badge bg-success">Active</span>
                    </td>
                    <td>
                        <div class="row row-2">
                            <div class="col-md-3">
                                <a href="#" class="btn icon btn-primary"><i data-feather="edit"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn icon btn-danger"><i data-feather="trash"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

        </div>

    </section>
</div>

@endsection