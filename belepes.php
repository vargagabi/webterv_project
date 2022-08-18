<?php
include "fuggvenyek.php";




if(isset($_POST["kilepes"])){
    session_unset();
    session_destroy();
    $nev = oldalNev();
    header("Location: $nev");
}

//Zsolt code

$fiokok = beolvasas("felhasznalok.txt");


$_SESSION["hibauzenet"] = "";

if(isset($_POST["belepes"])) {
    if(!isset($_POST["felhasznalo"]) || trim($_POST["felhasznalo"]) === "") {
        $uzenet = "<strong>Hiba:</storng> Add meg a felhasznalonevet";
        echo $uzenet;
    }
    if(!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "") {
        $uzenet = "<strong>Hiba:</storng> Add meg a jelszot";
        echo $uzenet;
    }
}

if(isset($_POST["belepes"])) {
    $felhasznalo = $_POST["felhasznalo"];
    $jelszo = $_POST["jelszo"];

    $_SESSION["hibauzenet"] = "Sikertelen belépés";

    //van e ilyen regisztralt fiok?
    foreach($fiokok as $fiok){
        if(($fiok["felhasznalo"] === $felhasznalo) && ($fiok["jelszo"] === $jelszo)){
            $_SESSION["hibauzenet"] = "Sikeres belépés";
            $_SESSION["user"] = $fiok;
            break;
        }
    }



}

?>
<?php 
    $szinek = szinek();
?>

<?php
if(isset($_SESSION["user"])) { ?>
    <div id="bejelentkezes" style="background-color: <?php echo $szinek[0]?>; border: 3px dashed <?php echo $szinek[1]?>;">
    <img id="profilePicture" alt="profilePic" src="<?php echo $_SESSION["user"]["profilkep"]?>">
    <h4>Név: <?php echo $_SESSION["user"]["felhasznalo"] ?></h4>
    <form method="POST">
    <a href="chatszoba.php? <?php echo SID; ?>" target="_self" id="regisztracio">Chatszoba</a>
    <input type="submit" name="kilepes" value="Kilépés">
    <input type="hidden" name="PHPSESSID" value="123">
    </form>
    </div>
<?php } else { ?>
    <div id="bejelentkezes" style="background-color: <?php echo $szinek[0]?>; border: 3px dashed <?php echo $szinek[1]?>;">
    <form method="POST" >
    <fieldset>
        <legend>Bejelentkezés</legend>
        <label>Felhasználónév: <input type="text" name="felhasznalo" id="felhasznalonev" placeholder="felhasználónév" required> </label>
        <br><br>
        <label>Jelszó:<input type="password" name="jelszo" id="jelszo" placeholder="jelszó" required></label>
        <br><br>
        <a href="regisztracio.php" target="_self" id="regisztracio">Regisztráció</a>
        <input type="submit" name ="belepes" value="Belépés" id="kuldes">
        <input type="hidden" name="hidden" >
    </fieldset>
</form>
<p>
    <?php
    //hiba
    if(isset($_SESSION["hibauzenet"])){
        echo $_SESSION["hibauzenet"];
    }
    ?>
    </p>
    </div>
<?php }?>



