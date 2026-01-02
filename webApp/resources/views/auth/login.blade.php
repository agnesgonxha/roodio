@extends('layouts.signIn')


@section('title', 'ROODIO - Login')


@push('script')
    <script type="text/javascript" src="{{ asset('js/auth/password.js') }}" defer></script>
@endpush


@section('headContent')
    <div class='w-full animate-pulse flex flex-row h-max items-center justify-center font-primary text-title font-bold text-primary-85 md:text-hero'>
        <span>L</span>
        <div class='rounded-full w-12 h-12 bg-primary-70 flex justify-center items-center mx-2 md:w-16 md:h-16'>
            <img src="{{ asset('assets/logo-no-text.png') }}" alt="logo" class='w-6 animate-spin bg-amber-200 rounded-full drop-shadow-md/70 drop-shadow-white/70 md:w-8'>
        </div>
        <span class='tracking-[.5rem]'>GI</span>
        <span>N</span>
    </div>
    <p class='mb-3 font-secondaryAndButton text-small text-primary-50 md:text-body-size md:tracking-[.05rem]'>Welcome back to ROODIO!</p>
@endsection


@section('content')
    <form action="{{ route('auth.login') }}" method='POST' id='login'>
        @csrf {{-- cross site request forgery --}}
        <x-input id='username' icon='user' label='Username' placeholder='Input your username...' value="{{ old('username') }}"></x-input>
        <x-input type='password' id='password' icon='password' label='Password' placeholder='Input your password...'>
            <x-slot:additionalLabelButton>
                <a href="{{ route('user.verification') }}" class='absolute right-0 top-1/2 -translate-y-1/2 text-xs font-bold text-secondary-sad-100 md:text-micro hover:text-primary-50'>Forget Password?</a>
            </x-slot:additionalLabelButton>
            <x-slot:additionalContent>
                <button type='button' id='showPass' class='w-4 h-4 absolute z-4 right-2.5 bottom-2 flex items-center justify-center cursor-pointer md:bottom-2.5'>
                    <img src="{{ asset('assets/icons/eye-closed.svg') }}" alt="eye-closed" id='eye-closed'>
                    <span class='absolute invisible' id='eye-open'>&#128065;</span>
                </button>
            </x-slot:additionalContent>
        </x-input>
        <div class='pt-2'>
            <x-button behaviour='action' actionType='submit' form='login' content='Login' class='min-w-full'></x-button>
            <p class='text-micro text-center md:text-small'>Don't have account? <a href="{{ route('register') }}" class='font-bold text-secondary-sad-100 hover:text-primary-50'>Sign Up Here!</a></p>
        </div>
    </form>
@endsection