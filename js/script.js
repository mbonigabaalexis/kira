function validation(){
	var name=document.getElementById("name").value;
	var subject=document.getElementById("subject").value;
	var phone=parseInt(document.getElementById("phone").value);
	var email=document.getElementById("email").value;
	var message=document.getElementById("message").value;
	var error_message=document.getElementById("error_message");

	var text;
  error_message.style.padding="10";

if (name.length<5) {
	text="please enter valid name";
	error_message.innerHTML=text;
	return false;
}

if (subject.length<10) {
	text="please enter correct subject";
	error_message.innerHTML=text;
	return false;
}                            

if (isNaN(phone) ||phone.length<=10) {
	text="please enter valid phone number";
	error_message.innerHTML=text;
	return false;
}
if (email.indexOf("@")==-1 || email.length<6) {
	text="please enter valid email";
	error_message.innerHTML=text;
	return false;
}
if (message.length<=10) {
	text="please enter more than 100 characters";
	error_message.innerHTML=text;
	return false;
}
alert("form submitted successfull");
return true;
}
document.write(name);