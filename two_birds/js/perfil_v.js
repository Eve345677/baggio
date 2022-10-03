const principal = document.getElementById('principal');
const nav_principal = document.getElementById('nav_principal');
const informes = document.getElementById('informes');
const nav_informes = document.getElementById('nav_informes');

function principal_aparecer() {
    informes.style.display = "none";
    principal.style.display = "flex";
    nav_informes.style.textDecoration = "none";
    nav_principal.style.textDecoration = "underline";
}
function informes_aparecer() {
    principal.style.display = "none";
    informes.style.display = "flex";
    nav_principal.style.textDecoration = "none";
    nav_informes.style.textDecoration = "underline";
}