<div class="container-login">
    <div class="container-image"></div>
    <div class="container-login">
        @if(session('error'))
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session('error') }}
        </div>
        @endif
        <img src="{{ asset('assets/metrics/Starmetrics Logo_login.png') }}" />
        <h3>Entre na sua conta</h3>
        <form wire:submit="login">
            @csrf
            <div>
                <input type="text" wire:model="email" placeholder="Email" type="email">
                @error('email') <span class="error" style="color: red;">Campo obrigatório</span> @enderror 
            </div>
            <div>
                <input  wire:model="password" placeholder="Senha" type="password">
                @error('password') <span class="error" style="color: red;">Campo obrigatório</span> @enderror 
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</div>
