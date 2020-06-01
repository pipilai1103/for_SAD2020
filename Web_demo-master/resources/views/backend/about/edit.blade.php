@extends('backend.layouts.master') 

@section('title', 'About Edit') 

@section('content')

<div class="container">

    <section class="page-section my-5 p-5">

        <form method="POST" action="{{ route('admin.about.update') }}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="content">關於我</label>
                <textarea class="form-control" type="text" name="content" rows="5">@isset($about) {{$about->content}} @endisset</textarea>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="image">圖片</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="image">
                </div>
                <img src="@isset($about) {{ asset('uploads/about/' . $about->image) }} @endisset" class="mt-3" style="height: 100%; width: 100%; object-fit: contain" onerror="this.src='{{ asset('uploads/about/default.jpg') }}'">
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