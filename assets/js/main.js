$(document).ready(function() {
  var contador = 1;

  //Agregar curso
  $("#addCur").on("click", function(e) {
    e.preventDefault();

    //Contador
    contador++;

    //Objetos
    var exp = $(".exp-curso").first().clone();
    var inst = $(".inst-curso").first().clone();
    var hora = $(".hora-curso").first().clone();

    $(exp).removeClass('id1').addClass('id'+contador);
    $(inst).removeClass('id1').addClass('id'+contador);
    $(hora).removeClass('id1').addClass('id'+contador);

    $('#buttonAdd').before(exp,inst,hora);

    var button = document.querySelector('.id'+contador+' .delCur');
    button.dataset.cursoid = contador;
  });

  //Eliminar Curso
  $("#formData").on("click", ".delCur", function(e) {
    e.preventDefault();
    var id = e.target.dataset.cursoid;
    if (id != 999){
      $('.id'+id).remove();
    }else {
      alert("Tiene que poner mínimo un curso");
    }
  });

  //Agregar exp
  var contadorE = 1;
  //Agregar curso
  $("#addExp").on("click", function(e) {
    e.preventDefault();

    //Contador
    contadorE++;

    //Objetos
    var emp = $(".empresa-exp").first().clone();
    var carg = $(".cargo-exp").first().clone();
    var hora = $(".hora-exp").first().clone();

    $(emp).removeClass('idE1').addClass('idE'+contadorE);
    $(carg).removeClass('idE1').addClass('idE'+contadorE);
    $(hora).removeClass('idE1').addClass('idE'+contadorE);

    $('#buttonAddE').before(emp,carg,hora);

    var button = document.querySelector('.idE'+contadorE+' .delExp');
    button.dataset.expid = contadorE;
  });

  //Eliminar Exp
  $("#formData").on("click", ".delExp", function(e) {
    e.preventDefault();
    var id = e.target.dataset.expid;
    if (id != 999){
      $('.idE'+id).remove();
    }else {
      alert("Tiene que poner mínimo un curso");
    }
  });

  //Agregar ref
  var contadorR = 1;
  //Agregar curso
  $("#addRef").on("click", function(e) {
    e.preventDefault();

    //Contador
    contadorR++;

    //Objetos
    var name = $(".nombre-ref").first().clone();
    var telf = $(".telf-ref").first().clone();

    $(name).removeClass('idR1').addClass('idR'+contadorR);
    $(telf).removeClass('idR1').addClass('idR'+contadorR);

    $('#buttonAddR').before(name,telf);

    var button = document.querySelector('.idR'+contadorR+' .delRef');
    button.dataset.refid = contadorR;
  });

  //Eliminar Exp
  $("#formData").on("click", ".delRef", function(e) {
    e.preventDefault();
    var id = e.target.dataset.refid;
    if (id != 999){
      $('.idR'+id).remove();
    }else {
      alert("Tiene que poner mínimo un curso");
    }
  });


  //Submit
  $("#buttonOK").on("click", function(e) {
    console.log("Enviando");
  });
});