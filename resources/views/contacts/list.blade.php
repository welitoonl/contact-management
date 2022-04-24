@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h2 class="align-self-center"><i class="fa-solid fa-address-book"></i> Contact list</h2>
                    <a class="btn btn-lg align-self-center" href="{{ route('contacts.create') }}"><i class="fa-solid fa-circle-plus"></i> Create Contact</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->contact }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                            <div class="d-none d-md-none d-lg-block">
                                                <a class="btn text-light rounded-start-pill" title="Show this contact" href="{{ route('contacts.show', $contact->id) }}"><i class="fa-solid fa-eye"></i></a>
                                                <a class="btn text-light rounded-0 btn-dark" title="Edit this contact" href="{{ route('contacts.edit', $contact->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" title="Delete this contact" class="btn btn-danger rounded-end-pill "><i class="fa-solid fa-trash"></i></button>

                                            </div>
                                            <div class="dropdown d-lg-none">
                                                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-bars"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" title="Show this contact" href="{{ route('contacts.show', $contact->id) }}">Show</a></li>
                                                    <li><a class="dropdown-item" title="Edit this contact" href="{{ route('contacts.edit', $contact->id) }}">Edit</a></li>
                                                    <li><button type="submit" title="Delete this contact" class="dropdown-item">Delete</button></li>
                                                </ul>
                                            </div>
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
