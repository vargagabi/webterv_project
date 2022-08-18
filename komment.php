
<?php
    if (isset($_SESSION["user"])){
        class Comment{
        private $comment;
        private $user;
        private $date;
        private $profilePicture;
        private $swearwords;

        public function __construct($comment){
            $this->comment = $comment;
            $this->user = $_SESSION["user"]["felhasznalo"];
            $this->date = new DateTime();
            $this->profilePicture = $_SESSION["user"]["profilkep"];
            $this->swearwords = ["FASZ", "BAZDMEG", "BMEG", "FOS","KÖCSÖG", "PICSA", "PICSÁBA", "SZAR"];

        }
        public function getComment(){
            return $this->comment;
        }
        public function getUser(){
            return $this->user;
        }
        public function getDate(){
            return $this->date->format('Y-m-d, H:i');
        }
        public function getProfilePicture(){
            return $this->profilePicture;
        }
        public function setComment($comment){
            $this->comment = $comment; 
        }
        public function __destruct()
        {
            $this->user = null;
            $this->date = null;
            $this->page = null;
            $this->comment = null;
            $this->profilePicture = null;
        }
        public function checkWords(){
            $words = explode(" ", $this->comment);
            $cleared_words = "";
            
                foreach($words as $word){
                    if(in_array(strtoupper($word),$this->swearwords)){
                        $cleared_words = $cleared_words . " " . $word[0];
                        for($i = 0; $i < strlen($word)-1; $i++){
                            $cleared_words = $cleared_words . "*";
                        }
                    }
                    else{
                        $cleared_words = $cleared_words . " " . $word;
                    }
                }
            
              
            
            $this->comment = $cleared_words;
        }


    }
    }

    $szinek = szinek();

    
?>

<?php 
if (isset($_SESSION["user"])){
    if (isset($_POST["sendComment"])){
        if (isset($_POST["comment"])){
            echo "hhhhhh";
            $c = new Comment($_POST["comment"]);
            echo $c->checkWords();
            $adatok = [ "user" => $c->getUser() , "comment" => $c->getComment(), "date" => $c->getDate(), "profilePicture" => $c->getProfilePicture()];
            kommentMentes("kommentek.txt", $adatok);
            header("Location: chatszoba.php");
            
        }
        
        

    }
} 

?>
<div id="kommentek">

    <form method="POST">
        <label>Hozzászólás:<input required type="text" size="100" maxlength="255" name="comment" placeholder="Ide írd a hozzászólásod..."> </label>
        <input type="submit" name="sendComment" value="Küldés">
    </form>
    
    <?php
    $file = fopen("kommentek.txt", "r");
    while($sor = unserialize(fgets($file))){
    ?>
    
        <div>
            <img alt="profile picture" src="<?php echo $sor["profilePicture"]?>">
            <div><?php echo $sor["user"]?></div>
            <div><?php echo $sor["date"]?></div>
            <p><?php echo $sor["comment"]?></p>
        </div>

    <?php }?>
    
</div>
