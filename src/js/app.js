document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    changeQuotes();
});

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu')

    mobileMenu.addEventListener('click', navegacionResponsive)

    function navegacionResponsive(){
        const navegacion = document.querySelector('.navegacion')
        
        navegacion.classList.toggle('mostrar')
    }
}

function changeQuotes() {
    const quotes = [
        {
            text: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur blanditiis ad libero a sequi debitis.",
            author: "Pedro Meza"
        },
        {
            text: "La vida es aquello que te sucede mientras estás ocupado haciendo otros planes.",
            author: "John Lennon"
        },
        {
            text: "El propósito de nuestra vida es ser felices.",
            author: "Dalai Lama"
        },
        {
            text: "Cree que puedes y ya estás a medio camino.",
            author: "Theodore Roosevelt"
        },
        {
            text: "No hay atajos para cualquier lugar al que valga la pena ir.",
            author: "Beverly Sills"
        }
    ];

    const blockquote = document.querySelector('.recomendacion blockquote');
    const author = document.querySelector('.recomendacion p');

    setInterval(function() {
        const randomIndex = Math.floor(Math.random() * quotes.length);
        const quote = quotes[randomIndex];
        blockquote.textContent = quote.text;
        author.textContent = "- " + quote.author;
    }, 3000);
}