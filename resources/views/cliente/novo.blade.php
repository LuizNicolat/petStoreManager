@extends('tema.layoutBase') @section('conteudo')
<form action="{{route('cliente.salvar')}}" method="POST">
		
	<div class="form-group">
			@csrf
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-8">
						<label for="inputNome">Nome</label> <input type="text" value=""
							class="form-control" name="inputNome">
					</div>
					<div class="col-md-4">
						<label for="inputIdade">Idade</label> <input type="text" value=""
							class="form-control" name="inputIdade">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<label for="inputCep">CEP</label> <input type="text" value=""
							class="form-control" name="inputCep">
					</div>
					<div class="col-md-8">
						<label for="inputBairro">Bairro</label> <input type="text" value=""
							class="form-control" name="inputBairro">
					</div>
					<div class="col-md-8">
						<label for="inputRua">Rua</label> <input type="text" value=""
							class="form-control" name="inputRua">
					</div>
					<div class="col-md-4">
						<label for="inputNumero">Numero</label> <input type="text"
							value="" class="form-control" name="inputNumero">
					</div>
					<div class="col-md-6">
						<label for="inputCidade">Cidade</label> <input type="text"
							value="" class="form-control" name="inputCidade">
					</div>
					<div class="col-md-6">
						<label for="inputEstado">Estado</label> <input type="text"
							value="" class="form-control" name="inputEstado">
					</div>
				</div>


			</div>
			<div class="form-group">
				<div class="col-md-3 mt-3">
					<input type="submit" class="btn btn-primary" name="btnEnviar" value="ENVIAR"></input>
				</div>
			</div>
	</div>

</form>
@endsection
