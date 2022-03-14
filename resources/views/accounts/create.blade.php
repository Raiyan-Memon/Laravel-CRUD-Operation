@include('layouts.app')


{{-- <form action="{{route('accounts.store')}}" method="POST"> --}}
    {!! Form::open ([
        'url' => route('accounts.store'),
        // 'url' => url('accounts/store'),
        'method' => 'POST'
    ])!!}
@csrf
    <div class="container">
        <h1 class="text-center">Registration form</h1>
        
        <hr>
    
        @include('accounts.form')

    {{!! Form::close() !!}}
{{-- </form> --}}