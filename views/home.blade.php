@extends('layouts.base')

@section('title', trans('messages.home'))

@section('app')
    <div class="home-anim home-background d-flex align-items-center justify-content-center flex-column text-white mb-4"
         style="background: linear-gradient(0deg, rgba(51,54,41,1) 10%, rgba(0,219,255,0) 100%)  , url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') center / cover no-repeat; height: 1000px">
        <h1>{{ trans('messages.welcome', ['name' => site_name()]) }}</h1>
        <p class="w-50 text-xl-center">Here you’ll find general information about myself, a page to download any files
            I’ve released over the years,alongside an FAQ and a contact page as well!</p>
        <div class="mt-3">
            <a href="" class="btnJoin text-myBackground" data-aos="fade-down">JOUER</a>
        </div>
        <div class="d-flex flex-row gap-1 w-100 justify-content-around">
            <div class="d-flex rounded-1 gap-3 align-items-center cursorAnim d-flex  justify-content-center text-myBackground p-3 borderType rounded-1 w-25">
                <div class="d-flex flex-column align-items-center">
                    <p class="d-flex  align-items-center gap-3">
                        <i class="bi bi-person-fill fs-3"></i>
                        <em class="fs-6">33 inscrits sur notre site</em>
                    </p>
                    <p class="fs-4 firstLetter">
                        Membres Inscrits
                    </p>
                </div>
            </div>
            <div class="d-flex rounded-1 gap-3 align-items-center cursorAnim d-flex  justify-content-center text-myBackground p-3 borderType rounded-1 w-25">
                <div class="d-flex flex-column align-items-center">
                    <p class="d-flex  align-items-center gap-3">
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
    <div class="container content mb-5 pb-5">
        @include('elements.session-alerts')

        @if($message)
            <div class="card mb-4">
                <div class="card-body">
                    {{ $message }}
                </div>
            </div>
        @endif
        @if(! $servers->isEmpty())
            <h2 class="text-center">
                {{ trans('messages.servers') }}
            </h2>

            <div class="row gy-3 justify-content-center mb-4">
                @foreach($servers as $server)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h3 class="card-title">
                                    {{ $server->name }}
                                </h3>

                                @if($server->isOnline())
                                    <div class="progress mb-1">
                                        <div class="progress-bar" role="progressbar"
                                             style="width: {{ $server->getPlayersPercents() }}%">
                                        </div>
                                    </div>

                                    <p class="mb-1">
                                        {{ trans_choice('messages.server.total', $server->getOnlinePlayers(), [
                                            'max' => $server->getMaxPlayers(),
                                        ]) }}
                                    </p>
                                @else
                                    <p>
                                        <span class="badge bg-danger text-white">
                                            {{ trans('messages.server.offline') }}
                                        </span>
                                    </p>
                                @endif

                                @if($server->joinUrl())
                                    <a href="{{ $server->joinUrl() }}" class="btn btn-primary">
                                        {{ trans('messages.server.join') }}
                                    </a>
                                @else
                                    <p class="card-text">{{ $server->fullAddress() }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        @if(! $posts->isEmpty())
            <div class="row w-100">
                <h2 class="h2 text-center fs-2" id="pageHeaderTitle">{{ trans('messages.news') }}</h2>
                @foreach($posts as $post)
                    <div class="container py-4">
                        <article data-aos="flip-left" class="{{$loop->odd ?: "flex-row-reverse text-end"}} postcard dark bg-myText d-flex shadow-lg overflow-hidden position-relative">
                            @if($post->hasImage())
                                <a class="postcard__img_link" href="{{ route('posts.show', $post) }}">
                                    <img class="postcard__img" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" />
                                </a>
                            @endif
                            <div class="{{$loop->odd ?: "align-items-end  text-end postcard"}} postcard__text position-relative d-flex flex-column">
                                <h1 class="fs-3 text-myBackground"><a href="#">{{ $post->title }}</a></h1>
                                <div class="small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <i class="fas fa-calendar-alt mr-2"></i>{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}
                                    </time>
                                </div>
                                <div class="postcard__bar bg-myBackground rounded-1"></div>
                                <div class="postcard__preview-txt overflow-hidden h-100">{{ Str::limit(strip_tags($post->content), 250) }}</div>
                                <ul class="postcard__tagbox fs-6">
                                    <li class="tag__item bg-myBackground text-myText">
                                        <i class="fas fa-tag mr-2"></i>Nouveaux!
                                    </li>
                                    <li class="tag__item">
                                        <a href="{{ route('posts.show', $post) }}"><i class="fas fa-play mr-2"></i>{{ trans('messages.posts.read') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
{{--        <section class="w-100 d-flex justify-content-center p-3 flex-column">--}}
{{--            <h2 class="firstLetter text-myBackground text-center fs-4 line-1 anim-typewriter">Ils nous soutiennent</h2>--}}
{{--            <div class="d-flex gap-3 mt-3 w-100">--}}
{{--                <div data-aos="flip-right" class="shadowBox rounded-3 home-anim home-background w-25 bg-light cursorAnim" style="background: url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') center / cover no-repeat; height: 250px">--}}
{{--                    <p>Soutenir</p>--}}
{{--                </div>--}}
{{--                <div data-aos="flip-right" class="cursorAnim shadowBox rounded-3 home-anim home-background w-50 bg-light" style="background: url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') center / cover no-repeat; height: 250px">--}}
{{--                    <p class="bg-myBackground text-myText text-warning w-auto p-2 rounded-1 text-center font-monospace">Nouveau partenaire <i class="bi bi-exclamation-lg bg-danger text-myBackground rounded-1"></i></p>--}}
{{--                </div>--}}
{{--                <div data-aos="flip-right" class="cursorAnim shadowBox rounded-3 home-anim home-background w-25 bg-light" style="background: url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') center / cover no-repeat; height: 250px">--}}
{{--                    <p>Soutenir</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}


    <section class="w-100 d-flex justify-content-center py-4 px-3 flex-row gap-11 bg-myBackground align-items-center justify-content-around">
        <div  data-aos="zoom-in-down"  class="d-flex flex-column align-items-center w-25 gap-1">
            <p class="fs-3 firstLetter text-myText">Voici les vidéos présentation du serveur, dans celle-ci retrouver
                toutes nos fonctionnalités importantes.</p>
            <a href="" class="btnFrame">Rejoindre</a>
        </div>
        <div data-aos="zoom-in-left" class="d-flex flex-colum align-items-center justify-content-center position-relative">
            <img class="borderFrame mx-auto frameVideo" id="showImg" src="{{ $post->imageUrl() }}"/>
            <button id="play-button" class="border-0  text-myText rounded-1 position-absolute top-50 start-50 translate-middle z-3 fs-1"> <i class="bi bi-play-fill"></i></button>
        </div>
    </section>


    @php
        $updates = Azuriom\Plugin\Changelog\Models\Update::orderByDesc('id')->limit(6)->get();
    @endphp
    <article class="mb-5 mt-5 d-flex gap-5 justify-content-center">
        @forelse($updates as $update)
            <div data-aos="flip-left" class="card mb-3 d-flex flex-row gap-1 w-25 bg-myBackground shadowBox" >
                <div class="card-body w-auto d-flex flex-column align-items-center">
                    <h2 class="card-title mb-1 text-myText"
                        style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical; overflow: hidden;">{{ $update->name }}</h2>
                    <p class="text-myText">
                        <span class="badge me-1 small" style="background-color: #1a1a1a;">
                            <i class="bi bi-folder"></i> {{ $update->category->name }}
                        </span>
                        <span class="badge me-1 small" style="background-color: #1a1a1a;">
                            <i class="bi bi-calendar"></i> {{ format_date($update->created_at) }}
                        </span>
                    </p>
                    <div
                        style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical; overflow: hidden;" class="text-myText">
                        {!! $update->description !!}
                    </div>
                    <div class="text-end mt-3">
                        <a class="btn btn-primary btnJoin"
                           href="{{ route('changelog.categories.show', $update->category->id) }}">VOIR</a>
                    </div>
                </div>
            </div>


        @empty
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ trans('changelog::messages.categories.empty') }}</p>
                </div>
            </div>
        @endforelse

    </article>

@endsection
