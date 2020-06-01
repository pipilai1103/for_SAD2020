@extends('backend.layouts.master') 

@section('title', 'Home Edit') 

@section('content')

<div class="container">

    <section class="page-section my-5 p-5">

        <form method="POST" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="content_1">首頁文字區域 1</label>
                <textarea class="form-control" type="text" name="content_1" rows="5">@isset($home) {{$home->content_1}} @endisset</textarea>
            </div>

            <div class="form-group">
                <label for="content_2">首頁文字區域 2</label>
                <textarea class="form-control" type="text" name="content_2" rows="5">@isset($home) {{$home->content_2}} @endisset</textarea>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="image">圖片</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="image">
                </div>
                <img src="@isset($home) {{ asset('uploads/home/' . $home->image) }} @endisset" class="mt-3" style="height: 100%; width: 100%; object-fit: contain" onerror="this.src='{{ asset('uploads/home/default.jpg') }}'">
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