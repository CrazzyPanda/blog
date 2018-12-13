@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Doctor</div>

                <div class="card-body">

                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $doctor->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $doctor->address }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $doctor->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $doctor->user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Start Date</th>
                                    <td>{{ $doctor->startDate }}</td>
                                </tr>
                            </tbody>
                        </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
