@extends('layouts.master')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <h1 class="carrin text-center">Carrinho De Compras</h1>
        <div class="col-md-12">
            <div class="quadradao">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:80%">Produto</th>
                            <th style="width:10%">Preço</th>
                            <th style="width:1%">Quantidade</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="/images/camiseta-branca.jpg" alt="..."class="img-responsive" /></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">CAMISA BRANCA</h4>
                                        <p>COR: BRANCO</p>
                                        <p>TAMANHO:PP</p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Preço">R$45.00</td>
                            <td data-th="Quantidade">
                                <input type="number" class="form-control text-center" value="1">
                            </td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center"><strong class="total">Total 45.00</strong></td>
                        </tr>
                        <tr>
                            <td><a href="/produtos" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Comprando</a></td>
                            <td colspan="1" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total R$45.00</strong></td>
                            <td><a href="#" class="btn btn-success btn-block">Finalizar <i class="fa fa-angle-right"></i></a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>










@stop
