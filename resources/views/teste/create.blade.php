<h1>Formulario teste</h1>
<form action="{{route('post.store')}}" method="post">
    @csrf
    <input type="text" name="nome" id="nome" placeholder="Nome">
    <input type="namber" name="tel" id="tel" placeholder="Telefone">
    <input type="email" name="email" id="tel" placeholder="Email">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"></textarea>
    <button type="submit">Enviar</button>
</form>