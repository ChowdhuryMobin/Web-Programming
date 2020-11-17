function validate() {

   //Getting id,first and last name 
   var flag = 0;
   var id = document.getElementById("id").value;
   var firstName = document.getElementById("firstName").value;
   var lastName = document.getElementById("lastName").value;
   var htmlString = "";


   //if statements to check if the feilds are empty or not, and if empty sends an error message

   if (id == "") {

      document.getElementById("studentid").innerHTML = "Please Enter an ID";

      document.getElementById("studentid").className = "blank";

      htmlString += "ID ";

      flag = 1;

   }

   if (firstName == "") {

      document.getElementById("fName").innerHTML = "Please Enter a First Name";

      document.getElementById("fName").className = "blank";

      htmlString += "FirstName ";

      flag = 1;

   }

   if (lastName == "") {

      document.getElementById("lName").innerHTML = "Please Enter a Last Name";

      document.getElementById("lName").className = "blank";

      htmlString += "LastName ";

      flag = 1;

   }

   if (flag == 1) {

      //shows a popup box if id,first or last name is empty

      alert("You forgot to fill the following fields " + htmlString);

   }

   else { 

      //Displays the given data

      document.getElementById("Output").innerHTML = "UserID : " + id + "<br><br> First Name : " + firstName + "<br><br> Last Name : " + lastName;

   }

}