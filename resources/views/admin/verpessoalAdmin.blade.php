@extends('admin.admin')

@section('conteudo') 
<div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Pessoal Administrativo</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-right">
                            <a href="{{route('criarPessoalAdmin')}}">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add</button>
                            </a>
                           
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
                            @foreach($dadosUsuario as $lis)
                                        @if($lis->id!=Auth::user()->id)
                                                    <tr class="spacer"></tr>
                                                    <tr class="tr-shadow">
                                            
                                                    <td> {{$lis->name}}</td>
                                                    <td> {{$lis->genero}} </td>
                                                    <td> {{$lis->email}}</td>
                                                    <td> {{$lis->telemovel}} </td>
                                                    <td> {{$lis->num_bi}} </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="{{route('atualizarPessoalAdmin',Crypt::encryptString($lis->email))}}" >
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{route('Eliminar/pessoalAdmin',Crypt::encryptString($lis->email))}}">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                            
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
                
               

