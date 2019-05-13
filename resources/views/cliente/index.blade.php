@extends('tema.layoutBase')
@section('conteudo')
	<div class="col-md-12">
		<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Idade</th>                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Idade</th> 
                  </tr>
                </tfoot>
                <tbody>
                	@foreach ($clientes as $cli)
                      <tr>
                        <td>{{$cli->cli_id}}</td>
                        <td>{{$cli->cli_nome}}</td>
                        <td>{{$cli->cli_idade}}</td>
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