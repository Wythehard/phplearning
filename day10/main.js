function check(){

    var user = document.getElementById('username');
    var username=user.value;
    //var namearr = username.split('');
    if(username.length>15||username.length<3)
    {
        var usernametip=document.getElementById("usernametip");
        usernametip.color="red";
    }
    var pwd = document.getElementById('pwd');

    //alert(namearr);
    document.getElementById('info').submit();
}
