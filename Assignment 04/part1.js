function calcSalary() {
 var wage = parseFloat(document.getElementById('txt_wage').value);
 var hours = parseFloat(document.getElementById('txt_hours').value);
 var calculate ='Total Income '+ wage * hours +'$';

 if (txt_wage > 40){

    var calculate = 'Total Income ' + wage * (hours + 1.5) + '$';
   
 }
 
 document.getElementById('results').innerHTML = calculate;

}