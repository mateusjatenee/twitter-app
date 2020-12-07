<div class="mb-16">
	<form method="POST" action="{{ route('tweets.store') }}">
		@csrf
		<div class="w-full">
			<textarea name="content" rows="7" class="p-4 w-full text-xs rounded-md border border-gray-200"></textarea>
		</div>
		<div class="mt-4 flex justify-end">
			<button type="submit" class="bg-blue-500 hover:bg-blue-400 transition text-white text-xs px-4 py-2 rounded-md">
				Tweet
			</button>
		</div>
	</form>
</div>
