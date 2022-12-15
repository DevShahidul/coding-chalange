@extends('layouts.app')

@section('content')

<section class="w-full bg-white dark:bg-gray-900">
    <div class="container relative flex flex-col pt-28">
        <section class="flex items-center flex-1">
            <div class="flex flex-col w-full ">
                <h1 class="text-5xl flex flex-col font-extrabold text-center lg:text-7xl">
                    <span class="text-transparent bg-gradient-to-br bg-clip-text from-teal-500 via-indigo-500 to-sky-500 dark:from-teal-200 dark:via-indigo-300 dark:to-sky-500">
                        404
                    </span>

                    <span class="text-transparent bg-gradient-to-tr bg-clip-text from-blue-500 via-pink-500 to-red-500 dark:from-sky-300 dark:via-pink-300 dark:to-red-500">
                        Oops! Page not found
                    </span>
                </h1>

                <p class="max-w-3xl mx-auto mt-6 text-lg text-center text-gray-700 dark:text-white md:text-xl">
                    <span class="block">
                        The page you’re looking for doesn’t exist.
                    </span> 

                    <a href="/" class="inline-block mx-auto mt-6 px-8 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2">Back to Home</a>
                </p>
            </div>
        </section>
    </div>
</section>

@endsection