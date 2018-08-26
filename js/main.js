let menuVisible = false;
let qlick = document.getElementById('menu__bar')
let mb = document.querySelector('nav')
if (qlick && mb){

qlick.addEventListener('click', e =>{
        
    if (!menuVisible){
        mb.style.transform = 'translateX(0%)'
        mb.style.transition = '0.5s'
        
        menuVisible = true;
    }else {
        mb.style.transform = 'translateX(100%)'
        mb.style.transition = '0.5s'
        
        menuVisible = false;
    }
    
})
}