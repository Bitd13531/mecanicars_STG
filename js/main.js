let menuVisible = false
let qlick = document.getElementById('menu__bar')
let mb = document.querySelector('nav')
let form = document.getElementById('form')
const rwd = matchMedia('(max-width: 770px)')
      boton = document.getElementById('bto_send')
      validarReCaptcha = document.getElementById('recaptcha');




//menu responsive

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

  boton.addEventListener('click', e =>{
    let respuesta = grecaptcha.getResponse();
    if(respuesta){

    }else{
      e.preventDefault
      let mensaje = alert('Su mensaje no puede ser enviado hasta no validar el recaptcha');
      document.getElementById('name').focus;
      
    }
  
  })


