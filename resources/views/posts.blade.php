@extends('layout')

@section('content')
    <div class="posts">
        <div>
            <div class="flex gap-5">
                <div class="description">
                    <h1 class="font-bold text-[32px] leading-10">
                        Blog Posts
                    </h1>
                    <p class="text-xl pt-2">
                        Take a look at some of the blog posts that I've written! Some of the technical ones have an accompanying YouTube video going over the same content.
                    </p>
                </div>
                <img class="posts grow flex-grow w-32" src="/storage/connected-globe.svg" alt="">
            </div>
            <div class="flex gap-5 pt-7">
                <a class="px-5 py-1  font-work rounded-xl {{Request::path() === "posts" ? 'text-white bg-db' : 'bg-gray-100 text-gray-600'}}" href="/posts">
                    All
                </a>
                @foreach ($categories as $category)
                    <a class="px-3 py-1  font-work rounded-xl {{Request::path() === "posts/categories/$category->slug" ? 'text-white bg-db' : 'bg-gray-100 text-gray-600'}}" href="/posts/categories/{{$category->slug}}">
                        {{$category->name}}
                    </a>
                @endforeach
            </div>
        </div>
        @foreach ($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
        <div class="pagination">
            {{ $posts->links() }}
        </div>
        <div class="py-5 mt-12 flex justify-center items-center">
            <img src="/storage/email-laptop.svg" class="w-36" alt="">
            <div class="text-center pr-7 flex flex-col items-center h-full w-full">
                <h2 class="text-xl">Subscribe to get notified about new posts!</h2>
                <p class="font-work text-lg pb-3">I'll keep it clean, I promise - only one a week.</p>
                <div class="relative w-96 max-w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    </div>
                    <input type="text" id="email-address-icon email" class="w-full border text-lg rounded-lg focus:ring-blue-500 block pl-10 p-2.5 font-work bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="name@email.com">
                </div>
            </div>
        </div>
    </div>
@endsection
