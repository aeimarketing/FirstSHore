
document.addEventListener("deviceready", onDeviceReady, false);
function onDeviceReady() {
    window.open = cordova.InAppBrowser.open;
}
function openLink(link_url,url_bar){
        var bar='location=no';
        var target='_self';
        if(url_bar){
            bar='location=yes';
        }
        var ref =  window.open(link_url, target, bar);
        return false;
    
}

   

