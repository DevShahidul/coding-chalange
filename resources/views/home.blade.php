@extends('layouts.app')
<?php
    $metaData = $homeData['metadata'];
    $heroData = $homeData['hero']['values'];
?>

@section('title', $homeData['pageType'])
@foreach($metaData['values'] as $key => $meta)
    @section($key, $meta === null ? 'Not added' : $meta)
@endforeach

@section('content')
    <div class="container mx-auto">
        @section('banner_title', $homeData['pageTitle'])
        <!-- <livewire:hero data="heroData" /> -->
        @livewire('hero')
    </div>

@endsection