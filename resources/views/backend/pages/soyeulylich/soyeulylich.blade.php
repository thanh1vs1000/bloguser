@extends('backend.home')
@section('title','Menu')
@section('content')

            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">BẢNG SƠ YẾU LÝ LỊCH</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">list-resume</li>
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
                                        <th>Nội Dung</th>
                                        <th>Chức Năng</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tiêu Đề</th>
                                        <th>Nội Dung</th>
                                        <th>Chức Năng</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($profile as $key =>$pro)
                                    <tr>
                                        <td>{{$pro->id}}</td>
                                        <td>{{$pro->name}}</td>
                                        <td>{{$pro->content}}</td>
                                        <td colspan="2"><a style="background: #00ed96;" class="uk-button" href="{{route('admin.about.get.editresume',$pro->id)}}"
                                                           class="btn btn-info">Sửa</a>

                                            <a id="js-modal-confirm" onclick="return xoaSanPham();"  style="background: #ff5656;" class="uk-button" href="{{route('admin.about.get.deleteresume',$pro->id)}}">Xóa</a>
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
