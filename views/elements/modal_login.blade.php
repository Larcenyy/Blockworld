<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-100">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Connexion</h1>
                <button  type="button" class="btn-close bg-myBackground" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column gap-1">
                <form class="d-flex flex-column align-items-center" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3 d-flex flex-column gap-1 p-1">
                        <label class="form-label d-flex gap-3" for="email"><i class="bi bi-envelope-fill"></i>{{ trans('auth.email') }}</label>
                        <div class="d-flex flex-row align-items-center gap-1 ">
                            <input placeholder="Exemple: test@gmail.com" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3 d-flex flex-column gap-1 p-1">
                        <label class="form-label d-flex gap-3" for="password"><i class="bi bi-key-fill" title="Inséré votre mot de passe"></i> {{ trans('auth.password') }}</label>
                        <input  placeholder="*****"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row gy-3 mb-3 w-100">
                        <div class="col-md-6">
                            <div class="form-check">
                                <label class="form-check-label" for="remember">
                                    {{ trans('auth.remember') }}
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" @checked(old('remember'))>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            @if (Route::has('password.request'))
                                <a class="w-100 float-md-end text-myBackground text-decoration-underline" href="{{ route('password.request') }}">
                                    {{ trans('auth.forgot_password') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex w-100">
                        <button type="submit" class="btnJoin w-100">
                            {{ trans('auth.login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
