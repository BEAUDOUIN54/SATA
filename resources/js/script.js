
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}


/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
	document.getElementById("mySidebar").style.width = "250px";
	document.getElementById("collapse").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
	document.getElementById("mySidebar").style.width = "0";
	document.getElementById("collapse").style.marginLeft = "0";
  }