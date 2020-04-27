//Eliminar
function eliminar(id) {
  if(confirm("Desea eliminar el registro?")) {
    window.location = "controlador.php?operacion=eliminar&id="+id;
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {});
});

//Ini select
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, {});
});

$(document).ready(function() {
	//Cerrar status
	$(".statusBox__close").click(function(){
		$(".statusBox").slideUp();
	});
})