@extends('admin.layouts.admin')

@section('title', 'Blockworld | Config')
@push('footer-scripts')
    <script>
        function addLinkListener(el) {
            el.addEventListener('click', function () {
                const element = el.parentNode.parentNode.parentNode.parentNode;

                element.parentNode.removeChild(element);
            });
        }

        document.querySelectorAll('.link-remove').forEach(function (el) {
            addLinkListener(el);
        });

        document.getElementById('addLinkButton').addEventListener('click', function () {
            let input = '<div class="row g-3"><div class="mb-3 col-md-6">';
            input += '<input type="text" class="form-control" name="footer_links[{index}][name]" placeholder="{{ trans('messages.fields.name') }}"></div>';
            input += '<div class="mb-3 col-md-6"><div class="input-group">';
            input += '<input type="url" class="form-control" name="footer_links[{index}][value]" placeholder="{{ trans('messages.fields.link') }}">';
            input += '<button class="btn btn-outline-danger link-remove" type="button">';
            input += '<i class="bi bi-x-lg"></i></button></div></div></div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addLinkListener(newElement.querySelector('.link-remove'));

            document.getElementById('links').appendChild(newElement);
        });

        document.getElementById('configForm').addEventListener('submit', function () {
            let i = 0;

            document.getElementById('links').querySelectorAll('.row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });

                i++;
            });
        });
    </script>
@endpush

