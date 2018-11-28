console.log("teste validacao");
// para pegar um elemento
// document.querySelector("input[type='submit']");



function validarFormulario(form){

    // console.log(form);
    let fields = form.querySelectorAll('input:required');
    let erro = form.querySelector('.erros');
    // console.log(fields);
    let senha = form.querySelector('input[name="password"]').value;
    let confirmaSenha = form.querySelector("input[name='confirma_senha']").value;

    for (let field in fields){
      if (fields [field].value === ''){
        erro.classList.add('alert');
        erro.classList.add('alert-danger');
        erro.innerHTML = "Preencha todos os campos obrigatórios!"
        return false;
      }
    }

    if (senha !=confirmaSenha){
      erro.classList.add('alert-danger');
      erro.innerHTML = "As senhas não são iguais";
      return false;
    }

    erro.remove();
    form.submit();
}

window.addEventListener('load', function(){
  $.ajax({
    url:'https://servicodados.ibge.gov.br/api/v1/localidades/estados/',
    type: 'GET',
    success: function(data){
      let option = document.createElement('option');
      option.value='';
      option.disabled=true;
      option.selected=true;
      option.innerHTML = 'Selecione...';
      document.getElementById('estado_pf').appendChild(option);
      let option2 = document.createElement('option');
      option2.value='';
      option2.disabled=true;
      option2.selected=true;
      option2.innerHTML = 'Selecione...';
      document.getElementById('estado_pj').appendChild(option2);
      for(let estado of data){
        let option = document.createElement('option');
        option.setAttribute('id_estado', estado.id);
        option.value=estado.sigla;
        option.innerHTML = estado.nome;
        document.getElementById('estado_pf').appendChild(option);
        let option2 = document.createElement('option');
        option2.setAttribute('id_estado', estado.id);
        option2.value=estado.sigla;
        option2.innerHTML = estado.nome;
        document.getElementById('estado_pj').appendChild(option2);

      }
      console.log(data);
    },
    error: function(err){
      console.log(err);
    }
  })

document.getElementById('estado_pf').addEventListener('change', carregaCidades);
document.getElementById('estado_pj').addEventListener('change', carregaCidades);


});
function carregaCidades(){
  let pessoa = this.id.split('_').pop();
  let id = this.options[this.selectedIndex].getAttribute('id_estado');
    document.getElementById('cidade_'+pessoa).innerHTML='';
  $.ajax({
    url:'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+id+'/municipios/',
    type: 'GET',
    success:function(data){
      let option = document.createElement('option');
      option.value='';
      option.disabled=true;
      option.selected=true;
      option.innerHTML = 'Selecione...';
      document.getElementById('cidade_'+pessoa).appendChild(option);
        for(let cidade of data){
          let option = document.createElement('option');
          option.value=cidade.nome;
          option.innerHTML = cidade.nome;
          document.getElementById('cidade_'+pessoa).appendChild(option);
          console.log(data);
        }
    },
    error:function(err){
      console.log(err);
    }

  })

}
