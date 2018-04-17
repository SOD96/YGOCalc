<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="About Yu Gi Oh Calculator">
    <meta name="author" content="">

    <title>Yu-Gi-Oh Calculator About Us</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/style.css')}}
    {{HTML::style('css/font-awesome.min.css')}}


</head>

<body>

    @include('templates.nav')


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>About Us</h1>
                <p> Hey there! Welcome to Yu-Gi-Oh Calculator. I created this site because other ones don't do the job well enough and I have way too much spare time. </p>
                <p> Want to suggest something? Send me a message using the below social media. </p>

                <p> <a href="https://twitter.com/KaibaSean"> <i class="fa fa-twitter"> </i> My Twitter </a> </p>
                <p> <a href="https://seanodonnell.co.uk"> <i class="fa fa-twitter"> </i> My Blog </a> </p>
                <p> <a href="mailto:contact@seanodonnell.co.uk">  <i class="fa fa-envelope"> </i> My Email </a> </p>
                <p> <b> This site is not related to Konami in any way. </b> This is purely used to keep track of scores in duels. </p>
            </div>

            <div class="col-lg-6 col-lg-offset-3">
            <center>
                <p> Also before I forget, I do accept donations to keep my barrage of free sites online for everyone to use. If you want to donate then feel free. All donations go towards keeping these servers online. I am a student so I keep them online with prayers and tinned spaghetti. (Sometimes the hoster doesn't like that of course, but I make it work.) </p>

                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_donations">
                    <input type="hidden" name="business" value="xengaming@outlook.com">
                    <input type="hidden" name="lc" value="GB">
                    <input type="hidden" name="item_name" value="Sean's Web Stuff">
                    <input type="hidden" name="no_note" value="0">
                    <input type="hidden" name="currency_code" value="GBP">
                    <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                    <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                </form>
            </center>
        </div>
    </div>
    <!-- /.container -->

    @include('templates.scripts')



</body>

</html>
