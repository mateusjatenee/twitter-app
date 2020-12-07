@extends('app')

@section('section_name', 'My Tweets')

@section('content')

<div class="max-w-md mx-auto">
	<div class="mb-4">
		Logged in as {{ '@'.auth()->user()->nickname }}
	</div>
	@include('tweets.partials.compose_tweet')
	@include('tweets.partials.tweets_list')
</div>

@endsection
