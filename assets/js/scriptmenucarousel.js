// Vérifie si la page est chargé, sinon marche pas
document.addEventListener("DOMContentLoaded", () => {
  let state = "";
  let open = false;

  // Ouverture menu hamburger
  document.getElementById("openMenu").addEventListener("change", () => {

    const menuInterface = document.getElementById("menuInterface");

    let delay = 400;

    if (open) {
      document.querySelector(".secondstate").innerHTML = ''
      for (let i = 1; i <= 4; i++) {
        document
          .querySelector(`.entryMenu${i}`)
          .classList.remove(
            "animate-fade-right",
            `animate-duration-[500ms]`,
            "animate-ease-in-out",
            "opacity-0"
          );
        document.querySelector(
          `.entryMenu${i}`
        ).style.animationDelay = `${delay}ms`;
        document.querySelector(
          `.entryMenu${i}`
        ).style.opacity = `0`;
        delay = delay + 250;
      }

      menuInterface.style.opacity = "0";
      setTimeout(() => {
        menuInterface.classList.toggle("z-40");
        menuInterface.classList.toggle("hidden");
        menuInterface.classList.toggle("flex");
      }, 800);

    } else {

      for (let i = 1; i <= 4; i++) {
        document
          .querySelector(`.entryMenu${i}`)
          .classList.add(
            "animate-fade-right",
            `animate-duration-[500ms]`,
            "animate-ease-in-out",
            "opacity-0"
          );
        document.querySelector(
          `.entryMenu${i}`
        ).style.animationDelay = `${delay}ms`;
        document.querySelector(
          `.entryMenu${i}`
        ).style.opacity = `0`;
        delay = delay + 100;
      }

      menuInterface.classList.toggle("hidden");
      menuInterface.classList.toggle("flex");
      menuInterface.classList.toggle("z-40");
      menuInterface.style.opacity = "1";

    }


    open == true ? (open = false) : (open = true);
    state = "";

  });



  // ***************************************************************** 
  // TOGGLE SERVICES 
  // *****************************************************************
  
  document
    .getElementById("toggleServices")
    .addEventListener("click", showServices);

  // Ouverture menu services
  function showServices() {
    if (state !== "services") {
      document.querySelector(".secondstate").innerHTML = `
              <div class="hidden lg:block w-0 lg:w-[0.1rem] rounded-lg bg-gray-400 " style="height: 0; opacity: 0; transition: height 1s ease-in-out, opacity 1s ease-in-out;" id="barServices"></div>
              <div class="flex flex-col menu" id="menuServices" style="width : 0; white-space: nowrap; height: 0; opacity: 0; transition: width 1s ease, opacity 1s ease-in-out;">
                  <ul class="text-gray-400 font-light text-xl lg:text-4xl flex flex-col gap-5 text-center lg:text-left">
                      <li><a href="" class="hover:text-gray-500 transition-all duration-200">Architecture</a></li>
                      <li><a href="" class="hover:text-gray-500 transition-all duration-200">Rendus & Visuels 3D</a></li>
                      <li><a href="" class="hover:text-gray-500 transition-all duration-200">Conseils & accompagnements</a></li>
                  </ul>
              </div>`;

      const menu = document.getElementById("menuServices");
      const bar = document.getElementById("barServices");

      setTimeout(() => {
        menu.style.height = menu.scrollHeight + "px";
        menu.style.opacity = "1";
        menu.style.width = menu.scrollWidth + "px";

        bar.style.height = menu.scrollHeight + "px";
        bar.style.opacity = "1";
      }, 300);

      state = "services";
    } else {
      const menu = document.getElementById("menuServices");
      const bar = document.getElementById("barServices");

      menu.style.width = "0";
      menu.style.opacity = "0";

      bar.style.height = "0px";
      bar.style.opacity = "0";

      setTimeout(() => {
        document.querySelector(".secondstate").innerHTML = "";
      }, 700);

      state = "";
    }
  }

  // if state = "services" et click sur entrymenu 1, crée une ul avec les li en col en dessous de entrymenu 1 et animer height



  // Réglages carousel
  const swiperHeader = new Swiper(".swiperHeader", {
    direction: "horizontal",
    loop: true,
    autoplay: {
      delay: 20000,
    },
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
  });

  var swiper = new Swiper(".swiperProjects", {
    effect: "cards",
    grabCursor: true,
  });

});
