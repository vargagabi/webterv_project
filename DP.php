<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kassai Zsolt, Varga Gábor" />
    <meta name="description" content="Death Parade oldala" />
    <meta name="keywords" content="anime Death Parade" />
    <title>Death Parade</title>
    <link rel="icon" href="img/02Naruto.jpg" />
    <link rel="stylesheet" href="style.css"/>
</head>

<body id="deathparadebody">

<header id = "deathparadefejlec">
    <?php
    include "fejlec.html"
    ?>
</header>

 <?php include_once "belepes.php"?>



<main>
    <div class="deathparadediv">
            <div id="deathparadecim">Death Parade</div>
                <div class ="szoveg">
                    <h2>Röviden a történetről</h2>
                    <hr>
                    <p>
                        Az emberek a haláluk után pokolra jutnak vagy a mannybe. Viszont vannak olyanok,
                        akik a haláluk pillanatában egy <i>Quindecim</i> nevezetű bárba kerülnek. Itt a bár csaposa,
                        <b>Decim</b>
                        kihívja őket egy Halálos Játékra, amiben a tét az életük. Ebben a játékban Decim felfedi a 
                        résztvevők valódi természetét. A játék végeztével, Decim, mint a bíró eldönti ki fog újászületni és 
                        ki fog megszűnni létezni.
                    </p>

                    <h2>Opening</h2>
                    <hr/>
                    <video controls id="deathparadevideo">
                        <source src="video/deathparade/deathparadeopening.mp4" type="video/mp4">
                    </video>
                </div>
    </div>
    <div class="deathparadediv">
        <h2>Egy zene az animéből: Death's regret</h2>
        <audio controls  >
            <source src="video/deathparade/deathsregret.mp3" type="audio/mpeg">
        </audio>
    </div>

    
   <div class="deathparadediv">
        <table id="deathparadetablazat">
            <caption>Karakterek</caption>
            <tr>
                <th id="dparadenev">Név</th> <th id="dparadenem">Nem</th> <th id="dparademegj">Első megjelenés</th> <th id="dparadefoglalkozas">Foglalkozás</th> <th id="dparadeprofil">Kép</th> 
            </tr>
            <tr>
                <td headers="dparadenev">Decim</td>
                <td headers="dparadenem">Férfi</td>
                <td headers="dparademegj">1. epizód</td>
                <td headers="dparadefoglalkozas">Döntőbíró/Csapos</td>
                <td headers="dparadeprofil"><img class="dpprofil" src="img/deathparade/Decimhead.jpg" alt="decim"></td>
            </tr>

            <tr>
                <td headers="dparadenev">Clavis</td>
                <td headers="dparadenem">Férfi</td>
                <td headers="dparademegj">2. epizód</td>
                <td headers="dparadefoglalkozas">Liftkezelő</td>
                <td headers="dparadeprofil"><img class="dpprofil" src="img/deathparade/Clavishead.jpg" alt="decim"></td>
            </tr>

            <tr>
                <td headers="dparadenev">Oculus</td>
                <td headers="dparadenem">Férfi</td>
                <td headers="dparademegj">5. epizód</td>
                <td headers="dparadefoglalkozas">Főnök</td>
                <td headers="dparadeprofil"><img class="dpprofil" src="img/deathparade/Ocolushead.jpg" alt="decim"></td>
            </tr>

            <tr>
                <td headers="dparadenev">Ginti</td>
                <td headers="dparadenem">Férfi</td>
                <td headers="dparademegj">5. epizód</td>
                <td headers="dparadefoglalkozas">Döntőbíró</td>
                <td headers="dparadeprofil"><img class="dpprofil" src="img/deathparade/Gintihead.jpg" alt="decim"></td>
            </tr>

            <tr>
                <td headers="dparadenev">Chiyuki</td>
                <td headers="dparadenem">Nő</td>
                <td headers="dparademegj">1. epizód</td>
                <td headers="dparadefoglalkozas">Asszisztens/Segítő</td>
                <td headers="dparadeprofil"><img class="dpprofil" src="img/deathparade/Chiyukihead.jpg" alt="decim"></td>
            </tr>
            <tr>
                <td headers="dparadenev">Nona</td>
                <td headers="dparadenem">Nő</td>
                <td headers="dparademegj">2. epizód</td>
                <td headers="dparadefoglalkozas">Menedzser/Döntőbíró</td>
                <td headers="dparadeprofil"><img class="dpprofil" src="img/deathparade/Nonahead.jpg" alt="decim"></td>
            </tr>
        </table>

   </div>
       
           
        
        

</main>

<img id="skull" src="img/deathparade/deathparadegif.gif" alt="skullspinning"/>

<footer id="deathparadelablec">
    <p>
        A honlap tervezői: Varga Gábor és Kassai Zsolt. A Szegedi Tudományegyetem hallgatói (még).
        2021
    </p>
</footer>

</body>
</html>