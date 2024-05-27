@extends('admin.layouts.master')
@section('title', 'List Outcome - Nilapond Dashboard')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List of Outcomes</h3>
                <br />
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Outcome</li>
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
                                <th>Expenses</th>
                                <th>Nominal</th>
                                <th>Purchase Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($outcomes as $outcome)
                            <tr>
                                <td>{{ $outcome->expenses }}</td>
                                <td>{{ formatRupiah($outcome->nominal) }}</td>
                                <td>{{ $outcome->purchase_date }}</td>
                                <td>
                                    <div class="row row-2">
                                        <div class="col-md-3">
                                            <a href="{{ route('destroy_income', ['id' => $outcome->id]) }}" class="btn icon btn-danger"><i data-feather="trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">
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
                        <h5>Total Outcome: </h5>
                    </div>
                    <div class="col-md-6">
                    @php
                        $total_outcome = 0; // Inisialisasi total_income

                        foreach ($outcomes as $outcome) {
                            $total_outcome += $outcome->nominal; // Menambahkan income ke total_income
                        }
                    @endphp
                        <h5>{{ formatRupiah($total_outcome) }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection