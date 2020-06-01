@extends('backend.layouts.master') 

@section('title', 'Store Edit') 

@section('content')

<div class="container">
            
    <section class="page-section my-5 p-5">

        <form method="POST" action="{{ route('admin.store.update') }}">

            {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="address">地址</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="address" value="@isset($store) {{$store->address}} @endisset">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="phone">電話</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="phone" value="@isset($store) {{$store->phone}} @endisset">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">(如果沒有營業請將 開門時間 與 關門時間 都設為 00:00 即可)</div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">週日</label>
                <label class="col-sm-2 col-form-label" for="sun_open">開門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sun_open_h" value="@isset($store){{substr($store->sun_open, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sun_open_m" value="@isset($store){{substr($store->sun_open, 3, 2)}}@else 00 @endisset">
                </div>

                <div class="col-sm-1"></div>
                
                <label class="col-sm-2 col-form-label" for="sun_close">關門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sun_close_h" value="@isset($store){{substr($store->sun_close, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sun_close_m" value="@isset($store){{substr($store->sun_close, 3, 2)}}@else 00 @endisset">
                </div>               
                
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">週一</label>
                <label class="col-sm-2 col-form-label" for="mon_open">開門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="mon_open_h" value="@isset($store){{substr($store->mon_open, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="mon_open_m" value="@isset($store){{substr($store->mon_open, 3, 2)}}@else 00 @endisset">
                </div>

                <div class="col-sm-1"></div>
                
                <label class="col-sm-2 col-form-label" for="mon_close">關門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="mon_close_h" value="@isset($store){{substr($store->mon_close, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="mon_close_m" value="@isset($store){{substr($store->mon_close, 3, 2)}}@else 00 @endisset">
                </div>               
                
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">週二</label>
                <label class="col-sm-2 col-form-label" for="tue_open">開門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="tue_open_h" value="@isset($store){{substr($store->tue_open, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="tue_open_m" value="@isset($store){{substr($store->tue_open, 3, 2)}}@else 00 @endisset">
                </div>

                <div class="col-sm-1"></div>
                
                <label class="col-sm-2 col-form-label" for="tue_close">關門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="tue_close_h" value="@isset($store){{substr($store->tue_close, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="tue_close_m" value="@isset($store){{substr($store->tue_close, 3, 2)}}@else 00 @endisset">
                </div>               
                
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">週三</label>
                <label class="col-sm-2 col-form-label" for="wed_open">開門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="wed_open_h" value="@isset($store){{substr($store->wed_open, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="wed_open_m" value="@isset($store){{substr($store->wed_open, 3, 2)}}@else 00 @endisset">
                </div>

                <div class="col-sm-1"></div>
                
                <label class="col-sm-2 col-form-label" for="wed_close">關門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="wed_close_h" value="@isset($store){{substr($store->wed_close, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="wed_close_m" value="@isset($store){{substr($store->wed_close, 3, 2)}}@else 00 @endisset">
                </div>               
                
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">週四</label>
                <label class="col-sm-2 col-form-label" for="thu_open">開門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="thu_open_h" value="@isset($store){{substr($store->thu_open, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="thu_open_m" value="@isset($store){{substr($store->thu_open, 3, 2)}}@else 00 @endisset">
                </div>

                <div class="col-sm-1"></div>
                
                <label class="col-sm-2 col-form-label" for="thu_close">關門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="thu_close_h" value="@isset($store){{substr($store->thu_close, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="thu_close_m" value="@isset($store){{substr($store->thu_close, 3, 2)}}@else 00 @endisset">
                </div>               
                
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">週五</label>
                <label class="col-sm-2 col-form-label" for="fri_open">開門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="fri_open_h" value="@isset($store){{substr($store->fri_open, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="fri_open_m" value="@isset($store){{substr($store->fri_open, 3, 2)}}@else 00 @endisset">
                </div>

                <div class="col-sm-1"></div>
                
                <label class="col-sm-2 col-form-label" for="fri_close">關門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="fri_close_h" value="@isset($store){{substr($store->fri_close, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="fri_close_m" value="@isset($store){{substr($store->fri_close, 3, 2)}}@else 00 @endisset">
                </div>               
                
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">週六</label>
                <label class="col-sm-2 col-form-label" for="sat_open">開門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sat_open_h" value="@isset($store){{substr($store->sat_open, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sat_open_m" value="@isset($store){{substr($store->sat_open, 3, 2)}}@else 00 @endisset">
                </div>

                <div class="col-sm-1"></div>
                
                <label class="col-sm-2 col-form-label" for="sat_close">關門時間</label>
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sat_close_h" value="@isset($store){{substr($store->sat_close, 0, 2)}}@else 00 @endisset">
                </div>
                :
                <div class="col-sm-1">
                    <input class="form-control" type="text" name="sat_close_m" value="@isset($store){{substr($store->sat_close, 3, 2)}}@else 00 @endisset">
                </div>               
                
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">更新</button>
                </div>
            </div>

        </form>
    
    </section>
    
</div>

@endsection