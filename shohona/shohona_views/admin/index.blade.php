@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registered Users</h2>
    <form action="{{ route('admin.search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="unique_id" placeholder="Enter Unique ID" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Unique ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->unique_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection