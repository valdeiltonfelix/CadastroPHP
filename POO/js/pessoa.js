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
       carregargrid(httpRequest.responseText);
      } else {
       alert('ERRO:: Trazer os dados');
      }
      }
    }
    
    function carregargrid(dados){
        var obPessoa=JSON.parse(dados); 
         
          tbody.innerHTML = "" ;
         
//        while(tbody.lastChild) {
//            tbody.removeChild(tbody.lastChild);
//        }
//         
            obPessoa.forEach(function (valor,id){
                    var row = document.createElement("tr");
                 
               for (var i in valor) {
                   
                    var cell = document.createElement("td");
                    var cellText = document.createTextNode(valor[i]);
                    cell.appendChild(cellText);
                    row.appendChild(cell);            
               }
               
               document.getElementById('tbody').appendChild(row);    
           });
           delete dados;
          delete obPessoa;
           
        
    }
}