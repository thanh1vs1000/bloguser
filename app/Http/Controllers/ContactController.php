<?php

namespace App\Http\Controllers;

use App\other;
use Illuminate\Http\Request;
use App\linkcontact;
use App\contact;

class ContactController extends Controller
{
    public function getListLink()
    {
        $link = linkcontact::all();
        return view('backend.pages.linkcontact.linkcontact', ['link' => $link]);

    }

    public function getCreateLink()
    {
        return view('backend.pages.linkcontact.add_link');

    }

    public function postCreateLink(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:linkcontact',
            'link' => 'required'
        ], [
            'name.required' => 'Vui lòng chọn tên link khác',
            'name.unique' => 'Tên link đã tồn tại',
            'link.required' => 'Vui lòng điền link !'
        ]);

        $link = new linkcontact();
        $link['name'] = $request['name'];
        $link['link'] = $request['link'];
        $link->save();

        return redirect()->route('admin.contact.get.listlinkcontact')->with('thanhcong', 'Bạn đã thêm thành công');

    }

    public function getEditLink($id)
    {
        $link = linkcontact::find($id);
        return view('backend.pages.linkcontact.edit_link', ['link' => $link]);
    }

    public function postEditLink(Request $request, $id)
    {
        $link = linkcontact::find($id);
        if ($link['name'] == $request['name'] && $link['link'] == $request['link']) {
            $link['name'] = $request['name'];
            $link['link'] = $request['link'];
            $link->save();
        }

        $this->validate($request, [
            'name' => 'required',
            'link' => 'required'
        ], [
            'name.required' => 'Vui lòng chọn tên link khác',
            'link.required' => 'Vui lòng điền link !'
        ]);

        $link = linkcontact::find($id);
        $link['name'] = $request['name'];
        $link['link'] = $request['link'];
        $link->save();
        return redirect()->route('admin.contact.get.listlinkcontact')->with('thanhcong', 'Bạn đã SỬA thành công');
    }

}
