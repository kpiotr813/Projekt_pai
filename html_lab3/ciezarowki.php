<?php

?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Samochody terenowe</title>
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
        height:90%;
        width:92%;
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
    <p>Samochody terenowe</p>
</div>

<div id="Magnum" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="patrol.jpg" data-lightbox="gallery3" data-title="Nissan Patrol">
        <img src="patrol.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Nissan Patrol</p>
            <p>Silnik: 3.0</p>
            <p>Rok produkcji: 2001</p>
            <p>Przebieg: 180 000km</p>
            <p>Spalanie: 12l/100km</p>
            <p>Napęd: 4x4</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Lębork</p>
            <p>Woj. pomorskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Janusz Nowak</p>
            <p>Tel. +48 123456789</p>
            <p>jan.now@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 70000 zł</p>
        </div>
    </div>
</div>

<hr>

<div id="jimny" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="jimny.jpg" data-lightbox="gallery2" data-title="Suzuki Jimny">
    <img src="jimny.jpg" >
    </a>
    </div>
    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Suzuki Jimny</p>
            <p>Silnik: 1.3</p>
            <p>Rok produkcji: 1998</p>
            <p>Przebieg: 300 000km</p>
            <p>Spalanie: 8l/100km</p>
            <p>Napęd: 4x4</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
             
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Leszno</p>
            <p>Woj. wielkopolskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Tadeusz Bystrzycki</p>
            <p>Tel. +48 123456782</p>
            <p>t.bystry1978@mail.com</p>
        </div>
    </div>
    <div id="prawo" class="container">
    <div id="cena" class="container">
            <p> 25000 zł</p>
        </div>
  </div>
</div>

<hr>

<div id="frontera" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="frontera.jpg" data-lightbox="gallery" data-title="Opel Frontera">
        <img src="frontera.jpg" >
        </a>
    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Opel Frontera</p>
            <p>Silnik: 3.2</p>
            <p>Rok produkcji: 1999</p>
            <p>Przebieg: 300 000km</p>
            <p>Spalanie: 10l/100km</p>
            <p>Napęd: 4x4</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Krosno</p>
            <p>Woj. podkarapckie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Mariusz Starzewski</p>
            <p>Tel. +48 223456781</p>
            <p>mariusz123@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 20000 zł</p>
        </div>
    </div>
</div>
<hr>

<div id="subaru" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="subaru.jpg" data-lightbox="gallery4" data-title="Subaru Forester">
        <img src="subaru.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Subaru Forester</p>
            <p>Silnik: 3.0</p>
            <p>Rok produkcji: 1998</p>
            <p>Przebieg: 130 000km</p>
            <p>Spalanie: 11l/100km</p>
            <p>Napęd: 4x4</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Kłodzko</p>
            <p>Woj. dolnośląskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p> Tadeusz Nowicki</p>
            <p>Tel. +48 123456788</p>
            <p>tad.nw@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 30000 zł</p>
        </div>
    </div>
</div>
<hr>

<div id="toyota" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="toyota.jpg" data-lightbox="gallery5" data-title="Toyota Land Cruiser">
        <img src="toyota.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Toyota Land Cruiser</p>
            <p>Silnik: 3.2</p>
            <p>Rok produkcji: 1995</p>
            <p>Przebieg: 200 000km</p>
            <p>Spalanie: 14l/100km</p>
            <p>Napęd: 4x4</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Bielsko-Biała</p>
            <p>Woj. śląskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Grzegorz Byk</p>
            <p>Tel. +48 123456783</p>
            <p>byk.greg@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 35000 zł</p>
        </div>
    </div>
</div>

</body>
</html>