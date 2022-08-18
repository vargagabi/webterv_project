<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kassai Zsolt, Varga Gábor" />
    <meta name="description" content="Ez a project röviden ismertet néhány animét" />
    <meta name="keywords" content="anime" />
    <title>Animeözön</title>
    <link rel="icon" href="img/02Naruto.jpg" />
    <link rel="stylesheet" href="style.css"/>

</head>

<body id="fooldalbody">


<header id = "fooldalfejlec">
    <?php
    include_once "fejlec.html";
    ?>
</header>

 <?php 
 include_once "belepes.php"
 ?>
<main>
    <div id="fooldaldiv">
        <div id="fooldalcim">Animeözön</div>

        <div class ="szoveg">
            <h2>A honlap célja</h2>
            <hr>
            <p>Köszöntelek a weblapunkon kedves olvasó. Bizonyára már halottál az animékről és/vagy a mangákról, láttál valami vicces vagy éppen
                kevésbé vicces mémet róluk. Ha véletlen mégsem, akkor sem kell elkeseredned. Ugyanis ez az oldal alapvetőleg kettő célt tűzött ki
                maga elé.  Az első, hogy az olyan szerencsés olvasók, mint amilyen te is vagy, megismerhessék honnan indult el ez a "műfaj" és minek
                köszönheti hatalmas népszerűségét. Az oldal második célja, pedig az lenne, hogy bemutassunk néhány gyöngyszemet, ebből a hatalmas
                választékól ami rendelkezésre áll az animéseknek. Remélem az oldal végigböngészése után, te is kedvet kapsz, hogy belepillants
                1-1 animébe. Ha egy konkrét animéről szeretnél bővebben olvasni, kérlek válassz egyet a fenti listából. Ha pedig inkább az anime
                történetéről és népszerűségének okáról olvasnál, akkor mindössze annyi a teendőd, hogy görgesd át a lenti, jövődet szimbolizáló képet.
            </p>
            <img id="valaszto" class="fooldalkepek" src ="img/fooldal/valaszto.jpg" alt ="Valaszto"/>
            <h2>Az anime kialakulása dióhéjban</h2>
            <hr>
            <h3>A kezdetek</h3>
            <img id="momotaro" class="fooldalkepek" src="img/fooldal/momotaro.jpg" alt="Momotaro" />
            <p>A huszadik század hajnalán a japán grafikusművészek két nagyon erőteljes nyugati találmány hatását érezhették:
                az újságokban megjelenő képregényekét és a filmét. A szövegbuborékaival és időben előre haladó történetével,
                a képregény olyan szerkezetet nyújtott a japán elbeszélőknek, mely könnyedén elérhető volt a tömegek számára.
                Hamarosan népszerű képregényrajzolók, mint például Rakiten Kitazawa és Ippei Okamoto, saját folytatásos
                nyomtatványokat jelentettek meg. Végül ezek járulhattak hozzá a modern japán képregényfüzet, avagy a "manga"
                fejlődéséhez.
                1914-ben a képregényrajzolók az első animációs filmmel kísérletező japán művészek között voltak.
                Japán első világsikere Kitayama Seitaro rövid filmje, a <cite>Momotaro</cite> (1918) volt. Habár a japán animációs ipar
                lassan tovább növekedett, az egyetlen, és utolsó, háborút megelőző mérföldköve a <cite>Chikara To Onna No Yononaka</cite>
                volt. Az 1932-ben megjelenő rövidfilm volt az első japán "hangosfilm".
            </p>
            <h3>A Manga Istene</h3>
            <p>Bármennyire is hihetetlennek tűnik, Japán anime és manga sikere alapjában véve egy ember vállán nyugszik:
                Osamu Tezukáén. A törtető rajzfilmkészítő, Tezuka eredetileg a második világháború után vált képregényrajzolóvá.
                Mindössze húsz éves volt, mikor első jelentős alkotása, a regény hosszúságú <cite>Shintakarajima</cite>, vagy <cite>Új Kincses
                    Sziget</cite> megjelent 1947-ben. Alig néhány éven belül Japán legnépszerűbb manga művészévé vált, végül elnyerve a
                "Manga Istene" címet. Tezuka megközelítése teljes mértékben különbözött minden eddigitől. Míg a legtöbb kortárs
                manga történet időrendben folyt, színpadias stílusban, Tezuka illusztrációi akciótól és érzelmektől telítődtek.
                A francia és német mozi technikáját felhasználva több száz oldalra terjesztette ki történeteit.A folyamat során
                művészek egész generációját tanította meg arra, hogyan jelenítsenek és alkossanak meg egy történetet kinetikusan.
                A legtöbb anime és manga rajongó számára Tezuka legszembetűnőbb hozzájárulása a karakterei kinézetében mutatkozott.
                A művésznek érzelmi sablonok egész tárházára volt szüksége, hogy előadja gyakran komplex történeteit.
                Inspirációt keresve, azon Disney rajzfilmek felé fordult, melyeket gyermekként szeretett. Akárcsak Mickey Egér és Donald
                <img id="erzesek" class="fooldalkepek" src="img/fooldal/erzesek.jpg" alt="Erzesek" />
                Kacsa, Tezuka állat és ember karakterei is kerek fejekkel és óriási, kifejező szemekkel rendelkeztek. Jóllehet
                ezek a vonások egyszerűen és rajzfilmesen jelentek meg, valójában érzelmek széles skálájának kifejezésére adtak
                lehetőséget a karakter számára, a hízelgéstől egészen a forrongó gyűlöletig. A manga és anime művészek elkövetkező
                generációi felfedezték Tezuka karaktereinek rugalmasságát, és saját különféle munkájukba ültették át őket. Ez
                vezetett aztán napjaink "manga-stílusú" karaktereihez, leegyszerűsített arcvonásaikkal és Frisbee-méretű
                szemgolyóikkal. Sailor Moon, Speed Racer, sőt még Ash Ketchum is, mind Tezukának köszönhetik ragyogó külsejüket.
            </p>
            <h2>Az anime népszerűségénék 3 fő oka</h2>
            <hr>
            <h3>Nem csak gyerekeknek szól</h3>
            <p>
                Elterjedt – és a rajongók számára az egyik legbosszantóbb – tévhit, hogy az animék csak a gyerekeknek és a
                tiniknek szólnak. Mivel hazánkban a 90-es évektől kezdve főként a fiataloknak szóló animék terjedtek el, ezek
                váltak széles körben ismertté. A helyzet ezzel szemben az, hogy a japán animációs filmek több korosztályt is
                megcéloznak, hiszen számtalan műfajt képviselhetnek az akciótól kezdve a gyerekmesén, a drámán és a sci-fin
                keresztül egészen a romantikus animékig. Ráadásul a nyugati filmekhez hasonlóan találkozhatunk egész estés
                filmekkel, tévésorozatokkal vagy videóanimációkkal is. Hamar belátható hát, hogy az általános nézet ellenére az
                animék közel sem csak a gyerekeknek szólnak
            </p>
            <h3>Több műfajt is vegyíthet egyszerre</h3>
            <p>
                Sok animét nehéz tisztán egy műfajhoz sorolni, mivel a jellegzetességek összemosódása miatt átmenetet képeznek a stílusok között.
                Erre a legjobb példák azok a japán animációs filmek, amelyek könnyed, vicces formában indulnak, majd a cselekmény és a karakterek
                fokozatosan komplexebbé, bonyolultabbá sőt, akár drámaivá válnak. A felszínen látszólag egyszerű – a szemlélő számára akár bugyutának
                tűnő – történetek nem ritkán komoly mondanivalót fogalmaznak meg, így az animéknek ezáltal nem csupán szórakoztató szerepük van,
                de tanító, szocializáló és értékteremtő funkciót is betölthetnek.
            </p>
            <h3>Cukifaktor</h3>
            <p>
                <img id="cutie" class="fooldalkepek"  src="img/fooldal/cutie.jpg" alt="cutie" />
                Kár is tagadni, rengeteg animeszereplő cuki. Bármennyire is furcsán hangzik, a legtöbb anime tudatosan épít erre.
                A készítők úgy formálják a szereplőket, hogy azok ne csak személyiségükkel és a történetben betöltött szerepükkel
                nyerjék el a néző szimpátiáját, hanem külső megjelenésükkel is. Ennek érdekében a szereplők megrajzolásánál arra
                törekednek, hogy a karakter ne csak egyszerű, de igen kifejező, és ami a legfontosabb, megnyerő is legyen. Ez az
                oka például annak, hogy a karakterek többsége ártatlan, nagy szemekkel, pisze orrocskával, pici szájjal, színes
                hajjal, vagy éppen egyedi, szuper ruhával jelenik meg.
            </p>
            <h4>Források</h4>
            <p>
                <a href="http://animeandmanga.mlap.hu/html/18971679/render">Anime története</a> <br>
                <a href="https://cultura.hu/kultura/az-animek-titka/">Népszerűségének oka</a>
            </p>
        </div>
    </div>

</main>

<div id="karakterek">
    <img usemap="#rr" id="fooldalbalkarakter" src="img/fooldal/fooldalbalkarakter.png" alt="fooldalbalkarakter"  />
    <img   id="fooldaljobbkarakter" src="img/fooldal/fooldaljobbkarakter.png" alt="fooldaljobbkarakter"/>

    <map name="rr">
        <area shape="circle" coords="216,82,30" href="https://potato.io" alt="suprise">
    </map>
</div>
<footer id="fooldallablec">
    <p>
        A honlap tervezői: Varga Gábor és Kassai Zsolt. A Szegedi Tudományegyetem hallgatói (még).
        2021
    </p>
</footer>

</body>
</html>