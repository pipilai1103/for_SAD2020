<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Store;

class StoreController extends Controller
{
    public function edit()
    {
        $store = Store::find(1);

        if (empty($store))
            return view('backend.store.edit');
        else
            return view('backend.store.edit', compact('store'));
    }

    public function update(Request $request)
    {
        // 因為沒有特別建立create頁面，所以特別判斷資料庫中是否有資料可以更新
        $store = Store::find(1);

        if (empty($store)) {
            // 沒有資料 -> 新增
            $store = new Store;
        }
        
        // 去除字串前後空白
        $input = $request->all();
        $input = array_map('trim', $input);

        $sun_open = $input['sun_open_h'] . ':' . $input['sun_open_m'];
        $mon_open = $input['mon_open_h'] . ':' . $input['mon_open_m'];
        $tue_open = $input['tue_open_h'] . ':' . $input['tue_open_m'];
        $wed_open = $input['wed_open_h'] . ':' . $input['wed_open_m'];
        $thu_open = $input['thu_open_h'] . ':' . $input['thu_open_m'];
        $fri_open = $input['fri_open_h'] . ':' . $input['fri_open_m'];
        $sat_open = $input['sat_open_h'] . ':' . $input['sat_open_m'];

        $sun_close = $input['sun_close_h'] . ':' . $input['sun_close_m'];
        $mon_close = $input['mon_close_h'] . ':' . $input['mon_close_m'];
        $tue_close = $input['tue_close_h'] . ':' . $input['tue_close_m'];
        $wed_close = $input['wed_close_h'] . ':' . $input['wed_close_m'];
        $thu_close = $input['thu_close_h'] . ':' . $input['thu_close_m'];
        $fri_close = $input['fri_close_h'] . ':' . $input['fri_close_m'];
        $sat_close = $input['sat_close_h'] . ':' . $input['sat_close_m'];


        $store->sun_open = $sun_open;
        $store->mon_open = $mon_open;
        $store->tue_open = $tue_open;
        $store->wed_open = $wed_open;
        $store->thu_open = $thu_open;
        $store->fri_open = $fri_open;
        $store->sat_open = $sat_open;

        $store->sun_close = $sun_close;
        $store->mon_close = $mon_close;
        $store->tue_close = $tue_close;
        $store->wed_close = $wed_close;
        $store->thu_close = $thu_close;
        $store->fri_close = $fri_close;
        $store->sat_close = $sat_close;

        $store->address = $input['address'];
        $store->phone = $input['phone'];

        $store->save();

        return redirect()->route('admin.store.edit');
    }
}
