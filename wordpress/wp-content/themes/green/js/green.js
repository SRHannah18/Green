


// window.onload = function () {
//        alert('Welcome!');
// }

document.addEventListener("DOMContentLoaded", function() {
 
 var leitura = new FontFaceObserver('Leitura', {
  weight: 400
});

leitura.load().then(function () {
  document.documentElement.className += " leitura-loaded";
}, function () {
  // console.log('Font is not available');
});


var futura = new FontFaceObserver('Futura', {
	weight: 200
});

futura.load().then(function() {
	document.documentElement.className += " futura-loaded";
}, function(){

});

});


