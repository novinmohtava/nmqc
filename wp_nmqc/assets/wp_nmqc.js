/*
NOVINMOHTAVA - NEWS SERVICE JSFILE
*/
            
            function parvazns_ppdelegate(el, evt, sel, handler) {
    el.addEventListener(evt, function (event) {
        var t = event.target;
        while (t && t !== this) {
            if (t.matches(sel)) {
                handler.call(t, event);
            }
            t = t.parentNode;
        }
    });
}
function parvazns_disornone(edm,dw){
 
 if(edm=='ppnsCustome'){
document.getElementById('ppnsDefaultP'+dw).style.display="none";
document.getElementById('ppnsCustomeP'+dw).style.display="block";
 }
else if(edm=='ppnsDF'){
document.getElementById('ppnsDefaultP'+dw).style.display="block";
document.getElementById('ppnsCustomeP'+dw).style.display="none";
 }
 }

parvazns_ppdelegate(document, "change", "#ppnsModelP select", function (e) { 
 parvazns_disornone(e.target.value, e.target.getAttribute('dwid'));
}); 
