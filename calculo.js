function validar() {
  var n1 = document.f1.numero1.value;
  var n2 = document.f1.numero2.value;
  var op = document.f1.txtopcion.value;
  var es = document.getElementById("escondido");

  if(n1==""||n2==""||op=="99"){
    es.innerHTML("Faltan Datos");
  }else{
    isNaN()
    document.f1.submit();
  }
}
