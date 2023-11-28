//  const burgermenu =document.querySelector(".burgermenu")
//  const sidebar=document.getElementById("sidebar")
//  burgermenu.addEventListener("click",()=>{
//     sidebar.classList.toogle("hidden")
//  })

  const burgermenu = document.querySelector(".burgermenu");

  const sidebar = document.getElementById("sidebar");
  burgermenu.addEventListener("click", () => {
   
    sidebar.classList.toggle("hidden");
  });
  const fermernav = document.getElementById("fermernav");

  fermernav.addEventListener("click", () => {
    
    sidebar.classList.add("hidden");
  });

