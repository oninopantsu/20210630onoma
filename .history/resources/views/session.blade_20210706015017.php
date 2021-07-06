@extends('layouts.content')
@section('content')
<p>{{ $session_data }} </p>
<form action="/session" method="post">
@csrf

</form>
