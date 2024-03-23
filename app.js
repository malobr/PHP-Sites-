let navbar =  document.querySelector(".navbar");

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove("active");
    cardItem.classList.remove("active");
}

let searchForm =  document.querySelector(".search-form");

document.querySelector('#search').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove("active")
    cardItem.classList.remove("active");
}

let cardItem =  document.querySelector(".card-items-container");

document.querySelector('#cart-btn').onclick = () =>{
    cardItem.classList.toggle('active');
    navbar.classList.remove("active")
    searchForm.classList.remove("active");
}

window.onscroll = () =>{
    navbar.classList.remove("active")
    searchForm.classList.remove("active");
    cardItem.classList.remove("active");
}







function toggleDarkMode() {
    const body = document.body;
    body.classList.toggle("dark");

    // Verifica se a classe "dark" está presente no corpo
    const isDarkMode = body.classList.contains("dark");

    // Atualiza o background-color do body com base no modo
    body.style.backgroundColor = isDarkMode ? "#31373a": "#fff";

    // Armazena o tema no localStorage
    localStorage.setItem("theme", isDarkMode ? "dark" : "light");
}


