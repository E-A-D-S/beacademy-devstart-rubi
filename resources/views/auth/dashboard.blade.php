@extends('template.layout')
@section('title', "Dashboard: ". Auth::user()->name)

@section('content')
<main class="container w-50 mt-5">
    <div class="modal-content" style="background-color: #efefef;">
        <div class="modal-body text-dark">
            <h1>Precisamos de um dashboard</h1>
            {{ $user = Auth::user()->name }}
            <br/>
            {{ $user = Auth::user()->email }}
        </div>
    </div>
</main>
@endsection 