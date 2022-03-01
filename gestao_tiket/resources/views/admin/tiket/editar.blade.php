@extends('layouts/tiket')

@section('conteudo')

@foreach($tikets as $tiket)
<form action="{{route('update.tiket')}}" method="post">
  @csrf
<div class="form-group p-2">
    <div class="row">
      <div class="col col-md-3 mt-2">
        <input type="text" class="form-control" name="tick_tema" id="tick_tema" placeholder="Tick Tema" value="{{$tiket->   tick_tema}}">
      </div>
      

      <div class="col col-md-3 mt-2">
        <input type="text" class="form-control" name="tick_codigoredmine" placeholder="Tick CodigoRedmine" value="{{$tiket->tick_codigoredmine}}">
      </div>
      <div class="col col-md-6">
        <textarea class="form-control "  name="tick_descricao"  >{{$tiket->tick_descricao}}</textarea>
      </div>
      <div class="col col-md-3">
      <input type="hidden"  name="id" value="{{$tiket->id}}">
        <button type="submit" class="btn btn-primary mb-2">Editar</button>
        
      </div>
  </div>

</form>
@endforeach
@endsection

@section('tabela')
<a href="{{route('tiket')}}" class="btn btn-primary d-flex justify-content-center">← Voltar</a>
@endsection