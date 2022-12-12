@props(['column' => 'sm:grid-cols-2 lg:grid-cols-3', 'height' => 'min-h-80 lg:h-80', 'data'])

<div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 xl:gap-x-8 {{$column}}">
    @foreach($data as $item)
    <div class="group relative">
        <div class="hero-card {{$height}} aspect-w-1 aspect-h-1 w-full overflow-hidden bg-gray-200 group-hover:opacity-75 lg:aspect-none">
            {!! $item['content']['value'] !!}
        </div>
    </div>
    @endforeach
</div>