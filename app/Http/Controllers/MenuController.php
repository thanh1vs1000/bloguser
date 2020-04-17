<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use App\banner;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $menu = menu::all();

        return view('backend.pages.menu.menu', ['menu' => $menu]);
    }

    public function getCreate()
    {
        return view('backend.pages.menu.addmenu');
    }

    public function postCreate(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|unique:menu',
                'link' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập danh mục',
                'name.unique'=> 'Tên menu đã tồn tại vui lòng nhận tên khác',
                'link.required' => 'Vui lòng điền link',
                'status.required'=> 'Vui lòng chọn trạng thái'
            ]);
        $name = $request['name'];
        $link = $request['link'];
        $status =$request['status'];
        $menu = new menu;

        $menu['name'] = $name;
        $menu['content'] = $link;
        $menu['status'] = $status;

        $menu->save();
        return redirect()->route('admin.menu.get.list');
    }

    public function getEdit($id){
        $menu = menu::find($id);
        return view('backend.pages.menu.edit',['menu'=>$menu]);
    }
    public function postEdit(Request $request,$id){
        $menu = menu::find($id);
        if ($menu['name'] == $request['name']){
            $this->validate($request,[
                'status' => 'required'
            ],[
                'status.required' => 'Vui lòng chọn trạng thái'
            ]);
            $menu['name'] = $request['name'];
            $menu['content'] = $request['link'];
            $menu['status'] = $request['status'];

            $menu-> save();
            return redirect()->route('admin.menu.get.list');
        }
        $this->validate($request,
            [

                'name' => 'required|unique:menu',
                'link' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập danh mục',
                'name.unique'=> 'Tên menu đã tồn tại vui lòng nhận tên khác',
                'link.required' => 'Vui lòng điền link',
                'status.required'=> 'Vui lòng chọn trạng thái'
            ]);
        $menu = menu::find($id);
        $menu['name'] = $request['name'];
        $menu['content'] = $request['link'];
        $menu['status'] = $request['status'];
        $menu -> save();
        return redirect()->route('admin.menu.get.list');
    }
    public  function getDelete($id){
        $menu = menu::find($id);
        $menu->delete();

         return redirect()->route('admin.menu.get.list');
    }
    public function getListBanner(){
        $banner = banner::all();
        return view('backend.pages.banner.list',['banner'=>$banner]);


    }
    public function getCreateBanner(){
        return view('backend.pages.banner.add_banner');

    }
    public function postCreateBanner(Request $request){
        $this->validate($request,
            [
                'title' => 'required',
                'position' => 'required',
                'banner' => 'required',
                'content' => 'required'
            ],
            [
                'title.required' => 'Vui lòng nhập tiêu đề',
                'position.required' => 'Vui lòng điền chức vụ',
                'banner.required'=> 'Vui lòng chọn banner',
                'content.required'=> 'Vui lòng điền nội dung',
            ]);
        if ($request->hasFile('banner')){
            $file = $request->file('banner');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg'){
                $title = $request['title'];
                $position = $request['position'];
                $content = $request['content'];

                $BannerName = "banner_" . str_random(4) . $name;
                $file->move('backend/images/banner', $BannerName);
                $urlBanner = 'backend/images/banner/' . $BannerName;

                $banner = new banner;
                $banner['title'] = $title;
                $banner['content'] = $content;
                $banner['position'] = $position;
                $banner['banner'] = $urlBanner;
                   $banner->save();

                return redirect()->route('admin.menu.get.listbanner')->with('thanhcong','Bạn đã thêm thành công');

            }
            else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
    }
    public function getEditBanner($id){
        $banner = banner::find($id);
        return view('backend.pages.banner.edit_banner',['banner'=> $banner]);
    }
    public  function postEditBanner(Request $request,$id){
        $this->validate($request,
            [
                'title' => 'required',
                'position' => 'required',
                'content' => 'required'
            ],
            [
                'title.required' => 'Vui lòng nhập tiêu đề',
                'position.required' => 'Vui lòng điền chức vụ',
                'content.required'=> 'Vui lòng điền nội dung'
            ]);
        $banner = banner::find($id);
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $BannerName = "banner_" . str_random(4) . $name;
                if (file_exists($banner['banner'])) {
                    unlink($banner['banner']);
                    $banner['banner'] = "";
                }
                $file->move('backend/images/banner', $BannerName);
                $urlBanner = 'backend/images/banner/' . $BannerName;
                $banner['banner'] = $urlBanner;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }

            $title = $request['title'];
            $position = $request['position'];
            $content = $request['content'];

            $banner['title'] = $title;
            $banner['content'] = $content;
            $banner['position'] = $position;
            $banner->save();

            return redirect()->route('admin.menu.get.listbanner')->with('thanhcong', 'Bạn đã sửa thành công');

    }
    public function getDeleteBanner($id){
        $banner = banner::find($id);
        $banner->delete();
        return redirect()->route('admin.menu.get.listbanner')->with('thanhcong', 'Bạn đã xóa thành công');
    }
    public function getHome(){
        return view('backend.pages.home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
