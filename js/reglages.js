
document.getElementById('sAvatar').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;

    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.querySelector("#imgProfil img").src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
}