<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kassai Zsolt, Varga Gábor" />
    <meta name="description" content="KonoSuba oldala" />
    <meta name="keywords" content="anime konosuba" />
    <title>KonoSuba</title>
    <link rel="icon" href="img/02Naruto.jpg" />
    <link rel="stylesheet" href="style.css"/>
</head>

<body id="konosubabody">

<header id = "konosubafejlec">
    <?php
    include_once "fejlec.html"
    ?>
</header>

 <?php include_once "belepes.php"?>
>
<main>
    <div id="konosubadiv">
            <div id="konosubacim">Konosuba</div>

            <div class="szoveg">
                <h2>A konosuba-ról röviden</h2>
                <hr>
                <img class="konosubakepek" src="img/konosuba/varos.png" alt="axel">
                <p class="szoveg bevezeto"> A <cite>Kono Subarashii Sekai ni Shukufuku wo!</cite> röviden KonoSuba egy japán Light Novel
                    Natsume Akatsuki-tól, amit a Studie Deen adaptált animévé 2016 január 14-én. 
                    Eddig 2 évada jelent csak meg, de ezek mellet készültek még OVA-k és Moviek is 
                    róla. Műfaját tekintve ez az anime egy humoros fantasy. Alapvetően a főhős megpróbál egy 
                    általa ismeretlen mágikus világban megélni miután az előző világában, ami a mi világunk, meghalt.
                </p>

                <h3>Satou Kazuma</h3>
                <hr>
                <img class="konosubakepek" src="img/konosuba/kazuma.gif" alt="Kazuma" />
                <p>
                    Satou Kazuma a főszerepljője a KonoSubának. Halála után újjászületett egy fantázia világban.
                    Eredetileg egy diák volt, aki minden idejét videójátékozással töltött. Egy nap viszont a 
                    boltból hazatérve balesete volt és meghalt. Halálakor az Víz Istennője Aqua ajánlatot tett neki,
                    reinkarnálódhat egy mágikus világba, cserébe le kell győznie a Démon Királyt.
                </p>

                <h3>Megumin</h3>
                <hr>
                <img class="konosubakepek" src="img/konosuba/megumingif.gif" alt="Megumi" />
                <p>
                    Megumin a KonoSuba egyik főszerepljője. A Karmazsinvörös Démon klán egyik tagja. Hivatalosan ő az első 
                    tagja Kazuma csapatának, ha Aquát nem számítjuk. Korának ellenére Megumin egy erős varázsló, aki a mágiájával
                    hatalmas robbanásokat tud előidézni, bár minden egyes használat után, annyira elfárad, hogy mozdulni se tud, 
                    így Kazumára marad, hogy cipelje, ha kell.
                </p>

                <h3>Darkness</h3>
                <hr>
                <img class="konosubakepek" src="img/konosuba/darkness.gif" alt="Darkness" />
                <p>
                    Darkness szintén a KonoSiba egyik főszereplője. Eredeti neve Ford Lalatina, bár ezt a nevet nem használja, 
                    mert nem szereti a Lalatina nevet. Eredetileg egy nemes, de az előre eltervezett házassága miatt elszökik otthonról,
                    majd csatlakozik Kazuma csapatába. Legjellemzőbb tulajdonsága a bátorsága, félelem nélkül védi meg barátait,
                    még akkor is, ha ezzel komoly sérüléseknek teszi ki magát. Bár ez betudható annak is, hogy Darkness egy mazochista így
                    élvezi, amikor megsérül. Szerencsére, mivel ő egy lovag, így erősebb, mint az átlagos ember.
                </p>

                <h3>Aqua</h3>
                <img class="konosubakepek" src="img/konosuba/aqua2.gif" alt="Aqua" />
                <hr>
                <p>
                    Aqua, a Víz Istennőja, aki lehetőséget adott Kazumának, hogy  reinkarnálódjon egy új világba. A szabályok szerint
                    Kazuma választahott valamilyen bónuszt, amit magával vihet az új világba, legyen az egy különleges képesség, vagy egy mágikus kard.
                    Kazuma azonban, mivel Aqua viccet csinált belőle úgy döntött, hogy Aquát viszi magácal, mint segítség. Szerencséjére, és Aqua szerencsétlenségére,
                    ez nincs megtiltva, így mindketten ebbe a fantázia világba kerültek.
                </p>

            </div>
    </div>

</main>
<div id="karakterek">
    <img id="konosubabalkarakter" src="img/konosuba/konosubabalkarakter.png" alt="konosubabalkarakter"  />
    <img id="konosubajobbgif" src="img/konosuba/aqua.gif" alt="aqua dancing"/>             
    <img id="konosubabalgif" src="img/konosuba/megumin.gif" alt="megumin dancing"/>
</div>
<footer id="konosubalablec">
    <p>
        A honlap tervezői: Varga Gábor és Kassai Zsolt. A Szegedi Tudományegyetem hallgatói (még).
        2021
    </p>
</footer>

</body>
</html>