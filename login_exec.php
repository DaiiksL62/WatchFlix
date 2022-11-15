

<?php

if(empty($_POST['username'])||empty($_POST['user_pass']))
    {
    echo "remplissage absent";
    }
    else{
        require'./assets/bdd.php';
        $query="SELECT * FROM inscription WHERE username=:username LIMIT 1";
        
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
                 
                 $_SESSION['username']= $_POST['username'];
                 
                 $_SESSION['user_kind']= $result['user_kind'];
                 $_SESSION['id']= $result['id'];
                 $_SESSION['photo']=$result['photo'];

                 echo $_SESSION['user_kind'];
                 if($_SESSION['user_kind'] == 1){
                
                 header("location: ./index_admin.php");
                }
                elseif($_SESSION['user_kind'] == 2){
                      header("location: ./index_user.php");
                   }
               } 
               else{
                   echo'echec';
                   exit(header('location: ./connexion.php'));
               }
         }
         else{
             echo 'echec critique';
         }
    }
    
    ?>
