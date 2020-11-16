<?php
$bdd = new PDO('mysql:host=locahost;dbname=student_attendance','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $reponse = $bdb->query('SELECT * FROM student WHERE id = "2"');
// while($donnees=$reponse->fecth()){
//     '<p>' .$donnees['$nom'].'-' '</p>'
// }


// if(isset($_GET['$nom'])){

// // une requete prepaarer pour plus de dynamisme
// $bdd = new PDO (mysql:host=locahost;dbname=test,'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $requete = $bdb->prepare('SELECT * FROM test WHERE id = ?');
// $requete->execute(array($_Get['$nom']));
// while($donnees=$requete->fecth()){
//     '<p>' .$donnees['$nom'].'-' '</p>'
// }

// }

if(preg_match('#matin#', 'J\'aime le soleil le matin.'))
{
    echo vrai;
}
 else{
     echo faux;
 }



?>