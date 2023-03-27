@extends('layouts.app')
@section('title', $category->name)

@push('footer-scripts')
    <script>
        document.querySelectorAll('[data-package-url]').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                axios.get(el.dataset['packageUrl']).then(function (response) {
                    const itemModal = document.getElementById('itemModal');
                    itemModal.innerHTML = response.data;
                    new bootstrap.Modal(itemModal).show();
                }).catch(function (error) {
                    createAlert('danger', error, true);
                });
            });
        });
    </script>
@endpush

@section('content')
    <h1 class="text-center line-1 anim-typewriter">{{ $category->name }}</h1>

    <div class="row mt-3" id="shop">
        <div class="col-lg-3">
            @include('shop::categories._sidebar')
        </div>

        <div class="col-lg-9">
            <div class="row gy-4">
                @if($category->description)
                    <div class="col-12">
                        <div class="card borderType">
                            <div class="card-body pb-1 ">
                                {!! $category->description !!}
                            </div>
                        </div>
                    </div>
                @endif

                @forelse($category->packages as $package)
                    <div class="col-md-4">
                        <div class="position-relative cursorAnim card h-100 borderType d-flex flex-column text-center w-100">
                            @if($package->hasImage())
                                <a class="text-center h-75" href="#" data-package-url="{{ route('shop.packages.show', $package) }}">
                                    <img class="card-img-top" src="{{ $package->imageUrl() }}" alt="{{ $package->name }}">
                                </a>
                            @endif

                            <div class="card-body">
                                <h4 class="card-title">{{ $package->name }}</h4>
                                <h5 class="card-subtitle mb-3 bg-myText shadow-sm w-25 position-absolute top-0 end-0">
                                    @if($package->isDiscounted())
                                        <del class="small">{{ $package->getOriginalPrice() }}</del>
                                    @endif
                                    {{ shop_format_amount($package->getPrice()) }}
                                </h5>

                                <a href="#" class="btn btn-primary btn-block btnJoin w-100" data-package-url="{{ route('shop.packages.show', $package) }}">
                                    {{ trans('shop::messages.buy') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <div class="alert alert-warning" role="alert">
                            <i class="bi bi-exclamation-circle"></i> {{ trans('shop::messages.categories.empty') }}
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel" aria-hidden="true"></div>
@endsection
