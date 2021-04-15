var nm=document.getElementById('name');

var dept=document.getElementById('department');
var deg=document.getElementById('degree');
var spec=document.getElementById('speciality');
var des=document.getElementById('designation');
var reg=document.getElementById('registration_no');


var mail=document.getElementById('email');
var phn=document.getElementById('phone');
var bDate=document.getElementById('dob');
var bld=document.getElementById('blood');
var addrs=document.getElementById('address');
var gn=document.myform.gender;


//----------------------FOR Submit-----------------------------------
function form_update_validation()
{

	if(nm.value=='' || dept.value=='' || deg.value=='' || spec.value=='' || des.value==''|| reg.value=='' || gn.value=='' || bld.value=='' || bDate.value==''|| phn.value=='' || mail.value=='' || addrs.value=='')
	{	
	   
if(nm.value=='')
	    {
		nm.style.borderColor="red";
		document.getElementById('name_msg').innerHTML="Please Fill Out this Field;"
		return false;
	    } else
	          {nm.style.borderColor="green";
		       document.getElementById('name_msg').innerHTML=" ";
		     }
if(dept.value=='')
		{
			dept.style.borderColor="red";
			document.getElementById('department_msg').innerHTML="Please Fill Out this Field";
            return false;
		} else
	         {dept.style.borderColor="green";
	           document.getElementById('department_msg').innerHTML=" ";	 
	 	 }

if(deg.value=='')
		{
			deg.style.borderColor="red";
			document.getElementById('degree_msg').innerHTML="Please Fill Out this Field";
            return false;
		} else
	         {deg.style.borderColor="green";
	           document.getElementById('degree_msg').innerHTML=" ";	 
	 	 }
if(spec.value=='')
		{
			spec.style.borderColor="red";
			document.getElementById('speciality_msg').innerHTML="Please Fill Out this Field";
            return false;
		} else
	         {spec.style.borderColor="green";
	           document.getElementById('speciality_msg').innerHTML=" ";	 
	 	 }
if(des.value=='')
		{
			des.style.borderColor="red";
			document.getElementById('designation_msg').innerHTML="Please Fill Out this Field";
            return false;
		} else
	         {des.style.borderColor="green";
	           document.getElementById('designation_msg').innerHTML=" ";	 
	 	 }
if(reg.value=='')
		{
			reg.style.borderColor="red";
			document.getElementById('registration_no_msg').innerHTML="Please Fill Out this Field";
            return false;
		} else
	         {reg.style.borderColor="green";
	           document.getElementById('registration_no_msg').innerHTML=" ";	 
	 	 }
if(mail.value=='')
	    {
		mail.style.borderColor="red";
		document.getElementById('email_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } else
	          {mail.style.borderColor="green";
		       document.getElementById('email_msg').innerHTML=" ";
		  } 			 
			 

        

if(phn.value=='')
	    {
		phn.style.borderColor="red";
		document.getElementById('phone_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } else
	         {phn.style.borderColor="green";
		       document.getElementById('phone_msg').innerHTML=" ";
		 }		 
if(bDate.value=='')
	    {
		bDate.style.borderColor="red";
		document.getElementById('dob_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } else
	         {bDate.style.borderColor="green";
		      document.getElementById('dob_msg').innerHTML=" ";
		    }
if(bld.value=='')
		{
			bld.style.borderColor="red";
			document.getElementById('blood_msg').innerHTML="Please Fill Out this Field";
            return false;
		} else
	         {bld.style.borderColor="green";
	           document.getElementById('blood_msg').innerHTML=" ";	 
	 	 }		

if(addrs.value=='')
	    {
		addrs.style.borderColor="red";
		document.getElementById('address_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } else
	          {addrs.style.borderColor="green";
		        document.getElementById('address_msg').innerHTML=" ";
		  }
		
if(gn.value=='')
		{
			
			document.getElementById('gender_msg').innerHTML="Please Fill Out this Field";
            return false;
		}else{document.getElementById('gender_msg').innerHTML=" ";}	
	 
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

//-------------------------------------Department------------------------------------------------
function department_checking()
{
	 if(dept.value=='')
		{
			dept.style.borderColor="red";
			document.getElementById('department_msg').innerHTML="Please Fill Out this Field";
			return false;
		}
	else
	    {
		  dept.style.borderColor="green";
	      document.getElementById('department_msg').innerHTML=" ";	 
	 	 }
}

spec
des

//------------------------------Degree-----------------------------------------------
function degree_checking()
{
   if(deg.value=='')
	    {
		deg.style.borderColor="red";
		document.getElementById('degree_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } 
		
    else if( !isNaN(deg.value) )
	    {
		deg.style.borderColor="red";
		document.getElementById('degree_msg').innerHTML="Only Character";
		return false;
	    } 
			  
   else if( deg.value.length< 3  ||  nm.value.length>20)
	    {
		deg.style.borderColor="red";
		document.getElementById('degree_msg').innerHTML="Min 3 Character & Max 20 Character";
		return false;
	    } 
		
	else
	    {
		  deg.style.borderColor="green";
		  document.getElementById('degree_msg').innerHTML=" ";
		}	
}


//-------------------------------------Speciality------------------------------------------------
function speciality_checking()
{
	 if(spec.value=='')
		{
			spec.style.borderColor="red";
			document.getElementById('speciality_msg').innerHTML="Please Fill Out this Field";
			return false;
		}
	else
	    {
		  spec.style.borderColor="green";
	      document.getElementById('speciality_msg').innerHTML=" ";	 
	 	 }
}          
des

//-------------------------------------Designation------------------------------------------------
function designation_checking()
{
	 if(des.value=='')
		{
			des.style.borderColor="red";
			document.getElementById('designation_msg').innerHTML="Please Fill Out this Field";
			return false;
		}
	else
	    {
		  des.style.borderColor="green";
	      document.getElementById('designation_msg').innerHTML=" ";	 
	 	 }
}

//--------------------------Registration N0------------------------------------------------
function registration_no_checking()
{
	if(reg.value=='')
	   {
		reg.style.borderColor="red";
		document.getElementById('registration_no_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }
	else if( !isNaN(reg.value) )
	    {
		reg.style.borderColor="red";
		document.getElementById('registration_no_msg').innerHTML="Only Character";
		return false;
	    } 
	else if( reg.value.length< 5  ||  u_name.value.length>15)
	    {
		reg.style.borderColor="red";
		document.getElementById('registration_no_msg').innerHTML="Min 5 Character & Max 15 Character";
		return false;
	    }
	   
	else
	    {
		 reg.style.borderColor="green";
	     document.getElementById('registration_no_msg').innerHTML=" ";
		 
         }

}

//-------------------------------------Gender---------------------------------
   function gender_checking()
   {
	   if(gn.value=='')
		{
		  document.getElementById('gender_msg').innerHTML="Please Fill Out this Field";
            return false;
		}
		
	else{document.getElementById('gender_msg').innerHTML=" ";}
   }

//--------------------------------EMAIL-------------------------------------------
function email_checking()
{
	
	var valid_text = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(mail.value=='')
	   {
		reg.style.borderColor="red";
		document.getElementById('email_msg').innerHTML="Please Fill Out this Field";
		return false;
	   }
 else if (!valid_text.test(mail.value))
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

//---------------------------------DOB----------------------------------
function dob_checking()
{
	if(bDate.value=='')
	    {
		bDate.style.borderColor="red";
		document.getElementById('dob_msg').innerHTML="Please Fill Out this Field";
		return false;
	    } 
		
	else
	     {
		   bDate.style.borderColor="green";
		   document.getElementById('dob_msg').innerHTML=" ";
		 }
}

//-------------------------------------BLOOD------------------------------------------------
function blood_checking()
{
	 if(bld.value=='')
		{
			bld.style.borderColor="red";
			document.getElementById('blood_msg').innerHTML="Please Fill Out this Field";
            return false;
		}
	else
	    {
		  bld.style.borderColor="green";
	      document.getElementById('blood_msg').innerHTML=" ";	 
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
















