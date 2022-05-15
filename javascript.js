//document.cookie.replace(/(?<=^|;).+?(?=\=|;|$)/g, name => location.hostname.split('.').reverse().reduce(domain => (domain=domain.replace(/^\.?[^.]+/, ''),document.cookie=`${name}=;max-age=0;path=/;domain=${domain}`,domain), location.hostname));

/* Cookies */
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

document.getElementById("close-x").addEventListener("click", function(){
    document.getElementById('popup-how-to-join').style.visibility = "hidden";
    document.getElementById('popup-how-to-join-content').style.visibility = "hidden";
});

if(getCookie("popupShown") != "true"){
    document.getElementById('popup').style.visibility = "visible";
}
document.getElementById('cookiePopupId').addEventListener("click", function(){
    setCookie("popupShown", "true", "360");
    document.getElementById('popup').style.visibility = "hidden";
});

document.getElementById('join-link').addEventListener("click", function(){
	document.getElementById('popup-how-to-join').style.visibility = "visible";
    document.getElementById('popup-how-to-join-content').style.visibility = "visible";
});

document.getElementById('vote_action').addEventListener("click", function(){
  let callFile = $.post( "vote_action.php", function(data) {});
});