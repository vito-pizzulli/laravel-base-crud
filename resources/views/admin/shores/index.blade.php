@extends('layouts.app')

@section('title', 'Admin Shores Index')

@section('main-content')

<div class="container">


    <h1 class="mb-5">
        Shores Index
    </h1>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            id
                        </th>
                        <th scope="col">
                            Name
                        </th>
                        <th scope="col">
                            Location
                        </th>
                        <th scope="col">
                            Number_of_umbrellas
                        </th>
                        <th scope="col">
                            Number_of_bed
                        </th>
                        <th scope="col">
                            Price
                        </th>
                        <th scope="col">
                            Opening_date
                        </th>
                        <th scope="col">
                            Closing_date
                        </th>
                        <th scope="col">
                            Has_volley_beach
                        </th>
                        <th scope="col">
                            Has_soccer_field
                        </th>
                        <th scope="col">
                            Actions
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($shoreList as $shore)

                    <tr>
                        <th scope="row">{{ $shore->id}}</th>
                        <td>
                            {{ $shore->name}}
                        </td>
                        <td>
                            {{ $shore->location}}
                        </td>
                        <td>
                            {{ $shore->number_of_umbrellas}}
                        </td>
                        <td>
                            {{ $shore->number_of_bed}}
                        </td>
                        <td>
                            {{ $shore->price}}
                        </td>
                        <td>
                            {{ $shore->opening_date}}
                        </td>
                        <td>
                            {{ $shore->closing_date}}
                        </td>
                        <td>
                            <p> {{ $shore->has_volley_beach ? 'Yes' : 'No' }} </p>
                        </td>
                        <td>
                            <p> {{ $shore->has_soccer_field ? 'Yes' : 'No' }} </p>
                        </td>
                        <td class="text-nowrap">
                            <a class="btn btn-sm btn-primary" href="{{route('admin.shores.show', $shore->id)}}">View</a>
                            <a class="btn btn-sm btn-warning" href="{{route('admin.shores.edit', $shore->id)}}">Edit</a>

                            <form action="{{ route('admin.shores.destroy', $shore->id) }}" class="form-delete d-inline-block m-1" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-secondary me-2">Delete</button>
                            </form>

                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection