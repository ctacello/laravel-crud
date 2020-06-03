@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
    <h1>Все сообщения</h1>

    @foreach($data as $el)
        <div class="alert alert-info">
            <h3> {{ $el->subject }} </h3>
            <P> {{ $el->email }} - {{ $el->name }}</P>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning" type="submit">Детальнее</button></a>
        </div>
    @endforeach
@endsection