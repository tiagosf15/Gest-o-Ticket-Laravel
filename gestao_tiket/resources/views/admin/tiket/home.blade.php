@extends('layouts/tiket')

@section('conteudo')
<form action="{{route('pesquisar.tiket')}}" method="post">
  @csrf

  <div class="form-group p-2">
    <div class="row">
      <div class="col col-md-2">
        <input type="text" class="form-control" name="tick_tema" id="tick_tema" placeholder="Tick Tema" value="{{ old('tick_tema') }}">
      </div>
      <div class="col col-md-2">
        <input type="text" class="form-control" name="tick_descricao" placeholder="Tick Descrição">
      </div>
   
      <div class="col col-md-2">
        <input type="text" class="form-control" name="tick_codigoredmine" placeholder="Tick CodigoRedmine">
      </div>
     
      <div class="col col-md-2">
        <input type="date" class="form-control" name="tick_datainicio" placeholder="Data inicio">
      </div>
      <div class="col col-md-2">
        <input type="date" class="form-control" name="tick_datafim" placeholder="Data Fim">
      </div>
      <div class="mt-2">
        <button type="submit" class="btn btn-primary mb-2">pesquisar</button>
        <a type="submit" href="{{route('cadastrar.tiket')}}" class="btn btn-success mb-2">Criar</a>
      </div>
    </div>

</form>
@endsection


@section('tabela')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tema</th>
      <th scope="col">Descrição</th>
    
      <th scope="col">CodigoRedmine</th>
      <th scope="col">Data Cadastro</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tikets as $tiket)
    <tr>
      <th>{{$tiket->tick_tema}}</th>
      <td>{{$tiket->tick_descricao}}</td>
      <td>{{$tiket->tick_codigoredmine}}</td>
      <td>{{date('d/m/Y',strtotime($tiket->created_at))}}</td>
      <td><a href="{{route("mostrar.tiket", $tiket->id)}}" class="btn btn-warning">Mostrar</a></td>
      <td><a href="{{route("editar.tiket", $tiket->id)}}" class="btn btn-primary">Editar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection