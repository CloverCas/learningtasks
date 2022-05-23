var urlParams = new URLSearchParams(window.location.search);
console.log(urlParams);
var ref =document.getElementById('myName');
ref.innerText=urlParams.get('myName');
console.log(ref);
