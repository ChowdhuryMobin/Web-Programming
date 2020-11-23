var guessnumber = 0;

var attempts = 5;

var att = 5;

function guess() {

   guessnumber = Math.floor(Math.random() * 100) + 1 ;

   document.getElementById('attempts').innerHTML = att + " Attempts  Remaining";

}



function check_num() {

   var correctnumber = new Number(document.getElementById('number').value);

   if (correctnumber == guessnumber) {

      alert('YOU GUESSED THE CORRECT NUMBER. ' + guessnumber + ' CONGRATULATIONS');

      att = attempts;

      guess();

   } else {

      if (correctnumber > guessnumber && att > 0) {

         alert('YOUR NUMBER IS HIGHER THAN THE CORRECT NUMBER');

         att = att - 1;

         document.getElementById('attempts').innerHTML = 'You Have ' + att + " Attempts  Remaining";

      }

      if (correctnumber < guessnumber && att > 0) {

         alert('YOUR NUMBER IS LOWER THAN THE CORRECT NUMBER');

         att = att - 1;

         document.getElementById('attempts').innerHTML ='You Have ' + att + " Attempts  Remaining";

      }

      if (att == 0) {
         alert('CORRECT NUMBER = (' + guessnumber + '). TRY AGAIN.');

         att = attempts;

         guess();

      }

   }
}