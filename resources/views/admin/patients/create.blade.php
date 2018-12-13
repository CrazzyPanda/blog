@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Patient</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.patients.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>
                                        <input type="text" name="name" value="{{ old('name') }}" />
                                        @if ($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>
                                        <input type="text" name="address" value="{{ old('address') }}" />
                                        @if ($errors->has('address'))
                                        <div class="error">{{ $errors->first('address') }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>
                                        <input type="text" name="phone" value="{{ old('phone') }}" />
                                        @if ($errors->has('phone'))
                                        <div class="error">{{ $errors->first('phone') }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>
                                        <input type="text" name="email" value="{{ old('email') }}" />
                                        @if ($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Insurance</th>
                                    <td>
                                         <input type="checkbox" name="insurance" value="1" {{ (old('insurance') == "1") ? "checked" : "" }} />
                                         <!-- if the user gets an error, the check box stays checked if they checked it. It asks if it's checked and if it is, it keeps it checked -->
                                    </td>
                                </tr>
                                <tr>
                                    <th>Insurance Company</th>
                                    <td>
                                        <input type="text" name="insuranceCompany" value="{{ old('insuranceCompany') }}" />
                                        @if ($errors->has('insuranceCompany'))
                                        <div class="error">{{ $errors->first('insuranceCompany') }}</div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Policy Number</th>
                                    <td>
                                        <input type="text" name="policyNumber" value="{{ old('policyNumber') }}" />
                                        @if ($errors->has('policyNumber'))
                                        <div class="error">{{ $errors->first('policyNumber') }}</div>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" value="Store"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
