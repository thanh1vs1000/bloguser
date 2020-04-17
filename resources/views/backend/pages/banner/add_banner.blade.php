@extends('backend.home')
@section('title','Thêm kỹ năng')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4"style="font-weight: bold">THÊM BANNER</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dữ liệu</a></li>
            <li class="breadcrumb-item active">add-banner</li>
        </ol>
        <form method="post" action="{{route('admin.menu.post.createbanner')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label style="font-weight: bold">Tiêu Đề</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label style="font-weight: bold" >Chức Vụ</label>
                <input type="text" name="position" class="form-control">
            </div>
            <div class="form-group">
                <label style="font-weight: bold" >Banner</label><br>
                <input type="file" name="banner" >
            </div>
            <div class="form-group">
                <label style="font-weight: bold" >Nội Dung</label>
                <textarea class="form-control" name="content" rows="5" id="content"></textarea>
                <script >
                    CKEDITOR.replace('content');
                </script>

            </div>
            <br/>
            @if (count($errors) > 0)
                <div class="alert alert-danger span8">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                <button type="submit" id="btn">THÊM VÀO</button>
                <button type="reset" id="btn-reset" >LÀM MỚI</button>
            </div>


        </form>
    </div>
@endsection

