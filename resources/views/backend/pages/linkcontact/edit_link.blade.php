@extends('backend.home')
@section('title','Thêm Link')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4"style="font-weight: bold">SỬA LINK</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dữ liệu</a></li>
            <li class="breadcrumb-item active">edit-link</li>
        </ol>
        <form method="post" action="{{route('admin.contact.post.editlinkcontact',$link['id'])}}">
            {{csrf_field()}}
            <div class="form-group">
                <label style="font-weight: bold">Tên</label>
                <input type="text" name="name" class="form-control" @if(isset($link['name']))
                value=" {{$link['name']}}"
                    @endif>
            </div>
            <div class="form-group">
                <label style="font-weight: bold" >Link</label>
                <input type="text" name="link" class="form-control" @if(isset($link['link']))
                value=" {{$link['link']}}"
                    @endif>
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
                <button type="submit" id="btn">CHỈNH SỬA</button>
                <button type="reset" id="btn-reset" >LÀM MỚI</button>
            </div>


        </form>
    </div>
@endsection

