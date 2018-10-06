var button = document.querySelector(".entry-submit");
var a ="qwe";
var b ="qwe";
console.log(button);
button.addEventListener("click", function(){
	var login = document.querySelector("#first");
	var password = document.querySelector("#second");
	var end = login.value;
	var end1 = password.value;
		 if (end === a && end1 === b) {
		 	document.location = "../views/admin1.html";
		 }
		 else if (end !== a && end1 === b) {
		 alert('Неверный логин либо пароль');
		 }
		 else if (end === a && end1 !== b) {
		 alert('Неверный логин либо пароль');
		 }
		 else if (end !== a && end1 !== b) {
		 	alert('Неверный логин либо пароль');
		 }
});