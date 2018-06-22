<div class="col-sm-3 col-md-2 sidebar">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div>
                    <a href="#">Gender</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        @foreach($sideGenders as $sideGender)
                        <tr>
                            <td>
                                <a href="{{url('/search/gender/'.$sideGender->gender)}}">{{$sideGender->gender}}</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div>
                    <a href="#">Civil Status</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        @foreach($sideCivilS as $sideCivil)
                            <tr>
                                <td>
                                    <a href="{{url('/search/civil_status/'.$sideCivil->civil_status)}}">{{$sideCivil->civil_status}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                    <div class="right-arrow pull-right">+</div>
                    <a href="#">POSITION</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        @foreach($sidePOSITIONS as $sidePOSITION)
                            <tr>
                                <td>
                                    <a href="{{url('/search/current_position/'.$sidePOSITION->current_position)}}">{{$sidePOSITION->current_position}}</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>