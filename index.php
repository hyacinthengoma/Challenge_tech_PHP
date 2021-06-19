<?php 
//session_start();
require_once ('./header.php');
require_once ('./config/connect.php');



?>
    <!-- Main section -->
    
        <!-- New member form -->
        <h2>Ajouter un(e) Argonaute</h2>
        <form action="add.php" method="POST" class="new-member-form">
            <label for="name">Nom de l&apos;Argonaute</label>
            <input id="name" name="name" type="text" placeholder="Charalampos" />
            <button type="submit">Ajouter</button>
        </form>
        <!-- Member list -->
        <h2>Membres de l'équipage</h2>
        <section class="member-list">
            <?php

// $req = $db->query('SELECT * FROM argonautes ');
// while ($argonautes = $result->fetch(PDO::FETCH_ASSOC)) :  

// echo '<div class="member-item">' . $argonautes . '</div>';



// endwhile;


            // function showAll($db){
            // $req = $db->prepare('SELECT * FROM argonautes ORDER BY name.id DESC');
            // $req->execute();
            // return $result = $req->fetchAll(PDO::FETCH_ASSOC);
            // }

            // $argonautes = showAll($db);
            // if ($argonautes) {
            //     foreach ($argonautes as $argonautes) {
            //         echo ' <div class="member-item">' . $argonautes . '</div>';
            //         var_dump($argonautes);
            //         var_dump('coucou');

            //     }          
            // }
                
            //  var_dump($argonautes);
            //         var_dump('salut');
            
            
            
            
$statement = 'SELECT * FROM `argonautes`';
$query = $db->prepare($statement);
$query->execute();

$result=$query->fetchAll(PDO::FETCH_ASSOC);



foreach ($result as $argonautes) {
    ?>

  <div class="member-item">
     <p><?= $argonautes['name']; ?></p>
    
    </div>   
<?php
}
 
?>


    

 <!-- <div class="member-item">' . $argonautes . '</div>' -->
 <?php



       

// $statement->closeCursor(); // Termine le traitement de la requête



?>

 
            

            
        

    <?php require_once './footer.php'; ?>
