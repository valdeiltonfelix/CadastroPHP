var btn = document.getElementById("buscar");
           btn.addEventListener("click", buscar);
      

function buscar(){
    var url="arquivo.RPC.php";
    
    var httpRequest;   
     
        var ajax= function (){
            
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...
                    httpRequest = new XMLHttpRequest();
                   } else if (window.ActiveXObject) { // IE
                             try {
                                 httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
                                } catch (e) {
                                     try {
                                        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                                    }catch (e) {
                                       
                                    }
                          } 
                  }
          
       }();
       
       if (!httpRequest) {
      alert('Não foi possivel criar uma conexão');
      return false;
    }
    var rpc= new Object();
        rpc.buscar="buscar";
    httpRequest.onreadystatechange = validar;
    httpRequest.open('POST', url,true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send("json="+JSON.stringify(rpc));
    
    function validar() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200) {
        alert(httpRequest.responseText);
        limpar();
      } else {
       alert('ERRO:: Trazer os dados');
      }
      }
    }
}