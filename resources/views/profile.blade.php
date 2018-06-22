@extends('app')
@section('content')
    <style>
        .user-row {
            margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad
        {margin-top:20px;
        }

    </style>
<div class="container-fluid">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$profile->names}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img alt="User Pic" src="data:image/jpeg;base64, {{base64_encode($profile->photo)}}" class="img-circle img-responsive"> </div>

                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                            <td>Work Status:</td>
                                        <td>{{$profile->work_status}}</td>
                                    </tr>
                                   <tr>
                                        <td>School:</td>
                                        <td>{{$profile->school}}</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td>{{$profile->current_position}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>{{$profile->year_of_birth}}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>Civil Status</td>
                                        <td>{{$profile->civil_status}}</td>
                                    </tr>
                                    <tr>
                                        <td>Home Address</td>
                                        <td>{{$profile->names}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="{{$profile->email}}">{{$profile->email}}</a></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td>{{$profile->phone}}<br>
                                    </td>

                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection