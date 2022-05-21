var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = false;
  counter++;
},);
