<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Page Title - SB Admin</title>
    <base href="{{asset('')}}">
    <link href="backend/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">ĐĂNG NHẬP ADMIN</h3></div>
                            <div class="card-body">
                                <form method="post" action="{{route('admin.post.login')}}">

                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Tên Đăng Nhập</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="text" name="email" placeholder="Nhập tên đăng nhập ..." />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Mật Khẩu</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Nhập mật khẩu ..." />
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" name="remember" type="checkbox" />
                                            <label class="custom-control-label" for="rememberPasswordCheck">Nhớ mật khẩu</label></div>
                                    </div>
                                    @if(session('error'))
                                        <div class="control-group">
                                            <div class="controls row-fluid">
                                                <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Danger!</strong> {{session('error')}}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Quên mật khẩu?</a>
                                        <button type="submit" class="btn btn-primary pull-right">Đăng nhập</button></div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="register.html">Chưa có tài khoản? ĐĂNG KÝ!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="backend/js/scripts.js"></script>
</body>
</html>

