<?php
session_start();
include 'dbconnect.php';


  $membreID = $_GET['membreID'];
  
  echo"$membreID";

  // Requête pour mettre à jour l'équipe_ID à NULL
  $retirerMembreQuery = "UPDATE users SET équipe_ID = NULL WHERE Membre_ID = '$membreID'";
  $retirerMembreResult = mysqli_query($sql, $retirerMembreQuery);

  if ($retirerMembreResult) {
    echo "Membre retiré de l'équipe avec succès.";
    header("location:dashboardscrummuster.php");
  } else {
    echo "Erreur lors du retrait du membre de l'équipe: " . mysqli_error($sql);
  }

?>
