@extends('admin.admin')
@section('conteudo') 
                <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Atualizar Palavra Passe</div>
                                    <div class="card-body">
                                        <hr>
                                        <form action="{{route('editar_palavrapase')}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Palavra passe antiga</label>
                                                <input id="cc-pament" name="senha_antiga" type="password" class="form-control"  placeholder="Senha antiga">
                                                @error('senha_antiga')
                                                   <span class = "text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Nova Palavra Passe</label>
                                                <input id="cc-name" name="senha_nova"  type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Senha nova">
                                                    @error('senha_nova')
                                                        <span class = "text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                             <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Confirmar a palavra</label>
                                                <input id="cc-name" name="confirmar_senha" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" placeholder="Confirmar senha">
                                                    @error('confirmar_senha')
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
@endsection 