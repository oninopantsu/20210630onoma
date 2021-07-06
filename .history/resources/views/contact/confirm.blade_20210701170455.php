@extends('layout')

@section('content')
<form method="POST" action="{{ route('contact.send) }} ">
  @csrf
  <label>名前</label>
  {{ $in }}
</form>