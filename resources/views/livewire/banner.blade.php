<section class="bg-white py-6 space-y-3">
      <h3 class="text-2xl text-gray-500 font-bold"> {{$pageType}} </h3>
      <h1 class="text-3xl font-bold tracking-tight text-gray-900 capitalize">{{$title}}</h1>
      @if ($pageType === 'ProductPage')
        <p class="text-lg text-gray-500 font-bold"> Product SKU: {{$data['contentElement']['values']['productSku']}}</p>
      @endif
</section>