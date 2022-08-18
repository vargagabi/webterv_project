<?php
        session_start();
        if(isset($_SESSION["user"])){
            header("Location: index.php");
        }
        // a regisztrált felhasználók

        //fuggvenyeket tartalmazo php beagyazasa
        include "fuggvenyek.php";
        $fiokok = beolvasas("felhasznalok.txt");

        //hibakat tarolo tomb

        $hibak= [];

        //urlapfeldolgozas

        if(isset($_POST["kuldes"])) { //akkor lepunk be az if-be, ha az urlapot elkuldtek

            //kotelezo mezok ellenorzese, megadtak-e a felhasznalonevet, emailt, jelszot, kort
             if (!isset($_POST["regfelhasznalonev"]) || trim($_POST["regfelhasznalonev"]) === ""){
                $hibak[] = "A felhasználónév megadása kötelező!";
             }

            if (!isset($_POST["regjelszo"]) || trim($_POST["regjelszo"]) === "" || !isset($_POST["jelszoellenorzes"]) || trim($_POST["jelszoellenorzes"]) === ""){
                $hibak[] = "A jelszó kétszeri megadása kötelező!";
            }
                
            if (!isset($_POST["eletkor"]) || trim($_POST["eletkor"]) === ""){
                $hibak[] = "Az életkor megadása kötelező!";
            }
            
            if (!isset($_POST["regemail"]) || trim($_POST["regemail"]) === ""){
                $hibak[] = "Az e-mail cím megadása kötelező!";
            }

            if (!isset($_POST["animetipusok"]) || count($_POST["animetipusok"]) < 2){
                $hibak[] = "Legalább 3 anime műfajt kötelező választani!";
            }

            //adatok eltarolasa valtozokban
                
            $felhasznalo = $_POST["regfelhasznalonev"];
            $email =  $_POST["regemail"];
            $jelszo = $_POST["regjelszo"];
            $jelszo2 = $_POST["jelszoellenorzes"];
            $kor = $_POST["eletkor"];
            $nem = $_POST["nem"];
            if(isset($_POST["animetipusok"])){
            $animek = $_POST["animetipusok"];
            }
            else $animek =null;
            $szulido = NULL;
            $telszam = NULL;
            $irany = NULL;
            $kedvencszin = NULL;
            $honlap = NULL;
            $utolso = NULL;
            $egyeb = NULL;
            $jovelemeny = NULL;
            


            //nem kotelezo adatok lekerese

            if (isset($_POST["szuletesiido"])){
                 $szulido = $_POST["szuletesiido"];
            }

            if (isset($_POST["telefonszam"])){
                 $telszam = $_POST["telefonszam"];
            }

            if (isset($_POST["irany"])){
                 $irany = $_POST["irany"];
            }

            if (isset($_POST["kedvencszin"])){
                 $kedvencszin = $_POST["kedvencszin"];
            }

            if (isset($_POST["rajongoihonlap"])){
                 $honlap = $_POST["rajongoihonlap"];
            }

            if (isset($_POST["utolsoanime"])){
                 $utolso = $_POST["utolsoanime"];
            }

            if (isset($_POST["egyeb"])){
                 $egyeb = $_POST["egyeb"];
            }

            if (isset($_POST["jovelemeny"])){
                 $jovelemeny = $_POST["jovelemeny"];
            }
            
            if (isset($_FILES["profilkep"]) && $_FILES["profilkep"]["size"] !==0) {
                $fajlnev = $_FILES["profilkep"]["name"];
                $kiterjesztes = strtolower(pathinfo($fajlnev, PATHINFO_EXTENSION));
                $profkep = "profilePictures/" . $_POST["regfelhasznalonev"] .".". $kiterjesztes;
                if ($kiterjesztes === "png" || $kiterjesztes === "jpg" || $kiterjesztes === "jpeg"){
                    move_uploaded_file($_FILES["profilkep"]["tmp_name"],$profkep);
                }
            }
            else $profkep = "profilePictures/default.png";
            
            
            //Feltetelek ellenorzese
            //felhasznalonev foglalt-e?
            foreach ($fiokok as $fiok) {
                if($fiok["felhasznalo"] === $felhasznalo) {
                    $hibak[] = "Az adott felhasználónév már foglalt";
                }
            }

            //jelszoban legyen benne betu es szam is
            if(!preg_match('/[a-zA-Z]/', $jelszo) || !preg_match('/[0-9]/', $jelszo)){
                $hibak[] ="A jelszónak tartalmaznia kell betűt és számjegyet is";
            }

            //jelszo legalabb 7 karakter
            if(strlen($jelszo) < 7) {
                $hibak[] = "Legalább 7 karakternek kell lennie a jelszónak";
            }

          
            //ket jelszo megegyezik-e?
            if($jelszo !== $jelszo2){
                $hibak[] ="A két jelszó nem egyezik meg";
            }

            //12 eves kortol lehet regisztralni
            if($kor < 12){
                $hibak[] ="12 éves kortól lehet regisztálni";
            }

            //legalabb 3 animet valasztott? - mar megtortent a 68.sorban

            //Sikeres-e a regisztráció?
            if(count($hibak) === 0){
                $fiokok[] = ["felhasznalo" => $felhasznalo, "email" => $email, "jelszo" => $jelszo, "animek" => $animek, "nem" => $nem, "szulido" => $szulido, "kor" => $kor, "telszam" => $telszam, "irany" => $irany, "kedvencszin" => $kedvencszin,"profilkep" => $profkep, "honlap" => $honlap, "utolso" => $utolso, "egyeb" => $egyeb, "jovelemeny" => $jovelemeny];
                kiiras("felhasznalok.txt", $fiokok);
                $siker = TRUE;
                header("Location: index.php");
            }
            else{
                $siker = FALSE;
            }

        }

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


