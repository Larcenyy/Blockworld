@extends('layouts.app')

@section('title', trans('vote::messages.title'))

@section('content')
    <h1 class="text-center line-1 anim-typewriter">{{ trans('vote::messages.sections.vote') }}</h1>
    <div class="card mb-4">
        <div class="card-body text-center position-relative border border-myText" id="vote-card">
            <div class="spinner-parent h-100">
                <div class="spinner-border text-white" role="status"></div>
            </div>

            <div class="@auth d-none @endauth" data-vote-step="1">
                <form class="row justify-content-center" action="{{ route('vote.verify-user', '') }}" id="voteNameForm">
                    <div class="col-md-6 col-lg-4">
                        <div class="mb-3">
                            <input type="text" id="stepNameInput" name="name" class="form-control"
                                   value="{{ $name }}"
                                   placeholder="{{ trans('messages.fields.name') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary btnJoin">
                            {{ trans('messages.actions.continue') }}
                            <span class="d-none spinner-border spinner-border-sm load-spinner" role="status"></span>
                        </button>
                    </div>
                </form>
            </div>

            <div class="@guest d-none @endguest h-100" data-vote-step="2">
                @forelse($sites as $site)
                    <a class="btn btn-primary btnJoin" href="{{ $site->url }}" target="_blank" rel="noopener noreferrer"
                       data-vote-id="{{ $site->id }}"
                       data-vote-url="{{ route('vote.vote', $site) }}"
                       @auth data-vote-time="{{ $site->getNextVoteTime($user, $request)?->valueOf() }}" @endauth>
                        <span class="badge bg-secondary text-white vote-timer"></span> {{ $site->name }}
                    </a>
                @empty
                    <div class="alert alert-warning" role="alert">
                        {{ trans('vote::messages.errors.site') }}
                    </div>
                @endforelse
            </div>

            <div class="d-none" data-vote-step="3">
                <p id="vote-result"></p>
            </div>
        </div>
    </div>

    <div class="w-100 gap-3 d-flex justify-content-between">
        <div class="w-25 bg-myText p-2 d-flex flex-column justify-content-between borderType rounded-1">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolorum ducimus eius illo magnam nemo nulla provident sunt tenetur voluptatibus! Commodi culpa eligendi fugit, in nulla numquam officiis ratione tempore!</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolorum ducimus eius illo magnam nemo nulla provident sunt tenetur voluptatibus! Commodi culpa eligendi fugit, in nulla numquam officiis ratione tempore!</p>
            </div>
        </div>
        <div class="d-flex flex-column w-75">
            <div class="card borderType">
                <div class="card-body w-100">
                    <h2 class="card-title">
                        {{ trans('vote::messages.sections.top') }}
                    </h2>

                    <table class="table mb-0">
                        <thead class="w-100">
                        <tr>
                            <th scope="col" class="w-25">#</th>
                            <th scope="col"  class="w-100">{{ trans('messages.fields.name') }}</th>
                            <th scope="col"  class="w-50">{{ trans('vote::messages.fields.votes') }}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($votes as $id => $vote)
                            <tr>
                                <th scope="row">#{{ $id }}</th>
                                <td>{{ $vote->user->name }}</td>
                                <td>{{ $vote->votes }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

            @if(display_rewards())
                <div class="card mt-4  borderType">
                    <div class="card-body">
                        <h2 class="card-title">
                            {{ trans('vote::messages.sections.rewards') }}
                        </h2>

                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col">{{ trans('messages.fields.name') }}</th>
                                <th scope="col">{{ trans('vote::messages.fields.chances') }}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($rewards as $reward)
                                <tr>
                                    <th scope="row">
                                        @if($reward->image)
                                            <img src="{{ $reward->imageUrl() }}" alt="{{ $reward->name }}" width="45">
                                        @endif
                                        {{ $reward->name }}
                                    </th>
                                    <td>{{ $reward->chances }} %</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

@push('scripts')
    @if($ipv6compatibility)
        <script src="https://ipv6-adapter.com/api/v1/api.js" async defer></script>
    @endif

    <script src="{{ plugin_asset('vote', 'js/vote.js') }}" defer></script>
    @auth
        <script>
            window.username  = '{{ $user->name }}';
        </script>
    @endauth
@endpush

@push('styles')
    <style>
        #vote-card .spinner-parent {
            display: none;
        }

        #vote-card.voting .spinner-parent {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(70, 70, 70, 0.6);
            z-index: 10;
        }
    </style>
@endpush
