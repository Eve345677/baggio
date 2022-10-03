const favoritos = document.getElementById('favoritos');
const nav_favoritos = document.getElementById('nav_favoritos');
const principal = document.getElementById('principal');
const nav_principal = document.getElementById('nav_principal');
const informes = document.getElementById('informes');
const nav_informes = document.getElementById('nav_informes');
const usuarios = document.getElementById('usuarios');
const nav_usuarios = document.getElementById('nav_usuarios');
const buzon = document.getElementById('buzon');
const nav_buzon = document.getElementById('nav_buzon');
const origen = document.getElementById('origen');
const config = document.getElementById('config');
const eliminar_us = document.getElementById('eliminar_us');
const rango_us = document.getElementById('rango_us');
const rango_us_prin = document.getElementById('rango_us_prin');
const rango_us_ascender = document.getElementById('rango_us_ascender');
const rango_us_degradar = document.getElementById('rango_us_degradar');
const sec_asc = document.getElementById('sec_asc');
const sec_deg = document.getElementById('sec_deg');
const info_usuario = document.getElementById('info_usuario');
const cambiar_nombre = document.getElementById('cambiar_nombre');
const cambiar_email = document.getElementById('cambiar_email');
const cambiar_contraseña = document.getElementById('cambiar_contraseña');
var id;

function principal_aparecer() {
    favoritos.style.display = "none";
    if (usuarios) {
        usuarios.style.display = "none";
    }
    informes.style.display = "none";
    buzon.style.display = "none";
    principal.style.display = "flex";
    nav_favoritos.style.textDecoration = "none";
    nav_informes.style.textDecoration = "none";
    nav_buzon.style.textDecoration = "none";
    if (nav_usuarios) {
        nav_usuarios.style.textDecoration = "none";
    }
    nav_principal.style.textDecoration = "underline";
}

function favoritos_aparecer() {
    principal.style.display = "none";
    informes.style.display = "none";
    if (usuarios) {
        usuarios.style.display = "none";
    }
    buzon.style.display = "none";
    favoritos.style.display = "flex";
    nav_principal.style.textDecoration = "none";
    nav_buzon.style.textDecoration = "none";
    nav_informes.style.textDecoration = "none";
    if (nav_usuarios) {
        nav_usuarios.style.textDecoration = "none";
    }
    nav_favoritos.style.textDecoration = "underline";
}

function informes_aparecer() {
    principal.style.display = "none";
    if (usuarios) {
        usuarios.style.display = "none";
    }
    buzon.style.display = "none";
    favoritos.style.display = "none";
    informes.style.display = "flex";
    nav_principal.style.textDecoration = "none";
    nav_buzon.style.textDecoration = "none";
    nav_favoritos.style.textDecoration = "none";
    if (nav_usuarios) {
        nav_usuarios.style.textDecoration = "none";
    }
    nav_informes.style.textDecoration = "underline";
}

function usuarios_aparecer() {
    principal.style.display = "none";
    informes.style.display = "none";
    buzon.style.display = "none";
    favoritos.style.display = "none";
    if (usuarios) {
        usuarios.style.display = "flex";
    }
    nav_principal.style.textDecoration = "none";
    nav_buzon.style.textDecoration = "none";
    nav_favoritos.style.textDecoration = "none";
    nav_informes.style.textDecoration = "none";
    if (nav_usuarios) {
        nav_usuarios.style.textDecoration = "underline";
    }
}

function buzon_aparecer() {
    principal.style.display = "none";
    if (usuarios) {
        usuarios.style.display = "none";
    }
    favoritos.style.display = "none";
    informes.style.display = "none";
    buzon.style.display = "flex";
    nav_principal.style.textDecoration = "none";
    nav_informes.style.textDecoration = "none";
    nav_favoritos.style.textDecoration = "none";
    if (nav_usuarios) {
        nav_usuarios.style.textDecoration = "none";
    }
    nav_buzon.style.textDecoration = "underline";
}

function eliminar_us_abrir(id) {
    origen.style.display = "none";
    if (eliminar_us) {
        eliminar_us.style.display = "block";
    }
    document.getElementById('sec').value = id;
}

function eliminar_us_cerrar() {
    if (eliminar_us) {
        eliminar_us.style.display = "none";
    }
    origen.style.display = "block";
}

function rango_us_abrir(ad) {
    origen.style.display = "none";
    if (rango_us) {
        rango_us.style.display = "block";
        rango_us_degradar.style.display = "none";
        rango_us_ascender.style.display = "none";
        rango_us_prin.style.display = "block";
    }
    sec_asc.value = ad;
    sec_deg.value = ad;
}

function rango_us_cerrar() {
    if (rango_us) {
        rango_us.style.display = "none";
    }
    origen.style.display = "block";
}

function rango_us_asc() {
    rango_us_prin.style.display = "none";
    rango_us_degradar.style.display = "none";
    if (rango_us_ascender) {
        rango_us_ascender.style.display = "block";
    }
}

function rango_us_deg() {
    rango_us_prin.style.display = "none";
    rango_us_ascender.style.display = "none";
    if (rango_us_degradar) {
        rango_us_degradar.style.display = "block";
    }
}

function modificar_vent(data) {
    const tag = document.getElementById(data);
    const span = document.createElement("span");
    span.setAttribute("class", "bg-dark text-white");
    span.setAttribute("style", "padding:5px; opacity:0.9;");
    const texto = document.createTextNode("Modificar " + data);
    span.appendChild(texto);
    tag.appendChild(span);
}

function eliminar_vent(data) {
    const tag = document.getElementById(data);
    tag.removeChild(tag.lastElementChild);
}

function configuracion() {
    origen.style.display = "none";
    config.style.display = "block";
}

function configuracion_salir() {
    origen.style.display = "block";
    config.style.display = "none";
}

function nombre_change() {
    cambiar_nombre.style.display = "block";
    cambiar_contraseña.style.display = "none";
    cambiar_email.style.display = "none";
    info_usuario.style.display = "none";
}

function email_change() {
    cambiar_nombre.style.display = "none";
    cambiar_contraseña.style.display = "none";
    cambiar_email.style.display = "block";
    info_usuario.style.display = "none";
}

function contra_change() {
    cambiar_nombre.style.display = "none";
    cambiar_contraseña.style.display = "block";
    cambiar_email.style.display = "none";
    info_usuario.style.display = "none";
}

function volver_infousu() {
    cambiar_nombre.style.display = "none";
    cambiar_contraseña.style.display = "none";
    cambiar_email.style.display = "none";
    info_usuario.style.display = "block";
}