var nm=document.getElementById('name');
var bDate=document.getElementById('dob');
var phn=document.getElementById('phone');
var mail=document.getElementById('email');
var addrs=document.getElementById('address');
var bld=document.getElementById('blood');
var gn=document.myform.gender;


//----------------------FOR Submit-----------------------------------
function form_update_validation()
{

	if(nm.value=='' || gn.value=='' || bld.value=='' || bDate.value==''|| phn.value=='' || mail.value=='' || addrs.value=='')
	{	
	   
	   if(nm.value=='')
	    {
		nm.style.borderColor="red";
		document.getElementById('name_msg').innerHTML="Please Fill Out this Field;"
		
	    } else
	          {nm.style.borderColor="green";
		       document.getElementById('name_msg').innerHTML=" ";
		     }
			 
			 
	    if(gn.value=='')
		{
			gn.style.borderColor="red";
			document.getElementById('gender_msg').innerHTML="Please Fill Out this Field";
		}else{document.getElementById('gender_msg').innerHTML=" ";
              bld.style.borderColor="green";
             }
		
		if(bld.value=='')
		{
			bld.style.borderColor="red";
			document.getElementById('blood_msg').innerHTML="Please Fill Out this Field";
		} else
	         {bld.style.borderColor="green";
	           document.getElementById('blood_msg').innerHTML=" ";	 
	 	 }
		 
		 
		 
		 
		 
		if(bDate.value=='')
	    {
		bDate.style.borderColor="red";
		document.getElementById('dob_msg').innerHTML="Please Fill Out this Field";
		
	    } else
	         {bDate.style.borderColor="green";
		      document.getElementById('dob_msg').innerHTML=" ";
		    }
		
		if(phn.value=='')
	    {
		phn.style.borderColor="red";
		document.getElementById('phone_msg').innerHTML="Please Fill Out this Field";
		
	    } else
	         {phn.style.borderColor="green";
		       document.getElementById('phone_msg').innerHTML=" ";
		 }
		if(mail.value=='')
	    {
		mail.style.borderColor="red";
		document.getElementById('email_msg').innerHTML="Please Fill Out this Field";
		
	    } else
	          {mail.style.borderColor="green";
		       document.getElementById('email_msg').innerHTML=" ";
		  }  
		if(addrs.value=='')
	    {
		addrs.style.borderColor="red";
		document.getElementById('address_msg').innerHTML="Please Fill Out this Field";
		
	    } else
	          {addrs.style.borderColor="green";
		        document.getElementById('address_msg').innerHTML=" ";
		  }
		
		
	 return false;
	}
}

