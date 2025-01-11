<?php

?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Samochody ciężarowe</title>
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

<div id="kraz" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="kraz.jpg" data-lightbox="gallery3" data-title="Kraz 255">
        <img src="kraz.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Kraz 255</p>
            <p>Silnik: 14.86</p>
            <p>Rok produkcji: 1970</p>
            <p>Przebieg: 980 000km</p>
            <p>Spalanie: 80l/100km</p>
            <p>Napęd: 6x6</p>
            <p>Skrzynia biegów: manualna 4-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Chojnice</p>
            <p>Woj. pomorskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Janusz Burak</p>
            <p>Tel. +48 123456789</p>
            <p>jan.bur@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 80000 zł</p>
        </div>
    </div>
</div>

<hr>

<div id="kamaz" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="kamaz.jpg" data-lightbox="gallery2" data-title="Kamaz">
    <img src="kamaz.jpg" >
    </a>
    </div>
    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Kamaz</p>
            <p>Silnik: 10,85</p>
            <p>Rok produkcji: 1983</p>
            <p>Przebieg: 710 000km</p>
            <p>Spalanie: 40l/100km</p>
            <p>Napęd: 6x4</p>
            <p>Skrzynia biegów: manualna 5-biegowa</p>
             
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Środa Wlkp.</p>
            <p>Woj. wielkopolskie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Tadeusz Wiśniak</p>
            <p>Tel. +48 123456782</p>
            <p>t.wis@mail.com</p>
        </div>
    </div>
    <div id="prawo" class="container">
    <div id="cena" class="container">
            <p> 60000 zł</p>
        </div>
  </div>
</div>

<hr>

<div id="gaz" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="gaz.jpg" data-lightbox="gallery" data-title="GAZ-52">
        <img src="gaz.jpg" >
        </a>
    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: GAZ-52</p>
            <p>Silnik: 4.0</p>
            <p>Rok produkcji: 1980</p>
            <p>Przebieg: 915 000km</p>
            <p>Spalanie: 22l/100km</p>
            <p>Napęd: tylny</p>
            <p>Skrzynia biegów: manualna 4-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Wołomin</p>
            <p>Woj. mazowieckie</p>
        </div>
        <div id="kontakt_do" class="container">
            <h1>Kontakt:</h1>
            <p>Mariusz Pupiak</p>
            <p>Tel. +48 223456781</p>
            <p>mariusz.p@mail.com</p>
        </div>
    </div>

    <div id="prawo" class="container">
        <div id="cena" class="container">
            <p> 35000 zł</p>
        </div>
    </div>
</div>
<hr>

<div id="star" class="container-fluid">
    <div id="zdjecie" class="container">
    <a href="star.jpg" data-lightbox="gallery4" data-title="Star 266">
        <img src="star.jpg" >
    </a>

    </div>

    <div id="srodek" class="container">
        <div id="dane_tech" class="container">
            <h1>Dane techniczne:</h1>
            <p>Model: Star 200</p>
            <p>Silnik: 6.0</p>
            <p>Rok produkcji: 1985</p>
            <p>Przebieg: 769 000km</p>
            <p>Spalanie: 25l/100km</p>
            <p>Napęd: tylny</p>
            <p>Skrzynia biegów: manualna 4-biegowa</p>
        </div>
        <div id="lokalizacja" class="container">
            <h1>Lokalizacja:</h1>
            <p>Starachowice</p>
            <p>Woj. świętokrzyskie</p>
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




    

</body>
</html>