@extends('admin.admin')

@section('conteudo') 
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Atualizar Dados Da/o{{ $dadosPc->name}}</div>
                                    <div class="card-body">
                                        <hr>
                                        <form action="{{route('atualizarPClinico',Crypt::encryptString($dadosPc->email))}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nome</label>
                                                <input id="cc-pament" name="nome"  value ="{{$dadosPc->name}}" type="text" class="form-control"  placeholder="Nome">
                                                @error('nome')
                                                   <span class = "text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">E-mail</label>
                                                <input id="cc-name" name="email" value ="{{$dadosPc->email}}" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Email">
                                                    @error('email')
                                                      <span class = "text-danger">{{ $message }}</span>
                                                    @enderror 
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Telemovel</label>
                                                        <input id="cc-exp" name="ter" value ="{{$dadosPc->telemovel}}" type="tel" class="form-control cc-exp" placeholder="Telemovel" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                        @error('ter')
                                                             <span class = "text-danger">{{ $message }}</span>
                                                        @enderror   

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="exampleSelectGender">Genero</label>
                                                    <div class="input-group">
                                                        <select name="genero" value ="{{$dadosPc->Genero}} class="form-control" id="exampleSelectGender">
                                                            <option>Masculino</option>
                                                            <option>Femenino</option>
                                                            <option>Outros</option>
                                                          </select>
                                                    </div>
                                                </div>
                                                @can('adminMaster')
                                                <div class="col-6">
                                                    <label for="exampleSelectGender">Especialidade</label>
                                                    <div class="input-group">
                                                        <select name="especialidade" class="form-control" id="exampleSelectGender">
                                                            @foreach($dadosEspecial as $especia)
                                                                <option>{{$especia->nome_especialidade}}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
                                                </div>
                                               @endcan
                                            </div>
                                            
                                            <div><br>
                                             <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <span id="payment-button-amount">Submeter</span>
                                                    </button>
                                            
                                            </div>
                                        </form>
                                    </div>
                                </div>
 @endsection      