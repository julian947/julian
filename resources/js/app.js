/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

var tema = document.getElementById('tema');
var cuerpo = document.getElementById('body');
var theme = document.getElementById('result');
storagetheme = localStorage.getItem("storagetheme");

if(storagetheme == 'oscuro'){
result.innerHTML += 'oscuro';
$(cuerpo).addClass( "black" );
}else{result.innerHTML += 'claro'}

$(tema).click(function() {
  $( cuerpo ).toggleClass( "black" );
  revisartema();
});


function revisartema(){
storagetheme = localStorage.getItem("storagetheme");
if(storagetheme == 'oscuro'){
    localStorage.setItem("storagetheme", "claro");
    result.innerHTML = 'Cambio a claro';
    return false;
}
if(storagetheme == 'claro'){
    localStorage.setItem("storagetheme", "oscuro");
}
if(storagetheme == null){
    localStorage.setItem("storagetheme", "oscuro");
}
    result.innerHTML = 'Cambio a oscuro';

};


$(document).ready(function(){
	var imgItems = $('.slider li').length; // Numero de Slides
	var imgPos = 1;

	// Agregando paginacion --
	for(i = 1; i <= imgItems; i++){
		$('.paginacion').append('<li><span class="fa fa-circle"></span></li>');
	}
	//------------------------

	$('.slider li').hide(); // Ocultanos todos los slides
	$('.slider li:first').show(); // Mostramos el primer slide
	$('.paginacion li:first').css({'color': '#CD6E2E'}); // Damos estilos al primer item de la paginacion

	// Ejecutamos todas las funciones
	$('.paginacion li').click(paginacion);
	$('.right span').click(proximaImagen);
	$('.left span').click(anteriorImagen);


	setInterval(function(){
		proximaImagen();
	}, 1000);

	// FUNCIONES =========================================================

	function paginacion(){
		var paginacionPos = $(this).index() + 1; // Posicion de la paginacion seleccionada

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ paginacionPos +')').fadeIn(); // Mostramos el Slide seleccionado

		// Dandole estilos a la paginacion seleccionada
		$('.paginacion li').css({'color': '#858585'});
		$(this).css({'color': '#CD6E2E'});

		imgPos = paginacionPos;

	}

	function proximaImagen(){
		if( imgPos >= imgItems){imgPos = 1;}
		else {imgPos++;}

		$('.paginacion li').css({'color': '#858585'});
		$('.paginacion li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado

	}

	function anteriorImagen(){
		if( imgPos <= 1){imgPos = imgItems;}
		else {imgPos--;}

		$('.paginacion li').css({'color': '#858585'});
		$('.paginacion li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

		$('.slider li').hide(); // Ocultamos todos los slides
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
	}

});
