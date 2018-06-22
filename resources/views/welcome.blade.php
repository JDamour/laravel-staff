@extends('app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- accordion -->
        @include('partials.left-side')
        <!-- End accordion -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>

            <div class="container">
                <div class="row">
                    <div id="filter-panel" class="collapse filter-panel">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="filter-col" style="margin-right:0;" for="pref-perpage">Rows per page:</label>
                                        <select id="pref-perpage" class="form-control">
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option selected="selected" value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                        </select>
                                    </div> <!-- form group [rows] -->
                                    <div class="form-group">
                                        <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
                                        <input type="text" class="form-control input-sm" id="pref-search">
                                    </div><!-- form group [search] -->
                                    <div class="form-group">
                                        <label class="filter-col" style="margin-right:0;" for="pref-orderby">Order by:</label>
                                        <select id="pref-orderby" class="form-control">
                                            <option>Descendent</option>
                                        </select>
                                    </div> <!-- form group [order by] -->
                                    <div class="form-group">
                                        <div class="checkbox" style="margin-left:10px; margin-right:10px;">
                                            <label><input type="checkbox"> Remember parameters</label>
                                        </div>
                                        <button type="submit" class="btn btn-default filter-col">
                                            <span class="glyphicon glyphicon-record"></span> Save Settings
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="filter-panel1" class="collapse filter-panel">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="{{url('/search/columns')}}" class="form-inline" role="form" method="get">
                                    <div class="form-group">
                                        <label class="filter-col" style="margin-right:0;" for="pref-perpage">Man per page:</label>
                                        <select multiple="multiple" id="my-select" name="my-select[]">
                                           @foreach($columns as $column){

                                            <option value="{{$column->Field}}">{{$column->Field}}</option>
                                        @endforeach
                                        </select> <br/>
                                        <button type="submit" class="btn btn-primary filter-col">
                                            <span class="glyphicon glyphicon-record"></span>Search Now
                                        </button>
                                    </div> <!-- form group [rows] -->

                                </form>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="btn1" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
                        <span class="glyphicon glyphicon-cog"></span> Advanced Search
                    </button>
                    <button type="button" id="btn2" class="btn btn-success" data-toggle="collapse" data-target="#filter-panel1">
                        <span class="glyphicon glyphicon-cog"></span> Columns
                    </button>
                </div>
                <!-- <div class="row">


                </div> -->
            </div>

            <h2 class="sub-header">Section title</h2>
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