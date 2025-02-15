
// Vérifie si la page est chargé, sinon marche pas
document.addEventListener('DOMContentLoaded', () => {

document.getElementById('openMenu').addEventListener('change', () => {
    // document.getElementById('menuInterface').classList.toggle('disactive')
    // document.getElementById('menuInterface').classList.toggle('active')
    document.getElementById('menuInterface').classList.toggle('op0')
    document.getElementById('menuInterface').classList.toggle('op1')
    document.getElementById('menuList').classList.toggle('op0')
    document.getElementById('menuList').classList.toggle('op1')
})

document.getElementById('toggleServices').addEventListener('click', () => {
    document.getElementById('menuServices').classList.toggle('op0')
    document.getElementById('menuServices').classList.toggle('op1')
})

})