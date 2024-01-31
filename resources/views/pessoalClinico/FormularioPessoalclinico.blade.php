@extends('admin.admin')

@section('conteudo') 
        <div class="col-12 grid-margin stretch-card"> 
                    <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Cadastrar Pessoal Clínico</h4>
                           <form class="forms-sample" action="{{route('enviarPessoalclinico')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                   <label for="exampleInputName1">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="exampleInputName1" placeholder="Nome">
                                    @error('nome')
                                  <span class = "text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="form-group " >
                                    <label for="exampleInputEmail3">Email </label>
                                    <input type="email" name="email"class="form-control" id="exampleInputEmail3" placeholder="Email">
                                        @error('email')
                                        <span class = "text-danger">{{ $message }}</span>
                                      @enderror  
                              </div>
                              <div class="form-group  ">
                                    <label for="exampleInputPassword4">Telemovel</label>
                                    <input type="namber" name="ter" class="form-control" id="exampleInputPassword4" placeholder="Telemovel">
                                    @error('ter')
                                      <span class = "text-danger">{{ $message }}</span>
                                    @enderror    
                              </div>
                                <div class="form-group ">
                                    <label for="exampleSelectGender">Genero</label>
                                    <select class="form-control"  name="genero"id="exampleSelectGender">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                        <option>Outros</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                <label>Escolha a Imagem</label><br>
                                <input type="file" name="image" id="image" > <br>
                                @error('image')
                                  <span class = "text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Número do BI</label>
                                    <input type="text" name="nbi" class="form-control" id="exampleInputCity1" placeholder="Nº do Bilhete">
                                    @error('nbi')
                                      <span class = "text-danger">{{ $message }}</span>
                                    @enderror   
                              </div>
                                <div class="form-group">
                                     <label for="exampleInputCity1">Especialidade</label>
                                      <div class="input-group">
                                            <select name="especialidade" class="form-control" id="exampleSelectGender">
                                              @foreach($dadosEspe as $espe)
                                                 <option>{{$espe->nome_especialidade}}</option>
                                              @endforeach
                                            </select>
                                    </div>
                                </div>
                              
                                
                                
                                
                                <button type="submit" class="btn btn-primary mr-2">Submiter</button>

                           </form>
                       </div>
                    </div>
        </div>
@endsection
          