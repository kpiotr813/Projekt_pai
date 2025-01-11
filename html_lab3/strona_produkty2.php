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
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: darkgray;
    z-index: 9999;
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
        height:1000px;
    }
    #naglowek{
      display: flex;               
    justify-content: center;     
    align-items: center; 
    }
    #klucz{
      display: flex;               
    justify-content: center;     
    align-items: center; 
    }

    .glyphicon-wrench {
      font-size: 60px;
      margin-top: 0px;
      margin-right: 15px;
      margin-left:50px;
    }
    .glyphicon-globe {
      font-size: 60px;
      margin-top: 0px;
      margin-right: 15px;
      margin-left:50px;
    }

    .glyphicon-piggy-bank{
      font-size:60px;
      margin-top: 0px;
      margin-right: 15px;
      margin-left:50px;
    }

    .glyphicon-user {
      font-size:60px;
      
      margin-right: 15px;
      margin-left:50px;
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
  </style>
</head>
<body>

    <div class="jumbotron">
        <p>Auto-Mirex Handel i serwis samochodowy</p>
    </div>

    <nav class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#about">Strona główna</a></li>
              
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategorie<span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                    <?php foreach ($menu as $link => $kategoria): ?>
                        <li><a href="<?php echo $link; ?>"><?php echo $kategoria; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </li>
              
              <li><a href="#portfolio">Kontakt</a></li>
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
              <p>Oferujemy serwis i naprawy wszelkiego typu pojazdów</p>
              <p>Importujemy samochody na sprzedaż z całego świata</p>
              <p>Udzielamy gwarancji najlepszej ceny w porównaniu z konkurencją</p>
              <p>Dobro klienta jest dla nas najwyższą wartością</p>
            </div>
          </div>
        
        </div>
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
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
      </footer>



</body>
</html>