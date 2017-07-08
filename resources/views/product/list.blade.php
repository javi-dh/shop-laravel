@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="responsive-table">

      <table class="table table-hover">
          <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Category</th>
              <th>Price</th>
              <th>Actions</th>
            <tr>
          </thead>

          <tbody>
            @foreach($products as $product)
              <tr>
                <td><img width="60px" src="{{ $product->image }}"></td>
                <td>{{ $product->title }}</td>
                <td><a href="{{ route('category-product', [$product->category->slug]) }}">{{ $product->category->name }}</a></td>
                <td>{{ $product->priceText() }}</td>
                <td>
                  <button class="btn btn-xs btn-primary">View</button>
                  <button class="btn btn-xs btn-success">Buy</button>
                </td>
              <tr>
            @endforeach
          </tbody>
      </table>
      {{ $products->links() }}
    </div>
  </div>

@endsection

@section('menu')
  @include('layouts.nav')
@endsection
