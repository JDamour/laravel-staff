@extends('app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- accordion -->
        @include('partials.left-side')
        <!-- End accordion -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h2 class="sub-header">Result</h2>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th width="34px;">Photo</th>
                        <th>Names</th>
                        <th>School</th>
                        <th>Position</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($staffs as $staff)
                    <tr>
                        <td>{{$staff->id}}</td>
                        <td><img src="data:image/jpeg;base64, {{base64_encode($staff->photo)}}" width="50%" /></td>
                        <td>{{$staff->names}}</td>
                        <td>{{$staff->school}}</td>
                        <td>{{$staff->current_position}}</td>
                        <td>
                            <a href="{{url('/profile/'.$staff->id)}}" style="color: darkblue"  class="glyphicon glyphicon-list-alt"></a>
                        </td><td>
                        <a href="#"  style="color: darkgreen" class="glyphicon glyphicon-edit"></a>
                        </td>
                        <td>   <a href="#"  style="color: red" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                    </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection