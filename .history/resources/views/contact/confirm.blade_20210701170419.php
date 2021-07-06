@extends('layout')

@section('content')
<form method="POST" action="{{ route('contact.send) }} ">
  @csrf
  <label>メールアドレス</label>
</form>