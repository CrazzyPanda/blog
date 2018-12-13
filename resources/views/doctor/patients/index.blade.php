@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Doctor - Patient Dashboard</div>

                <div class="card-body">
                    <table>
                        <thread>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Insurance</th>
                                <th>Insurance Company</th>
                                <th>Policy Number</th>
                            </tr>
                        </thread>
                        <tbody>

                            @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->insurance }}</td>
                                <td>{{ $patient->insuranceCompany }}</td>
                                <td>{{ $patient->policyNumber }}</td>
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
