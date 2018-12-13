@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Patient</div>

                <div class="card-body">

                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $patient->name }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $patient->address }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $patient->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $patient->email }}</td>
                                </tr>
                                <tr>
                                    <th>Insurance</th>
                                    <td>{{ $patient->insurance }}</td>
                                </tr>
                                <tr>
                                    <th>Insurance Company</th>
                                    <td>{{ $patient->insuranceCompany }}</td>
                                </tr>
                                <tr>
                                    <th>Policy Number</th>
                                    <td>{{ $patient->policyNumber }}</td>
                                </tr>
                            </tbody>
                        </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
