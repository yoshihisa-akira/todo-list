@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
@if(session('message'))
<div class="todo__alert">
    <div class="todo__alert--success">
        {{session('message')}}
    </div>
@endif
@if($errors->any())
    <div class="todo__alert--danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>



<div class="todo__content">
    <div class="section__title">
        <h2>新規作成</h2>
    </div>
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form__item">
            <input class="create-form__item-input" type="text" name="content" value="{{old('content')}}">
            <select class="create-form__item-select">
                <option value="">カテゴリ</option>
            </select>
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">
                    <span class="todo-table__header-span">
                        Todo
                    </span>
                    <span class="todo-table__header-span">
                        カテゴリ
                    </span>
                </th>
            </tr>
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    @foreach($bunnies as $bunny)
                    <span>{{$bunny['content']}}</span>
                    @endforeach
                    <span>Category 1</span>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection