@extends('layouts.app')

@section('title', trans('litebans::messages.navigation.bans'))

@section('content')
<div class="container content">
    @include('litebans::elements.navbar')

    <table class="table table-striped table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">{{ trans('litebans::messages.username') }}</th>
                <th scope="col">{{ trans('litebans::messages.staff_ban') }}</th>
                <th scope="col" class="d-lg-table-cell d-none">{{ trans('litebans::messages.reason') }}</th>
                <th scope="col">{{ trans('messages.fields.date') }}</th>
                <th scope="col" class="d-lg-table-cell d-none">{{ trans('litebans::messages.expires_at') }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bans as $ban)
                <tr class="text-nowrap bg-danger">
                    <td>
                        <img src="https://mc-heads.net/avatar/{{ $ban->name }}/25" alt="{{ $ban->name }}">
                        {{ $ban->name }}
                    </td>
                    <td>
                        {{ $ban->banned_by_name }}
                    </td>
                    <td class="d-lg-table-cell  d-none">{{ $ban->reason }}</td>
                    <td>{{ format_date($ban->time) }}</td>

                    @if(isset($ban->removed_by_name))
                        <td class="d-lg-table-cell d-none">{{ trans('litebans::messages.unbanned') }}</td>
                    @elseif($ban->until === null)
                        <td class="d-lg-table-cell d-none ">{{ trans('litebans::messages.permanent') }}</td>
                    @elseif($ban->until->isPast())
                        <td class="d-lg-table-cell d-none">{{ trans('litebans::messages.expired') }}</td>
                    @else
                        <td class="d-lg-table-cell d-none">{{ format_date($ban->until) }}</td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">{{ trans('litebans::messages.no_punishments_found') }}</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $bans->withQueryString()->links() }}
</div>
@endsection
