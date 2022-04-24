@extends('_layouts.main')

@section('body')
<div class="px-4 pt-16 pb-20 bg-white sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
    <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
        <div>
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Latest Articles</h2>
            {{-- <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                <p class="text-xl text-gray-500">Get weekly articles in your inbox on how to grow your business.</p>
                <form class="flex flex-col mt-6 sm:flex-row lg:mt-0 lg:justify-end">
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email-address" type="email" autocomplete="email" required
                            class="w-full px-4 py-2 text-base text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-gray-500 focus:border-gray-500 lg:max-w-xs"
                            placeholder="Enter your email">
                    </div>
                    <div
                        class="flex flex-shrink-0 w-full mt-2 rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto sm:inline-flex">
                        <button type="button"
                            class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-gray-600 border border-transparent rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:w-auto sm:inline-flex">Notify
                            me</button>
                    </div>
                </form>
            </div> --}}
        </div>
        <div class="grid gap-16 pt-10 mt-6 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
            @foreach ($posts as $post)
            <div>
                <p class="text-sm text-gray-500">
                    <time datetime="2020-03-16">{{ date('F j, Y', $page->date) }}</time>
                </p>
                <a href="#" class="block mt-2">
                    <p class="text-xl font-semibold text-gray-900">{{ $post->title }}</p>
                    <p class="mt-3 text-base text-gray-500">{{ $post->excerpt }}.</p>
                </a>
                <div class="mt-3">
                    <a href="#" class="text-base font-semibold text-gray-600 hover:text-gray-500"> Read full story
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
