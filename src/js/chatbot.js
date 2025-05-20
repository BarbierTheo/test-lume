console.log(5)

document.getElementById('openChatbot').addEventListener('click', () => {
    document.getElementById('chatbot').classList.toggle('hidden');
    document.getElementById('chatbot').classList.toggle('flex');
})

document.getElementById('closeChatbot').addEventListener('click', () => {
    document.getElementById('chatbot').classList.toggle('hidden');
    document.getElementById('chatbot').classList.toggle('flex');
})

const chatbot = document.getElementById('interfaceChatbot');
const hero = document.getElementById('hero');

console.log(hero)
console.log(chatbot)


window.addEventListener('scroll', () => {
    const heroHeight = hero.offsetHeight;
    const scrollY = window.scrollY || window.pageYOffset;

    if (scrollY > heroHeight - 800) {
        chatbot.classList.remove('opacity-0', 'pointer-events-none');
    } else {
        chatbot.classList.add('opacity-0', 'pointer-events-none');
    }
});