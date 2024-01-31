 @extends('admin.admin')

@section('conteudo') 
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Cadastrar Pessoal administrativo</div>
                                    <div class="card-body">
                                        <hr>
                                        <form action="{{route('enciarDadosEspecialidade')}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nome da Especialidade</label>
                                                <input id="cc-pament" name="nome" type="text" class="form-control"  placeholder="Nome da especialidade">
                                                @error('nome')
                                                    <span class = "text-danger">{{ $message }}</span>
                                                @enderror 
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Area</label>
                                                <input id="cc-name" name="area" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="area">
                                                    @error('area')
                                                         <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
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