//--------------------------User Name-----------------------------------------------
function username_checking()
{
	if(u_name.value=='')
	   {
		u_name.style.borderColor="red";
		document.getElementById('username_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }
	else if( !isNaN(u_name.value) )
	    {
		u_name.style.borderColor="red";
		document.getElementById('username_msg').innerHTML="Only Character";
		return false;
	    } 
	else if( u_name.value.length< 5  ||  u_name.value.length>15)
	    {
		u_name.style.borderColor="red";
		document.getElementById('username_msg').innerHTML="Min 2 Character & Max 15 Character";
		return false;
	    }
	   
	else
	    {
		 u_name.style.borderColor="green";
	     document.getElementById('username_msg').innerHTML=" ";
		 
         }

}
//------------------------------NAME-----------------------------------------------
function name_checking()
{
   if(nm.value=='')
	    {
		nm.style.borderColor="red";
		document.getElementById('name_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } 
		
    else if( !isNaN(nm.value) )
	    {
		nm.style.borderColor="red";
		document.getElementById('name_msg').innerHTML="Only Character";
		return false;
	    } 
			  
   else if( nm.value.length< 2  ||  nm.value.length>20)
	    {
		nm.style.borderColor="red";
		document.getElementById('name_msg').innerHTML="Min 2 Character & Max 20 Character";
		return false;
	    } 
		
	else
	    {
		  nm.style.borderColor="green";
		  document.getElementById('name_msg').innerHTML=" ";
		}	
}

//-------------------------------------Gender---------------------------------
   function gender_checking()
   {
	   if(gn.value=='')
		{
		  document.getElementById('gender_msg').innerHTML="Please Fill Out this Field";
		}
		
	else{document.getElementById('gender_msg').innerHTML=" ";}
   }

//---------------------------------DOB----------------------------------
function dob_checking()
{
	if(bDate.value=='')
	    {
		bDate.style.borderColor="red";
		document.getElementById('dob_msg').innerHTML="Please Fill Out this Field";
		
	    } 
		
	else
	     {
		   bDate.style.borderColor="green";
		   document.getElementById('dob_msg').innerHTML=" ";
		 }
}
//----------------------------PASSWORD-----------------------------------
function password_checking()
{
	
	
	if(pass.value=='')
	    {
		pass.style.borderColor="red";
		document.getElementById('password_msg').innerHTML="Please Fill Out this Field";
		return false; 
	    }
	else if(pass.value.length<5)
     { 
        pass.style.borderColor="red";
		document.getElementById('password_msg').innerHTML="Password must be at least 5 characters";
		 
       return false;  
    } 
    else
	     {
			 pass.style.borderColor="green";
		     document.getElementById('password_msg').innerHTML=" ";
         }	
}

//-------------------------CONFIRM PASSWORD--------------------------------------
function confirm_password_checking()
{
	if(c_pass.value=='')
	    {
		c_pass.style.borderColor="red";
		document.getElementById('confirm_password_msg').innerHTML="Please Fill Out this Field";
		return false;
	    }
	else if(c_pass.value!=pass.value)
	    {
		c_pass.style.borderColor="red";
		document.getElementById('confirm_password_msg').innerHTML="Password Not Match";
		return false;
	    }
    else
	     {
		 c_pass.style.borderColor="green";
		 document.getElementById('confirm_password_msg').innerHTML=" "
		}
}
//-----------------------------PHONE----------------------------------------------
function phone_checking()
{

	if(phn.value=='')
	    {
		phn.style.borderColor="red";
		document.getElementById('phone_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } 
	else if( isNaN(phn.value) )
	    {
		phn.style.borderColor="red";
		document.getElementById('phone_msg').innerHTML="Only Number";
		return false;
	    } 
	else
	     {phn.style.borderColor="green";
		  document.getElementById('phone_msg').innerHTML=" ";
		 }	
			  
}
//--------------------------------EMAIL-------------------------------------------
function email_checking()
{
	
	var valid_text = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!valid_text.test(mail.value))
		{
    
	      mail.style.borderColor="red";
	     document.getElementById('email_msg').innerHTML="Please provide a valid email address";
         email.focus;
         return false;
     }
	else
	    {
		 mail.style.borderColor="green";
		 document.getElementById('email_msg').innerHTML=" ";
		}
	
}
//------------------------------------ADDRESS-------------------------------------------------
function address_checking()
{
	if(addrs.value=='')
	    {
		addrs.style.borderColor="red";
		document.getElementById('address_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } 
	else if( !isNaN(addrs.value) )
	    {
		addrs.style.borderColor="red";
		document.getElementById('address_msg').innerHTML="Only Character";
		return false;
	    } 
		
	else
	    {
	      addrs.style.borderColor="green";
		  document.getElementById('address_msg').innerHTML=" ";
		      
		}	
}
//-------------------------------------BLOOD------------------------------------------------
function blood_checking()
{
	 if(bld.value=='')
		{
			bld.style.borderColor="red";
			document.getElementById('blood_msg').innerHTML="Please Fill Out this Field";
		}
	else
	    {
		  bld.style.borderColor="green";
	      document.getElementById('blood_msg').innerHTML=" ";	 
	 	 }
}















