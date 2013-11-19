<!--
function InputCheck(RegFm)
{

  if (RegFm.user.value.length < 6)
  {
//   alert("用户名不能少于6字符!");
	RegFm.user.focus();
    return (false);
  }
  if (RegFm.password.value == "")
  {
//    alert("必须设定登录密码!");
    RegFm.password.focus();
    return (false);
  }
  if (RegFm.repassword.value != RegFm.password.value)
  {
//    alert("两次密码不一致!");
    RegFm.repassword.focus();
    return (false);
  }
  if (RegFm.email.value == "")
  {
//    alert("邮箱不能为空!");
    RegFm.email.focus();
    return (false);
  }
}

//-->