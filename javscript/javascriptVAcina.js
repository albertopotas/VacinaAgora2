
//12 a 14
function desabilitar1(){
  var status = document.getElementById('checkbox1').checked;
  if (status) {  
    document.getElementById('btn1').disabled = false;
    document.getElementById('btn1').style.backgroundColor='green';
  } else {
    document.getElementById('btn1').disabled = true;
    document.getElementById('btn1').style.backgroundColor='red';
  }  
}

//15 a 17
  function desabilitar2(){
    var status = document.getElementById('checkbox2').checked;
    if (status) {  
      document.getElementById('btn2').disabled = false;
      document.getElementById('btn2').style.backgroundColor='green';
    } else {
      document.getElementById('btn2').disabled = true;
      document.getElementById('btn2').style.backgroundColor='red';
    }
    
  }
//18 a 24
function desabilitar3(){
  var status = document.getElementById('checkbox3').checked;
  if (status) {  
    document.getElementById('btn3').disabled = false;
    document.getElementById('btn3').style.backgroundColor='green';
  } else {
    document.getElementById('btn3').disabled = true;
    document.getElementById('btn3').style.backgroundColor='red';
  }
  
}

//25 a 59
  function desabilitar4(){
    var status = document.getElementById('checkbox4').checked;
    if (status) {  
      document.getElementById('btn4').disabled = false;
      document.getElementById('btn4').style.backgroundColor='green';
    } else {
      document.getElementById('btn4').disabled = true;
      document.getElementById('btn4').style.backgroundColor='red';
    }
    
  }
//60 +
  function desabilitar5(){
    var status = document.getElementById('checkbox5').checked;
    if (status) {  
      document.getElementById('btn5').disabled = false;
      document.getElementById('btn5').style.backgroundColor='green';
    } else {
      document.getElementById('btn5').disabled = true;
      document.getElementById('btn5').style.backgroundColor='red';
    }
    
  }
//12 a 17 comorbidade
  function desabilitar6(){
    var status = document.getElementById('checkbox6').checked;
    if (status) {  
      document.getElementById('btn6').disabled = false;
      document.getElementById('btn6').style.backgroundColor='green';
    } else {
      document.getElementById('btn6').disabled = true;
      document.getElementById('btn6').style.backgroundColor='red';
    }
    
  }
  //18 a 59 comorbidade
  function desabilitar7(){
    var status = document.getElementById('checkbox7').checked;
    if (status) {  
      document.getElementById('btn7').disabled = false;
      document.getElementById('btn7').style.backgroundColor='green';
    } else {
      document.getElementById('btn7').disabled = true;
      document.getElementById('btn7').style.backgroundColor='red';
    }
    
  }
  //da saude
  function desabilitar8(){
    var status = document.getElementById('checkbox8').checked;
    if (status) {  
      document.getElementById('btn8').disabled = false;
      document.getElementById('btn8').style.backgroundColor='green';
    } else {
      document.getElementById('btn8').disabled = true;
      document.getElementById('btn8').style.backgroundColor='red';
    }
    
  }
  
  //da educacao
  function desabilitar9(){
    var status = document.getElementById('checkbox9').checked;
    if (status) {  
      document.getElementById('btn9').disabled = false;
      document.getElementById('btn9').style.backgroundColor='green';
    } else {
      document.getElementById('btn9').disabled = true;
      document.getElementById('btn9').style.backgroundColor='red';
    }
    
  }

//motoristas
  function desabilitar10(){
    var status = document.getElementById('checkbox10').checked;
    if (status) {  
      document.getElementById('btn10').disabled = false;
      document.getElementById('btn10').style.backgroundColor='green';
    } else {
      document.getElementById('btn10').disabled = true;
      document.getElementById('btn10').style.backgroundColor='red';
    }
    
  }

//salvar e load chekbox-------------------------//
localStorage.setitem(button);
localStorage.getitem(button);