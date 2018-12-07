@extends('layouts.master')
@section('content')

<div class="container">
    <h1 class="text-center">Perguntas frequentes</h1>
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                data-parent="#faqAccordion" data-target="#question0">
                <h4 class="panel-title">
                    <a href="#" class="ing">Esta loja é confiável</a>
                </h4>
            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <h5><span class="label label-primary">Resposta</span></h5>

                    <p> A nossa empresa oferece um ambiente seguro na hora do pagamento,
                     sigilo de todos os dados e informações de nossos clientes tornando nosso site muito confiável.
                    </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                data-parent="#faqAccordion" data-target="#question1">
                <h4 class="panel-title">
                    <a href="#" class="ing">Vocês possuem loja física?</a>
                </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <h5><span class="label label-primary">Resposta</span></h5>

                    <p>Somente loja online.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                data-parent="#faqAccordion" data-target="#question2">
                <h4 class="panel-title">
                    <a href="#" class="ing">Como faço um pedido na loja??</a>
                </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <h5><span class="label label-primary">Resposta</span></h5>

                    <p>Basta criar uma conta no site, adicionar produtos ao carrinho de compras e finalizar o
                        pedido informando uma opção de compra, tudo feito no site.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                data-parent="#faqAccordion" data-target="#question3">
                <h4 class="panel-title">
                    <a href="#" class="ing">Quanto tempo demora para entregar a compra?</a>
                </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <h5><span class="label label-primary">Resposta</span></h5>

                    <p>O prazo de entrega dependerá da opção de frete escolhida e do CEP, o prazo irá aparecer no
                        fechamento da compra.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse"
                data-parent="#faqAccordion" data-target="#question4">
                <h4 class="panel-title">
                    <a href="#" class="ing">Quais as opções de frete?</a>
                </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <h5><span class="label label-primary">Resposta</span></h5>

                    <p>Trabalhamos com Sedex e Pac, ou transportadora particular.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group" id="faqAccordion2">
    <h1 class="text-center">Trocar e devoluções</h1>
    <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                data-parent="#faqAccordion2" data-target="#question5">
                <h4 class="panel-title">
                    <a href="#" class="ing">Se não gostei ou me arrependi do produto posso devolver</a>
                </h4>
            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <h5><span class="label label-primary">Resposta</span></h5>
                    <p>Você tem até 7 dias corridos de acordo com o codigo do consumidor,a partir do recebimento do produto para efetuar a devolução.
                    </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                data-parent="#faqAccordion2" data-target="#question6">
                <h4 class="panel-title">
                    <a href="#" class="ing">Como faço para trocar um produto?</a>
                </h4>
            </div>
            <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                    <h5><span class="label label-primary">Resposta</span></h5>
                    <p> Toda solicitação de troca, devolução, arrependimento e avaria do produto deverá ser comunicado por email
                    </p>
                </div>
            </div>
        </div>
     </div>
    </div>











@stop
