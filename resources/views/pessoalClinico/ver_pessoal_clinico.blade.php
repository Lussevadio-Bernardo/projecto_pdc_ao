@extends('admin.admin')

@section('conteudo') 
         
 <div class="col-md-12">
  <!-- DATA TABLE -->
  @can('adminMaster')
  <h3 class="title-5 m-b-35">Pessoal Clinico</h3>
  
  <div class="table-data__tool">
      <div class="table-data__tool-right">
        <a href="{{route('cadastrarPessoalclinico')}}">
          <button class="au-btn au-btn-icon au-btn--green au-btn--small">
              <i class="zmdi zmdi-plus"></i>add</button></a>
      </div>
  </div>
  <div class="table-responsive table-responsive-data2">
      <table class="table table-data2">
          <thead>
              <tr>
              <th> Nome </th>
              <th> Genero </th> 
              <th> E-mail </th>
              <th> Terminal</th>
              <th> Nº Bilhete </th>
              <th></th>
              </tr>
          </thead>
          <tbody>
          @foreach($dados_pessoal_clinico as $lis)
                            <tr class="spacer"></tr>
                            <tr class="tr-shadow">
                                <td> {{$lis->name}}</td>
                                <td> {{$lis->genero}} </td>
                                <td> {{$lis->email}}</td>
                                <td> {{$lis->telemovel}} </td>
                                <td> {{$lis->num_bi}} </td>
                                <td>
                                    <div class="table-data-feature">
                                        
                                        <a href="{{route('atualizarPessaolClinico',Crypt::encryptString($lis->email))}}" >
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                    
                                        <a href="{{route('eliminarPessoalClinico',Crypt::encryptString($lis->email))}}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </a>
                                        <a href="{{route('especificarHorario',Crypt::encryptString($lis->email))}}" >
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Especificar Hora">
                                                <i class="bi bi-clipboard2-data"></i>
                                            </button>
                                        </a>
                            
                                    </div>
                                </td>
                            </tr>
              @endforeach
          </tbody>
      </table>
      
  </div>
  @else
  
    @foreach($dados_pessoal_clinico as $lis)
    <h1 class="title-5 m-b-35"> Perfil do/a {{$lis->name}} </h1>
    <p>Genero:{{$lis->genero}}</p>
    <p>Número do Bilhete:</p>
    <p>E-mail:{{$lis->email}}</p>
    <p>Numero de telefone: {{$lis->telemovel}} </p>
    <p>Especialidade: {{$lis->nome_especialidade}}</p>
    @endforeach

  @endcan

  <!-- END DATA TABLE -->
</div>
@endsection
                        