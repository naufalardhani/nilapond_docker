<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Login - NilaPond</title>
    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{asset('assets/img/heading-img.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/admin/css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="text-center mb-5">
                        <img src="{{asset('assets/img/logo.png')}}" style="margin-left: 100px;" height="48" class='mb-4'>
                        <h3>Login</h3>
                        <p>Please login to continue to Nila-Pond Dashboard.</p>
                    </div>
                    <form action="{{ route('auth_login') }}" method="post">
                    @csrf
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="username" name="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" name="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-start">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-end">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="{{asset('assets/admin/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/app.js')}}"></script>
    
    <script src="{{asset('assets/admin/js/main.js')}}"></script>
</body>

</html>
