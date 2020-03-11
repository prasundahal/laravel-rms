@extends('layouts.master')
@section('main')
<div class="container custom-form">
<div class="row">
<h3>  Table Number: <span style="color:red">{{ $table->table_number }}</span></h3>
</div>
<div class="row">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div>
        <div class="form-group">
        <label for="table_number">Menu Items:</label>
        <select class="form-control" name="item" id="item">
            @foreach ($iteams as $value)
            <option value="{{ $value->id }}"> 
                {{ $value->iteam_name }} 
            </option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="table_number">Quantity:</label>
            <input type="number" class="form-control" id="quantity" />
        </div>
        <button type="submit" id="addOrder" class="btn btn-primary">Add Order</button>
        </div>
</div>
</div>
<div class="showItems">Show Items</div>
<script>
$(document).ready(function(){
    var itemName = $("#item").val();
    var quantity = $("#quantity").val();
    $("#addOrder").click(function() {
        alert(itemName);
    })
});
</script>
@endsection
