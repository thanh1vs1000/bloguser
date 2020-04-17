@extends('backend.home')
@section('title','Menu')
@section('content')


    <main>
        <div class="container-fluid">
            <h1 class="mt-4">BANNER</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables/banner</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Danh sách dữ liệu</div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if(session('thanhcong'))
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Success!</strong>{{session('thanhcong')}}
                            </div>
                        @endif
                        <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Chức vụ</th>
                                <th>Banner</th>
                                <th>Nội dung</th>
                                <th>Chức năng</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Chức vụ</th>
                                <th>Banner</th>
                                <th>Nội dung</th>
                                <th>Chức năng</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($banner as $ban)
                                <tr>
                                    <td>{{$ban->id}}</td>
                                    <td>{{$ban->title}}</td>
                                    <td>{{$ban->position}}</td>
                                    <td><img src="{{$ban->banner}}" width="120" height="80"></td>
                                    <td>{{$ban->content}}</td>
                                    <td colspan="2"><a style="background: #00ed96;" class="uk-button"
                                                       href="{{route('admin.menu.get.editbanner',$ban->id)}}"
                                                       class="btn btn-info">Sửa</a>

                                        <a id="js-modal-confirm" onclick="return xoaSanPham();"
                                           style="background: #ff5656;" class="uk-button"
                                           href="{{route('admin.menu.get.deletebanner',$ban->id)}}">Xóa</a>


                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);
    </script>
@endsection
