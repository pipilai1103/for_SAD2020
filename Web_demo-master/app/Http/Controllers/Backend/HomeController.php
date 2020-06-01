<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home;

class HomeController extends Controller
{
    public function edit()
    {
        $home = Home::find(1);

        if (empty($home))
            return view('backend.home.edit');
        else
            return view('backend.home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/home')) {
            mkdir('uploads/home', 0755, true);
        }

        // 因為沒有特別建立create頁面，所以特別判斷資料庫中是否有資料可以更新
        $home = Home::find(1);

        if (empty($home)) {
            // 沒有資料 -> 新增
            $home = new Home;
            $fileName = 'default.jpg';
        } 

        if ($request->hasFile('image')) {
            // 先刪除原本的圖片
            if ($home->image != 'default.jpg')
                @unlink('uploads/home/' . $home->image);
            $file = $request->file('image');
            $path = public_path() . '\uploads\home\\';
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }

        $home->content_1 = $request->input('content_1');
        $home->content_2 = $request->input('content_2');
        if ($fileName) {
            $home->image = $fileName;
        }

        $home->save();

        return redirect()->route('admin.home.edit');
    }
}
