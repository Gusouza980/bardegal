@extends('painel.template.main')

@section('styles')
    <!-- Lightbox css -->
    <link href="{{asset('admin/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Galeria Bardega
@endsection

@section('botoes')
    {{--  <a name="" id="" class="btn btn-success" href="{{route('painel.noticia.cadastro')}}" role="button">Nova Notícia</a>  --}}
@endsection

@section('conteudo')
<div class="row mt-3">
    <div class="col-12 col-lg-6">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Nova imagem
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="text-muted">
                            <form action="{{route('painel.galeria.adicionar')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="">Categoria</label>
                                    <select class="form-select" name="categoria" id="">
                                        @foreach(config("globals.categorias_galeria") as $chave => $categoria)
                                            <option value="{{$chave}}">{{$categoria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Imagem</label>
                                    <input type="file"
                                        class="form-control" name="imagem">
                                    <small id="helpId" class="form-text text-muted">Escolha fotos quadradas para garantir uma boa visualização no layout</small>
                                </div>
                                <div class="form-group text-end">
                                    <button class="btn btn-primary" type="submit">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@for($i = 1; $i < count(config("globals.categorias_galeria")); $i++)
<div class="row mt-3">
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <h4 class="card-title my-3">{{config("globals.categorias_galeria")[$i]}}</h4>
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 tabela">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Exibindo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($galeria->where("categoria", $i) as $imagem)
                            <tr>
                                <td style="width: 150px;"><img src="{{asset($imagem->caminho)}}" width="150px"></td>
                                <td style="text-align:center; vertical-align: middle;">
                                    @if($imagem->ativo)
                                        <i class="fa fa-star" style="color: orange;" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @endif
                                </td>
                                <td style="text-align:center; vertical-align: middle;">
                                    <a href="{{route('painel.galeria.remover', ['galeria' => $imagem])}}" id="" class="btn btn-danger" role="button">Remover</a>
                                    @if($imagem->ativo)
                                        <a href="{{route('painel.galeria.exibicao', ['galeria' => $imagem])}}" id="" class="btn btn-primary" role="button">Ocultar</a>
                                    @else
                                        <a href="{{route('painel.galeria.exibicao', ['galeria' => $imagem])}}" id="" class="btn btn-primary" role="button">Exibir</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Preview da Galeria</h4>

                <div class="popup-gallery d-flex flex-wrap">
                    @foreach($galeria->where("categoria", $i) as $imagem)
                        <a href="{{asset($imagem->caminho)}}">
                            <div class="img-fluid mx-2">
                                <img src="{{asset($imagem->caminho)}}" alt="" width="120">
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div> <!-- end row -->
@endfor
@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Magnific Popup-->
    <script src="{{asset('admin/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- lightbox init js-->
    <script src="{{asset('admin/js/pages/lightbox.init.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.tabela').DataTable( {
                language:{
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoThousands": ".",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "zeroRecords": "Nenhum registro encontrado",
                    "search": "Pesquisar",
                    "paginate": {
                        "next": "Próximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "Último"
                    },
                    "aria": {
                        "sortAscending": ": Ordenar colunas de forma ascendente",
                        "sortDescending": ": Ordenar colunas de forma descendente"
                    },
                    "select": {
                        "rows": {
                            "_": "Selecionado %d linhas",
                            "0": "Nenhuma linha selecionada",
                            "1": "Selecionado 1 linha"
                        },
                        "1": "%d linha selecionada",
                        "_": "%d linhas selecionadas",
                        "cells": {
                            "1": "1 célula selecionada",
                            "_": "%d células selecionadas"
                        },
                        "columns": {
                            "1": "1 coluna selecionada",
                            "_": "%d colunas selecionadas"
                        }
                    },
                    "buttons": {
                        "copySuccess": {
                            "1": "Uma linha copiada com sucesso",
                            "_": "%d linhas copiadas com sucesso"
                        },
                        "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Visibilidade da Coluna",
                        "colvisRestore": "Restaurar Visibilidade",
                        "copy": "Copiar",
                        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                        "copyTitle": "Copiar para a Área de Transferência",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Mostrar todos os registros",
                            "1": "Mostrar 1 registro",
                            "_": "Mostrar %d registros"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir"
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Preencher todas as células com",
                        "fillHorizontal": "Preencher células horizontalmente",
                        "fillVertical": "Preencher células verticalmente"
                    },
                    "lengthMenu": "Exibir _MENU_ resultados por página",
                    "searchBuilder": {
                        "add": "Adicionar Condição",
                        "button": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "clearAll": "Limpar Tudo",
                        "condition": "Condição",
                        "conditions": {
                            "date": {
                                "after": "Depois",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "gt": "Maior Que",
                                "gte": "Maior ou Igual a",
                                "lt": "Menor Que",
                                "lte": "Menor ou Igual a",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "string": {
                                "contains": "Contém",
                                "empty": "Vazio",
                                "endsWith": "Termina Com",
                                "equals": "Igual",
                                "not": "Não",
                                "notEmpty": "Não Vazio",
                                "startsWith": "Começa Com"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Excluir regra de filtragem",
                        "logicAnd": "E",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Limpar Tudo",
                        "collapse": {
                            "0": "Painéis de Pesquisa",
                            "_": "Painéis de Pesquisa (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Nenhum Painel de Pesquisa",
                        "loadMessage": "Carregando Painéis de Pesquisa...",
                        "title": "Filtros Ativos"
                    },
                    "searchPlaceholder": "Digite um termo para pesquisar",
                    "thousands": "."
                } 
            } );
        } );    
    </script> 
@endsection