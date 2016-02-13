<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is the best Yu-Gi-Oh Calculator. It does all sorts of calculations for duels!">
    <meta name="author" content="Sean">

    <title>Yu-Gi-Oh Calculator</title>

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
                <h1>Welcome to Yu-Gi-Oh Calculator by Sean</h1>
                <p>I created this because we have too many duels with 3v3 or 2v2 and most calculators just don't do it good enough. You know what they say, want something done? Do it yourself.</p>
                <h1>Latest Duels:</h1>
                @foreach($game as $duel)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p> ID: {{$duel->id}}</p>
                                <p> Name: {{$duel->name}}</p>
                                <p> Date Created: {{$duel->created_at}}
                                <br />
                                <a href="{{URL::to('duel')}}/{{$duel->id}}" class="btn btn-primary"> Go to duel </a> 
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- /.container -->

    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}


</body>

</html>
