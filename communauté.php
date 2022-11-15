<?php
include 'header.php';
include './assets/bdd.php';

$user = $_SESSION['username'];

?>





<div class="body_communauté_page">

    <h1>Vous voulez-vous exprimer, foncez !!</h1>
    <form method="POST">
        <div class="inputer">
            <textarea type="text" id="comment_box" class="input_comment" name="input_comment"
                placeholder="<?php echo $_SESSION['username']; ?> exprimez-vous"></textarea>
            <input type="submit" class="subbutton" name="subbutton">
        </div>
    </form>

    <?php

if(isset($_POST['subbutton'])){
    
    /*$username = $_POST['username'];*/
    $comment = $_POST['input_comment'];

    if(/*empty($username) ||*/ empty($comment)){
        /*if (empty($username))
            echo "username is lake";*/

        if (empty($comment))
            echo "commentaire is lake";
    }else
    {

        try
        {
            $req = $pdo->prepare("INSERT INTO `commentaire`(`pseudo`, `message`, `date`) VALUES(?,?, CURRENT_TIMESTAMP())");
            $req->execute(array($user,$comment));
        }catch(PDOException $pe){
            echo 'ERREUR: '.$pe->getMessage();
        }
    }
}


        $req = $pdo->prepare("SELECT `pseudo`, `message`, `date` FROM commentaire ORDER BY `id` DESC");
        $req->execute();
        $d = $req->fetchAll();

        
?>

    <?php
    foreach ($d as $dem) { 
        $req_avatar = $pdo->prepare("SELECT `photo` FROM inscription WHERE `username`= ? LIMIT 1");
        $req_avatar->execute(array($dem->pseudo));
        $avatar_watch = $req_avatar->fetch();
     ?>
        <div class="core_body_communauté_page">
            <div class="comment_area">
                <div class="comment_area_info">
                    <div class='comment_area_info_avatar'>
                        <?php
                    echo'<img src="./img/copyimage/'.$_SESSION['photo'].'" alt="" id="image-commentaire">';?>
                    </div>
                    <div class="pseudo_user_ID">
                        <h1 id="pseudo-comment"><?= $dem->pseudo;?></h1></div>
                    <div class="spacement_class"></div>
                    <div class="Date_JJ_MM_AAAA"><?= $dem->date; ?></div>
                </div>
                <div class="comment_area_space">
                    <p class="commentaire"><?= $dem->message;?></p>
                </div>
            </div>
        </div>

    <?php }
include '../WatchFlix/footer.php';
?>