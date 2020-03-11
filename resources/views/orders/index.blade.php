@extends('layouts.master')

@section('main')
<div class="container">
<div class="row">
<div class="col-sm-12">

  @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
@endif
</div>
    <h1 class="display-3">Orders</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Table Number</td>
          <td>Items</td>
          <td>Price</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->order_name}} </td>
            <td>{{$order->order_price}}</td>
            <td>{{$order->order_type}}</td>
            <td>{{$order->order_time}}</td>
            <td>{{$order->order_discount}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
