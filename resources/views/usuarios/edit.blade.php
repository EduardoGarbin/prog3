<div>
    <form method="post" action="{{ route('profile.edit') }}">
        @csrf
        <div>
            Nome: 
            <input type="text" value="{{ Auth::user()->name }}" name="nome"/> 
        </div>
        <div>
            E-mail: 
            <input type="text" value="{{ Auth::user()->email }}" name="email"/> 
        </div>
        <button type="submit"> Gravar </button>
    </form>
</div>