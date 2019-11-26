/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Form validation code will come here.
function validate()
{
  let errorArray = [];

  if (document.myForm.Name.value == "")
  {
    errorArray.push('Enter a Name');
  }

  if (document.myForm.EMail.value == "")
  {
    errorArray.push('Enter an Email');
  }

  if (document.myForm.Zip.value == "" ||
          isNaN(document.myForm.Zip.value) ||
          document.myForm.Zip.value.length != 5)
  {
    errorArray.push('Enter a Zip')
  }

  if (document.myForm.Country.value == "-1")
  {
    errorArray.push('You need a Country')
  }
  
  if(errorArray.length > 0) {
    let errorReport = document.getElementById('errorReport');
    errorString = '<ul>';
    errorArray.forEach(el => {
      errorString = errorString + '<li>' + el + '</li>';
    })
    
    errorString += '</ul>';
    errorReport.innerHTML = errorString;
    return false;
  }
  return(true);
}