<header>
    <nav id="regisztraciofejlec">
    <ul>
        <li><a href="index.php" target="_self">Vissza a főoldalra</a></li>
    </ul>
    </nav>
</header>

<div id="fooldaldiv">
     <p><strong>Figyelem:</strong> a rejtett mező nem látszódik a felhasználó számára, de az 
                 információ el lesz küldve a szerverünkre az űrlap kitöltése után.
                </p> 
    <?php
        
            //Sikeres volt a regisztráció?
            if(isset($_POST["kuldes"])){
                if(isset($siker) && $siker == TRUE){
                echo"Sikeresen regisztrált oldalunkra!";
                } 
                else {
                    echo "Az alábbi hibák léptek fel a regisztráció során:" . "<br>";
                    foreach ($hibak as $hiba){
                        echo "<p>" . $hiba . "</p>";
                    }
                }
            }
            
            
    ?>
</div>



<div id="reg">
   <form action="regisztracio.php" method="POST" enctype="multipart/form-data">
                <fieldset class="field">
                    <legend>Regisztrációs adatok</legend>
                    <label>Felhasználónév: <input type="text" name="regfelhasznalonev" class="inputmezo" placeholder="felhasználónév" required></label>
                    <br><br>
                    <label>E-mail cím: <input type="email" name="regemail" class="inputmezo" placeholder="valaki@valami.hu" required></label>
                    <br><br>
                    <label>Jelszó:<input type="password" name="regjelszo" class="inputmezo"    placeholder="7+ karakter, betű és szám" required></label>
                    <br><br>
                    <label>Jelszó újra: <input type="password" name="jelszoellenorzes" class="inputmezo" placeholder="7+ karakter, betű és szám" required></label>
                    <br><br>
                    <label>Életkor: <input type="text" name="eletkor" placeholder="feltétel: 12+" class="inputmezo"></label><br/><br>
                    <label>Nem:
                    <select name="nem" class="inputmezo">
                        <option value="ferfi">Férfi</option>
                        <option value="no">Nő</option>
                    </select>
                   </label>
                    <br><br>
                    
                </fieldset>
                <fieldset class="field">
                    <legend>Milyen típusú animéket kedvelsz? (legalább 3-at jelölj)</legend>
                    <label>Shonen: <input type="checkbox" name="animetipusok[]" value="Shonen"></label>
                    <label>Shoujo: <input type="checkbox" name="animetipusok[]" value="Shoujo"></label>
                    <label>Action: <input type="checkbox" name="animetipusok[]" value="Action"></label>
                    <label>Adventure: <input type="checkbox" name="animetipusok[]" value="Adventure"></label>
                    <label>Fantasy: <input type="checkbox" name="animetipusok[]" value="Fantasy"></label>
                    <label>Hentai: <input type="checkbox" name="animetipusok[]" value="Hentai"></label>
                    <label>Romance: <input type="checkbox" name="animetipusok[]" value="Romance"></label>    
                    <label>Horror: <input type="checkbox" name="animetipusok[]" value="Horror"></label>
                    <label>Comedy: <input type="checkbox" name="animetipusok[]" value="Comedy"></label>
                    <label>Seinen: <input type="checkbox" name="animetipusok[]" value="Seinen"></label>
                    <label>Harem: <input type="checkbox" name="animetipusok[]"  value="Harem"></label>
                    <label>Mecha: <input type="checkbox" name="animetipusok[]" value="Mecha"></label>
                    <label>Psychological: <input type="checkbox" name="animetipusok[]" value="Psychological"></label>
                </fieldset>

                <fieldset class="field">
                   <legend>Nem kötelező adatok</legend>
                    <label>Születés idő: <input type="date" name="szuletesiido" class="inputmezo"></label><br/><br>
                    <label>Telefonszám: <input type="tel" name="telefonszam" class="inputmezo"></label><br/><br>
                    <label>Anime rajongásod mértéke: <input type="range" name="irany" min="1" max="10" class="inputmezo"></label><br/><br>
                    <label>Kedvenc szín: <input type="color" name="kedvencszin" class="inputmezo"></label><br/><br>
                    <label>Profilkép: <input type="file" name="profilkep" class="inputmezo" accept="image/*"></label><br/><br>
                    <label>Rajongói honlapod (ha van): <input type="url" name="rajongoihonlap" class="inputmezo"></label><br/><br>
                    <label>Kb. hány órányi animét láttál eddig?<input type="time" name="utolsoanime" class="inputmezo"></label><br/><br>
                    <label><textarea name="egyeb" placeholder="Még valami, amit szeretnél megosztani" maxlength="255" cols="50"></textarea></label>
                </fieldset>

                <fieldset class="field">
                    <legend>Vélemény az oldalról (ez sem kötelező)</legend>
                    <label>Jó<input type="radio" name="jovelemeny" class="radiogomb"></label>
                    <label>Rossz<input type="radio" name="jovelemeny" class="radiogomb"></label>
                    <label>Nincs<input type="radio" name="jovelemeny" class="radiogomb"></label>
                </fieldset> 
                
                <input type="reset" name="resetbtn" value="Törlés">
                <input type="submit" name="kuldes" value="Küldés">
              
                <input type="hidden" name="regID" id="regID" value="666">
                        
    </form> 

</div>

            
<footer id="fooldallablec">
<p>
    A honlap tervezői: Varga Gábor és Kassai Zsolt. A Szegedi Tudományegyetem hallgatói (még).
    2021
</p>
</footer>

</body>
</html>