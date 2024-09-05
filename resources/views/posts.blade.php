<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="bg-white dark:bg-gray-900">
        <div class="pt-8 px-4 mx-auto w-screen max-w-screen-xl lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-8 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl dark:text-white">Search
                    my Posts</h2>
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="search"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search for
                                article</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3">
                                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-12 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Search for article ....." type="search" id="search" name="search"
                                autocomplete="off">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{ $posts->links() }}
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-10 lg:px-0">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                @forelse ($posts as $post)
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="bg-{{ $post->category->color }}-200 text-slate-800 text-xs font-semibold inline-flex items-center px-3 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                                {{ $post->category->name }}
                            </a>
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <h2
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">
                            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </h2>
                        <p class=" select-none mb-5 font-light text-gray-500 dark:text-gray-400">
                            {{ Str::limit($post->content, 100) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="/posts?author={{ $post->author->username }}">
                                <div class="flex items-center space-x-3 px-2">
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Image" />
                                    <p class="text-sm font-semibold dark:text-white hover:underline">
                                        {{ $post->author->name }}
                                    </p>
                                </div>
                            </a>
                            <a href="/posts/{{ $post->slug }}"
                                class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more &raquo;
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="px-4 mx-auto w-screen max-w-screen-xl">
                        <div class="mx-auto max-w-screen-sm text-center">
                            <h1
                                class=" select-none mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600">
                                404</h1>
                            <p
                                class=" select-none mb-3 text-3xl tracking-widest font-bold text-gray-900 md:text-4xl dark:text-white">
                                GOKILZ <span class=" tracking-normal">NOT-PON</span></p>
                            <a href="/posts"
                                class=" text-blue-600 font-semibold text-lg text-center hover:underline">&laquo;
                                Back to Blog</a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        {{ $posts->links() }}
    </section>
</x-layout>
