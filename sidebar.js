function openrightbar(){
    document.getElementById('rightmain').className = "col-md-10 col-lg-10 col-sm-10 col-xs-10";
     document.getElementById('move').setAttribute("onclick","closerightbar()");
     document.getElementById('rightbar').style.width = "100%";
}
function closerightbar(){
    document.getElementById('rightmain').className = "col-md-12 col-lg-12 col-sm-12 col-xs-12";
     document.getElementById('move').setAttribute("onclick","openrightbar()");
     document.getElementById('rightbar').style.width = "0";
     document.getElementById('rightmain').style.width = "100%";
}
