
const imagens = [
  'assets/img/home.png',
  'assets/img/home2.png',
  'assets/img/home3.png',
  'assets/img/home.png',
  'assets/img/home3.png'
];

 let index = 0;
    const overlay = document.querySelector('#home .overlay');

    function trocarImagem() {
      overlay.style.backgroundImage = `url('${imagens[index]}')`;
      index = (index + 1) % imagens.length;
    }

    trocarImagem();
    setInterval(trocarImagem, 3000); // troca a cada 10s