@extends('layouts.app')

@section('title', __('system.waiting_list'))

@section('content')
<div class="grid-x grid-padding-x">
    <div class="small-12 cell">
        <h3>{{ __('system.request_created') }}</h3>
        <p>{{ __('system.request_created_message') }}</p>
        <table>
            <thead>
            <tr>
                <th colspan="2">{{ __('system.your_details') }}</th>
            </tr>
            </thead>
            <tr>
                <th>{{ __('system.full_name') }}</th>
                <td>
                    {{ $ticket_request->title  }}&nbsp;{{ $ticket_request->first_name }}&nbsp;
                    {{ $ticket_request->last_name }}
                </td>
            </tr>
            <tr>
                <th>{{ __('system.email') }}</th>
                <td>{{ $ticket_request->email }}</td>
            </tr>
            <tr>
                <th>{{ __('system.first_choice_ticket') }}</th>
                <td>{{ $ticket_request->preferred_ticket->name }}</td>
            </tr>
        </table>
        <a class="button hollow" href="{{ url('/') }}">
            {{ __('system.back') }}
        </a>
    </div>
</div>
@endsection