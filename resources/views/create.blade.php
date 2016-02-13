<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Create a duel/match within yu gi oh calculator using this form.">
    <meta name="author" content="">

    <title>Yu-Gi-Oh Calculator - Create a duel</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/style.css')}}
    {{HTML::style('css/font-awesome.min.css')}}


</head>

<body>

   @include('templates.nav')


  <!-- section one -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                    <h1 class="text-primary">Create a Duel</h1>
                    <br />
                      <form class="form-horizontal" action="" method="post">
                          {!! csrf_field() !!}

                          <div class="form-group">
                              <label>Duel Name / Venue Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Give your duel a name. *OPTIONAL*" />
                          </div>

                          <div class="form-group">
                              <label>Password</label>
                              <br />
                              <small> This is purely so you can administrate the duel and give access to other people, do not put your actual password that you use in important services here </small>
                              <input type="password" name="password" class="form-control" />
                          </div>

                          <div class="form-group">
                              <label>Players</label>
                              <select name="players" class="form-control">
                                <option value="2">1V1</option>
                                <option value="4">2v2</option>
                                <option value="6">3v3</option>
                                <option value="8">4v4</option>
                                <option value="10">5v5</option>
                                <option value="12">6v6</option>
                                <option value="3">Three Way</option>
                                <option value="4">Four Way</option>
                                <option value="5">Five Way</option>
                                <option value="6">Six Way</option>
                              </select>
                          </div>

                          <div class="form-group">
                              <br />
                              <button type="submit" class="btn btn-lg btn-block" ><i class="fa fa-upload"> </i> Submit Duel!</button>
                          </div>
                          
                      </form>
                    </div>
                </div>
            </div>
    </section><!-- /section one -->

    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}


</body>

</html>
