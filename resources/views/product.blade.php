@extends('layouts.app')
<?php
    $metaData = $productData['metadata'];
    $productInfo = $productData['contentElement']['values'];
?>

@section('title', $productData['pageTitle'])
@foreach($metaData['values'] as $key => $meta)
    @section($key, $meta === null ? 'Not added' : $meta)
@endforeach

@section('content')
    <div class="container mx-auto">
        <livewire:product :data="$productData" />
    </div>

@endsection