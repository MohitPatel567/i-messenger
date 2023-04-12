function only_number(e)
{
	var x=e.keycode || e.which;
	if(x>=48 && x<=57 || x==8)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function login_validation()
{
	if(frm.uname.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter your username...";
		document.frm.uname.focus();
		return false;
	}
	else if(frm.pass.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter your password...";
		document.frm.pass.focus();
		return false;
	}
	else
	{
		return true;
	}
}
function email_verify()
{
	if(frm.email.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, nter your email id...";
		document.frm.email.focus();
		return false;
	}
	else
	{
		return true;
	}	
}
function verify_code()
{
	if(frm.uname.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter user name...";
		document.frm.uname.focus();
		return false;
	}
	else if(frm.fname.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter full name...";
		document.frm.fname.focus();
		return false;
	}
	else if(frm.dob.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter birth date...";
		document.frm.dob.focus();
		return false;
	}
	else if(frm.email.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter email ID...";
		document.frm.email.focus();
		return false;
	}
	else
	{
		return true;
	}
}
function signin_validation()
{
	var d1 = new Date(document.frm.dob.value);
	var d2 = new Date();
	var dif =Math.round((d1.getTime()-d2.getTime())/(1000*60*60*24*30*12));
	var msg=document.getElementById("error");
	if(frm.uname.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter your username...";
		document.frm.uname.focus();
		return false;
	}
	else if(frm.fname.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter your fullname...";
		document.frm.fname.focus();
		return false;
	}
	else if(frm.dob.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter birthdate...";
		document.frm.dob.focus();
		return false;
	}
	else if(dif>-5)
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter correct birthdate";
		document.frm.dob.focus();
		return false;
	}
	else if(frm.gender.value=="--Select Gender--")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Choose gender...";
		document.frm.gender.focus();
		return false;
	}
	else if(frm.email.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter email ID...";
		document.frm.email.focus();
		return false;
	}
	else if(frm.pass.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter your password...";
		document.frm.pass.focus();
		return false;
	}
	else if(frm.pass.value.length<8)
	{
		msg.style.display="block";
		msg.innerHTML="Password length minimum 8 character...";
		document.frm.pass.value="";
		document.frm.pass.focus();
		return false;
	}
	else if(frm.about.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter about...";
		document.frm.about.focus();
		return false;
	}
	else
	{
		return true;
	}		
}
function feedback_validation()
{
	var msg=document.getElementById("error");
	if(document.frm.fname.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter your full name...";
		document.frm.fname.focus();
		return false;
	}
	else if(document.frm.email.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter your email id...";
		document.frm.email.focus();
		return false;
	}
	else if(document.frm.feedback.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter feedback....";
		document.frm.feedback.focus();
		return false;
	}
	else
	{
		return true;
	}	
}
function change_pass_valid()
{
	if(frm.npass.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter new password...";
		document.frm.npass.focus();
		return false;
	}
	else if(frm.cpass.value=="")
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Enter confirm password...";
		document.frm.cpass.focus();
		return false;
	}
	else if(frm.npass.value!=frm.cpass.value)
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="New paddword and confirm <br>password not match....";
		document.frm.npass.focus();
		frm.npass.value="";
		frm.cpass.value="";
		return false;
	}
	else if(frm.npass.value.length<8)
	{
		var msg=document.getElementById("error");
		msg.style.display="block";
		msg.innerHTML="Please, Password length is <br>minimum 8 character....";
		document.frm.npass.focus();
		frm.npass.value="";
		frm.cpass.value="";
		return false;
	}
	else
	{
		return true;
	}
}
function change_pass_validation()
{
	var msg=document.getElementById("error");
	if(frm.opass.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter old password...";
		document.frm.opass.focus();
		return false;
	}
	else if(frm.npass.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter new password...";
		document.frm.npass.focus();
		return false;
	}
	else if(frm.cpass.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter confirm password...";
		document.frm.cpass.focus();
		return false;
	}
	else if(frm.cpass.value!=frm.npass.value)
	{
		msg.style.display="block";
		msg.innerHTML="New and confirm password not match....";
		document.frm.npass.focus();
	       	document.frm.cpass.value="";
		document.frm.npass.value="";
		return false;
	}
	else if(frm.npass.value.length<8)
	{
		msg.style.display="block";
		msg.innerHTML="Password length minimum 8 character...";
		document.frm.npass.focus();
		document.frm.cpass.value="";
		document.frm.npass.value="";
		return false;
	}
	else
	{
		return true;
	}
}
function grp_validation()
{
	var msg=document.getElementById("error");
	if(frm.gname.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter group name....";
		document.frm.gname.focus();
		return false;
	}
	else if(frm.about.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter group about.....";
		document.frm.about.focus();
		return false;
	}
	else if(frm.add_user.value=="")
	{
		msg.style.display="block";
		msg.innerHTML="Please, Add friends.....";
		document.frm.add_user.focus();
		return false;
	}
	return true;
}
function update_profile_validation()
{
	var d1 = new Date(document.frm.dob.value);
	var d2 = new Date();
	var dif =Math.round((d1.getTime()-d2.getTime())/(1000*60*60*24*30*12));
	var msg=document.getElementById("error");
	if(dif>-5)
	{
		msg.style.display="block";
		msg.innerHTML="Please, Enter correct birthdate";
		document.frm.dob.focus();
		return false;
	}
	else if(frm.pass.value.length<8)
	{
		msg.style.display="block";
		msg.innerHTML="Password length minimum 8 character...";
		document.frm.pass.value="";
		document.frm.pass.focus();
		return false;
	}
	else
	{
		return true;
	}
}