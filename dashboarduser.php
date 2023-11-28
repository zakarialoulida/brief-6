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

    <div class="min-h-[640px] bg-gray-100" x-data="{ open: false }" @keydown.window.escape="open = false">





      <div id="sidebar" class=" hidden fixed w-full lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0  z-50 ">
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
      <div class="burgermenu lg:pl-64 flex flex-col flex-1">
        <div class="sticky top-0 z-10 lg:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
          <button type="button" class=" -ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="open = true">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>





        <main class="flex-1 ">

          <div class="py-6 ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
              <h1>Hello, <?php echo $_SESSION['nom']; ?></h1>
              <h2 class="text-2xl font-semibold text-gray-900">YOUR team</h2>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
              <div class="bg-gray-100 py-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3  2lg:grid-cols-4">





                    <li class=" col-span-1 flex flex-col text-center bg-white rounded-lg shadow  divide-gray-200">
                      <div class="flex-1 flex flex-col justify-between p-8 ">

                        <h3 class=" text-gray-900 text-sm font-medium">project name</h3>


                        <div class="  text-gray-500 text-clip text-sm">description Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia exercitationem maxime nostrum ad blanditiis, vel rerum debitis libero, atque eum quidem nam beatae tempora repellat recusandae, facilis perferendis quis a?</div>


                        <div class="  flex justify-between">
                          <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">date de debut</span>
                          <span class="px-2 py-1 text-green-800 text-xs font-medium bg-red-400 rounded-full">deadline</span>
                        </div>
                      </div>

                    </li>

                   
                      <?php
                      // Fetch the rows from the 'product' table
                      $affichuser = "SELECT * FROM users";
                      $result = mysqli_query($sql, $affichuser);

                      // Loop through the result and display each product
                      while ($row = mysqli_fetch_assoc($result)) {

                        $nom = $row['nom'];
                        $prenom = $row['prénom'];
                        $roleuser = $row['roleuser'];

                        $image = $row['image'];
                        echo "
                        <li class='col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200'>
                        <div class='flex-1 flex flex-col p-8'>
          <img class='w-32 h-32 flex-shrink-0 mx-auto rounded-full' src='img/$image' alt=''>
          <h3 class='mt-6 text-gray-900 text-sm font-medium'>$nom $prenom</h3>
          <dl class='mt-1 flex-grow flex flex-col justify-between'>
            <dt class='sr-only'></dt>
            <dd class='text-gray-500 text-sm'>Chief Accountability Analyst</dd>
            <dt class='sr-only'>$roleuser</dt>
            <dd class='mt-3'>
              <span class='px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full'>$roleuser</span>
            </dd>
          </dl>
        </div>
        <div>
          <div class='-mt-px flex divide-x divide-gray-200'>
            <div class='w-0 flex-1 flex'>
              <a href='mailto:janecooper@example.com' class='relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500'>

                <span class='ml-3'>AJOUTER</span>
              </a>
            </div>
            <div class='-ml-px w-0 flex-1 flex'>
              <a href='tel:+1-202-555-0170' class='relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500'>

                <span class='ml-3'>SUPPRIMER</span>
              </a>
            </div>
          </div>
        </div>
          </li>";
                      }
                      ?>
                  
                    <!-- <div class="flex-1 flex flex-col p-8">
                      <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1498551172505-8ee7ad69f235?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                      <h3 class="mt-6 text-gray-900 text-sm font-medium">Jenny Wilson</h3>
                      <dl class="mt-1 flex-grow flex flex-col justify-between">
                        <dt class="sr-only">Title</dt>
                        <dd class="text-gray-500 text-sm">Chief Accountability Analyst</dd>
                        <dt class="sr-only">Role</dt>
                        <dd class="mt-3">
                          <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">Admin</span>
                        </dd>
                      </dl>
                    </div>
                    <div>
                      <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="w-0 flex-1 flex">
                          <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">

                            <span class="ml-3">AJOUTER</span>
                          </a>
                        </div>
                        <div class="-ml-px w-0 flex-1 flex">
                          <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">

                            <span class="ml-3">SUPPRIMER</span>
                          </a>
                        </div>
                      </div>
                    </div> -->

                  </ul>

                </div>
              </div>


        </main>
      </div>
    </div>
    <script src="script.js"></script>

  </body>






<?php
} else {
  header("Location: index.php");
  exit();
}
?>