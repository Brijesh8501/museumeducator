

function tops()
{
	var t = document.getElementById('cnt_id').value;
	var r = document.getElementById('cnt_name').value;
	//var lig = document.getElementById('lg').value;
	//var pass = document.getElementById('ps').value;
	
	if(t=="")
	{
		cnt_id.focus();
		msg.innerHTML = "id required";
		return false;
	}
	else if(r=="")
	{
		cnt_name.focus();
		msg1.innerHTML = "name required";
		return false;
	}
	else
	{
		msg.innerHTML="";
		msg1.innerHTML="";
		return true;
	}
	
}
function logins()
{
	var lig = document.getElementById('lg').value;
	var ps = document.getElementById('pass').value;
	
	
	if(lig=="")
	{
		 lg.focus();
		lg_msg1.innerHTML = "username required";
		return false;
	}
	else if(ps=="")
	{
		pass.focus();
		lg_msg2.innerHTML = "password required";
	    return false;
	}
	else
	{
		lg_msg1.innerHTML = "";
		lg_msg2.innerHTML = "";
		return true;
	}
}