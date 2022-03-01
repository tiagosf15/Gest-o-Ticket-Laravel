@extends('layouts/tiket')

@section('conteudo')

<form action="{{route('inserir.tiket')}}" method="post">
  @csrf
<div class="form-group p-2">
    <div class="row">
      <div class="col col-md-3 mt-2">
        <input type="text" class="form-control" name="tick_tema" id="tick_tema" placeholder="Tick Tema" value="{{ old('tick_tema') }}">
      </div>
      

      <div class="col col-md-3 mt-2">
        <input type="text" class="form-control" name="tick_codigoredmine" placeholder="Tick CodigoRedmine">
      </div>
      <div class="col col-md-6">
        <textarea class="form-control "  name="tick_descricao" placeholder="Descrição" ></textarea>
      </div>
      <div class="col col-md-3">

        <button type="submit" class="btn btn-primary mb-2">Criar</button>
        
      </div>
  </div>

</form>
@endsection

@section('tabela')
<a href="{{route('tiket')}}" class="btn btn-primary d-flex justify-content-center">← Voltar</a>
@endsection