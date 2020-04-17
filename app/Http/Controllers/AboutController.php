<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\skill;
use App\profile;
use App\project;
use App\experience;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getListGioiThieu()
    {
        $gioithieu = about::All();
        return view('backend.pages.about.about', ['gioithieu' => $gioithieu]);
    }

    public function getCreateGioiThieu()
    {
        return view('backend.pages.about.add_about');
    }

    public function postCreateGioiThieu(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'avatar' => 'required',
            'content' => 'required'

        ], [
            'title.required' => 'Vui lòng nhập tiêu đề',
            'avatar.required' => 'Vui lòng chọn ảnh',
            'content.required' => 'Vui lòng điền nội dung'
        ]);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $title = $request['title'];
                $content = $request['content'];

                $AvatarName = "avatar_" . str_random(4) . $name;
                $file->move('backend/images/avt-about', $AvatarName);
                $urlAvatar = 'backend/images/avt-about/' . $AvatarName;

                $about = new about;
                $about['title'] = $title;
                $about['content'] = $content;
                $about['avatar'] = $urlAvatar;

                $about->save();


                return redirect()->route('admin.about.get.listgioithieu');
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }


    }

    public function getEditGioiThieu($id)
    {
        $about = about::find($id);
        return view('backend.pages.about.edit_about', ['about' => $about]);
    }

    public function postEditGioiThieu(Request $request, $id)
    {

        $this->validate($request, [

            'title' => 'required',
            'content' => 'required'

        ], [
            'title.required' => 'Vui lòng nhập tiêu đề',
            'content.required' => 'Vui lòng điền nội dung'
        ]);

        $about = about::find($id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = "avatar_" . str_random(4) . $name;

                if (file_exists($about['avatar'])) {
                    unlink($about['avatar']);
                    $about['avatar'] = "";
                }
                $file->move('backend/images/avt-about', $AvatarName);
                $urlAvatar = 'backend/images/avt-about/' . $AvatarName;
                $about['avatar'] = $urlAvatar;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }

                $title = $request['title'];
                $content = $request['content'];

                $about['title'] = $title;
                $about['content'] = $content;
               $about->save();


                return redirect()->route('admin.about.get.listgioithieu');


        }



    public  function getDeleteGioiThieu($id){
        $about = about::find($id);
        $about->delete();
        return redirect()->route('admin.about.get.listgioithieu');
    }

    public function getListKyNang(){
            $skill = skill::all();
        return view('backend.pages.skill.skill',['skill'=>$skill]);
    }
    public function  getCreateKyNang(){
        return view('backend.pages.skill.add_skill');

    }
    public function  postCreateKynang(Request $request){
         $this->validate($request,[
                'name_skill' => 'required|unique:skill',
                'rate'=> 'required|numeric|between:10,100'
         ],[
                'name_skill.required' => 'Vui lòng điền tên ngôn ngữ',
                'name_skill.unique'=> 'Tên ngôn ngữ đã tồn tại vui lòng dùng tên khác',
                'rate.required' => 'Vui lòng điền mức độ kỹ năng',
             'rate.between'=>'Số     điền vào phải nằm trong khoảng 10 - 100',

         ]);
         $skill = new skill();

         $skill['name_skill'] = $request['name_skill'];
         $skill['rate'] = $request['rate'];

         $skill->save();

         return redirect()->route('admin.about.get.listkynang');
    }
    public function getEditKyNang($id){
        $skill = skill::find($id);

        return view('backend.pages.skill.edit_skill',['skill'=>$skill]);
    }
    public function postEditKyNang(Request $request,$id){
        $skill = skill::find($id);

        if ($skill['name_skill'] == $request['name_skill'] && $skill['rate'] == $request['rate']){

            $skill['name_skill'] = $request['name_skill'];
            $skill['rate'] = $request['rate'];
            $skill->save();

            return redirect()->route('admin.about.get.listkynang');

        }

        $this->validate($request,[
            'name_skill' => 'required',
            'rate'=> 'required|numeric|between:10,100'
        ],[
            'name_skill.required' => 'Vui lòng điền tên ngôn ngữ',
            'rate.required' => 'Vui lòng điền mức độ kỹ năng',
            'rate.between'=>'Số     điền vào phải nằm trong khoảng 10 - 100',

        ]);
        $skill = skill::find($id);
        $skill['name_skill'] = $request['name_skill'];
        $skill['rate'] = $request['rate'];
        $skill->save();

        return redirect()->route('admin.about.get.listkynang');


    }
    public function getDeleteKyNang($id){
        $skill = skill::find($id);
        $skill->delete();
        return redirect()->route('admin.about.get.listkynang');
    }
    public  function getListResume(){
        $profile = profile::all();
        return view('backend.pages.soyeulylich.soyeulylich',['profile'=>$profile]);
    }
    public function  getCreateResume(){
            return view('backend.pages.soyeulylich.add_resume');
    }
    public function  postCreateResume(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:profile',
            'content' => 'required'
        ],[
            'name.required'=>'Vui lòng điền tiêu đề',
            'name.unique'=>'Tiêu đề đã tồn tại',
            'content.required' => 'Vui lòng điền thông tin'
        ]);

        $profile = new profile();
        $profile['name'] = $request['name'];
        $profile['content'] = $request['content'];
        $profile->save();

        return redirect()->route('admin.about.get.listresume');
    }
    public function getEditResume($id){
        $profile = profile::find($id);
        return view('backend.pages.soyeulylich.edit_resume',['profile'=>$profile]);

    }
    public function postEditResume(Request $request, $id){
        $profile = profile::find($id);
        if ($profile['name'] == $request['name'] && $profile['content']==$request['content']){

            $profile['name'] = $request['name'];
            $profile['content'] = $request['content'];
            $profile->save();

            return redirect()->route('admin.about.get.listresume');

        }
        $this->validate($request,[
            'name' => 'required|unique:profile',
            'content' => 'required'
        ],[
            'name.required'=>'Vui lòng điền tiêu đề',
            'name.unique'=>'Tiêu đề đã tồn tại',
            'content.required' => 'Vui lòng điền thông tin'
        ]);
        $profile = profile::find($id);
        $profile['name'] = $request['name'];
        $profile['content'] = $request['content'];
        $profile->save();
        return redirect()->route('admin.about.get.listresume');



    }
    public function getDeleteResume($id){
        $profile = profile::find($id);
        $profile->delete();
        return redirect()->route('admin.about.get.listresume');

    }
    public function getListExp(){
        $exp = experience::all();
        return view('backend.pages.kinhnghiem.kinhnghiem',['exp'=>$exp]);

    }
    public  function getCreateExp(){

        return view('backend.pages.kinhnghiem.add_exp');
    }
    public  function postCreateExp(Request $request){

        $this->validate($request,[
            'company'=>'required',
            'time' =>'required',
            'position' =>'required',
            'desc'=>'required'

        ],[
            'company.required' => 'Vui lòng điền tên công ty',
            'time.required' => 'Vui lòng điền thời gian',
            'position.required'=>'Vui lòng điền chức vụ',
            'desc.required'=>'Vui lòng điền thông tin chi tiết'

        ]);

        $exp = new experience();

        $exp['company'] = $request['company'];
        $exp['time'] = $request['time'];
        $exp['position'] = $request['position'];
        $exp['desc'] = $request['desc'];

        $exp->save();
        return redirect()->route('admin.about.get.listexp')->with('thanhcong','Bạn đã thêm thành công');

    }
    public function getEditExp($id){
        $exp = experience::find($id);
        return view('backend.pages.kinhnghiem.edit_exp',['exp'=>$exp]);
    }
    public function postEditExp(Request $request,$id){
        $exp = experience::find($id);
        if ($exp['company'] == $request['company'] && $exp['time'] == $request['time'] && $exp['position'] == $request['position'] && $exp['desc'] == $request['desc']){
            $exp['company'] = $request['company'];
            $exp['time'] = $request['time'];
            $exp['position'] = $request['position'];
            $exp['desc'] = $request['desc'];

            $exp->save();
            return redirect()->route('admin.about.get.listexp')->with('thanhcong','Bạn đã sửa thành công');
        }
        $this->validate($request,[
            'company'=>'required',
            'time' =>'required',
            'position' =>'required',
            'desc'=>'required'

        ],[
            'company.required' => 'Vui lòng điền tên công ty',
            'time.required' => 'Vui lòng điền thời gian',
            'position.required'=>'Vui lòng điền chức vụ',
            'desc.required'=>'Vui lòng điền thông tin chi tiết'

        ]);

        $exp = experience::find($id);

        $exp['company'] = $request['company'];
        $exp['time'] = $request['time'];
        $exp['position'] = $request['position'];
        $exp['desc'] = $request['desc'];

        $exp->save();
        return redirect()->route('admin.about.get.listexp')->with('thanhcong','Bạn đã SỬA thành công');
    }
    public function getDeleteExp($id){
        $exp = experience::find($id);
        $exp->delete();
        return redirect()->route('admin.about.get.listexp')->with('thanhcong','Bạn đã Xóa thành công');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
