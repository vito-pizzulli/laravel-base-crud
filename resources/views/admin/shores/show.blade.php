@extends('layouts.app')

@section('title', 'Single Comic')

@section('main-content')



<div class="container">
    <h1 class="mb-3">
        Shore: {{ $shore->name}}
    </h1>
    <div class="row">
        <div class="card col-12" >
            <div class="card-body">
            <h5 class="card-title">{{ $shore->name}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Location: {{ $shore->location}} </li>
                <li class="list-group-item">Number_of_umbrellas: {{ $shore->number_of_umbrellas }}</li>
                <li class="list-group-item">Number_of_bed: {{ $shore->number_of_bed}}</li>
                <li class="list-group-item">Price: {{ $shore->price}}</li>
                <li class="list-group-item">Opening_date: {{ $shore->opening_date}}</li>
                <li class="list-group-item">Closing_date: {{ $shore->closing_date}}</li>
                <li class="list-group-item">Has_volley_beach: {{ $shore->has_volley_beach ? 'Yes' : 'No' }}</li>
                <li class="list-group-item">has_soccer_field: {{ $shore->has_soccer_field ? 'Yes' : 'No' }}</li>
            </ul>
        </div>
    </div>
</div>

@endsection