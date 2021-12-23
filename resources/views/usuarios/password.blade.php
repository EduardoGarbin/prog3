<div>
    <form method="post" action="{{ route('profile.password') }}">
        @csrf
        <div>
            Senha Antiga: 
            <input type="password" name="senha_antiga"/> 
        </div>
        <div>
            Nova Senha: 
            <input type="password" name="senha_nova"/> 
        </div>
        <div>
            Repetir Senha: 
            <input type="password" name="repetir_senha"/> 
        </div>
        <button type="submit"> Gravar </button>
    </form>
</div>