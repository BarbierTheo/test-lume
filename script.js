
// Vérifie si la page est chargé, sinon marche pas
document.addEventListener('DOMContentLoaded', () => {

document.getElementById('openMenu').addEventListener('change', () => {
    document.getElementById('menuInterface').classList.toggle('hidden')
})

})