<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::find(1);

        if (empty($about))
            return view('backend.about.edit');
        else
            return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/about')) {
            mkdir('uploads/about', 0755, true);
        }

        // 因為沒有特別建立create頁面，所以特別判斷資料庫中是否有資料可以更新
        $about = About::find(1);

        if (empty($about)) {
            // 沒有資料 -> 新增
            $about = new About;
            $fileName = 'default.jpg';
        } 

        if ($request->hasFile('image')) {
            // 先刪除原本的圖片
            if ($about->image != 'default.jpg')
                @unlink('uploads/about/' . $about->image);
            $file = $request->file('image');
            $path = public_path() . '\uploads\about\\';
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }

        $about->content = $request->input('content');
        if ($fileName)
            $about->image = $fileName;

        $about->save();

        return redirect()->route('admin.about.edit');
    }
}
