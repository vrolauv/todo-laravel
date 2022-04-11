@extends('items.layout')
@section('content')

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Item : {{ $items->item }}</h5>
            <p class="card-text">Description : {{ $items->description }}</p>
        </div>
        </hr>
    </div>
</div>