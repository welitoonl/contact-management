@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact: {{ $contact->name }}</div>

                <div class="card-body">

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <span class="form-control form-static">{{ $contact->name }}</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                        <div class="col-md-6">
                            <span class="form-control form-static">{{ $contact->contact }}</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <span class="form-control form-static">{{ $contact->email }}</span>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            <button type="button" class="btn text-light rounded-pill btn-dark mx-2" title="Edit this contact" onclick="location.href='{{ route('contacts.edit', $contact->id) }}';">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Delete this contact" class="btn btn-danger rounded-pill ">Delete</button>

                            <button type="button" class="btn btn-danger rounded-pill" onclick="location.href='{{ url('/') }}';">
                                Back
                            </button>
                        </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
