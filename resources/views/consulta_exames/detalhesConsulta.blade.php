@extends('admin.admin')

@section('conteudo') 
    
    <div class="col-md-12">
        <h1 class="title-10 m-b-35">Gestão de Marcação de Consultas </h1>
        <div class="table-responsive table-responsive-data2">
            @can('pclinico')
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                <th> Imagem </th>
                                <th> Dados Paciente </th>
                                <th> Departamento </th>
                                <th> Sintomas</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td> 
                                                <div class="account-item clearfix js-item-menu" >
                                                    <div class="image">
                                                        <img src="{{asset($resultado_Utente->imagem)}}" class="img-responsive"  />
                                                    </div>
                                                </div>
                                            </td>
                                           <td>  
                                                <p>{{$resultado_Utente->name}}</p>
                                                <p>{{$resultado_Utente->genero}}</p>
                                                <p>{{$idade}} de Idade </p>
                                                <p>{{$resultado_Utente->email}}</p>

                                           </td>
                                           <td> {{$resultado_Utente->nome_especialidade}}  </td>
                                           <td>{{$resultado_Utente->mensagem}} </td>
                                        </tr>
                                    </tr>
                                    
                            </tbody>
                        </table>
                    </div><br>
                    <div><br>
                    <a href="{{route('marcar_comoLida',['id'=>Crypt::encryptString($resultado_Utente->id_consulta)])}}">
                         <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                             <span id="payment-button-amount">Marcar como Atendido</span>
                          </button>
                         </div>
                    </a>
                 @else
                    <table class="table table-data2">
                            <thead>
                                <tr>
                                <th> Imagem </th>
                                <th> Dados Paciente </th>
                                <th> Departamento </th>
                                <th> Sintomas</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td> 
                                                <div class="account-item clearfix js-item-menu" >
                                                    <div class="image">
                                                        <img src="{{asset($resultado_Utente->imagem)}}" class="img-responsive"  />
                                                    </div>
                                                </div>
                                            </td>
                                           <td>  
                                                <p>{{$resultado_Utente->name}}</p>
                                                <p>{{$resultado_Utente->genero}}</p>
                                                <p>{{$idade}} de Idade </p>
                                                <p>{{$resultado_Utente->email}}</p>

                                           </td>
                                           <td> {{$resultado_Utente->nome_especialidade}}  </td>
                                           <td>{{$resultado_Utente->mensagem}} </td>
                                        </tr>
                                    </tr>
                                    
                            </tbody>
                        </table>
                    </div><br>
                    <h1 class="title-10 m-b-35">Especialistas Na Area </h1>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                           
                            <thead>
                                <tr>
                                <th> Imagem </th>
                                <th> Nome </th>
                                <th> Hora de Andimento</th>
                                <th> Dias de atendimento</th>
                
                                </tr>
                            </thead>
                            <tbody>
                            
                                                    @if($resultadoPclinico->hora_entrada!=null)
                                                        <tr class="spacer"></tr>
                                                            <tr class="tr-shadow">
                                                                <td> 
                                                                    <div class="account-item clearfix js-item-menu" >
                                                                        <div class="image">
                                                                            <img src="{{asset($resultadoPclinico->imagem)}}" class="img-responsive"  />
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            <td> {{$resultadoPclinico->name}}</td>
                                                            
                                                                <td>{{ \Carbon\Carbon::parse($resultadoPclinico->hora_entrada)->format('H:i')}} à {{\Carbon\Carbon::parse($resultadoPclinico->hora_saida)->format('H:i')}}</td>
                                                            <td> 
                                                                {{$resultadoPclinico->dias_semana}}
                                                            </td>
                                                            <td>
                                                                    <div class="table-data-feature">
                                                                        <a href="{{route('associarmedicopaciente',['id_medico'=>Crypt::encryptString($resultadoPclinico->id_pessoal_clinico),'id_consul'=>Crypt::encryptString($resultado_Utente->id_consulta)])}}">
                                                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                                        Associar</button>
                                                                        </a>
                                                                </div>
                                                                </td>
                                                            </tr>
                                                        </tr>
                                                    @endif  
                            </tbody>
                        </table>
                    @endcan
                    </div><br>
     </div>
@endsection