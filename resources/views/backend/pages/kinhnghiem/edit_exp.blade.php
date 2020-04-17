@extends('backend.home')
@section('title','Them-Kinh-Nghiem')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4"style="font-weight: bold">CHỈNH SỬA KINH NGHIỆM</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dữ liệu</a></li>
            <li class="breadcrumb-item active">edit-experience</li>
        </ol>
        <form method="post" action="{{route('admin.about.post.editexp',$exp['id'])}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label style="font-weight: bold">Tên công ty</label>
                <input type="text" name="company" class="form-control"  @if(isset($exp['company']))
                    value="{{$exp['company']}}"
                    @endif>
            </div>
            <div class="form-group">
                <label style="font-weight: bold">Thời gian hoạt động</label>
                <input type="text"  name="time" class="form-control"  @if(isset($exp['time']))
                    value="{{$exp['time']}}"
                    @endif >
            </div>
            <div class="form-group">
                <label style="font-weight: bold">Chức Vụ</label>
                <input type="text"  name="position" class="form-control"  @if(isset($exp['position']))
                    value=" {{$exp['position']}}"
                    @endif >
            </div>

            <div class="form-group">
                <label for="comment" style="font-weight: bold">Nội dung tóm tắt</label>
                <textarea class="form-control" name="desc" rows="5" id="content">
                     @if(isset($exp['desc']))
                        {{$exp['desc']}}
                    @endif
                </textarea>
                <script >
                    CKEDITOR.replace('content');
                </script>
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
