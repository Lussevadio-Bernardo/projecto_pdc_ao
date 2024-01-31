@extends('admin.admin')

@section('conteudo')  
                           
                           <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Atualizar Dados {{$dadosPa->nome}}</div>
                                    <div class="card-body">
                                        <hr>
                                        <form action="{{route('editarpa', Crypt::encryptString($dadosPa->email))}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nome</label>
                                                <input id="cc-pament" name="nome" type="text" class="form-control"  value="{{$dadosPa->name}}">
                                                @error('nome')
                                                     <span class = "text-danger">{{ $message }}</span>
                                                @enderror   
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">E-mail</label>
                                                <input id="cc-name" name="email" value="{{$dadosPa->email}}" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Email">
                                                    @error('email')
                                                          <span class = "text-danger">{{ $message }}</span>
                                                    @enderror   
                                                </div>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Telemovel</label>
                                                        <input id="cc-exp" name="terminal" value="{{$dadosPa->telemovel}}" type="tel" class="form-control cc-exp" placeholder="Telemovel" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                    @error('terminal')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror   
                                                </div>
                                                
            
                                            </div>
                                            <div><br>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Submeter</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
             @endsection