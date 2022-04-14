window.onload = function () {
  var btnCalc = document.getElementById("btnCalc");
  btnCalc.onclick = calculaImc;

  /*
  IMC = Peso ÷ (Altura × Altura)
  */
  /*
  Exemplo: IMC = 80 kg ÷ (1,80 m × 1,80 m) = 24,69 kg/m2 (Peso ideal)
  */
  /*
  MENOR QUE 16  MAGREZA III
  ENTRE 16,0 E 16,99	MAGREZA	II
  ENTRE 17,0 E 18,49 MAGREZA I
  ENTRE 18,5 E 24,9	NORMAL	0
  ENTRE 25,0 E 29,9	SOBREPESO	I
  ENTRE 35,0 E 39,99	OBESIDADE	II
  MAIOR QUE 40	OBESIDADE GRAVE	III
  */

  function calculaImc() {
    var peso = document.getElementById("peso").value;
    var altura = document.getElementById("altura").value;
    var imc = (peso / (altura * altura)) * 10000;
    var converte = imc.toFixed(2);
    var seuImc = document.getElementById("seuImc");
    seuImc.value = converte;

    var resultado = document.getElementById("resultado");

    if (imc < 17) {
      resultado.value = "Você está muito abaixo do peso ideal! CUIDADO";
      resultado.style.background = "#f22648";
      resultado.style.border = "1px solid #f22648";

    } else if (imc >= 17 && imc < 18.49) {
      resultado.value = "Você está um pouco abaixo do peso ideal! ATENÇÃO";
      resultado.style.background = "#f29026";
      resultado.style.border = "1px solid #f29026";

    } else if (imc >= 18.5 && imc < 24.99) {
      resultado.value = "Você está com o peso normal! PARABÉNS";
      resultado.style.background = "#39fb8b";
      resultado.style.border = "1px solid #39fb8b";

    } else if (imc >= 25 && imc < 29.99) {
      resultado.value = "Você está acima do peso! ATENÇÃO";
      resultado.style.background = "#f29026";
      resultado.style.border = "1px solid #f29026";

    } else if (imc >= 30 && imc < 34.99) {
      resultado.value = "Você está com obesidade nível 1! CUIDADO";
      resultado.style.background = "#f22648";
      resultado.style.border = "1px solid #f22648";

    } else if (imc >= 35 && imc < 39.99) {
      resultado.value = "Você está com obesidade nível 2! (Severa) CUIDADO!";
      resultado.style.background = "#f22648";
      resultado.style.border = "1px solid #f22648";

    } else if (imc >= 40) {
      resultado.value = "Você está com obesidade nível 3! (Mórbida) CUIDADO!!";
      resultado.style.background = "#f22648";
      resultado.style.border = "1px solid #f22648";

    } else {
      alert("Preencha todos os campos");
    }
  }
};