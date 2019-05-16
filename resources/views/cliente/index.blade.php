@extends('tema.layoutBase')
@section('conteudo')
	<div class="col-md-12">
		<!-- DataTables Example -->
		<div class="card mb-3">
          	<div class="form-group">
          	<div class="col-md-12 mt-3">
          		<a href="{{route('cliente.novo')}}" class="btn btn-primary">Novo Cliente</a>
<!--           		<button class="btn btn-primary">Novo</button> -->
          	</div>
          	</div>
          </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">          
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Ações</th>                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Ações</th> 
                  </tr>
                </tfoot>
                <tbody>
                	@foreach ($clientes as $cli)
                      <tr>
                        <td>{{$cli->cli_id}}</td>
                        <td>{{$cli->cli_nome}}</td>
                        <td>{{$cli->cli_idade}}</td>
                        <td><a class="btn btn-danger" style="color:white;" href="{{route('cliente.abrirUpdate', $cli->cli_id)}}">Editar</a></td>
                      </tr>
                  	@endforeach                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated at {{$dataatual}}</div>
        </div>
	</div>
@endsection