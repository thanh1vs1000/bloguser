@extends('backend.home')
@section('title','Menu')
@section('content')


            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">BẢNG KỸ NĂNG</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables/list-ky-nang</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Danh sách dữ liệu</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  style="text-align: center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Ngôn Ngữ</th>
                                        <th>Mức Độ Kỹ Năng</th>
                                        <th>Chức Năng</th>

                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên Ngôn Ngữ</th>
                                        <th>Mức Độ Kỹ Năng</th>
                                        <th>Chức Năng</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($skill as $ski)
                                    <tr>
                                        <td>{{$ski->id}}</td>
                                        <td>{{$ski->name_skill}}</td>
                                        <td><div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{$ski->rate}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$ski->rate}}%</div>
                                            </div></td>
                                        <td colspan="2"><a style="background: #00ed96;" class="uk-button" href="{{route('admin.about.get.editkynang',$ski->id)}}"
                                                           class="btn btn-info">Sửa</a>

                                            <a id="js-modal-confirm" onclick="return xoaSanPham();"  style="background: #ff5656;" class="uk-button" href="{{route('admin.about.get.deletekynang',$ski->id)}}">Xóa</a>



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
