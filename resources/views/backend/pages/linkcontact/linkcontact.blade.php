@extends('backend.home')
@section('title','Link Liên Hệ')
@section('content')

            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">LINK LIÊN HỆ</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables / list-link-contact</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Danh sách dữ liệu</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(session('thanhcong'))
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Success!</strong>{{session('thanhcong')}}
                                    </div>
                                @endif
                                <table style="text-align: center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên </th>
                                        <th>Link</th>
                                        <th>Chức năng</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Link</th>
                                        <th>Chức năng</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($link as $li)
                                    <tr>
                                        <td>{{$li->id}}</td>
                                        <td>{{$li->name}}</td>
                                        <td><a href="{{$li->link}}">{{$li->link}}</a></td>
                                        <td colspan="2"><a style="background: #00ed96;" class="uk-button" href="{{route('admin.contact.get.editlinkcontact',$li->id)}}"
                                                           class="btn btn-info">Sửa</a>

                                            <a id="js-modal-confirm" onclick="return xoaSanPham();"  style="background: #ff5656;" class="uk-button" href="{{route('admin.contact.get.deletelinkcontact',$li->id)}}">Xóa</a>



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
