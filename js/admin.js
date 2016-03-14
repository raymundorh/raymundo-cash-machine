/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
   
$(function() {
    
    
$("#boton").click(function() {
 var retirar = $("#retirar").val();
    
    $("#calcular").load('controllers/efectivo.php',{cantidad: retirar},function(result) {

                  
                    if(result.indexOf("cien") > -1 ){

                     billetesArray = JSON.parse(result);
                     var tdsCantidad = '';
                     var tdsBilletes = '';

                     for (i = 0; i < billetesArray.length; i++) { 
                         if(billetesArray[0]['cien']!='0'){
                             
                             tdsCantidad +="<td class='tdCantidad'>"+billetesArray[0]['cien']+'</td>';
                             tdsBilletes +="<td><img class='billetes' src='img/100.jpg' /></td>";
                         }
                         
                         if(billetesArray[0]['cincuenta']!='0'){
                             
                             tdsCantidad +="<td class='tdCantidad'>"+billetesArray[0]['cincuenta']+'</td>';
                             tdsBilletes +="<td><img class='billetes' src='img/50.jpg' /></td>";
                         }
                      
                         if(billetesArray[0]['veinte']!='0'){
                             
                             tdsCantidad +="<td class='tdCantidad'>"+billetesArray[0]['veinte']+'</td>';
                             tdsBilletes +="<td><img class='billetes' src='img/20.jpg' /></td>";
                         }   
                         
                        if(billetesArray[0]['dies']!='0'){
                             
                             tdsCantidad +="<td class='tdCantidad'>"+billetesArray[0]['dies']+"</td>";
                             tdsBilletes +="<td><img class='billetes' src='img/10.jpg' /></td>";
                         }

                     $("#efectivo").html('<table><tr>'+tdsBilletes+'</tr><tr>'+tdsCantidad+'</tr></table>');
                     }
                     
                     $("#efectivo").show();
                     }else{
                      $("#retirar").val(result);
                      $("#retirar").css("font-size", "small");
                     }
    });

           
});

$("#retirar").click(function() {
  $("#retirar").val('');
  $("#retirar").css("font-size", "x-large");
});

  });

