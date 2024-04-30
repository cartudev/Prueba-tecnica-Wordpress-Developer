
let search = document.querySelector('.search-field');
search.placeholder='Buscar';

// tiny-slider
  try {
    
      var slider = tns({
    "container": ".slider",
    "items": 3.5,
    "fixedWidth": 455,
    //"autoWidth": true,
    "speed": 400,
    "slideBy": "1",
    "mouseDrag": true,
    "swipeAngle": false,
    "speed": 400,
    "autoplay": true,
    "autoplayHoverPause": true,
    "autoplayButtonOutput": false,
    "controls": false,
    "nav": false,
//    "edgePadding": 50,
//    "gutter": 50,
  });

  } catch (error) {
    
  }


 
  //whatsapp form

  let isMobile = navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)



  function redirectToWhatsApp() {
    var message = document.getElementById("message").value;
    var postLink = window.location.href;
  
    /* validation */
      error_message = document.getElementById("error_message");
  
    var text;
  
  
    if (message == "") {
      text = "Por favor ingresa tu mensaje";
      error_message.setAttribute("data-text", text);
      return false;
    }
    /* Pengaturan Pesan */
  
    var walink = !isMobile ? "https://web.whatsapp.com/send/" : "https://api.whatsapp.com/send/"
      phoneNumber = "5493512534082"; // 
  
    var encodedMessage = encodeURIComponent(message);
    var whatsappUrl =
      walink + "?phone=" + phoneNumber + "&text=" + encodedMessage;
    window.open(whatsappUrl, "_blank");
    return true;
  }
  
  var inputs = document.querySelector(".whatsapp-card textarea");
  if (inputs){
    for (var i = 0; i < inputs.length; i++) {
    var input = input;
    input.addEventListener("input", function () {
      var bg = this.value ? "show" : "none";
      this.setAttribute("class", bg);
    });
  }}

  

// header js

function crearImagenes1(themeUrl) {
  var container = document.createElement('div');
  container.classList.add('header-image--container');
  var menuProductosLi = document.createElement('li');
  menuProductosLi.appendChild(container);
  
  var imagenes = [
      'Rectangle 3.jpg',
      'Rectangle 3-1.jpg',
      'Rectangle 3-1.jpg'
  ];
  
  imagenes.forEach(function(imagen) {
      var img = document.createElement('img');
      img.src = themeUrl + '/assets/img/' + imagen;
      container.appendChild(img);
  });
  
  return menuProductosLi;
}

// Función para crear el HTML del segundo bloque de imágenes
function crearImagenes2(themeUrl) {
  var container = document.createElement('div');
  container.classList.add('header-image--container');
  var menuProductosLi = document.createElement('li');
  menuProductosLi.appendChild(container);

  
  var imagenes = [
      'Rectangle 3.png',
      'Rectangle 4.png',
      'Rectangle 5.png'
  ];
  
  imagenes.forEach(function(imagen) {
      var img = document.createElement('img');
      img.src = themeUrl + '/assets/img/' + imagen;
      container.appendChild(img);
  });
  
  return menuProductosLi;
}

// Obtener la URL del tema
var themeUrl = themeData.themeUrl;

// Crear el primer bloque de imágenes
var imagenes1 = crearImagenes1(themeUrl);

// Agregar el primer bloque de imágenes al final de .container-menu .menu-products .sub-menu
var menuProductsSubMenu = document.querySelector('.container-menu .menu-products .sub-menu');
menuProductsSubMenu.appendChild(imagenes1);

// Crear el segundo bloque de imágenes
var imagenes2 = crearImagenes2(themeUrl);

// Agregar el segundo bloque de imágenes al final de .container-menu .menu-about-us .sub-menu
var menuAboutUsSubMenu = document.querySelector('.container-menu .menu-about-us .sub-menu');
menuAboutUsSubMenu.appendChild(imagenes2);

var elementosAnchor = document.getElementsByTagName('a');

// Iterar sobre cada elemento <a>
for (var i = 0; i < elementosAnchor.length; i++) {
    // Verificar si el contenido del elemento <a> es igual a 'dasdasdas'
    if (elementosAnchor[i].textContent.trim() === 'subtodelete') {
        // Eliminar el elemento <a> si el contenido coincide
        elementosAnchor[i].parentNode.removeChild(elementosAnchor[i]);
    }
}



console.log(temaUrl);

