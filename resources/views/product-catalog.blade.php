@extends('layouts.app')
<?php
    // dd($catalogData);
    $metaData = $catalogData['metadata'];
    $catalogValues = $catalogData['contentElement']['values'];
    $catalogProducts = $catalogData['productPages'];
    $excerpt = $catalogData['contentElement']['excerpt']['value'];

    $breadCrumbData = [
        [
            'text' => 'condom',
            'path' => '/catalog',
        ],
    ]
?>

@section('title', $catalogData['pageTitle'])
<!-- Meta data rendering -->
@if($metaData)
    @foreach($metaData['values'] as $key => $meta)
        @section($key, $meta == null ? 'Not added' : $meta)
    @endforeach
@endif

@section('content')
    <div class="container mx-auto py-8 sm:py-12">
        <x-breadcrumb :data="$breadCrumbData" />
        <div>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                {{$catalogData['pageTitle']}}
            </h2>

            @if( !empty($excerpt))
                <p class="max-w-md mt-4 text-gray-500">{{$excerpt}}</p>
            @endif
        </div>

        <div class="flex items-center justify-between mt-8">
            <div class="flex border border-gray-100 divide-x divide-gray-100 rounded">
                <button
                class="inline-flex items-center justify-center w-10 h-10 text-gray-600 transition hover:bg-gray-50 hover:text-gray-700"
                >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"
                    />
                </svg>
                </button>

                <button
                class="inline-flex items-center justify-center w-10 h-10 text-gray-600 transition hover:bg-gray-50 hover:text-gray-700"
                >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5"
                    />
                </svg>
                </button>
            </div>

            <div>
                <label for="SortBy" class="sr-only">SortBy</label>

                <select id="SortBy" class="h-10 text-sm border-gray-300 rounded">
                <option>Sort By</option>
                <option value="Title, DESC">Title, DESC</option>
                <option value="Title, ASC">Title, ASC</option>
                <option value="Price, DESC">Price, DESC</option>
                <option value="Price, ASC">Price, ASC</option>
                </select>
            </div>
        </div>

        <ul class="grid gap-4 mt-4 sm:grid-cols-2 lg:grid-cols-4">
            @if($catalogProducts !== null)
                @foreach($catalogProducts as $product)
                    <livewire:product-item :data="$product" />
                @endforeach
            @endif
        </ul>
    </div>

@endsection