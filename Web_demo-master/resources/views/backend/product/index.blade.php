@extends('backend.layouts.master') 
@section('title', 'Product List') 
@section('content')
<div class="container">
    <section class="page-section my-5 p-5">
        <div class="row">
            <div class="col-sm-1">
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary">新增商品</a>
            </div>
        </div>
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">商品副標題</th>
                        <th scope="col">圖片</th>
                        <th scope="col">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product) 
                        <tr>
                            <th class="align-middle" scope="row">{{ $product->id }}</th>
                            <td class="align-middle">{{ $product->title }}</td>
                            <td class="align-middle">{{ $product->subtitle }}</td>
                            <td class="align-middle"><img src="{{ asset('uploads/product/'. $product->image) }}" width="100px"></td>
                            <td class="align-middle">
                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">修改</a>
                                <form method="POST" action="{{ route('admin.product.destroy', $product->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-secondary">刪除</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Product</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection