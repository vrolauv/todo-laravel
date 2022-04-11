@extends('items.layout')
@section('content')

<div class="card">
    <div class="card-header">Items Page</div>
    <div class="card-body">

        <form action="{{ url('item') }}" method="post">
            {!! csrf_field() !!}
            <label>Item</label></br>
            <input type="text" name="item" id="item" class="form-control"></br>
            <label>Description</label></br>
            <input type="text" name="description" id="description" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop