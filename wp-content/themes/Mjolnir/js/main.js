$(document).ready(function () {
  var altura = $('.postagem__imagem-principal__imagem').height();
  var target = $('.postagem__ajuste');

  target.css('marginTop', altura);
});

//Hamburguer Menu Dropdown
$('.header-principal__menu').click(function() {
  // $(this).toggleClass('desativar');
  $('.header-principal__right').toggleClass('active');
  $('.header-principal__menu--menu-burguer').toggleClass('active');
});

$('.showcoupon').click(function() {
  $('.checkout_coupon').toggleClass('active');
});
$('.showlogin').click(function() {
  $('.woocommerce-form-login').toggleClass('active');
});


// animação no scroll
debounce = function(func, wait, immediate){
  var timeout;
  return function(){
    var context = this, args = arguments;
    var later = function(){
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};


/*Identificar o clique no menu
  Verificar o item que foi clicado e fazer a referência com o alvo
  Verificar a distância entre o alvo e o topo
  Animar o scrool até o alvo*/

$('header .barra-info .action a').click(function(e){
  e.preventDefault();

  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top

  $('html, body').animate({
    scrollTop: targetOffset
  }, 500);
});

// Menu Modal Login
$('.menu-login').click(function() {
  window.location.href = "https://sistema.preservtec.com.br/";
  // $(this).toggleClass('ativar');
  // $('.modal-login').toggleClass('ativar');
});

// Mudar tab ao click
$('[data-group]').each(function(){
	var $allTarget = $(this).find('[data-target]'),
			$allClick = $(this).find('[data-click]'),
			activeClass = 'active';

	$allTarget.first().addClass(activeClass);
	$allClick.first().addClass(activeClass);

	$allClick.click(function(e){
		e.preventDefault();

		var id = $(this).data('click'),
				$target = $('[data-target="' + id + '"]');

		$allClick.removeClass(activeClass);
		$allTarget.removeClass(activeClass);

		$target.addClass(activeClass);
		$(this).addClass(activeClass);
	});
});

function initMap() {
  var uluru = { lat: -8.061825, lng: -34.871674 };
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 18,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

// function([string1, string2],target id,[color1,color2])    
consoleText(
        ['Marketing Digital.', 'SEO & Analytics.', 'Facebook.', 'Instagram.', 'Mídias Sociais.', 'Landing Pages.', 'E-mail Marketing'], 
         'text', 
        ['#f3615f']
);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#f3615f'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function () {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function () {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function () {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function () {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}


