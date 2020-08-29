"use strict"

function validation(){
	var name   = document.myForm.name.value;
	var email  = document.myForm.email.value;

	var gender = document.myForm.gender.value;
	var degree = document.myForm.degree.value;
	var myfile = document.myForm.myfile.value;
	var bg = document.myForm.bg.value;
	var at_position  = email.indexOf("@");
    var dot_position = email.lastIndexOf(".");
    var error = false;

		if(name == "" || email == "" ) {
            alert( "Please provide your name & email!" );
            return false;
        }
 
        if (at_position < 1 || (  dot_position - at_position < 2 )) {
            alert("Please enter correct email ID")
            return false;
        }


         if( gender == "" ){
            
            alert( "Please provide gender" );
         
            return false;
         }
         
         if( degree == "" ) {
            alert( "Please provide degrees" );
            return false;
         }
          if( myfile == "" ) {
            alert( "Please select a file" );
            return false;
         }

     return( true );

}
