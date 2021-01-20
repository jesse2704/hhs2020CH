<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta content="Portcount" name="copyright">
    <meta content="Portcount helpt Corona tegen te gaan en helpt de ondernemer zijn onderneming te beschermen" name="DESCRIPTION">
    <meta content="Portcount Corona Covid-19 Covid19" name="KEYWORDS">
    <title>Portcount</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/img/favicon.png')}}">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/css/navbar.css')}}" rel="stylesheet">
    <link href="{{url('/css/styles.css')}}" rel="stylesheet">
    <link href="{{url('/css/to-top.css')}}" rel="stylesheet"> <!-- Gem style -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/js/navbar.js')}}"></script>
    <script src="{{url('/js/code.js')}}"></script>
    <script src="{{url('/js/modernizr.js')}}"></script> <!-- Modernizr -->
    <script src="{{url('/js/main.js')}}"></script> <!-- Gem jQuery -->
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="menu">
    <nav class="navbar navbar-default navbar-fixed-top mb-0" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="#"><img src="{{url('/img/poortcount_logo.png')}}" alt="Portcount" class="img-responsive"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                      <li>
                          <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                      </li>
                    @else
                      <li>
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline btn btn-dark">Login</a>
                      </li>
                    @endauth
                </div>
            @endif
                   
                    <li class="hidden-xs"><a id="search-menu" class="btn"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</section>
<section id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="{{url('/img/wachtrij5.jpg')}}" alt="Crowded place" class="img-responsive">
            </div>
        </div>
    </div>
</section>
<section id="content">
    <article id="content-header" class="cont-pad">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="text-uppercase">Wat is Portcount?</h2>
                    <p>
                        De Portcount bestaat uit 4 onderdelen, de app, een scherm wat plaatsbaar is in de winkel, een module voor de verwerking van de gegeven en een sensormodule. 
                        Door gebruik te maken van sensoren, hopen wij zowel de bij ons aangesloten bedrijven als de klanten van deze bedrijven te voorzien van informatie over de actuele drukte. 
                        De klant kan hierop beslissen of hij geen klanten meer toelaat in de winkel of andere aanvullende maatregelen nodig zijn.
                        Ook kan de consument beslissen of hij naar de winkel toegaat of komt op een ander moment dat het wat rustiger is.<br><br>
                        <a href="#" class="ls-btn">Lees meer</a>
                    </p>
                </div>
            </div>
        </div>
    </article>
    <article id="news" class="cont-pad">
        <div class="container">
            <div class="row">
                <div class="news">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-top-mobile">
                        <div class="news-item text-center">
                            <a href="#"><span class="sub-color">Winkel 1</span></a><br>
                            <h3>Er zijn op dit moment</h3>
                            <p class="news-item-date">
                                @foreach ($totals as $total)
                                  {{$total}}
                                @endforeach
                            </p>
                            <h3>in de winkel</h3>
                            <p class="news-item-text">Het is op dit moment veilig om naar de winkel te gaan!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-top-mobile">
                        <div class="news-item text-center">
                            <a href="#"><span class="sub-color">Winkel 2</span></a><br>
                            <h3>Er zijn op dit moment</h3>
                            <p class="news-item-date">
                            @foreach ($totals as $total)
                                  {{$total}}
                                @endforeach
                            </p>
                            <h3>in de winkel</h3>
                            <p class="news-item-text">Het is op dit moment veilig om naar de winkel te gaan!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mg-top-mobile">
                        <div class="news-item text-center">
                            <a href="#"><span class="sub-color">Winkel 3</span></a><br>
                            <h3>Er zijn op dit moment</h3>
                            <p class="news-item-date">
                            @foreach ($totals as $total)
                                  {{$total}}
                                @endforeach
                            </p>
                            <h3>in de winkel</h3>
                            <p class="news-item-text">Let op! Het is wat aan de drukker dan normaal.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article >
    <article id="aanmelden" class="cont-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-top-mobile">
                    <h2 class="text-center">Help uw onderneming in deze lastige tijden<br>Kom met ons in contact voor een op maat gemaakte offerte</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-top-mobile">
                    <div class="register">
                        <h2>Aanmelden</h2>
                        <p>Als u geïnteresseerd bent in onze dienst, dan kunt u zich aanmelden of telefonisch contact opnemen ons.<br><br>
                        Zodra wij uw aanmelding ontvangen hebben, zullen wij samen met u een afspraak inplannen. Wilt u eerst meer informatie voor u met ons in contact komt
                        <a href="#">klik dan hier.</a>
                        </p>
                        <a class="btn btn-primary" href="#" role="button">Aanmelden</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-top-mobile">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9bhCOYEUvrw" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<footer>
    <article class="cont-pad">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 mg-top-mobile">
                    <h3>Onze vestigingen</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.707445176864!2d4.322461232696421!3d52.06685043457792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b6e175fe3619%3A0x9d1994a880751d7a!2sDe%20Haagse%20Hogeschool!5e0!3m2!1snl!2snl!4v1611164981140!5m2!1snl!2snl" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 mg-top-mobile">
                    <h3>Onze gegevens</h3>
                    <p>Kvk: 814520108</p>
                    <p>Telefoon: 070456362</p>
                    <p>Algemeen emailadres :<br>
                    info@portcount.nl</p>
                    <!-- <img src="images/certificaat.png" alt="certi"> -->
                </div>
            </div>
        </div>
    </article>
</footer>
<a href="#0" class="cd-top">Top</a>
</body>
</html>