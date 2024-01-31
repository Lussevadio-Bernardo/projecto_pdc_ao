@extends('admin.admin')

@section('conteudo') 
<div class="col-md-12">
  <!-- DATA TABLE -->
  <h3 class="title-5 m-b-35">Especialidades</h3>
  <div class="table-data__tool">
      <div class="table-data__tool-right">
        <a href="{{route('cadastrarEspecialidade')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
              <i class="zmdi zmdi-plus"></i>add</button></a>
          
      </div>
  </div>
  <div class="table-responsive table-responsive-data2">
      <table class="table table-data2">
          <thead>
              <tr>
              <th> Nome </th>
              <th> Descrição </th> 
              <th></th>
              </tr>
          </thead>
          <tbody>
          @foreach($dadosEspe as $lis)
              <tr class="spacer"></tr>
              <tr class="tr-shadow">
        
                <td> {{$lis->nome_especialidade}}</td>
                <td> {{$lis->descricao}} </td>
                  <td>
                        <a href="{{route('eliminarEspecialidade',$lis->nome_especialidade)}}">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                          </a>
                          
                      </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <!-- END DATA TABLE -->
</div>
@endsection