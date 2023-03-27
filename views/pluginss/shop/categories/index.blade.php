@extends('layouts.app')

@section('title', trans('shop::messages.title'))


@section('content')
    <section class="w-100 mt-6 rounded-1 p-2">
        <h1 class="text-center line-1 anim-typewriter">{{ trans('shop::messages.title') }} {{ site_name() }}</h1>
        <div class="row maTop w-100 d-flex justify-content-around">
            <div class="col-lg-3 ">
                @include('shop::categories._sidebar')
            </div>

            <div class="col-lg-9 w-50">
                <div class="bg-myText borderType p-2 m-2">
                    {{ $welcome }}
                </div>
            </div>
        </div>
    </section>
@endsection
