<ul>
	@foreach ($tweets as $tweet)
		<li class="mb-4 bg-white shadow-lg border border-gray-100 p-4">
			<div class="border-b border-gray-200 mb-4 py-2">{{ $tweet->content }}</div>
			<div class="sm:flex sm:inline-flex sm:space-x-4">
				<div>
					<a class="text-blue-500 hover:text-blue-400 transition" href="{{ $tweet->authorLink() }}">{{ '@'.$tweet->author }}</a>
				</div>
				<div>
					{{ $tweet->createdAt->toDateTimeString() }}
				</div>
				<div>
					<a class="text-blue-500 hover:text-blue-400 transition" href="{{ $tweet->link() }}"> {{ $tweet->repliesCount }} replies</a>
				</div>
			</div>

		</li>
	@endforeach
</ul>
