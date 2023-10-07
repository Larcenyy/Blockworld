@extends('layouts.base')

@section('title', trans('messages.home'))

@section('app')
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

    <div class="container content mb-5 pb-5">
        @include('elements.session-alerts')

        @if($message)
            <div class="card mb-4">
                <div class="card-body">
                    {{ $message }}
                </div>
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
                                <h3 class="fs-3 text-myBackground"><a href="#">{{ $post->title }}</a></h3>
                                <div class="small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <i class="fas fa-calendar-alt mr-2"></i>{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}
                                    </time>
                                </div>
                                <div class="postcard__bar bg-myBackground rounded-1"></div>
                                <div class="postcard__preview-txt overflow-hidden h-100">{{ Str::limit(strip_tags($post->content), 250) }}</div>
                                <ul class="postcard__tagbox fs-6">
                                    <li class="tag__item">
                                        <a href="{{ route('posts.show', $post) }}"><i class="fas fa-play mr-2"></i>{{ trans('theme::blockworld.config.text_patchnote') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        @endif
    </div>


{{--    @if(theme_config('sponsor.box.toggle'))--}}
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
{{--    @endif--}}

    @if(theme_config('video.box.toggle'))
        <section class="w-100 d-flex justify-content-center py-4 px-3 mt-3 flex-row gap-11 bg-myBackground align-items-center justify-content-around">
            <div  data-aos="zoom-in-down"  class="d-flex flex-column align-items-center w-25 gap-1">
                <p class="fs-3 firstLetter text-myText">{{theme_config("video.text.description")}}</p>
                <a href="" class="btnFrame">{{theme_config("video.text.btn")}}</a>
            </div>
            <div data-aos="zoom-in-left" class="d-flex flex-colum align-items-center justify-content-center position-relative">
                @if(theme_config('video.img.toggle'))
                    <img class="borderFrame mx-auto frameVideo" id="showImg" src="{{ image_url(theme_config("video.img.url")) }}"/>
                @endif
                <button id="play-button" class="border-0  text-myText rounded-1 position-absolute top-50 start-50 translate-middle z-3 fs-1"> <i class="bi bi-play-fill"></i></button>
            </div>
        </section>
    @endif

    @plugin('changelog')
    @php
        $updates = Azuriom\Plugin\Changelog\Models\Update::orderByDesc('id')->limit(6)->get();
    @endphp

        <article class="mb-5 mt-5 d-flex gap-5 justify-content-center">
                @forelse($updates as $update){
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
                                   href="{{ route('changelog.categories.show', $update->category->id) }}">{{ trans('theme::blockworld.config.text_patchnote') }}</a>
                            </div>
                        </div>
                    </div>
                }
                @empty
                    <div class="card mb-3">
                        <div class="card-body">
                            <p>{{ trans('changelog::messages.categories.empty') }}</p>
                        </div>
                    </div>
                @endforelse
        </article>
    @endplugin
@endsection


<script>
    let videourl = "https://www.youtube.com/embed/{{theme_config("video.link.url")}}";
</script>
