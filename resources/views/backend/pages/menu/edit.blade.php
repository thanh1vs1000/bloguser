@extends('backend.home')
@section('title','add-menu')
@section('content')

    <div class="container-fluid">
        <h1 class="mt-4"style="font-weight: bold">CHỈNH SỬA MENU</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dữ liệu</a></li>
            <li class="breadcrumb-item active">edit-menu</li>
        </ol>
        <form method="post" action="{{route('admin.menu.post.edit',$menu['id'])}}">
            {{csrf_field()}}
            <div class="form-group">
                <label style="font-weight: bold">Tên Menu</label>
                <input type="text" name="name" class="form-control" @if(isset($menu['name']))
                        value="{{$menu['name']}} @endif"
                    >
            </div>
            <div class="form-group">
                <label style="font-weight: bold" >Đường Dẫn</label>
                <input type="text" name="link"
                       @if(isset($menu['content']))
                       value="{{$menu['content']}}" @endif
                       class="form-control">
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput">Trạng Thái</label>
                <div class="controls">
                    <select class="form-control" tabindex="1" data-placeholder="Select here.." class="span4" name="status">

                        <option value="">Vui lòng chọn</option>
                        <option value="0"
                        @if(isset($menu['status']) && $menu['status'] == 0)
                            <?php echo "selected"; ?>
                            @endif
                        >Ẩn</option>
                        <option value="1"
                        @if(isset($menu['status']) && $menu['status'] == 1)
                            <?php echo "selected"; ?>
                            @endif
                        >Hoạt Động</option>
                    </select>
                </div>
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
