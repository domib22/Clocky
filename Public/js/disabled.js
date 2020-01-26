
function dis(){
    if(document.getElementById("ch").checked == true){
        document.getElementById("reg").disabled = false;
        // document.getElementById("reg").style.visibility='hidden';
    } else {
        document.getElementById("reg").disabled = true;
        // document.getElementById("reg").style.visibility='visible';
    }
}
