document.addEventListener("deviceready", onDeviceReady, false);
function onDeviceReady() {
    window.open = cordova.InAppBrowser.open;
}
function openLink(link_url){


        var ref = window.open(link_url, '_system', 'location=yes');
        return false;
    
}

   

