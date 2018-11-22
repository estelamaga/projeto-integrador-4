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
