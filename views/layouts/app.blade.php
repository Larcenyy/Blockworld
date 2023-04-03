@extends('layouts.base')


@section('app')
    <main id="content_{{isset(explode('/', url()->current())[3]) ? explode('/', url()->current())[3] :''}}">
        <div class="home-anim d-flex align-items-center justify-content-center flex-column text-white mb-4"
             style="background: linear-gradient(0deg, rgba(51,54,41,1) 10%, rgba(0,219,255,0) 100%)  , url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') center / cover no-repeat; min-height: 400px">
            <div class="mt-3">
                <a href="" class="btnJoin text-myBackground" data-aos="fade-down">{{theme_config("header.hero.btn")}}</a>
            </div>
            <div class="row gy-3 justify-content-between mt-3 w-50 align-items-center">
                <div class="col-mb-6 col-xl-5  cursorAnim borderType">
                    <div class="d-flex flex-column align-items-center my-2">
                        <p>
                            <i class="bi bi-person-fill fs-3"></i>
                            <em class="fs-6">33 inscrits sur notre site</em>
                        </p>
                        <p class="fs-4 firstLetter">
                            Membres Inscrits
                        </p>
                    </div>
                </div>
                <div class="col-mb-6 col-xl-5  cursorAnim borderType">
                    <div class="d-flex flex-column align-items-center my-2">
                        <p>
                            <i class="bi bi-person-fill fs-3"></i>
                            <em class="fs-6">33 inscrits sur notre site</em>
                        </p>
                        <p class="fs-4 firstLetter">
                            Membres Inscrits
                        </p>
                    </div>
                </div>
            </div>
            @if($server)
                @if($server->isOnline())
                    <h2>{{ trans_choice('messages.server.online', $server->getOnlinePlayers()) }}</h2>
                @else
                    <h2>{{ trans('messages.server.offline') }}</h2>
                @endif

                @if($server->joinUrl())
                    <a href="{{ $server->joinUrl() }}" class="btn btn-secondary btn-lg">
                        {{ trans('messages.server.join') }}
                    </a>
                @else
                    <h3>{{ $server->fullAddress() }}</h3>
                @endif
            @endif
        </div>
        <div class="container content">
            @include('elements.session-alerts')

            @yield('content')
        </div>
    </main>
@endsection
