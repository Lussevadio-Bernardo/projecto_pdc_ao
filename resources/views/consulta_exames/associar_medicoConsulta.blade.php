@extends('admin.admin')

@section('conteudo')
    
  
        <div class="col-lg-12">
                                <div class="card">
                                    
                                    <div class="card-header">
                                        Associar a Consulta do Utente  com o Medico 
                                    </div>
                                    <div class="card-body">
                                        <hr>
                                        <form action="{{route('associado_medico_consulta',['id_pclin'=>Crypt::encryptString($pclinco->id_pessoal_clinico),'id_consult'=>Crypt::encryptString($idDecriptadoConsulta)])}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        @method('put')

                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Data de Atendimento do Utente</label>
                                                <input class="form-control" type="date" name="data_atendimento" id="data_atendimento" class="inputUser" required>
                                                @error('data_atendimento')
                                                     <span class = "text-danger">{{ $message }}</span>
                                                @enderror 
                                            </div>
                                               
                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Hora de Atendimento do Utente</label>
                                                <input type="time" id="cc-pament" name="hora_atendimento" class="form-control" required>
                                                @error('hora_atendimento')
                                                     <span class = "text-danger">{{ $message }}</span>
                                                @enderror
                                             </div>
                                            
                                            <div><br>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Associar</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


@endsection