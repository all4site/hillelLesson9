<?php

use Illuminate\Pagination\LengthAwarePaginator;

$brand = \App\Models\Brand::all();
/**
 * @var $all LengthAwarePaginator
 */
?>

@extends('layouts.main')
@section('content')

      <h1>Все товары</h1>

      <div class="row mt-5">
          <div class="col-12 mt-5">
              <table class="table table-striped">
                  <thead class="thead-dark">
                  <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                      <th scope="col">Brand</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($all as $product)
                      <tr>
                          <th scope="row">{{ $product->id }}</th>
                          <td>{{$product->name}}</td>
                          <td>{{$product->description}}</td>
                          <td>{{$product->price}}</td>
                          <td><a href="/brands/{{$product->brand_id}}">{{$brand->find($product->brand_id)
                          ->name}}</a></td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>

          {{ $all->links() }}
      </div>
@endsection