@section('content')
    <div class="col-12 mb-3 d-flex flex-column gap-2">
        <div class="d-flex w-50 gap-3">
            <p><i class="bi bi-balloon-heart-fill"></i> Bonjour et bienvenue sur le panneau de configuration de Blockworld. Ici, vous pouvez modifier le texte à votre goût ainsi que les couleurs. Si vous avez des suggestions, n'hésitez pas à rejoindre le Discord.</p>
        </div>
        <div>
            <a href="https://icons.getbootstrap.com/" target="_blank" class="btn btn-primary fw-bold rounded-4 text-uppercase px-3 my-1" style="font-size: 10px"><i class="bi bi-discord"></i> DISCORD</a>
            <a href="{{ route('admin.images.create') }}" target="_blank" class="btn btn-success fw-bold rounded-4 text-uppercase px-3 my-1" style="font-size: 10px"><i class="bi bi-paypal"></i> DONATION</a>
            <a href="https://icons.getbootstrap.com/" target="_blank" class="btn btn-secondary fw-bold rounded-4 text-uppercase px-3 my-1" style="font-size: 10px"><i class="bi bi-bootstrap-fill"></i> BOOSTRAP ICON</a>
            <a href="{{ route('admin.images.create') }}" target="_blank" class="btn btn-secondary fw-bold rounded-4 text-uppercase px-3 my-1" style="font-size: 10px"><i class="bi bi-link"></i> Upload Image</a>
        </div>
        <hr>
    </div>

    {{--    ////  SECTION //////--}}
    <div class="card shadow mt-3">
        <div class="card-body ">
            <form action="{{ route('admin.themes.config', $theme) }}" method="POST" id="configForm" class="mt-3 d-flex flex-column gap-3">
            @csrf
                <div class="accordion accordion-flush position-relative d-flex flex-column gap-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button shadow-lg collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{ trans('theme::prism.config.para_gene') }}
                                <h5 class="position-absolute bg-dark text-white top-0 start-0 w-auto">#1</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="d-flex flex-column gap-3 p-4">
                                <div style="border: 2px solid #2d2d2d;border-radius: 7px" class="p-2 d-flex gap-1 d-flex flex-row gap-2 w-100 1 align-items-center">
                                    <div class="d-flex flex-row justify-content-center gap-2 align-items-center ">
                                        <i class="bi bi-brush-fill"></i>
                                        <p>
                                            Dans cette section vous pouvez gérer les modifications de <strong>couleur et la gestion des placements</strong>(réseaux sociaux et autres). <br>
                                            <code class="bg-white p-1 rounded-1">Attention, pensez à mettre des couleurs flashi pour pouvoir vous repairer facilement lors de vos modifications.</code>
                                        </p>
                                    </div>
                                    <div class="form-check p-0">
                                        <div class="switcher">
                                            <small class="fw-bold fs-5">{{ trans('theme::prism.config.sponsor_show') }}</small>
                                            <label for="sponsor-box-toggle">
                                                <input type="checkbox" id="sponsor-box-toggle" name="sponsor[box][toggle]" @if(config('sponsor-box-toggle')) checked @endif @error('sponsor-box-toggle') is-invalid @enderror/>
                                                <span><small></small></span>
                                            </label>
                                        </div>
                                        @error('sponsor-box-toggle')
                                        <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                        @enderror
                                    </div>
                                    <div class="form-check p-0">
                                        <div class="switcher">
                                            <small class="fw-bold fs-5">{{ trans('theme::prism.config.social_show') }}</small>
                                            <label for="social-box-toggle">
                                                <input type="checkbox" id="social-box-toggle" name="social[box][toggle]" @if(config('social-box-toggle')) checked @endif @error('social-box-toggle') is-invalid @enderror/>
                                                <span><small></small></span>
                                            </label>
                                        </div>
                                        @error('social-box-toggle')
                                        <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                        @enderror
                                    </div>

                                    <div class="form-check p-0">
                                        <div class="switcher">
                                            <small class="fw-bold fs-5">{{ trans('theme::prism.config.social_pos') }}</small>
                                            <label for="social-box-pos">
                                                <input type="checkbox" id="social-box-pos" name="social[box][pos]" @if(config('social-box-pos')) checked @endif @error('social-box-pos') is-invalid @enderror/>
                                                <span><small></small></span>
                                            </label>
                                        </div>
                                        @error('social-box-pos')
                                        <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                        @enderror
                                    </div>

                                    <div class="form-check p-0">
                                        <div class="switcher">
                                            <small class="fw-bold fs-5">{{ trans('theme::prism.config.toTop_show') }}</small>
                                            <label for="toTop-box-toggle">
                                                <input type="checkbox" id="toTop-box-toggle" name="toTop[box][toggle]" @if(config('toTop-box-toggle')) checked @endif @error('toTop-box-toggle') is-invalid @enderror/>
                                                <span><small></small></span>
                                            </label>
                                        </div>
                                        @error('toTop-box-toggle')
                                        <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                        @enderror
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button shadow-lg collapsed fs-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{ trans('theme::prism.config.para_header') }}
                                <h5 class="position-absolute bg-dark text-white top-0 start-0 w-auto">#1</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseOne1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <div class="d-flex flex-column gap-3 p-4">
                                <div style="border: 2px solid #2d2d2d;border-radius: 7px" class="p-2 d-flex gap-1 justify-content-center w-100">
                                    <i class="bi bi-brush-fill"></i>
                                    Dans cette section vous pouvez modifier le haut de page.
                                </div>
                                <div class="form-check p-0">
                                    <div class="switcher">
                                        <small class="fw-bold fs-5">{{ trans('theme::prism.config.hero_boxShow') }}</small>
                                        <label for="header-box-toggle">
                                            <input type="checkbox" id="header-box-toggle" name="header[box][toggle]" @if(config('header-box-toggle')) checked @endif @error('header-box-toggle') is-invalid @enderror/>
                                            <span><small></small></span>
                                        </label>
                                    </div>
                                    @error('header-box-toggle')
                                    <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.hero_btn') }}</label>
                                    <textarea class="form-control @error('hero_btn') is-invalid @enderror" id="footerDescriptionInput" name="header[hero][btn]" rows="3">{{ old('header.hero.btn', theme_config('header.hero.btn')) }}</textarea>

                                    @error('hero_btn')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.hero_description') }}</label>
                                    <textarea class="form-control @error('hero_description') is-invalid @enderror" id="footerDescriptionInput" name="header[hero][description]" rows="3">{{ old('header.hero.description', theme_config('header.hero.description')) }}</textarea>

                                    @error('hero_description')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.hero_boxOne') }}</label>
                                    <textarea class="form-control @error('hero_boxOne') is-invalid @enderror" id="footerDescriptionInput" name="header[hero][texteBoxOne]" rows="3">{{ old('header.hero.boxOne', theme_config('header.hero.boxOne')) }}</textarea>

                                    @error('hero_boxOne')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.hero_boxTwo') }}</label>
                                    <textarea class="form-control @error('hero_boxTwo') is-invalid @enderror" id="footerDescriptionInput" name="header[hero][texteBoxTwo]" rows="3">{{ old('header.hero.boxTwo', theme_config('header.hero.boxTwo')) }}</textarea>

                                    @error('hero_boxTwo')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                {{ trans('theme::prism.config.para_video') }}
                                <h5 class="position-absolute bg-dark text-white top-0 start-0 w-auto">#2</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            {{--      SECTION VIDEOS           ////////////////////--}}
                            <div class="form-check p-0">
                                <div class="switcher">
                                    <small class="fw-bold fs-5">{{ trans('theme::prism.config.video_show') }}</small>
                                    <label for="video-box-toggle">
                                        <input type="checkbox" id="video-box-toggle" name="video[box][toggle]" @if(config('video-box-toggle')) checked @endif @error('video-box-toggle') is-invalid @enderror/>
                                        <span><small></small></span>
                                    </label>
                                </div>
                                @error('video-box-toggle')
                                <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.video_description') }}</label>
                                <textarea class="form-control @error('video_description') is-invalid @enderror" id="footerDescriptionInput" name="video[text][description]" rows="3">{{ old('video.text.description', theme_config('video.text.description')) }}</textarea>

                                @error('video_description')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.video_btn') }}</label>
                                <textarea class="form-control @error('video_btn') is-invalid @enderror" id="footerDescriptionInput" name="video[text][btn]" rows="3">{{ old('video.text.btn', theme_config('video.text.btn')) }}</textarea>

                                @error('video_btn')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.video_link') }}</label>
                                <textarea class="form-control @error('video_link') is-invalid @enderror" id="footerDescriptionInput" name="video[link][url]" rows="3">{{ old('video.link.url', theme_config('video.link.url')) }}</textarea>

                                @error('video_link')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                {{ trans('theme::prism.config.para_sponsor') }}
                                <h5 class="position-absolute bg-dark text-white top-0 start-0 w-auto">#3</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                {{ trans('theme::prism.config.para_vote') }}
                                <h5 class="position-absolute bg-dark text-white top-0 start-0 w-auto">#4</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="mb-3">
                                <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.vote_content') }}</label>
                                <textarea class="form-control @error('vote_content') is-invalid @enderror" id="footerDescriptionInput" name="vote[text][descriptions]" rows="3">{{ old('vote.text.descriptions', theme_config('vote.text.descriptions')) }}</textarea>

                                @error('vote_content')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-check p-0">
                                <div class="switcher">
                                    <small class="fw-bold fs-5">{{ trans('theme::prism.config.vote_show') }}</small>
                                    <label for="vote-box-toggle">
                                        <input type="checkbox" id="vote-box-toggle" name="vote[box][toggle]" @if(config('vote-box-toggle')) checked @endif @error('vote-box-toggle') is-invalid @enderror/>
                                        <span><small></small></span>
                                    </label>
                                </div>
                                @error('video-box-toggle')
                                <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                {{ trans('theme::prism.config.para_footer') }}
                                <h5 class="position-absolute bg-dark text-white top-0 start-0 w-auto">#5</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="fs-2 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                {{ trans('theme::prism.config.para_load') }}
                                <h5 class="position-absolute bg-dark text-white top-0 start-0 w-auto">#6</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="form-check p-0">
                                <div class="switcher">
                                    <small class="fw-bold fs-5">{{ trans('theme::prism.config.load_show') }}</small>
                                    <label for="load-box-toggle">
                                        <input type="checkbox" id="load-box-toggle" name="load[box][toggle]" @if(config('load-box-toggle')) checked @endif @error('load-box-toggle') is-invalid @enderror/>
                                        <span><small></small></span>
                                    </label>
                                </div>
                                @error('video-box-toggle')
                                <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="footerDescriptionInput">{{ trans('theme::prism.config.load_text') }}</label>
                                <textarea class="form-control @error('load_text') is-invalid @enderror" id="footerDescriptionInput" name="load[text][content]" rows="3">{{ old('load.text.content', theme_config('load.text.content')) }}</textarea>

                                @error('load_text')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success mt-3">
                    <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
                </button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /*Jennifer Louie*/
        div.switcher + div.switcher {
            margin-top: 10px;
        }
        div.switcher label {
            padding: 0;
        }
        div.switcher label * {
            vertical-align: middle;
        }
        div.switcher label input {
            display: none;
        }
        div.switcher label input + span {
            position: relative;
            display: inline-block;
            margin-right: 10px;
            width: 40px;
            height: 17px;
            background: var(--bs-gray);
            border: 2px solid var(--bs-gray);
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }
        div.switcher label input + span small {
            position: absolute;
            display: block;
            width: 36%;
            height: 100%;
            background: #fff;
            border-radius: 50%;
            transition: all 0.1s ease-in-out;
            left: 0;
        }
        div.switcher label input:checked + span {
            background: var(--bs-primary);
            border-color: var(--bs-primary);
        }
        div.switcher label input:checked + span small {
            left: 60%;
        }
    </style>
@endpush

