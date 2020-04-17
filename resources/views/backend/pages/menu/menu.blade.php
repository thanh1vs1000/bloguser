@extends('backend.home')
@section('title','Menu')
@section('content')
    <script>
        function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }
    </script>

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Menu</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dữ liệu</a></li>
                <li class="breadcrumb-item active">menu</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Danh sách dữ liệu</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <TH>ID</TH>
                                <th>Tên</th>
                                <th>Tiêu Đề</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <TH>ID</TH>
                                <th>Tên</th>
                                <th>Tiêu Đề</th>
                                <th>Trạng Thái</th>
                                <th>Chức Năng</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($menu as $meu)
                                <tr>
                                    <td>{{$meu->id}}</td>
                                    <td>{{$meu->name}}</td>
                                    <td>{{$meu->content}}</td>
                                    <td>@if( $meu->status == 1 )
                                            <span class="badge badge-success">Hiển Thị</span>
                                        @else
                                            <span class="badge badge-secondary">Ẩn</span>
                                        @endif
                                    </td>
                                    <td colspan="2"><a style="background: #00ed96;" class="uk-button" href="{{route('admin.menu.get.edit',$meu->id)}}"
                                                       class="btn btn-info">Sửa</a>

                                        <a id="js-modal-confirm" onclick="return xoaSanPham();"  style="background: #ff5656;" class="uk-button" href="{{route('admin.menu.get.delete',$meu->id)}}">Xóa</a>



                                    </td>
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
