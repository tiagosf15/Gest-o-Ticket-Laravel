@extends('layouts/tiket')
@section('conteudo')
  @foreach($tikets as $tiket)
  
    <div class="m-1">
  <div class="col col-md-3 ">
    <p class="font-weight-normal" style="font-size:larger"><strong>Tema:</strong> {{$tiket->tick_tema}}</p>
    </div>

    <div class="col col-md-3 ">
    <p class="font-weight-normal "style="font-size:larger"><strong>CodigoRedmine:</strong> {{$tiket->tick_codigoredmine}}</p>
    </div>

    <div class="col col-md-3 ">
    <p class="font-weight-normal" style="font-size:larger"><strong>Descrição:</strong> {{$tiket->tick_descricao}}</p>
    </div>
    <div class="col col-md-3 ">
    <p class="font-weight-normal" style="font-size:larger"><strong>Data:</strong> {{date('d/m/Y',strtotime($tiket->created_at))}}</p>
    </div>
    </div>
    <form class="m-2" action="{{route('deletar.tiket')}}" method="post">
        @csrf
        <input type="text" style="display: none;" name="id" value="{{$tiket->id}}">
        <button type="submit" class="btn btn-danger form-control "><h3>Deletar</h3></button>
    </form>
    
    @endforeach
@endsection

@section('tabela')
<a href="{{route('tiket')}}" class="btn btn-primary d-flex justify-content-center">← Voltar</a>
@endsection