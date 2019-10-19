@extends('layouts.app')

@section('content')
<div>
    <main-app user="{{ Auth::user() }}"></main-app>
</div>
@endsection
