// JavaScript Document



function checkform(){
	
	if(document.getElementById("name").value==""){
		document.getElementById("name_error").innerHTML="* Please type the name of the dog.";
		complete=false;
		}
		if(document.getElementById("Breed").value==""){
		document.getElementById("breed_error").innerHTML="* Please enter a Breed.";
		complete=false;
	}
	if(document.getElementById("AdoptionPrice").value==""){
		document.getElementById("price_error").innerHTML="* Please enter an Adoption amount.";
		complete=false;
	}
	 if(document.getElementById("Description").value==""){
		document.getElementById("description_error").innerHTML="* Please type a short description about the dog.";
		complete=false;
	}
	if(document.getElementById("ThumbnailImageName").value==""){
		document.getElementById("small_error").innerHTML="* Please upload a small picture.";
		complete=false;
	}
	if(document.getElementById("LargeImageName").value==""){
		document.getElementById("big_error").innerHTML="* Please upload a big picture.";
		complete=false;
		
	} 
	
	 return complete;
	
}


function  checklogin(){
	
	if(document.getElementById("uname").value==""){
		document.getElementById("admin_error").innerHTML="*Incorrect username.";
		complete=false;
		}
		 if(document.getElementById("upass").value==""){
		document.getElementById("pass_error").innerHTML="*Incorrect password.";
		complete=false;

	
	}
	 return complete;
	
}








function  checkart(){
	
	if(document.getElementById("newtitle").value==""){
		document.getElementById("newtitle_error").innerHTML="* Required Field.";
		complete=false;
		}
		 if(document.getElementById("newpub").value==""){
		document.getElementById("newpub_error").innerHTML="* Required Field.";
		complete=false;
}
 if(document.getElementById("newdate").value==""){
		document.getElementById("newdate_error").innerHTML="* Required Field.";
		complete=false;
}
if(document.getElementById("newbreed").value==""){
		document.getElementById("newbreed_error").innerHTML="* Required Field.";
		complete=false;
		}
		 if(document.getElementById("newbod").value==""){
		document.getElementById("newbod_error").innerHTML="* Required Field.";
		complete=false;

	}
	
	 return complete;
	
}









