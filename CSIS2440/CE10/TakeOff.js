/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function TakeOff() {
  try {
    let coolantInput = document.getElementById('ECOn').checked;
    let burnInput = document.getElementById('Burn').value;
    let codeInput = document.getElementById('Code').value;

    let status = document.getElementById('status');
    status.innerHTML = "";
//  console.log(coolantInput);
//  console.log(burnInput);
//  console.log(codeInput);

    if (!coolantInput) {
      status.innerHTML += '';
    } else {
      status.innerHTML += '<li>please turn off coolant</li>';
      return false;
    }

    if (burnInput >= 20 && burnInput <= 30) {
      status.innerHTML += '';
    } else {
      if (burnInput <= 20) {
        status.innerHTML += '<li>not enough burn</li>';
      } else {
        status.innerHTML += '<li>too much burn</li>';
      }
      return false;
    }

    if (codeInput.length !== 0) {
      status.innerHTML += `<li>input code : ${codeInput}</li>`;
    } else {
      status.innerHTML += '<li>cannot launch without code</li>';
      return false;
    }

    for (let i = 10; i >= 0; i--) {
      status.innerHTML += `<li>${i}</li>`;
    }
    status.innerHTML += '</ul>';
    status.innerHTML += 'BLASTOFF!';

  } catch (e) {
    console.log(e);
  }
}



