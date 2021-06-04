// Textarea auto-grandit signUp
function adjust_textarea(h) {
  h.style.height = "20px";
  h.style.height = (h.scrollHeight)+"px";
}

/* Apparition signUp : Choix de largeur de la sidebar et de la marge gauche */
function openNav() {
document.getElementById("mySidebar").style.width = "600px";
document.getElementById("collapse").style.marginLeft = "600px";
}

/* Disparition signUp : Choix de largeur de la sidebar et de la marge gauche */
function closeNav() {
document.getElementById("mySidebar").style.width = "0";
document.getElementById("collapse").style.marginLeft = "0";
}


// Textarea auto-grandit signIn
function adjust_textarea(h) {
  h.style.height = "20px";
  h.style.height = (h.scrollHeight)+"px";
}

/* Apparition signIn : Choix de largeur de la sidebar et de la marge gauche */
function openNav2() {
document.getElementById("mySidebar2").style.width = "600px";
document.getElementById("collapse").style.marginLeft = "600px";
}

/* Disparition signIn : Choix de largeur de la sidebar et de la marge gauche */
function closeNav2() {
document.getElementById("mySidebar2").style.width = "0";
document.getElementById("collapse").style.marginLeft = "0";
}

// Disparition de la popup cookies
function closeCookies() {
  document.getElementById("overlay").style.display = "none";
}