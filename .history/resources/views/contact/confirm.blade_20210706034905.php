@extends('layout')

@section('content')
<form method="POST" action="{{ route('contact.send) }} ">
  @csrf
  <label>名前</label>
  {{ $inputs['name'] }}
  <input type="hidden" name="name" value="{{ $inputs['name'] }} ">
<label>性別</label>
{{ $inputs['gender']}}
<input type="hidden" name="gender" value="{{ $inputs['gender}}">
<label for=""></label>

</form>