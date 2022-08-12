@extends('layout.master')
@section('content')
    <div class="container">
        <h1 class="text-center">All Person Page</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persons as $person)
                    <tr>
                        <th scope="row">{{ $person->id }}</th>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->phone }}</td>
                        <td>{{ $person->birth_date }}</td>
                        <td><a href="/edit/{{ $person->id }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><i class="fa-solid fa-trash" data-toggle="modal"
                                data-target="#exampleModal{{ $person->id }}"></i></td>

                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="modal fade" id="exampleModal{{ $person->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure ??</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="text-center">To Delete <span>{{ $person->name }}</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class="btn btn-delete" href="/delete/{{ $person->id }}">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
