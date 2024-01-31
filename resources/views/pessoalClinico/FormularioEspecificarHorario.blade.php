@extends('admin.admin')

@section('conteudo') 
    
    <div class="col-lg-12">
                                <div class="card">
                                    @can('pclinico')
                                    <div class="card-header">Atualizar Hora Do/a {{$dadosPc->name}} </div>
                                    @else
                                    <div class="card-header">Especificar Hora Do/a {{$dadosPc->name}} </div>
                                    @endcan
                                    <div class="card-body">
                                        <hr>
                                        <form action="{{route('atualizarHorario',Crypt::encryptString($dadosPc->id))}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Hora de entrada</label>
                                                <input type="time" id="cc-pament" name="hora_entrada" class="form-control" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Hora de Saida</label>
                                                <input type="time" id="cc-pament" name="hora_de_saida" class="form-control" required>
                                             </div>
                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Dias da Semana</label>
                                                <input id="cc-name" name="dias_semana" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Dias da semana">
                                             </div> 
                                             <div class="col-5">
                                             <label for="exampleSelectGender">Quantidades de dias de trabalho na semana</label>
                                             <div class="input-group">
                                                 <select name="dias_trabalho" class="form-control" id="exampleSelectGender">
                                                            <option>1 dia na semana</option>
                                                            <option>2 dias na semana </option>
                                                            <option>3 dias na semana</option>
                                                            <option>4 dias na semana</option>
                                                            <option>5 dias na semana</option>
                                                          </select>
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
@endsection