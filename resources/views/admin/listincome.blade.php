@extends('admin.layouts.master')
@section('title', 'List Income - Nilapond Dashboard')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List of Incomes</h3>
                <br />
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Income</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Income</th>
                                <th>Total Weight (KG)</th>
                                <th>Purchase Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($incomes as $income)
                            <tr>
                                <td>{{ $income->product_name }}</td>
                                <td>{{ formatRupiah($income->income) }}</td>
                                <td>{{ $income->total_weight }}Kg</td>
                                <td>{{ $income->purchase_date }}</td>
                                <td>
                                    <div class="row row-2">
                                        <div class="col-md-3">
                                            <a href="{{ route('destroy_income', ['id' => $income->id]) }}" class="btn icon btn-danger"><i data-feather="trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <div class="alert alert-danger">
                                        Data Income belum Tersedia.
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Total Income: </h5>
                    </div>
                    <div class="col-md-6">
                    @php
                        $total_income = 0; // Inisialisasi total_income

                        foreach ($incomes as $income) {
                            $total_income += $income->income; // Menambahkan income ke total_income
                        }
                    @endphp
                        <h5>{{ formatRupiah($total_income) }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection