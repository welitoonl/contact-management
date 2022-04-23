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
                    <table class="table table-striped">
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
                                            <a class="btn text-light rounded-start-pill" title="Edit this contact" href="{{ route('contacts.show', $contact->id) }}"><i class="fa-solid fa-eye"></i></a>
                                            <a class="btn text-light rounded-0 btn-dark" title="Edit this contact" href="{{ route('contacts.edit', $contact->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" title="Delete this contact" class="btn btn-danger rounded-end-pill "><i class="fa-solid fa-trash"></i></button>
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
