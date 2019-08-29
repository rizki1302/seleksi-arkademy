function is_email_valid(email){
	var pola = /^[a-zA-Z]+@[a-zA-Z]+.[a-zA-Z]+$/;
	var hasil = pola.test(email);
	return hasil;
	}

	function is_phone_valid(phone){
	var pola = /^\+62[0-9]{8,15}$/;
	var hasil = pola.test(phone);
	return hasil;
	}

	function is_username_valid(username){
	var pola = /^[a-z]{5,9}$/;
	var hasil = pola.test(username);
	return hasil;	
	}

	function is_password_valid(password){
	var pola = /^[a-zA-Z0-9]{6,}[!@#$&()\\-`.+,/\"]+#{1}$/;
	var hasil = pola.test(username);
	return hasil;
	}

	var testpass = "Rizki09@";
	console.log(is_password_valid(testpass));

	var testp = "+6282392355533";
	is_phone_valid(testp);
	var test = "rizki@gmail.com";
	is_email_valid(test);
