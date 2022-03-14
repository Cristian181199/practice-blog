<x-content>
    <x-slot name="header">
        Articles
    </x-slot>
    <div class="flex items-center justify-between">
        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Articles</h1>
        <div>
            <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option>Latest</option>
                <option>Last Week</option>
            </select>
        </div>
    </div>
    @foreach ($articles as $article)
        <div class="mt-6">
            <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{ $article->created_at->format('F-d-Y') }}
                </span><a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{ $article->category->name }}</a>
                </div>
                <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{ $article->title }}</a>
                    <p class="mt-2 text-gray-600">{{ Str::limit($article->body, 120, '...') }}</p>
                </div>
                <div class="flex items-center justify-between mt-4"><a href="#"
                        class="text-blue-500 hover:underline">Read more</a>
                    <div><a href="#" class="flex items-center">
                        {{--<img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">--}}
                            <h1 class="font-bold text-gray-700 hover:underline">{{ $article->user->name }}</h1>
                        </a></div>
                </div>
            </div>
        </div>
    @endforeach
</x-content>
