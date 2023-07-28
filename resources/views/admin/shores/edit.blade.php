@extends('layouts.app')

@section('title', 'Edit Your Shore')

@section('main-content')

<div class="container">
    <h1 class="mb-3">
        Edit your Shore
    </h1>
    <div class="row">
        <div class="card col-12" >
            <div class="col-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{route('admin.shores.update', $shore->id)}}" method="POST">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Name
                    </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $shore->name) }}">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">
                        Location
                    </label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $shore->location) }}">
                </div>
                <div class="mb-3">
                    <label for="number_of_umbrellas" class="form-label">
                        Number of umbrellas
                    </label>
                    <input type="text" class="form-control" id="number_of_umbrellas" name="number_of_umbrellas" value="{{ old('number_of_umbrellas', $shore->number_of_umbrellas) }}">
                </div>
                <div class="mb-3">
                    <label for="number_of_bed" class="form-label">
                        Number of bed
                    </label>
                    <input type="text" class="form-control" id="number_of_bed" name="number_of_bed" value="{{ old('number_of_bed', $shore->number_of_bed) }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">
                        Price
                    </label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $shore->price) }}">
                </div>
                <div class="mb-3">
                    <label for="opening_date" class="form-label">
                        Opening_date
                    </label>
                    <input type="date" class="form-control" id="opening_date" name="opening_date" value="{{ old('opening_date', $shore->opening_date) }}">
                </div>
                <div class="mb-3">
                    <label for="closing_date" class="form-label">
                        Closing_date
                    </label>
                    <input type="date" class="form-control" id="closing_date" name="closing_date" value="{{ old('closing_date', $shore->closing_date) }}">
                </div>
                <div class="form-group mb-3">
                    <label for="has_volley_beach">Has Volley Beach</label>
                        <select class="form-control" name="has_volley_beach" id="has_volley_beach">
                            <option value="0" {{ old(!$shore->has_volley_beach) ? 'selected' : '' }}>No</option>
                            <option value="1" {{ old($shore->has_volley_beach) ? 'selected' : '' }}>Yes</option>
                        </select>
                </div>
                <div class="form-group mb-3">
                    <label for="has_soccer_field">Has Soccer Field</label>
                        <select class="form-control" name="has_soccer_field" id="has_soccer_field" >
                        <option value="0" {{ old(!$shore->has_soccer_field) ? 'selected' : '' }}>No</option>
                        <option value="1" {{ old($shore->has_soccer_field) ? 'selected' : '' }}>Yes</option>
                        </select>
                </div>
                    <button type="submit" class="btn btn-primary">
                        Edit Shore
                    </button>
            </form>
        </div>
    </div>
</div>


@endsection