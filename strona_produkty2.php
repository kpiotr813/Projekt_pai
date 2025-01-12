<?php
$menu = array('samochody.php'=>'Samochody osobowe', 
'ciezarowki.php'=>'Samochody terenowe',
'ciezarowy.php'=>'Samochody ciężarowe'
);

?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Strona z produktami</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box; /* Wszystkie elementy uwzględniają padding i border w wysokości */
}
    .navbar {
       /* Dla wsparcia przeglądarek WebKit */
    position: sticky;         /* Właściwość w CSS */
    top: 0;                   /* Przyklejenie do górnej krawędzi */
    z-index: 1000; 
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: darkgray;
    
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    margin-top: 0px;
    }

    .navbar .dropdown-menu {
    display: none; /* Początkowo ukryte */
    position: absolute; /* Zapewnia, że menu pojawi się w odpowiednim miejscu */
    background-color: grey;
    border-radius: 0;
    box-shadow: none;
    }
    .navbar .dropdown:hover .dropdown-menu {
    display: block; /* Menu jest widoczne tylko po najechaniu */
    }
    
    

    .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    }

    .navbar-nav li a:hover, .navbar-nav li.active a {
    color: darkgrey !important;
    background-color: #fff !important;
    }
    .jumbotron {
    display: flex;               
    justify-content: center;     
    align-items: center; 
    background-color: grey; 
    height: 20px;
    color: white; 
    box-sizing: border-box;
    margin-top: 0px; 
    margin-bottom:0px;
    box-sizing: border-box;
    font-family: Montserrat, sans-serif;
    }
    .jumbotron p {
        font-size: 30px; 
        font-family: Montserrat, sans-serif;
    }
    #zawartosc{
        height:900px;
    }
    #naglowek{
      display: flex;               
    justify-content: center;     
    align-items: center; 
    margin-bottom: 40px;
    }
    #klucz{
      display: flex;               
    justify-content: center;     
    align-items: center; 
    }

    .glyphicon-wrench {
      font-size: 60px;
      margin-top: 0px;
      
      margin-left:250px;
    }
    .glyphicon-globe {
      font-size: 60px;
      margin-top: 0px;
      
      margin-left:250px;
    }

    .glyphicon-piggy-bank{
      font-size:60px;
      margin-top: 0px;
      
      margin-left:250px;
    }

    .glyphicon-user {
      font-size:60px;
      
      
      margin-left:250px;
    }
    
    #swiat {
      display:flex;
      justify-content: center;
      align-items: center;
    }
    #swinka {
      display:flex;
      justify-content: center;
      align-items: center;
    }
    #czlowiek{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #zawartosc p{
      font-size: 24px;
      font-family: Montserrat, sans-serif;
    }
    #ikonki{
      width:80%;

    }
    .col-md-3{
      height: 380px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      
    }
    .col-md-9{
      height: 380px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    #karuzela{
      width: 1000px;
      margin: 0 auto;
      margin-bottom: 100px;
      
    }
    .panel-group{
      width: 40%;
      margin: 0 auto;
      margin-top: 100px;
    } 
    #gora{
      color:grey;
    }
    #przycisk {
      background-color: grey;
    }
    
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <div id="start" class="jumbotron">
        <p>Auto-Mirex Handel i serwis samochodowy</p>
    </div>



    <nav class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#myPage">Strona główna</a></li>
              
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategorie<span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                    <?php foreach ($menu as $link => $kategoria): ?>
                        <li><a href="<?php echo $link; ?>"><?php echo $kategoria; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </li>
              
              
              <li><a href="#accordion">FAQ</a></li>
              <li><a href="#karuzela">Opinie</a></li>
              <li><a href="#contact">Kontakt</a></li>
            </ul>
          </div>
        </div>
      </nav> 

      <div id="zawartosc" class="container-fluid">
        
        <div id="naglowek" class="container">
          <h1>Co oferujemy?</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
              <span class="glyphicon glyphicon-wrench"></span><br>
              <span class="glyphicon glyphicon-globe"></span><br>
              <span class="glyphicon glyphicon-piggy-bank"></span><br>
              <span class="glyphicon glyphicon-user"></span>
            </div>
            <div class="col-md-9">
              <p>Oferujemy serwis i naprawy wszelkiego typu pojazdów.</p>
              <p>Importujemy samochody na sprzedaż z całego świata.</p>
              <p>Udzielamy gwarancji najlepszej ceny w porównaniu z konkurencją.</p>
              <p>Dobro klienta jest dla nas najwyższą wartością.</p>
            </div>
          </div>
        
          <div class="panel-group" id="accordion">
        <!-- Panel 1 -->
        <div class="panel panel-default">
        <div class="panel-heading" id="heading1">
          <h4 class="panel-title">
          <button id="przycisk" class="btn btn-primary" data-toggle="collapse" data-target="#pierwszy" data-parent="#accordion">
          <span id="dol" class="glyphicon glyphicon-chevron-down"></span>
          </button>
            <a data-toggle="collapse" href="#pierwszy">Kim jesteśmy?</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" id="pierwszy">
          <div class="panel-body">Jesteśmy rodzinną firmą zajmującą się serwisem i handlem autami. Zarówno szef, jak i wszyscy pracownicy są pasjonatami w dziedzinie motoryzacji, więc nasza praca jest jednocześnie naszą pasja i sprawia nam dużo frajdy.</div>
        </div>
        </div>

        <!-- Panel 2 -->
        <div class="panel panel-default">
        <div class="panel-heading" id="heading2">
          <h4 class="panel-title">
          <button id="przycisk" class="btn btn-primary" data-toggle="collapse" data-target="#drugi" data-parent="#accordion">
          <span class="glyphicon glyphicon-chevron-down"></span>            
          </button>
            <a data-toggle="collapse" href="#drugi">Dlaczego powinieneś wybrać właśnie nas?</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" id="drugi">
          <div class="panel-body">Dlatego że dysponujemy wykwalifikowaną kadrą posiadającą wieloletnie doświadczenie w branży. Ponadto cechuje nas indywidualne podejście do każdego klienta niezależnie od tego z jakim problememe, czy wyzwaniem do nas przybył. Staramy się realizować wszystkie zlecenia terminowo z dbałością o detale.</div>
        </div>
        </div>

        <!-- Panel 3 -->
        <div class="panel panel-default">
        <div class="panel-heading" id="heading3">
          <h4 class="panel-title">
          <button id="przycisk" class="btn btn-primary" data-toggle="collapse" data-target="#trzeci" data-parent="#accordion">
          <span class="glyphicon glyphicon-chevron-down"></span>
          </button>
            <a data-toggle="collapse" href="#trzeci">Jak się z nami skontaktować?</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" id="trzeci">
          <div class="panel-body">
            Możesz się z nami skontaktować telefonicznie, mailowo lub przyjeżdżając do siedziby firmy. Jesteśmy elastyczni na propozycje ze strony klientów. Dane kontaktowe znajdują się na dole witryny internetowej.
          </div>
        </div>
        </div>
      </div>
      

      
      



      </div>
      
      <h1 class="text-center">Co mówią nasi klienci?</h1>
        <div id="karuzela" class="carousel slide text-center" data-ride="carousel">
          
          <div class="carousel-inner" role="listbox">
            <div class="item active">
            <h4>"Jestem bardzo zadowolony z usług firmy p. Mirosława"<br><span>Jan Wiśniewski, klient</span></h4>
            </div>

            <div class="item">
            <h4>"Panowie są bardzo pomocni i fachowi"<br><span>Maria Nowak, klientka</span></h4>
            </div>

            <div class="item">
            <h4>"Firma p. Mirosława powala na kolana konkurencję"<br><span>Piotr Kowalski, klient</span></h4>
            </div>
          </div>
          <a class="left carousel-control" href="#karuzela" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#karuzela" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>
      
      
      
      
 
      
    
      
        
      




      <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">Kontakt</h2>
        <div class="row">
          <div class="col-sm-5">
            <p>Skontaktuj się z nami, a oddzwonimy w ciągu 24 godzin.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Nowa Wieś</p>
            <p><span class="glyphicon glyphicon-phone"></span> +123456789</p>
            <p><span class="glyphicon glyphicon-envelope"></span> nowy_mail@gmail.com</p>
          </div>
          <div class="col-sm-7">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Nazwisko" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Komentarz" rows="5"></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right" type="submit">Wyślij</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
          <span id="gora" class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Stronę wykonał P. Koska</p>
      </footer>

<script>
  // Funkcja do zmiany ikon po kliknięciu
  $('#accordion').on('show.bs.collapse', function (e) {
    var target = $(e.target);
    var button = target.prev('.panel-heading').find('.btn');
    button.find('span').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
  });

  $('#accordion').on('hide.bs.collapse', function (e) {
    var target = $(e.target);
    var button = target.prev('.panel-heading').find('.btn');
    button.find('span').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
  });


$(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
       // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
    
        // Prevent default anchor click behavior
        event.preventDefault();
    
        // Store hash
        var hash = this.hash;
    
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
    
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
          });
        } // End if
      });
});
</script>
</body>
</html>