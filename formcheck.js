function formcheck(){
	if(regist.id.value == ''){
		alert('請輸入帳號!!!');
		regist.id.focus();
		return false;
	}
	if(regist.pw.value == ''){
		alert('請輸入密碼!!!');
		regist.pw.focus();
		return false;
	}
	return true;
}