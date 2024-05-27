@extends('admin.layouts.master')
@section('title', 'Add Outcome - Nilapond Dashboard')
@section('content')

<section id="multiple-column-form" class="container">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Outcome</h4>
                </div>
                <div class="card-content">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    <script>
                        console.error("Error submitting income: {{ session('error') }}");
                    </script>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('store_outcome') }}" enctype="multipart/form-data">
                        <!-- <form class="form" method="POST" action="{{ route('store_product') }}" enctype="multipart/form-data"> -->
                            @csrf <!-- CSRF token -->
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="productName">Expenses</label>
                                        <input type="text" class="form-control" id="expenses" name="expenses" placeholder="Bibit Ikan Nila Merah...">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="mb-1" for="productDate">Tanggal Pembelian</label><br />
                                        <input type="date" class="form-control" id="productDate" name="purchase_date">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="col mb-1">
                                        <label class="mb-2" for="productPrice">Nominal</label> <br />
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp</span>
                                            <input type="text" class="form-control" id="productPrice" name="nominal">
                                        </div>
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