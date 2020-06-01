function login() {
	var username = document.getElementById("username");
	var pass = document.getElementById("password");
	if (username.value == ""){
		alert("請輸入使用者名稱");
	}
	if (pass.value  == ""){
		alert("請輸入密碼");
	}
	else if(username.value == "supervisor" && pass.value == "123456"){
		window.location.href="../Dashboard.html";
//		window.location.href="../input/admin.html";
	}
	else if(username.value == "normalUser" && pass.value == "123456"){
		window.location.href="../Dashboard.html";
//		window.location.href="../input/normalUser.html";
	}
	else {
		alert("請輸入正確的使用者名稱和密碼！")
	}
}