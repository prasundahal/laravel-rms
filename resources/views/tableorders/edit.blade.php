@extends('layouts.master')
@section('main')
<div class="row">

        <h3>  Place order for table number: {{ $table->table_number }} </h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('tableorders.update', $table->id) }}"enctype="multipart/form-data">
</br>
</br>
            @method('PATCH')
            @csrf


            <div class="form-group">

                <label for="table_number">Table Number:</label>
                <input type="text" class="form-control" name="table_number" value={{ $table->table_number }} />
            </div>
            <div class="form-group">
                <option>Select Menu</option>
                    @foreach ($iteams as $key => $value)
                          <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>
                                          {{ $value }}
                    <input type="checkbox" name="iteam_name">
</br>
</br>
                            </option>
                    @endforeach


                    <div class="form-group">

                        <label for="table_number">Total Table Price:</label>
                        <input type="text" class="form-control" name="iteam_price" value={{ $table->table_number }} />
                    </div>






        </br></br>
            <button type="submit" class="btn btn-primary">ADD OR Update</button>
        </form>

</div>
@endsection
