var u_name=document.getElementById('d_usernamee');
var nm=document.getElementById('d_name');
var chamber=document.getElementById('chember');
var slot=document.getElementById('slot');
var rom=document.getElementById('room');


function form_validation()
{
if(u_name.value=='' || nm.value=='' || chamber.value=='' || slot.value=='' || rom.value=='')
	
	{
if(u_name.value=='')
	   {
		u_name.style.borderColor="red";
		document.getElementById('username_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }else
	       {
			  u_name.style.borderColor="green";
	         document.getElementById('username_msg').innerHTML=" ";
	   }
if(nm.value=='')
	   {
		nm.style.borderColor="red";
		document.getElementById('name_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }else
	       {
			  nm.style.borderColor="green";
	         document.getElementById('name_msg').innerHTML=" ";
			 return false;
	   }
if(chamber.value=='')
	   {
		chamber.style.borderColor="red";
		document.getElementById('chember_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }else
	       {
			  chamber.style.borderColor="green";
	         document.getElementById('chember_msg').innerHTML=" ";
	   }
if(rom.value=='')
	   {
		rom.style.borderColor="red";
		document.getElementById('room_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }else
	       {
			  rom.style.borderColor="green";
	         document.getElementById('room_msg').innerHTML=" ";
	   }
if(slot.value=='')
	   {
		slot.style.borderColor="red";
		document.getElementById('chember_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }else
	       {
			  slot.style.borderColor="green";
	         document.getElementById('chember_msg').innerHTML=" ";
	   }
		
		
		
		
	}
}