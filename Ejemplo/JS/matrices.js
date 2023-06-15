var contenedor = document.getElementById("contenedor");
var input = document.getElementById("input_cantidad");
var input2 = document.getElementById("input_numero");
var formularioVisible = false;
var filas = 12;
var columnas = 1;

for (var i = 0; i < filas; i++) {
  for (var j = 0; j < columnas; j++) {
    (function () {
      var boton = document.createElement("button");
      boton.classList.add("btn", "btn-success");

      boton.innerHTML = "Estacionamiento " + ((i * columnas + j)+1);

      contenedor.appendChild(boton);

      boton.id = "boton1";

      var botonSeleccionado = null;

      let contador = 0;
      let numero = (i * columnas + j)+1;

      boton.addEventListener("click", function () {
        this.classList.remove("btn-success");
        this.classList.add("btn-primary");
        boton.disabled = true;
        var botonExiste = document.getElementById("boton2");
        deshabilitarBotones();
        if (botonExiste) {
          console.log("El boton ya existe");
          this.classList.toggle("btn-success");
          boton.disabled = true;
        } else {
          
          input2.value = numero;
          var boton2 = document.createElement("button");
          boton2.classList.add("btn", "btn-danger");
          boton2.id = "boton2";
          boton2.innerHTML = "Confirmar";
          contenedor.appendChild(boton2);

          boton2.addEventListener("click", function () {
            boton.classList.remove("btn-primary");
            var confirmar = confirm("Seguro de tu selección?");
            if(confirmar == true){
                deshabilitarBotones();
                boton.classList.add("btn-warning");
                contenedor.removeChild(boton2)
                var boton3 = document.createElement("button");
                boton3.classList.add("btn", "btn-primary");
                boton3.innerHTML = "Gestionar arriendo";
                contenedor.appendChild(boton3);
                boton3.id = "boton3";
                var boton4 = document.createElement("button");
                boton4.classList.add("btn", "btn-secondary");
                boton4.innerHTML = "Confirmar llegada";
                boton4.id = "boton4";
                contador = contador + 1;
                contenedor.appendChild(boton4);
                boton4.disabled = false;
                boton4.addEventListener("click", function(){
                  alert("has llegado a tu destino");
                  boton.classList.remove("btn-warning");
                  boton.classList.add("btn-danger");
                  contenedor.removeChild(boton4);
                  contenedor.removeChild(boton3);
                  contador = contador + 1;
                  var boton5 = document.createElement("button");
                  boton5.classList.add("btn", "btn-info");
                  boton5.innerHTML = "Terminar arriendo";
                  boton5.id = "boton5";
                  contenedor.appendChild(boton5);
                  boton5.disabled = false;
                  boton5.addEventListener("click", function(){
                    var confirmar3 = confirm("¿Desea terminar su arriendo?");
                    if(confirmar3 == true){
                      alert("Gracias por venir, vuelva pronto");
                      habilitarBotones();
                      boton.classList.remove("btn-danger");
                      boton.classList.add("btn-success");
                      contenedor.removeChild(boton5);
                      var boton6 = document.createElement("button");
                      boton6.classList.add("btn", "btn-dark");
                      boton6.innerHTML = "Total de arriendos";
                      boton6.id = "boton6";
                      contenedor.appendChild(boton6);
                      boton6.addEventListener("click", function(){
                        input.value = contador;
                        console.log("La cantidad de veces usado el", boton.innerHTML ," :", input.value);
                        contenedor.removeChild(boton6);
                        let boton7 = document.createElement("button");
                        boton7.classList.add("btn", "btn-dark");
                        boton7.innerHTML = "Generar informe";
                        boton7.id = "boton7"
                        contenedor.appendChild(boton7);
                        boton7.addEventListener("click", function(){
                          var formulario = document.getElementById("informe");
                          var label = document.getElementById("label1");
                          if(formulario.style.display = "block"){
                            console.log("El formulario ya fue creado");
                          }else{
                            formulario.style.display = "block";
                        
                          }
                          label.textContent = "La cantidad de arriendos en el " +  boton.innerText + " fue de: " + input.value;
                          contenedor.removeChild(boton7);
                        });
                        
                      })
                    }
                  });
                });
                boton3.addEventListener("click", function(){
                  var confirmar2 = confirm("¿Quieres cancelar tu arriendo?");
                  if(confirmar2 == true){
                    boton.classList.remove("btn-warning");
                    boton.classList.add("btn-success");
                    contenedor.removeChild(boton3);
                    habilitarBotones();
                  }else{
                    console.log("El arriendo sigue en pie");
                  }
                });
            }else{
                boton.classList.add("btn-success");
                habilitarBotones();
                contenedor.removeChild(boton2)
            }
          });
        }
      });
    })();
  }
}


function habilitarBotones(){
var botones = document.getElementsByTagName("button");
for(i=0;i<botones.length;i++){

  botones[i].disabled = false;
  botones[i].classList.remove("btn-primary", "btn-warning");
  botones[i].classList.add("btn-success");

}
}

function deshabilitarBotones(){
var botones = document.getElementsByTagName("button");
for(i=0;i<botones.length;i++){

  botones[i].disabled = true;
}
}


var label = document.getElementsByClassName('label');
if(label.innerHTML==''){
    var formulario = document.getElementsByClassName('formulario');
    formulario.style.marginRight = '-100';
    formulario.style.opacity='0';
    formularioVisible = false;

    //ahora maximizo el contenedor de los elementos
    /*var items = document.getElementsByClassName('contenedor-items')[0];
    items.style.width = '100%';*/
}











