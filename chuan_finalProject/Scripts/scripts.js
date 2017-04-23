/**
 * Created by austinneveau on 4/3/17.
 */

function hideDiv(){
    setTimeout(function() {
    }, 10000);
}

setInterval(function(){
    $('#demo').fadeOut();
},15000);


function hideShowDiv() {
    var x = document.getElementById('.starterTemplate');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
