@extends('app')

@section('content')

<div class="max-w-md mx-auto">
	<ul>
		@foreach (range(1, 5) as $tweet)
			<li class="mb-4 bg-white shadow-lg p-4">
				<div class="border-b border-gray-200">some tweet content</div>
				<div class="flex inline-flex space-x-4">
					<div>
						<a href="https://twitter.com/mateusjatenee">@mateusjatenee</a>
					</div>
					<div>
						December 7th, 5:20pm
					</div>
					<div>
						7 replies
					</div>
				</div>

			</li>
		@endforeach
	</ul>
</div>

@endsection
