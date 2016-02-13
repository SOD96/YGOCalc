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
    @include('templates.nav')
<div class="header-background">
</div>
<body>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <center>
                <h1>YGOCalc.xyz</h1>
                <h4>Yu-Gi-Oh Calculator is an advanced calculator and logger for yu-gi-oh duels supporting as many players as the community suggests. Look below for some duels and see how people have dueled. </h4>
            </center>
                <h1>Latest Duels:</h1>
                @foreach($game as $duel)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p> <b>Name:</b> {{$duel->name}}</p>
                                <p> <b>Date Created:</b> {{$duel->created_at}}
                                <p> <b>Players:</b> {{$duel->players}} </p>
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

    @include('templates.scripts')


</body>

</html>
