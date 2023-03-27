<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Inscriptions</h1>
                <button  type="button" class="btn-close bg-myBackground" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column gap-1">
                <form class="d-flex flex-column align-items-center" method="POST" action="{{ route('register') }}" id="captcha-form">
                    @csrf

                    <div class="mb-3 d-flex flex-column gap-1 p-1">
                        <label class="form-label d-flex gap-3" for="name"><i class="bi bi-person-fill"></i>{{ trans('auth.name') }}</label>
                        <input placeholder="Exemple: Paul" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 text-center">
                        <label class="form-label  d-flex gap-3" for="email"><i class="bi bi-envelope-fill"></i>{{ trans('auth.email') }}</label>
                        <input placeholder="Exemple: test@gmail.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 text-center">
                        <label class="form-label d-flex gap-3" for="password"><i class="bi bi-key-fill" title="Inséré votre mot de passe"></i>{{ trans('auth.password') }}</label>
                        <input placeholder="****" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 text-center">
                        <label class="form-label d-flex gap-3" for="password-confirm">{{ trans('auth.confirm_password') }}</label>
                        <input placeholder="Repeat your password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    @if(setting('conditions') !== null)
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input @error('conditions') is-invalid @enderror" type="checkbox" name="conditions" id="conditions" @checked(old('conditions'))>

                                <label class="form-check-label text-center" for="conditions">
                                    @lang('auth.conditions', ['url' => setting('conditions')])
                                </label>

                                @error('conditions')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    @endif

                    @include('elements.captcha', ['center' => true])

                    <div class="d-flex w-100">
                        <button type="submit" class="btnJoin w-100">
                            {{ trans('auth.register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
