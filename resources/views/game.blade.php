<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YuGiOh Calculator</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/style.css')}}


</head>

<body>

@include('templates.nav')

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome to {{$game->name}}</h1>
                    @foreach($players as $player)
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p><b> Name:</b> {{$player->name}} </p>    
                                    <p><b> Deck:</b> {{$player->deck}} </p>                                                                    
                                    <p><b> Lifepoints: </b> {{$player->lifepoints}} </p>
                                    @if($request->input('password') == $game->password)
                                        <form class="form-horizontal" action="{{URL::to('duel')}}/{{$game->id}}/modify/{{$player->id}}" method="post">
                                            {!! csrf_field() !!}

                                            <div class="form-group">
                                                <label>Change Lifepoints</label>
                                                <input type="integer" name="points" class="form-control" placeholder="1000" />
                                            </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Yami" />
                                            </div>
                                            <div class="form-group">
                                                <label>Add a Note</label>
                                                <input type="text" name="note" class="form-control" placeholder="Attacked with ..." />
                                            </div>
                                            <div class="form-group">
                                                <label>Deck</label>
                                                <input type="text" name="deck" class="form-control" placeholder="Cyber Dragon" />
                                            </div>
                                            <div class="form-group">
                                                <label>Add or Remove</label>
                                                <select name="lifeadd" class="form-control">
                                                  <option value="add">Add Points On</option>
                                                  <option value="remove">Take Points Away</option>
                                                  <option value="killplayer">Kill Player </option>
                                                  <option value="set">Set Points </option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <br />
                                                <button type="submit" class="btn btn-block " >Submit Changes!</button>
                                                <!-- Sean cannot figure out how to make this not disabled. I'm sorry muffin -->
                                            </div>
                                        </form>
                                    @endif
                                </div>
                        </div>
                        </div>
                        @endforeach
                </div>
            </div>

        <div class="row">
            <div class="col-lg-12">
                <h2> Battle Log </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Note</th>
                                <th>Lifepoints</th>
                                <th>Added/Removed/Killed </th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach($logs as $log)                            
                                <tr>
                                    <td>{{$log->name}}</td>
                                    <td>{{$log->note}}</td>
                                    <td>{{$log->lifepoints}}</td>
                                    <td>{{$log->lifeadd}}</td>
                                </tr>
                                @endforeach                                
                            </tbody>
                    </table>
            </div>
        </div>
             @if($request->has('password'))

                @else
                <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="{{URL::to('duel')}}/{{$game->id}}" method="get">

                    <div class="form-group">
                        <label>Password to Manage this duel</label>
                        <input type="text" name="password" class="form-control" />
                    </div>

                    <div class="form-group">
                        <br />
                        <button type="submit" class="btn btn-block " >Confirm</button>
                        <!-- Sean cannot figure out how to make this not disabled. I'm sorry muffin -->
                    </div>
                </form>
                </div>   
                </div>   
                @endif
        </div>

    </div>
    <!-- /.container -->

    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}


</body>

</html>
