@extends('backend.home')
@section('title','Thêm kỹ năng')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4"style="font-weight: bold">CHỈNH SỬA KỸ NĂNG</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dữ liệu</a></li>
            <li class="breadcrumb-item active">edit-skill</li>
        </ol>
        <form method="post" action="{{route('admin.about.post.editkynang',$skill['id'])}}">
            {{csrf_field()}}
            <div class="form-group">
                <label style="font-weight: bold">Tên Ngôn Ngữ</label>
                <input type="text" name="name_skill" class="form-control"
                    @if($skill['name_skill'])
                        value="{{$skill->name_skill}}" @endif
                >
            </div>
            <div class="form-group">
                <label style="font-weight: bold" >Mức Độ Kỹ Năng</label>
                <input type="number" name="rate" class="form-control" @if($skill['rate'])
                value="{{$skill->rate}}" @endif>
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
