
function AJAXRequest(){
    let http_request = new XMLHttpRequest();
    
    try {
      http_request = new XMLHttpRequest(); 
    } catch(e) {
      try {
        http_request = new ActiveXObject('Mscml2.XMLHTTP');
      } catch(e) {
        try {
          http_request = new ActiveXObject('Microsoft.XMLHTTP');
        } catch(e) {
          alert('weep womp');
          return false;
        }
      }
    }
    
    return http_request;
}

