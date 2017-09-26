@extends('layouts.app')

@section('navbar')
    @parent
@endsection

@section('content')
<div class="container">
    <h1>Форма для ввода адреса xml-файла</h1>
    <form action="/products" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="file">File: </label>
            <input type="text" id="file" name="file" class="form-control">
        </div>
        <input type="submit" value="Парсинг...">
    </form>
</div>
@endsection
