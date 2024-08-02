document.addEventListener('DOMContentLoaded', (() => {
  var input = document.querySelectorAll("#mySearch");
  var lista = document.querySelectorAll("#search");

  var retornoBusca = true;

  if (input && lista) {

    function searchExec(i) {
      if(input instanceof NodeList){
        input = input[i];
        lista = lista[i];
      }

      input.addEventListener("input", function () {
        var valor = this.value.toLowerCase();

        // var opcoesFiltradas = items.filter(function (item) {
        //   if (item.toLowerCase().startsWith(valor)) {
        //     retornoBusca = true;
        //     return item.toLowerCase().startsWith(valor);
        //   }

        //   var numFalse = items.reduce(function (contador, item) {
        //     if (item.toLowerCase().startsWith(valor)) {
        //       return contador;
        //     } else {
        //       return contador + 1;
        //     }
        //   }, 0);

        //   if (numFalse == items.length) {
        //     // console.log("verdade");
        //     return retornoBusca = false;
        //   };
        // });

        var opcoesFiltradas = items.filter(function (item) {
          return item.toLowerCase().includes(valor);
        });

        lista.innerHTML = "";

        opcoesFiltradas.forEach(function (item) {
          var itemList = document.createElement("li");
          itemList.textContent = item;
          itemList.addEventListener("click", function () {
            input.value = item;
            lista.style.display = "none";
            lista.nextElementSibling.click();
          });
          lista.appendChild(itemList);
        });


        if (valor.length > 0 && retornoBusca) {
          lista.style.display = "block";
          lista.style.width = 100 + "%";
          lista.style.top = input.offsetTop + input.offsetHeight + "px";
          lista.style.left = input.offsetLeft + "px";
          lista.style.border = 1 + "px" + " solid " + "#fd7706";
        } else {
          lista.style.display = "none";
        }
      });
      document.addEventListener("click", function (event) {
        if (event.target !== input && event.target !== lista) {
          lista.style.display = "none";
        }
      });
    }

    input.forEach((el, ind) => {
      el.addEventListener('click', searchExec.bind(null, ind))
    })
  }
}));


function showBuscar(e) {
  e.nextElementSibling.classList.toggle('show-carty')
}