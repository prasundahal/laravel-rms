@extends('layouts.master')

@section('main')
<div class="container">
    <h1>Welcome to Waiter Dashboard</h1>
    <h3>Start Taking Orders</h3>

    <div class="row">
        <a style="margin:10px;" href="{{ route('tables.create')}}" class="btn btn-primary">New virtTable</a>
    </div>






</div>
@endsection
