@extends('backend.home')
@section('title','Gioi-thieu-chung')
@section('content')


    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Giới thiệu chung</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Gioi-thieu</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Danh sách dữ liệu</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu Đề</th>
                                <th>Avatar</th>
                                <th>Nội dung</th>
                                <th>Chức năng</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu Đề</th>
                                <th>Avatar</th>
                                <th>Nội dung</th>
                                <th>Chức năng</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($gioithieu as $about)
                                <tr>
                                    <td>{{$about->id}}</td>
                                    <td>{{$about->title}}</td>
                                    <td><img src="{{$about->avatar}}" width="50" height="40"></td>
                                    <td>{{$about->content}}</td>
                                    <td colspan="2"><a style="background: #00ed96;" class="uk-button" href="{{route('admin.about.get.editgioithieu',$about->id)}}"
                                                       class="btn btn-info">Sửa</a>

                                            <a id="js-modal-confirm" onclick="return xoaSanPham();"  style="background: #ff5656;" class="uk-button" href="{{route('admin.about.get.deletegioithieu',$about->id)}}">Xóa</a>



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
    </script>


@endsection
