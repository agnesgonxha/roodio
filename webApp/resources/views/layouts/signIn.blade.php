@extends('layouts.master')


@section('title', 'ROODIO - SignIn')


@push('script')
    <script type="text/javascript" src="{{ asset('js/design/login-bg.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/design/particle-network.js') }}" defer></script>
@endpush


@section('bodyClass', 'overflow-y-hidden')


@section('bodyContent')
    <div id="particle-canvas" class='min-h-lvh z-1'></div>
    <div class='absolute z-5 w-fit h-fit flex justify-center items-center left-1/2 top-1/2 -translate-1/2'>
        <div class='border-secondary-happy-50 border-3 rounded-4xl bg-white/75 hover:bg-white/85 transition-colors active:bg-white/85 ease-linear duration-150 w-sm h-max p-5 pt-5 font-secondaryAndButton shadow-xl shadow-secondary-happy-50/40 md:w-md'>
            <div class='flex flex-col items-center'>
                @yield('headContent')
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
@endsection