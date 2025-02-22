// Vérifie si la page est chargé, sinon marche pas
document.addEventListener('DOMContentLoaded', () => {

  let state = ''
  let open = false

  // Ouverture menu hamburger
  document.getElementById('openMenu').addEventListener('change', () => {

    document.getElementById('menuInterface').classList.toggle('z-40')
    document.getElementById('menuInterface').classList.toggle('op0')
    document.getElementById('menuInterface').classList.toggle('op1')

    let delay = 600

    for (let i = 1; i <= 4; i++) {

      document.querySelector(`.entryMenu${i}`).classList.toggle('animate-fade-right', `animate-duration-[600ms]`, `animate-delay-[${delay}ms]`, 'animate-ease-in-out')
      delay = delay + 200
      console.log(document.querySelector(`.entryMenu${i}`))

    }

    open == true ? open = false : open = true
    state = ''

  })

  // N'est pas toggle
  document.getElementById('toggleServices').addEventListener('click', showServices)

  // Ouverture menu services
  function showServices() {

    if (state !== 'services') {
      document.querySelector('.secondstate').innerHTML = `
              <div class="w-[0.1rem] h-0 rounded-lg bg-gray-400></div>
              <div class="flex flex-col menu" id="menuServices" style="width : 0; white-space: nowrap; height: 0; opacity: 0; transition: width 1s ease, opacity 1s ease-in-out;">
                  <ul class="text-gray-400 font-bold text-xl lg:text-4xl flex flex-col gap-5 text-center lg:text-left">
                      <li><button class="hover:text-gray-600 transition-all duration-200">Architecture</button></li>
                      <li><button class="hover:text-gray-600 transition-all duration-200">Rendus & Visuels 3D</button></li>
                      <li><button class="hover:text-gray-600 transition-all duration-200">Conseils & accompagnements</button></li>
                  </ul>
              </div>`

      const menu = document.getElementById('menuServices')

      setTimeout(() => {

        menu.style.height = menu.scrollHeight + 'px'
        menu.style.opacity = '1'
        menu.style.width = menu.scrollWidth + 'px';

      }, 300)

      state = 'services'

    } else {

      const menu = document.getElementById('menuServices')

      menu.style.width = '0';
      menu.style.opacity = '0';

      setTimeout(() => {
        document.querySelector('.secondstate').innerHTML = '';
      }, 600);

      state = ''

    }

  }









  // Réglages carousel
  const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 20000,
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
  });


})