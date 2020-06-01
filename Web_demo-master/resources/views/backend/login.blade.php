<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <!-- Custom styles for backend -->
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <section class="page-section  my-5 p-5">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="username">帳號</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="password">密碼</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                        <div class="form-group row justify-content-md-center mt-5">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">登入</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>