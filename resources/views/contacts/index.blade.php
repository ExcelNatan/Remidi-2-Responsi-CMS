@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Contacts</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Contact</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th width="280px">Action</th>
                </tr>
                @php
                    $i = ($contacts->currentPage() - 1) * $contacts->perPage();
                @endphp
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('contacts.show', $contact->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $contacts->links() !!}
        </div>
    </div>
@endsection
