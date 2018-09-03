let menuVisible = false
let qlick = document.getElementById('menu__bar')
let mb = document.querySelector('nav')
const rwd = matchMedia('(max-width: 770px)')
form = document.getElementById('form');

if (qlick && mb) {
  qlick.addEventListener('click', e => {
    if (rwd.matches) {
      if (!menuVisible) {
        mb.style.transform = 'translateX(0%)'
        mb.style.transition = '0.5s'

        menuVisible = true
      } else {
        mb.style.transform = 'translateX(100%)'
        mb.style.transition = '0.5s'

        menuVisible = false
      }
    }
  })
}

  form.addEventListener('submit', e =>{
    e.preventDefault;
    console.log(e.target);
    alert(e);
  
  })


