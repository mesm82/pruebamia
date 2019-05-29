// funciones bien chidoris

// inicializar el datepicker

/*document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems, options);
});

  // Or with jQuery

$(document).ready(function(){
  $('.datepicker').datepicker({
    firstDay: 1,                // 1 para lunes como primer díad de la semana, 0 para domingo
    format: 'dd mm yyyy',         // formato de la fecha
    defaultDate: '01 01 2018' ,
    setDefaultDate: true,
    showClearBtn: true,
  });
});*/

// inicializar el select
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
  $('select').formSelect();
});

//valida el formulario
function validarFormulario(op)
{     
  var campo=new Array("cedula","nombre","fechaNac", "sexo");
  var resultado=new Array("Cédula","Nombre","Fecha", "Sexo");
  var error="";
  for(var i=0;i<campo.length;i++)
  {
    if((document.getElementById(campo[i]).value=="")||(document.getElementById(campo[i]).value=="-1"))
    {
      error=error+"-"+resultado[i]+"\n";
    }
  }
  if (error!="")
  {
   alert("Error de validaci\u00f3n, complete los siguentes campos: \n"+error);  
  }
  else
  {
    if (op==1) {

    }
        document.location.href="objetos/objeto.php?cedula="+document.getElementById('cedula').value+"&nombre="+document.getElementById('nombre').value+"&fechaNac="+document.getElementById('fechaNac').value+"&sexo="+document.getElementById('sexo').value+"&op="+1; 
  }
}