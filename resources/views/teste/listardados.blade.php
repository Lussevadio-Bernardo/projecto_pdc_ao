<h1>LISTAGEM</h1>
@foreach($lista as $lis)
    <p>{{$lis->nome}}"  "{{$lis->content}}"  "{{$lis->telefone}}"  "{{$lis->email}}</p>
@endforeach