var btn = document.getElementById("salvar");
        btn.addEventListener("click", salvar);
            
            
       function salvar(){
           var url="arquivo.RPC.php";
           var rpc= new Object();
               rpc.salvar="salvar";
               rpc.nome=document.getElementById('nome').value;
               rpc.cpf = document.getElementById('cpf').value;
               rpc.idade = document.getElementById('idade').value;
               rpc.mae = document.getElementById('mae').value;
               rpc.pai = document.getElementById('pai').value;
               
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
    
    httpRequest.onreadystatechange = validar;
    httpRequest.open('POST', url,true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send("json="+JSON.stringify(rpc));
    
    function validar() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200) {
        alert(httpRequest.responseText);
      } else {
       alert('ERRO:: Não foi possivel fazer a conxão');
      }
      }
    }
    //   alert(httpRequest.responseText);
   }
        
        
                



