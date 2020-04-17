@extends('backend.home')
@section('title','Them-gioi-thieu')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4"style="font-weight: bold">CHỈNH SỬA GIỚI THIỆU</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dữ liệu</a></li>
            <li class="breadcrumb-item active">edit-about</li>
        </ol>
        <form method="post" action="{{route('admin.about.post.editgioithieu',$about['id'])}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label style="font-weight: bold">Tiêu đề</label>
                <input type="text" name="title" class="form-control" @if(isset($about['title']))
                    value="{{$about['title']}}" @endif
                    >
            </div>
            <div class="form-group">
                <label>Ảnh đại diện</label>
                <div class="file-field">
                    <div class="btn btn-primary btn-sm float-left">
                        <input type="file"  name="avatar" multiple  @if(isset($about['avatar']))
                            {{$about['avatar']}}
                            @endif >
                    </div>
                </div>
                <br/>
            </div>
            <div class="form-group">
                <label for="comment">Nội dung tóm tắt</label>
                <textarea class="form-control" name="content" rows="5" id="content">
                    @if(isset($about['content']))
                        {{$about['content']}}
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
                <button type="submit" id="btn">CHỈNH SỬA</button>
                <button type="reset" id="btn-reset" >LÀM MỚI</button>
            </div>


        </form>
    </div>

@endsection
