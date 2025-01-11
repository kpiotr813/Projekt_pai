<?php

?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Samochody</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

  <style>
    .jumbotron {
        height: 100 px;
        background-color: white;
        display: flex; /* Ustawienie kontenera na Flexbox */
      justify-content: center; /* Centrowanie poziome */
      align-items: center;
    }
    .jumbotron p {
        font-size:60px;
        font-family: Montserrat, sans-serif;
    }
    .container-fluid{
        height: 200px;
        
        margin-bottom: 20px;
        display: flex;
    }
    #zdjecie {
        height: 180px;
        width: 300px;
        margin-left: 10px; 
        margin-top: 10px;  
        margin-bottom: 10px;
        background-color: white;
        overflow: hidden;
    }
    #zdjecie img {
      width: 100%;  /* Ustawienie szerokości zdjęcia na 100% szerokości kontenera */
      height: auto; /* Wysokość dostosowuje się do proporcji */
      object-fit: contain; /* Upewnia się, że zdjęcie zmienia swoje wymiary, ale nie wychodzi poza kontener */
    }
    #srodek {
        height:180px;
        width:600px;
        margin-left: 10px; 
        margin-top: 10px;  
        margin-bottom: 10px;
        background-color: grey;
        display: flex; /* Ustawienie kontenera na Flexbox */
        justify-content: center; /* Centrowanie poziome */
      align-items: center;
    }
    #prawo{
        height:180px;
        width:300px;
        margin-left: 10px; 
        margin-top: 10px;  
        margin-bottom: 10px;
        background-color: grey;
        display: flex; /* Ustawienie kontenera na Flexbox */
      justify-content: center; /* Centrowanie poziome */
      align-items: center;
    }
    #cena{
        height:85%;
        width:85%;
        background-color:white;
        display: flex; /* Ustawienie kontenera na Flexbox */
      justify-content: center; /* Centrowanie poziome */
      align-items: center;
    }
    #cena p{
        font-size: 50px;
        font-family: Montserrat, sans-serif;
    }
    #dane_tech{
        height:160px;
        width:180px;
        background-color: white;
        padding: 0; /* Usuwamy domyślne wcięcia wewnętrzne kontenera */
    margin: 0;
    padding: 5px;
    overflow: hidden;
    overflow-y: auto;
    font-family: Montserrat, sans-serif;
    }
    #dane_tech p {
        line-height: 1;
        font-family: Montserrat, sans-serif;
    }
    #lokalizacja p {
        line-height: 1.2;
        font-family: Montserrat, sans-serif;
    }
    #lokalizacja{
        height:160px;
        width:180px;
        background-color: white;
        font-family: Montserrat, sans-serif;
    }
    #kontakt_do{
        height:160px;
        width:180px;
        background-color: white;
        font-family: Montserrat, sans-serif;
    }
    h1 {
        font-size: 16px;
        font-weight: bold;
        margin-top: 0px;
    }
    
   hr {
    border-color: grey;
    width: 90%;
    margin-left: 5%;
    margin-right: 5%;
   } 
   
   
   

  </style>
</head>
<body>
<div class="jumbotron">
    <p>Samochody na sprzedaż</p>
</div>

<div id="Opel_vectra" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="opel.jpg" data-lightbox="gallery3" data-title="Opel">
        <img src="opel.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Opel Vectra</p>
            <p>Silnik: 1.8</p>
            <p>Rok produkcji: 2004</p>
            <p>Przebieg: 180 000km</p>
            <p>Spalanie: 7l/100km</p>
            <p>Napęd: przedni</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Wejherowo</p>
            <p>Woj. pomorskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p> Mirosław Kowalski</p>
            <p>Tel. +48 123456789</p>
            <p>mir.kowal@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 8000 zł</p>
        </div>
    </div>
</div>

<hr>

<div id="gruz" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="bmw.jpg" data-lightbox="gallery2" data-title="BMW">
    <img src="bmw.jpg" >
    </a>
    </div>
    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: BMW E36</p>
            <p>Silnik: 1.6</p>
            <p>Rok produkcji: 1998</p>
            <p>Przebieg: 300 000km</p>
            <p>Spalanie: 8l/100km</p>
            <p>Napęd: tylny</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
             
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Lubartów</p>
            <p>Woj. lubelskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Patryk Wiśniewski</p>
            <p>Tel. +48 123456782</p>
            <p>wisnia1998@mail.com</p>
        </div>
    </div>
    <div id="prawo" class="container">
    <div id="cena" class="container">
            <p> 5000 zł</p>
        </div>
  </div>
</div>

<hr>

<div id="baleron" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="baleron.jpg" data-lightbox="gallery" data-title="Baleron">
        <img src="baleron.jpg" >
        </a>
    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Mercedes W124 Baleron</p>
            <p>Silnik: 2.0</p>
            <p>Rok produkcji: 1992</p>
            <p>Przebieg: 500 000km</p>
            <p>Spalanie: 9l/100km</p>
            <p>Napęd: tylny</p>
            <p>Skrzynia biegów: manualna 4-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Sejny</p>
            <p>Woj. podlaskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Władysław Nowak</p>
            <p>Tel. +48 123456781</p>
            <p>wlad.now@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 7000 zł</p>
        </div>
    </div>
</div>
<hr>

<div id="golf" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="golf.jpg" data-lightbox="gallery4" data-title="VW Golf">
        <img src="golf.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: VW Golf</p>
            <p>Silnik: 1.6</p>
            <p>Rok produkcji: 1988</p>
            <p>Przebieg: 1300 000km</p>
            <p>Spalanie: 7l/100km</p>
            <p>Napęd: przedni</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Legnica</p>
            <p>Woj. dolnośląskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p> Tadeusz Nowacki</p>
            <p>Tel. +48 123456788</p>
            <p>tad.now@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 2500 zł</p>
        </div>
    </div>
</div>
<hr>

<div id="volvo" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="volvo.jpg" data-lightbox="gallery5" data-title="Volvo">
        <img src="volvo.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Volvo 940</p>
            <p>Silnik: 2.0</p>
            <p>Rok produkcji: 1992</p>
            <p>Przebieg: 600 000km</p>
            <p>Spalanie: 12l/100km</p>
            <p>Napęd: przedni</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Braniewo</p>
            <p>Woj. warmińsko-mazurskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Grzegorz Brzęczyszczykiewicz</p>
            <p>Tel. +48 123456783</p>
            <p>brzecz.greg@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 15000 zł</p>
        </div>
    </div>
</div>

</body>
</html>