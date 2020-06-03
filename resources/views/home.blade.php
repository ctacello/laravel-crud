@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi iste ipsum debitis ullam tenetur officia cum qui fugiat illum illo minus, eum facere, iure quasi ducimus aspernatur enim ipsa dicta.</p>
@endsection

@section('aside')
    @parent
        <p>Дополнительный текст</p>
@endsection