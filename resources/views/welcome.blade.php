@extends('layouts.app')

@section('content')
<div class="container">
    @include('guests._posts', compact('posts'))
</div>
@endsection
