window.onload = function(){
	 //function for check that users have to put password more than 8 character 
	 function password(){
		
			var a = document.getElementById("pwd1").value;
			if(a.length <= 8 ){
				document.getElementById("pwd1Hint").style.display ='block';
			
			}
			if(a.length >= 8){
				document.getElementById("pwd1Hint").style.display ='none';
			}
		
			
			
	}
	//function for check that first password have to be match
	function password2(){
			var a = document.getElementById("pwd1").value;
			var b = document.getElementById("pwd2").value;
			if(a != b){
				document.getElementById("pwd2Hint").style.display ='block';
			}
				if(a == b){
				document.getElementById("pwd2Hint").style.display ='none';
			}
			}
	
	window.onkeyup = function(){
		password();
		password2();

	}
}