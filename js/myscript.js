$(document).ready(function (){
    $("#submitButton").click(function (e) {
        e.preventDefault();
        var matched; 
		var password = $("#pwd").val();
        var confirm = $("#confirmPwd").val();

        matched = (password == confirm) ? true : false;
        if(matched) 
		{ 
            $("#frm").submit(); 
		}
		else 
		{ 
			alert("Passwords don't match."); 
			return false;
		}
	}); 
});