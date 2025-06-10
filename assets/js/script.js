
const imagens = [
  'assets/img/home.png',
  'assets/img/back2.jpeg',
  'assets/img/beck3.jpeg',
  'assets/img/home.png',
  'assets/img/home.png'
];

 let index = 0;
    const overlay = document.querySelector('#home .overlay');

    function trocarImagem() {
      overlay.style.backgroundImage = `url('${imagens[index]}')`;
      index = (index + 1) % imagens.length;
    }

    trocarImagem();
    setInterval(trocarImagem, 3000); // troca a cada 10s