
document.addEventListener("deviceready", onDeviceReady, false);
function onDeviceReady() {
    window.open = cordova.InAppBrowser.open;
}
function openLink(link_url, url_bar) {
    var bar = 'location=no,clearsessioncache=yes,clearcache=yes';
    var target = '_self';
    if (url_bar) {
        bar = 'location=yes';
        target = '_system';
    }

    var ref = window.open(link_url, target, bar);
    ref.addEventListener('loadstop', function (event) {
        if (event.url.match("mobile/close")) {
            ref.close();
        }
    });

}



