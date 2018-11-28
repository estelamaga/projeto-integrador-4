window.onload = function(){
  let btndark = document.getElementById('tema-dark');
  btndark.onclick = function(){
    document.body.classList.add('tema-dark');
  }

  let btnnormal = document.getElementById('tema-normal');
  btnnormal.onclick = function(){
    document.body.classList.remove('tema-dark');
  }
}
