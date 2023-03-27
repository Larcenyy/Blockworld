@extends('layouts.app')

@section('title', trans('shop::messages.payment.title'))

@push('footer-scripts')
    <script>
        document.querySelectorAll('.payment-method').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                const form = document.getElementById('submitForm');
                form.action = el.href;
                form.submit();
            });
        });
    </script>
@endpush

@section('content')
    <h1 class="text-center line-1 anim-typewriter">{{ trans('shop::messages.payment.title') }}</h1>

    <div class="row align-items-stretch gy-3">
        @forelse($gateways as $gateway)
            <div class="col-md-3 h-auto">
                <a href="{{ route('shop.payments.pay', $gateway->type) }}" class="payment-method card h-100 borderType justify-content-center cursorAnim align-items-center card-body text-center">
                    <img src="{{ $gateway->paymentMethod()->image() }}" style="max-height: 45px" class="img-fluid" alt="{{ $gateway->name }}">
                </a>
            </div>
        @empty
            <div class="col">
                <div class="alert alert-warning" role="alert">
                    <i class="bi bi-exclamation-circle"></i> {{ trans('shop::messages.payment.empty') }}
                </div>
            </div>
        @endforelse
    </div>

    <form method="POST" id="submitForm">
        @csrf
    </form>
@endsection
