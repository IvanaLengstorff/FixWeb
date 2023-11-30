<div>
    @if ($isEnable)
        <div class="login__content">
            <div class="login__img">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>

            <div class="login__forms">
                <form method="POST" action="{{ route('register') }}" class="login__registre" id="login-in">
                    @csrf
                    <h1 class="login__title" style="font-weight: bold">Registrarse</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input id="name" type="text" placeholder="Nombre del taller"
                            class="login__input @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>

                    @error('name')
                        <span id="error" class="login__forgot">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input id="email" type="email" placeholder="Correo"
                            class="login__input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>

                    @error('email')
                        <span id="error" class="login__forgot">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input id="password" type="password" placeholder="Contraseña"
                            class="login__input @error('password') is-invalid @enderror" name="password"
                            value="{{ old('password') }}" required autocomplete="password" autofocus>
                    </div>

                    @error('password')
                        <span id="error" class="login__forgot">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input id="password-confirm" type="password" placeholder="Confirmar contraseña"
                            class="login__input @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" value="{{ old('password_confirmation') }}" required
                            autocomplete="password_confirmation" autofocus>
                    </div>

                    <div align="center">
                        <button type="submit" class="login__button">
                            {{ __('Register') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    @endif
</div>
