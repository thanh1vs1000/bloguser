@extends('backend.home')
@section('title','Them-so-yeu-ly-lich')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4"style="font-weight: bold">THÊM SƠ YẾU LÝ LỊCH</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dữ liệu</a></li>
            <li class="breadcrumb-item active">add-resume</li>
        </ol>
        <form method="post" action="{{route('admin.about.post.createresume')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label style="font-weight: bold">Tiêu đề</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Thông Tin</label>
                        <input type="text" name="content" class="form-control" >
            </div>
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
