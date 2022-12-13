@extends('layouts.app')
<?php
    $metaData = $homeData['metadata'];
    $heroData = $homeData['hero']['values'];
    $blockData = $homeData['blocks']['values'];
?>

@section('title', $homeData['pageTitle'])
@foreach($metaData['values'] as $key => $meta)
    @section($key, $meta === null ? 'Not added' : $meta)
@endforeach

@section('content')
    <div class="container mx-auto">

       <livewire:banner :data="$homeData" /> 
       
        @section('banner_title', $homeData['pageTitle'])
        @section('page_type', $homeData['pageType'])
        <x-block-section :data="$heroData" />
        <h1 class="mt-6 lg:mt-12 text-3xl font-bold tracking-tight text-gray-900 capitalize">Content Blocks</h1>
        <x-block-section :data="$blockData" column="grid-cols-1" height="min-h-96 lg:h-auto" />
    </div>

@endsection