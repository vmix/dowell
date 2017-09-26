@extends('layouts.app')

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="container">
        <example></example>
        <h1>Продукция</h1>
        <?= $products['file'] ?>
    </div>
@endsection