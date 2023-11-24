//  const burgermenu =document.querySelector(".burgermenu")
//  const sidebar=document.getElementById("sidebar")
//  burgermenu.addEventListener("click",()=>{
//     sidebar.classList.toogle("hidden")
//  })

  const burgermenu = document.querySelector(".burgermenu");

  const sidebar = document.getElementById("sidebar");
  burgermenu.addEventListener("click", () => {
    console.log("hjhhh")
    sidebar.classList.toggle("hidden");
  });

