@extends('layouts.base')


@section('app')
    <main id="content_{{isset(explode('/', url()->current())[3]) ? explode('/', url()->current())[3] :''}}">
        <div class="home-anim home-background d-flex align-items-center justify-content-center flex-column text-white mb-4"
             style="background: linear-gradient(0deg, rgba(51,54,41,1) 10%, rgba(0,219,255,0) 100%)  , url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') center / cover no-repeat; height: 1000px">
            <h3>{{ trans('messages.welcome', ['name' => site_name()]) }}</h3>
            <p class="w-50 text-xl-center">{{theme_config("header.hero.description")}}</p>

            <div class="mt-3">
                <a href="" class="btnJoin text-myBackground" data-aos="fade-down">{{theme_config("header.hero.btn")}}</a>
            </div>

            @if(theme_config('header.box.toggle'))
                <div class="d-flex flex-row gap-1 w-100 justify-content-around">
                    <div class="d-flex rounded-1 gap-3 align-items-center cursorAnim d-flex  justify-content-center text-myBackground p-3 borderType rounded-1 w-25">
                        @if($server)
                            <div class="d-flex flex-column align-items-center">
                                @if($server->isOnline())
                                    <p>
                                        <i class="{{theme_config("header.box.left.iconBoxLeft")}}"></i>
                                        <em class="fs-6">{{ trans_choice('messages.server.online', $server->getOnlinePlayers()) }}</em>
                                    </p>
                                    @if($server->joinUrl())
                                        <a href="{{ $server->joinUrl() }}" class="btnJoin text-myBackground">
                                            {{ trans('messages.server.join') }}
                                        </a>
                                    @endif
                                @else
                                    <p>
                                    <span class="fs-6 badge bg-danger text-white">
                                        <i class="{{theme_config("header.box.left.iconBoxLeft")}}"></i>
                                        {{ trans('messages.server.offline') }}
                                    </span>
                                    <p class="fw-bold">{{ $server->fullAddress() }}</p>
                                    </p>
                            </div>
                        @endif
                        @endif
                    </div>
                    <div class="d-flex rounded-1 gap-3 align-items-center cursorAnim d-flex  justify-content-center text-myBackground p-3 borderType rounded-1 w-25">
                        <div class="d-flex flex-column align-items-center">
                            <p>
                                <i class="{{theme_config("header.box.right.iconBoxRight")}}"></i>
                                <em class="fs-6">{{theme_config("header.box.right.titleBoxRight")}}</em>
                            </p>
                            <p class="fs-4 firstLetter">
                                {{theme_config("header.box.right.descripBoxRight")}}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="container content">
            @include('elements.session-alerts')

            @yield('content')
        </div>
    </main>
@endsection
