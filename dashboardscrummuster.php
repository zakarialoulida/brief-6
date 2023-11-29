<?php
session_start();

if (isset($_SESSION['Membre_ID']) && isset($_SESSION['nom'])) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="... votre intégrité ..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
  </head>

  <body>

    <?php
    include 'dbconnect.php';
    ?>







    <div id="sidebar" class="min-h-[640px] bg-gray-100 hidden fixed w-full lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0  z-50 ">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex-1 flex flex-col min-h-0 bg-[#9ad0d3]">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
          <div class="flex  justify-between items-center  px-4">
            <button id="fermernav"><i class=" lg:hidden text-black fas fa-times fa-2xl"></i></button>
            <img class="lg:hidden h-12 inline-block m-2 " src="./img/logo (1).png" alt="Workflow">
          </div>
          <nav class="mt-5 flex-1 px-2 space-y-1">

            <a href="#" class=" hover:bg-[#BFD8D5] bg-[#9ad0d3] text-black group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-black&quot;, Default: &quot;text-black hover:bg-[#BFD8D5] hover:bg-opacity-75&quot;">
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-[black]" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              Dashboard
            </a>

            <a href="#" class="text-black hover:bg-[#BFD8D5] hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-black&quot;, undefined: &quot;text-black hover:bg-[#BFD8D5] hover:bg-opacity-75&quot;">
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-black" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
              </svg>
              Team
            </a>

            <a href="#" class="text-black hover:bg-[#BFD8D5] hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-black&quot;, undefined: &quot;text-black hover:bg-[#BFD8D5] hover:bg-opacity-75&quot;">
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-black" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
              </svg>
              Projects
            </a>


          </nav>
        </div>
        <div class="w-full flex justify-between items-center border-t border-black p-4">


          <div class="ml-3 flex flex-col">

            <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">



            <p class="text-sm font-medium text-black">
              Tom Cook
            </p>
            <p class="text-xs font-medium text-black-400 group-hover:text-black">
              View profile
            </p>
          </div>

          <a href="logout.php" class="p-4 w-fit h-fit text-center text-black text-xs font-medium bg-red-400 rounded-full">LOG OUT</a>


        </div>
      </div>
    </div>
    <div class=" lg:pl-64 flex flex-col flex-1">
      <div class="sticky top-0 z-10 lg:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
        <button type="button" class="burgermenu -ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>







      <main class="flex-1 ">


        <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 md:px-8 flex justify-between items-center ">
          <div>
            <h1>Hello, <?php echo $_SESSION['nom']; ?></h1>
            <h2 class="text-2xl font-semibold text-gray-900">YOUR team</h2>
          </div>


          <button class="createequipe p-4 w-fit h-fit text-center text-black text-xs font-medium bg-green-400 rounded-full" <?php if ($_SESSION['roleuser'] != 'scrummuster') { ?>style="display:none" <?php }  ?>>Create a Team</button>



        </div>


        <div class="bg-gray-100 py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

          <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3  2lg:grid-cols-4">
            <?php
            if ($_SESSION['roleuser'] === 'scrummuster') {
              // Requête pour récupérer toutes les équipes
              $equipesQuery = "SELECT * FROM equipes";
              $equipesResult = mysqli_query($sql, $equipesQuery);

              // Boucle pour afficher chaque équipe
              while ($equipe = mysqli_fetch_assoc($equipesResult)) {
                $equipeID = $equipe['équipe_ID'];
                $nomEquipe = $equipe['Nom_Équipe'];
                $Date_de_Création = $equipe['Date_de_Création']




            ?>
                <li class=" col-span-1 flex flex-col text-center bg-white rounded-lg shadow  divide-gray-200">
                  <div class="flex-1 flex flex-col justify-between p-8 ">

                    <h3 class=" text-gray-900 text-sm font-medium"><?php echo "  $nomEquipe " ?></h3>





                    <div class="  flex justify-between">
                      <label>date ce creation</label>
                      <span class="px-2 py-1 text-g*reen-800 text-xs font-medium bg-green-100 rounded-full"><?php echo "  $Date_de_Création" ?></span>

                    </div>


                  </div>
                  <div class="-mt-px flex divide-x divide-gray-200">





                    <form class="-ml-px w-0 flex-1 flex" method="post">

                      <input type="hidden" name="equipeID" value="<?php echo "$equipeID"; ?>">
                      <button type="submit" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 ml-3">Voir ces membres</button>


                    </form>
                    <!-- Ajoutez cette partie à l'intérieur de votre boucle d'affichage des équipes -->
                    

                </li>

            <?php }
            } ?>
          </ul>
          <?php



if (isset($_POST['equipeID'])) {
  $equipeID = $_POST['equipeID'];
  
    
  
    // Requête pour récupérer les membres de l'équipe
    $membresQuery = "SELECT * FROM users WHERE équipe_ID = '$equipeID'";
    $membresResult = mysqli_query($sql, $membresQuery);
  

  // Requête pour récupérer les informations de l'équipe
  $equipeInfoQuery = "SELECT * FROM equipes WHERE équipe_ID = '$equipeID'";
  $equipeInfoResult = mysqli_query($sql, $equipeInfoQuery);
  $equipeInfo = mysqli_fetch_assoc($equipeInfoResult);

  // Vérifiez s'il y a des membres dans l'équipe
  if ($equipeInfo && mysqli_num_rows($membresResult) > 0) {
    $nomEquipe = $equipeInfo['Nom_Équipe'];

    echo "<h2 class='text-2xl font-semibold text-gray-900 mt-8 mb-4'>$nomEquipe</h2>";
    echo "<table class='min-w-full divide-y divide-gray-200'>";
    echo "<thead class='bg-gray-50'>";
    echo "<tr>";
    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Nom</th>";
    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Prénom</th>";
    echo "<th class='px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider'>Actions</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody class='bg-white divide-y divide-gray-200'>";

    // Affichage des membres dans le tableau
    while ($membre = mysqli_fetch_assoc($membresResult)) {
      $membreID = $membre['Membre_ID'];
      $nomMembre = $membre['nom'];
      $prenomMembre = $membre['prénom'];

      echo "<tr>";
      echo "<td class='px-6 py-4 whitespace-nowrap'>$nomMembre</td>";
      echo "<td class='px-6 py-4 whitespace-nowrap'>$prenomMembre</td>";
      echo "<td class='px-6 py-4 whitespace-nowrap'><a href='supprimer_membre_equipe.php?membreID=$membreID '>Supprimer</a></td>";
      echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
  } else {
    echo "<p>Aucun membre dans cette équipe.</p>";
  }
}
?>



          <hr class=" h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
          <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3  2lg:grid-cols-4">




            <?php
            if ($_SESSION['roleuser'] === 'scrummuster') {
              // Fetch only users with role 'user'
              $affichuser = "SELECT * FROM users WHERE roleuser = 'user'";
              $result = mysqli_query($sql, $affichuser);


              // Loop through the result and display each user
              while ($row = mysqli_fetch_assoc($result)) {
                // Display user information
                // ... (user display code remains unchanged) ...




                $nom = $row['nom'];
                $prenom = $row['prénom'];
                $roleuser = $row['roleuser'];
                $memberid = $row['Membre_ID'];

                $image = $row['image'];

            ?>

                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                  <div class="flex-1 flex flex-col p-8">
                    <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="img/<?php echo "$image" ?>" alt="">
                    <h3 class="mt-6 text-gray-900 text-sm font-medium"><?php echo "$nom ";
                                                                        echo "$prenom" ?></h3>
                    <dl class="mt-1 flex-grow flex flex-col justify-between">


                      <dd class="mt-3">
                        <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full"><?php echo "$roleuser" ?></span>
                      </dd>
                    </dl>
                  </div>

                  <div class="-mt-px flex divide-x divide-gray-200">



                    <div class="-mt-px flex divide-x divide-gray-200 -mt-px flex divide-x divide-gray-200 relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium  border-transparent rounded-bl-lg hover:text-gray-500 -ml-px w-0 flex-1 flex" <?php if ($roleuser != 'user') { ?>style="display:none" <?php } ?>>
                      <form action="" method="post">
                       

                        <button data-id="<?php echo $memberid; ?>" class="Ajouteruser_a_equipe ml-3">Ajoutez a Une Equipe</button>

                      </form>
                    </div>

                  </div>

                </li>
            <?php }
            } ?>

            <?php

            if (isset($_POST['submitteam'])) {
              // Récupère la valeur sélectionnée dans la liste déroulante
              $teamName = $_POST["teamName"];

              $projectID = $_SESSION['project_ID'];
              echo "$projectID";

              $insertQuery = "INSERT INTO Equipes (Nom_Équipe, project_ID) VALUES ('$teamName', '$projectID')";

              $result = mysqli_query($sql, $insertQuery);
              if ($result) {
                echo "Team added successfully.";
              } else {
                echo "Error adding team: " . mysqli_error($sql);
              }
            }
            ?>


          </ul>





          <!-- Ajoutez une div pour la popup avec un ID 'popup' -->
          <div id="popup" class="popup hidden fixed inset-0 bg-gray-500 bg-opacity-75 overflow-y-auto">
            <div id="popup" class="flex items-center justify-center min-h-screen">
              <div class="bg-white p-8 rounded shadow-md">
                <h2 class="text-lg font-semibold mb-4">CREER VOTRE EQUPIE</h2>

                <form class="flex flex-col" action="" method="post">
                  <label for="teamName">Team Name:</label>
                  <input class="border-black border-2 rounded" type="text" name="teamName" required>

                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" name="submitteam">Add Team</button>



                </form>
              </div>
            </div>
          </div>





          <?php

          if (isset($_POST['submittoequipe'])) {

            $selectedequipeID = $_POST['equipe'];
            // echo "$selectedequipeID";
            echo "$selectedequipeID";

            $userID = $_POST['memberid'];
            echo "$userID";


            $updateQuery = "UPDATE `users` SET `équipe_ID` = '$selectedequipeID' WHERE `Membre_ID` = '$userID'";


            $result = mysqli_query($sql, $updateQuery);


            if ($result) {
              echo "user added to team  successfully.";
            } else {
              echo "Error updating project assignment: " . mysqli_error($sql);
            }
          }
          ?>


          <!-- AJOUTER UN USER TO AN EQUIPE -->
          <div  class="ajouter_a_lequipe hidden fixed inset-0 bg-gray-500 bg-opacity-75 overflow-y-auto">
            <div id="popup" class="flex items-center justify-center min-h-screen">
              <div class="bg-white p-8 rounded shadow-md">
                <h2 class="text-lg font-semibold mb-4">Add to team</h2>
                <form method="post" action="">

                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                  <select name="equipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a TEAM</option>
                    <?php
                    $affichprojects = "SELECT * from Equipes";
                    $result = mysqli_query($sql, $affichprojects);
                    while ($row = mysqli_fetch_assoc($result)) {

                      $équipe_ID = $row['équipe_ID'];
                      $Nom_Équipe = $row['Nom_Équipe'];

                    ?>

                      <option value="<?php echo " $équipe_ID" ?>"><?php echo "$Nom_Équipe" ?></option>

                  <?php }
                   ?>
                  </select>
                  <input id="selectedUserId" type="hidden" name="memberid" value="">
                
                  <button type="submit" name="submittoequipe" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">assign it to him</button>
                </form>
              </div>
            </div>
          </div>




      </main>

    </div>
    <script>
      const Ajouteruser_a_equipe = document.querySelectorAll('.Ajouteruser_a_equipe');
      const ajouter_a_lequipe = document.querySelector('.ajouter_a_lequipe');

      const selectedUserIdInput = document.getElementById('selectedUserId');

      Ajouteruser_a_equipe.forEach(button => {
        button.addEventListener("click", (event) => {
          event.preventDefault();
          ajouter_a_lequipe.classList.remove("hidden");
          const userId = event.target.dataset.id;
           selectedUserIdInput.value = userId;
           console.log("User ID:", selectedUserIdInput.value);
        });
      });











      const createequipe = document.querySelector('.createequipe');
      const popup = document.querySelector('.popup');



      createequipe.addEventListener("click", (event) => {
        event.preventDefault();
         popup.classList.toggle("hidden");

      });
    </script>

    <script src="script.js"></script>



  </body>


  </html>
  <?php
}else {
  header("Location: index.php");
  exit();
}
?>