@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">Últimas Publicaciones</h1>
            @foreach ($entries as $entry)
                <div class="card mb-4">
                    <div class="card-header">
                        <strong>
                            {{ $entry->id }}.- 
                            {{ $entry->title }}
                        </strong>
                    </div>
                    <div class="card-body"> 
                        <p>{!! $entry->content !!}</p>
                    </div>
                    <div class="card-footer">
                        Autor: <a href="{{ url('users/'.$entry->user_id) }}">{{ $entry->user->name }}</a>
                    </div>
                </div>
            @endforeach
            {{ $entries->links() }}
        </div>
    </div>
</div>
@endsection
