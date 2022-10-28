<?php

if(empty($_POST['username'])||empty($_POST['user_pass']))
    {
    echo "remplissage absent";
    }
    else{
        $query="SELECT watchflix FROM inscription WHERE username=:username LIMIT 1";
        $statement=$pdo->prepare($query);
        $statement->execute(
            array(
                'username'=>$_POST['username']
            )
            );
            $count=$statement->rowCount();
            if($count>0)
            {
               $result=$statement->fetch(PDO::FETCH_ASSOC);
               if(password_verify($_POST['user_pass'],$result['user_pass'])){
                 session_start();
                 $_SESSION['username']=$_POST['username'];
                 exit(header('location: ../WatchFlix/index_membre.php'));
               } else{
                   echo'echec';
               }
         }
         else{
             echo 'echec critique';
         }
    }
    
    ?>
