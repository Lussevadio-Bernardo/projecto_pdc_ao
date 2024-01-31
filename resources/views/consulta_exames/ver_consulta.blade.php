@extends('admin.admin')

@section('conteudo')  
<div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Gestão de Marcação de Consultas </h3>
                    
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                <th> Nome Paciente</th>
                                <th> E-mail </th>
                                <th> Departamento </th> 
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($dados_geral as $lis)
                                @if($lis->estado_consulta==0)
                                                    <tr class="spacer"></tr>
                                                    <tr class="tr-shadow">
                                                    <td> {{$lis->name}}</td>
                                                    <td> {{$lis->email}} </td>
                                                    <td> {{$lis->nome_especialidade}}</td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            @can('adminMaster')
                                                                <a href="{{route('verdetalhesconsulat',Crypt::encryptString($lis->id_consulta))}}">
                                                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                                        Aceitar</button>
                                                                </a>
                                                            @else
                                                                <a href="{{route('verdetalhesconsulat',Crypt::encryptString($lis->id_consulta))}}">
                                                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                                        Confirmar</button>
                                                                </a>

                                                            @endcan
                                                        </div>
                                                    </td>
                                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
        </div>

@endsection