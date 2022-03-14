@include('layouts.app')


{{-- <form action="{{route('accounts.update', $account)}}" method="POST"> --}}
    {!!Form::open ([
        'url' => route('accounts.update', $account),
        'method' => 'POST'
    ])!!}
    @csrf
    @method('PATCH')
    <h1 class="text-center">Updation form</h1>

    @include('accounts.form')

{{-- </form> --}}
{!!Form::close()!!}

@include('layouts.inc.footer')