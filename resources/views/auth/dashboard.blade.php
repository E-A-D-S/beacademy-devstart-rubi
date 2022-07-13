@extends('template.layout')
@section('title', "Dashboard: ". Auth::user()->name)

@section('content')
<main class="container w-50 mt-5">
        @if(isset($error))
            <div class="alert alert-primary" role="alert">
                {{ $error }}
            </div>
        @endif
    <div class="modal-content" style="background-color: #efefef;">
        <div>
            <div class="modal-body text-dark">
                <h1>Precisamos de um dashboard</h1>
                {{ $user = Auth::user()->name; }}
                <br/>
                {{ $user = Auth::user()->email; }}
            </div>
        </div>
    </div>
</main>
@endsection 