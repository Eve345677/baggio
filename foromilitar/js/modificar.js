function modificacion_salir(){
	const caja = document.getElementById("modificacion");
	caja.style.display = "none";
}

function modificacion_nombre(){
	const caja = document.getElementById("modificacion_id_nombre");
	caja.style.display = "block";
}
function modificacion_tipo(){
	const caja = document.getElementById("modificacion_id_tipo");
	caja.style.display = "block";
}
function modificacion_nacionalidad(){
	const caja = document.getElementById("modificacion_id_nacionalidad");
	caja.style.display = "block";
}
function modificacion_precio(){
	const caja = document.getElementById("modificacion_id_precio");
	caja.style.display = "block";
}
function modificacion_nombre_salir(){
	const caja = document.getElementById("modificacion_id_nombre");
	caja.style.display = "none";
}

function modificacion_tipo_salir(){
	const caja = document.getElementById("modificacion_id_tipo");
	caja.style.display = "none";
}

function modificacion_nacionalidad_salir(){
	const caja = document.getElementById("modificacion_id_nacionalidad");
	caja.style.display = "none";
}

function modificacion_precio_salir(){
	const caja = document.getElementById("modificacion_id_precio");
	caja.style.display = "none";
}
document.querySelector(".menu-btn").addEventListener("click", () => {
	document.querySelector(".nav-menu").classList.toggle("show");
  });
  
  ScrollReveal().reveal('.showcase');
  ScrollReveal().reveal('.news-cards', { delay: 500 });
  ScrollReveal().reveal('.cards-banner-one', { delay: 500 });
  ScrollReveal().reveal('.cards-banner-two', { delay: 500 });
  
  