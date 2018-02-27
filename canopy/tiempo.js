var esteNo = 0;
var contador = 0;
var tiempoFinal = 0;

/*function origen() {
  var origenes = document.getElementsByName('origen');
  for (var i = 0; i < origenes.length; i++) {
    if (origenes[i].checked) {
      var origenElegido = origenes[i].value;
      localStorage.setItem('origen', origenElegido);
    }
  }
}*/

function inicio() {
  esteNo = 0;
  myVar = setTimeout(elegido, 10000);
  contador += 10000;
  console.log('inicio');
  console.log(localStorage.origen);
}

function elegido() {
  var elegido = document.getElementsByName('destino');
  for (var i = 0; i < elegido.length; i++) {
    if (elegido[i].checked) {
      var esEste = elegido[i].value;
      if (esEste == 'SP9') {
        sp9();
      } else if (esEste == 'P9') {
        p9();
      } else if (esEste == 'P12') {
        p12();
      } else if (esEste == 'FCPA') {
        fcpa();
      }
    } else {
      esteNo++;
      if (esteNo >= elegido.length) {
        elegidoSelect();
      }
    }
  }
}

function elegidoSelect() {
  var elegidoSel = document.getElementById('otro').value;
  if (elegidoSel == ""){
    inicio();
  }else if (elegidoSel == 'PUVA') {
    puva();
  }else if (elegidoSel == 'RAI') {
    rai();
  }
}

function sp9() {
  tiempoFinal = 20000 - contador;
  console.log(tiempoFinal);
  if (tiempoFinal > 0) {
    if (localStorage.origen == 'MALVINAS') {
      console.log('origen:malvinas');
    } else if (localStorage.origen == 'CANOPY') {
      console.log('origen:canopy');
    } else if (localStorage.origen == 'CAMPA') {
      console.log('origen:campa');
    } else if (localStorage.origen == 'P12') {
      console.log('origen:p12');
    }
    setTimeout(fin, tiempoFinal);
    console.log('sp9');
  }else {
    fin();
  }
}

function p9() {
  tiempoFinal = 20000 - contador;
  console.log(tiempoFinal);
  if (tiempoFinal > 0) {
    if (localStorage.origen == 'MALVINAS') {
      console.log('origen:malvinas');
    } else if (localStorage.origen == 'CANOPY') {
      console.log('origen:canopy');
    } else if (localStorage.origen == 'CAMPA') {
      console.log('origen:campa');
    } else if (localStorage.origen == 'P12') {
      console.log('origen:p12');
    }
    setTimeout(fin, tiempoFinal);
    console.log('p9');
  }else {
    fin();
  }
}

function p12() {
  tiempoFinal = 30000 - contador;
  if (tiempoFinal > 0) {
    if (localStorage.origen == 'MALVINAS') {
      console.log('origen:malvinas');
    } else if (localStorage.origen == 'CANOPY') {
      console.log('origen:canopy');
    } else if (localStorage.origen == 'CAMPA') {
      console.log('origen:campa');
    } else if (localStorage.origen == 'P12') {
      console.log('origen:p12');
    }
    setTimeout(fin, tiempoFinal);
    console.log('p12');
  }else {
    fin();
  }
}

function fcpa() {
  tiempoFinal = 40000 - contador;
  if (tiempoFinal > 0) {
    if (localStorage.origen == 'MALVINAS') {
      console.log('origen:malvinas');
    } else if (localStorage.origen == 'CANOPY') {
      console.log('origen:canopy');
    } else if (localStorage.origen == 'CAMPA') {
      console.log('origen:campa');
    } else if (localStorage.origen == 'P12') {
      console.log('origen:p12');
    }
    setTimeout(fin, tiempoFinal);
    console.log('fcpa');
  }else {
    fin();
  }
}

function puva() {
  tiempoFinal = 40000 - contador;
  if (tiempoFinal > 0) {
    if (localStorage.origen == 'MALVINAS') {
      console.log('origen:malvinas');
    } else if (localStorage.origen == 'CANOPY') {
      console.log('origen:canopy');
    } else if (localStorage.origen == 'CAMPA') {
      console.log('origen:campa');
    } else if (localStorage.origen == 'P12') {
      console.log('origen:p12');
    }
    setTimeout(fin, tiempoFinal);
    console.log('puva');
  }else {
    fin();
  }
}

function rai() {
  tiempoFinal = 40000 - contador;
  if (tiempoFinal > 0) {
    if (localStorage.origen == 'MALVINAS') {
      console.log('origen:malvinas');
    } else if (localStorage.origen == 'CANOPY') {
      console.log('origen:canopy');
    } else if (localStorage.origen == 'CAMPA') {
      console.log('origen:campa');
    } else if (localStorage.origen == 'P12') {
      console.log('origen:p12');
    }
    setTimeout(fin, tiempoFinal);
    console.log('rai');
  }else {
    fin();
  }
}

function fin() {
  contador = 0;
  tiempoFinal = 0;
  console.log('fin');
  document.getElementById('siguiente').disabled = false;
}