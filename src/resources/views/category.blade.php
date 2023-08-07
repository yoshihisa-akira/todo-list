@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/category.css')}}">
@endsection

@section('content')
<div class="category__alert">
    @if(session('message'))
    <div class="category__alert--success">
        {{session('message')}}
    </div>
    @endif
    @if($errors->any())
    <div class="category__alert--danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="category__content">
    <form class="create-form" action="/category" method="post">
        @csrf
        <div class="create-form__item">
            <input class="create-form__item-input" type="text" name="name" value="{{old('name')}}">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">
                作成
            </button>
        </div>
    </form>
    <div class="category-table">
        <table class="category-table__inner">
            <tr class="category-table__row">
                <th class="category-table__header">
                    category
                </th>
            </tr>
            @foreach($bunnies as $bunny)
            <tr class="category-table__row">
                <td class="category-table__item">
                    <span>{{$bunny['name']}}</span>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection