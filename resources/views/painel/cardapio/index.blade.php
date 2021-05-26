@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Categorias
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNovaCategoria" role="button">Nova Categoria</a>
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <form action="{{route('painel.cardapio.salvar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="formFile" class="form-label">Atualizar Cardápio</label>
                        <input class="form-control" name="cardapio" type="file" id="formFile">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@if($cardapio)
<div class="row">
    <div class="col-12">
        <iframe style="width: 100%; min-height: 100vh;" src="{{asset($cardapio->caminho)}}" title="Cardápio - Bardega"></iframe>
    </div>
</div>
@endif





@endsection

@section('scripts')
 
@endsection