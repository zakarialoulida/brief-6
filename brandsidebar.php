<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>



  <div class="min-h-[640px] bg-gray-100" x-data="{ open: false }" @keydown.window.escape="open = false">





    <div id="sidebar" class=" hidden fixed w-full lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0  ">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex-1 flex flex-col min-h-0 bg-indigo-700">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow">
          </div>
          <nav class="mt-5 flex-1 px-2 space-y-1">

            <a href="#" class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              Dashboard
            </a>

            <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
              </svg>
              Team
            </a>

            <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
              </svg>
              Projects
            </a>


          </nav>
        </div>
        <div class="flex-shrink-0 flex border-t border-indigo-800 p-4">
          <a href="#" class="flex-shrink-0 w-full group block">
            <div class="flex items-center">
              <div>
                <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-white">
                  Tom Cook
                </p>
                <p class="text-xs font-medium text-indigo-200 group-hover:text-white">
                  View profile
                </p>
              </div>
            </div>
          </a>
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
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
          </div>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="bg-gray-100 py-8">
              <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">





                  <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="flex-1 flex flex-col p-8">
                      <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="https://images.unsplash.com/photo-1520813792240-56fc4a3765a7?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                      <h3 class="mt-6 text-gray-900 text-sm font-medium">Esther Howard</h3>
                      <div class="mt-1 flex-grow flex flex-col justify-between">

                        <div class="text-gray-500 text-sm">Assurance Administrator</div>

                        <div class="mt-3">
                          <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">Admin</span>
                        </div>
                      </div>
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
                    </div>
                  </li>

                  <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="flex-1 flex flex-col p-8">
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
                    </div>
                  </li>





                </ul>

              </div>
            </div>


      </main>
    </div>
  </div>
<script >
  const burgermenu = document.querySelector(".burgermenu");

const sidebar = document.getElementById("sidebar");
burgermenu.addEventListener("click", () => {
  console.log("hjhhh")
  sidebar.classList.toggle("hidden");
});
</script>

</body>

</html>