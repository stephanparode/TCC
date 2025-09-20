
//mudança de cores ao selecionar

document.addEventListener('DOMContentLoaded', () => {
    const menuItem = document.querySelectorAll('.item-menu'); // cria o array com os elementos da classe

    function selectLink(event) {
        menuItem.forEach(item => item.classList.remove('ativo')); // remove a classe ativo dos elementos estáticos
        this.classList.add('ativo'); // adiciona a classe ativo aos elementos selecionados
    }

    menuItem.forEach(item => item.addEventListener('click', selectLink));
});


//expandir o menu

var btnExp = document.querySelector('#btn-exp')
var menuSide = document.querySelector('.menu-lateral')
var imagem = document.querySelector ('#logo')
var conteudo = document.querySelector ('.conteudo')
var section = document.querySelector ('.section')

btnExp.addEventListener('click', function(){
    menuSide.classList.toggle('expandir')
    imagem.classList.toggle('expandirlogo')
    conteudo.classList.toggle('expandir')
    section.classList.toggle('expandir')
})