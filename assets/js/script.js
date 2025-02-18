
// Vérifie si la page est chargé, sinon marche pas
document.addEventListener('DOMContentLoaded', () => {

document.getElementById('openMenu').addEventListener('change', () => {
    document.getElementById('menuInterface').classList.toggle('z-40')
    // document.getElementById('menuInterface').classList.toggle('active')
    document.getElementById('menuInterface').classList.toggle('op0')
    document.getElementById('menuInterface').classList.toggle('op1')
    document.getElementById('menuList').classList.toggle('op0')
    document.getElementById('menuList').classList.toggle('op1')
    // document.querySelector('.moreInfos').classList.toggle('z-30')
})

document.getElementById('toggleServices').addEventListener('click', () => {
    document.getElementById('menuServices').classList.toggle('op0')
    document.getElementById('menuServices').classList.toggle('op1')
    document.getElementById('servicesDivider').classList.toggle('op0')
    document.getElementById('servicesDivider').classList.toggle('op1')
})


const swiper = new Swiper('.swiper', {
    // Optional parameters
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