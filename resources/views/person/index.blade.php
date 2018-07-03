@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <span>People</span>
                        <a class="btn btn-primary" style="float: right" href="{{ route('person.create') }}">Add
                            person</a>
                    </div>

                    <div class="card-body" style="padding: 0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Birthdate</th>
                                <th scope="col">Hobby</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($people as $index => $item)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $item->firstname }}</td>
                                    <td>{{ $item->lastname }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->sex }}</td>
                                    <td>{{ $item->birthdate }}</td>
                                    <td>{{ $item->hobby }}</td>
                                    <td style="display: flex">
                                        <a class="btn btn-primary" href="{{ route('person.edit', ['person' => $item->id]) }}" style="margin-right: 5px">Edit</a>
                                        <form method="post"
                                              action="{{ route('person.destroy', ['person' => $item->id]) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
