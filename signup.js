function myFunction() {
	let FirstName = document.getElementById('firstname').value;
	let MiddleName = document.getElementById('middlename').value;
	let LastName = document.getElementById('lastname').value;
	let UserName = document.getElementById('username').value;
	let Email = document.getElementById('email').value;
	let dateofbirth = document.getElementById('dob').value;
	let Password = document.getElementById('password').value;
	let currentYear = new Date().getFullYear();
	let age = currentYear - dateofbirth.substring(0, 4);

	if (FirstName == "" || MiddleName == "" ||LastName == "" ||UserName == "" || Email == ""|| dateofbirth == "" || Password == "") {
		alert('Fields should not be empty');
	}else if (!FirstName.match(/^[A-Za-z]+$/)) {
		document.getElementById('firstnameerror').innerHTML = "Firstname should contain letters only";
		return false;
	}else if (!MiddleName.match(/^[A-Za-z]+$/)) {
		document.getElementById('middlenameerror').innerHTML = "Middlename should contain letters only";
		return false;
	}
	else if (!LastName.match(/^[A-Za-z]+$/)) {
		document.getElementById('lastnameerror').innerHTML = "Lastname should contain letters only";
		return false;
	}else if (!UserName.match(/^[A-Za-z]+$/)) {
		document.getElementById('usernameerror').innerHTML = "Username should contain letters only";
		return false;
	}else if(age < 18){
		document.getElementById('ageerror').innerHTML = "Age should be above 18 years";
		return false;
	}else if(!Password.match(/^[A-Za-z0-9]*$/)){
		document.getElementById('passerror').innerHTML = "Password should be contain alphabets and numbers only";
		return false;
	}else{
		let message = "You " + UserName + " have successfully signed up";
		alert(message);
	}
	return true;

}