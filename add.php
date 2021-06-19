
       <?php 
       session_start();
       require_once './session.php';
       try {
    $db = new PDO('mysql:host=localhost;dbname=wild_code_school;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
} 



?>

            <?php

mb_internal_encoding( "UTF-8" );
function mb_ucfirst($s)
{
	$s = mb_strtolower($s);
    return mb_strtoupper(mb_substr( $s, 0, 1 )).mb_substr( $s, 1 );
}


            
            $argonautes = htmlentities( mb_ucfirst(trim( isset($_POST['name']))) ? mb_ucfirst( $_POST['name']) : FALSE);
            function addPassager($db, $argonautes){
                
            $req = $db->prepare('INSERT INTO argonautes(name)
            VALUES (:name)');
            $req->execute(array(
            ':name'=> $argonautes
            
            ));           
            $name = htmlentities(mb_ucfirst(trim($_POST['name'])), ENT_QUOTES);
            }
            
            if(in_array('', $_POST)) {
	$_SESSION['erreur'] = 'Merci de renseigner les champs manquants';
    header('Location: index.php');
}
            

else{
            if(isset($_POST['name'])){
            
            addPassager($db, $argonautes);
            $_SESSION['message'] = "Argonaute ajouté"; 
          
            }
            //if (addPassager)
            
           header('Location: index.php');
        }
           ?>

            <!-- $_SESSION['message'] = "Argonaute ajouté"; -->
        