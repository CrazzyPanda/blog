@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin - Visit Dashboard</div>

                <div class="card-body">
                    <table>
                        <thread>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                            </tr>
                        </thread>
                        <tbody>

                            @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->user->name }}</td>
                                <td>{{ $doctor->address }}</td>
                                <td>{{ $doctor->phone }}</td>
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
