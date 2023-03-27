@extends('admin.layouts.admin')
@section('title', 'Thème Flauw')
@php ($azuriomImages = \Azuriom\Models\Image::all())

@section('content')
    <form action="{{ route('admin.themes.update', $theme) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="discordInput">{{ trans('theme::carbon.config.discord') }}</label>
            <input type="text" class="form-control @error('discord-id') is-invalid @enderror" id="discordInput" name="discord-id" required value="{{ old('discord-id', config('theme.discord-id')) }}">

            @error('discord-id')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
        </button>
    </form>
@endsection
