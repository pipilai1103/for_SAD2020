@extends('backend.layouts.master') 

@section('title', 'Product Create') 

@section('content')

<div class="container">

    <section class="page-section my-5 p-5">
    
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">商品名稱</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="title">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">商品副標題</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="subtitle">
                </div>
            </div>

            <div class="form-group">
                <label for="description">商品描述</label>
                <textarea class="form-control" type="text" name="description" rows="5"></textarea>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="image">圖片</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="image">
                </div>
                {{--  <img src="http://via.placeholder.com/1200x600" class="mt-3" style="height: 100%; width: 100%; object-fit: contain">  --}}
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">新增</button>
                </div>
            </div>
            
        </form>

    </section>
   
</div>


@endsection