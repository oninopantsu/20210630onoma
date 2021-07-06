@extends('layout')

@section('content')
<form method="POST" action="{{ route('contact.send) }} ">
  @csrf
  <label for="name">名前</label>
  {{ $inputs['name'] }}
  <input type="hidden" name="name" value="{{ $inputs['name'] }} ">

<label for="gender">性別</label>
{{ $inputs['gender']}}
<input type="hidden" name="gender" value="{{ $inputs['gender}}">

<label for="postcode">郵便番号</label>
{{ $inputs['postode'] }}
<input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}" >

<label for="address"> 住所</label>
</form>