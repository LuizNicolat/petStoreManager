@extends('tema.layoutBase') @section('conteudo')
	<form>
		<div class="form-group">
			<div class="col-md-6">
			<div class="row">
    			<div class="col-md-8">
        			<label for="inputNome">Nome</label>
        			<input type="text" value="" class="form-control" name="inputNome">
    			</div>
    			<div class="col-md-4">
        			<label for="inputIdade">Idade</label>
        			<input type="text" value="" class="form-control" name="inputIdade">
    			</div>
			</div>
			<div class="row">
    			<div class="col-md-12">
            			<label for="inputCep">CEP</label>
            			<input type="text" value="" class="form-control" name="inputCep">
    			</div>
    			<div class="col-md-8">
        			<label for="inputRua">Rua</label>
        			<input type="text" value="" class="form-control" name="inputRua">
    			</div>
    			<div class="col-md-4">
        			<label for="inputNumero">Numero</label>
        			<input type="text" value="" class="form-control" name="inputNumero">
    			</div>
    			<div class="col-md-6">
        			<label for="inputCidade">Cidade</label>
        			<input type="text" value="" class="form-control" name="inputCidade">
    			</div>
    			<div class="col-md-6">
        			<label for="inputEstado">Estado</label>
        			<input type="text" value="" class="form-control" name="inputEstado">
    			</div>
    			<div class="col-md-3">
    				<button type="button" class="btn btn-primary" name="btnEnviar">ENVIAR</button>
    			</div>
			</div>
			</div>
		</div>

	</form>
@endsection
