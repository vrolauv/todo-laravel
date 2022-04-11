@extends('items.layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Item</div>
    <div class="card-body">

        <form action="{{ url('item/' .$items->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$items->id}}" id="id" />
            <label>Item</label></br>
            <input type="text" name="item" id="item" value="{{$items->item}}" class="form-control"></br>
            <label>Description</label></br>
            <input type="text" name="description" id="description" value="{{$items->description}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop