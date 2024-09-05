<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article
                class="w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <div class="flex items-center">
                                    <a href="/posts?author={{ $post->author->username }}" rel="author"
                                        class="text-xl font-bold text-gray-900 dark:text-white mr-4 hover:underline">{{ $post->author->name }}</a>
                                    <a href="/posts?category={{ $post->category->slug }}"
                                        class="text-sm font-medium text-slate-800 dark:text-gray-400 bg-{{ $post->category->color }}-200 px-3 py-0.5 rounded-full hover:underline">
                                        {{ $post->category->name }}</a>
                                </div>
                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08"
                                        title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time>
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p class="text-base select-none">{{ $post->content }}</p>
                <a href="/posts" class="text-sm font-semibold no-underline hover:underline">&laquo; Back to Post</a>
            </article>
        </div>
    </main>
</x-layout>
