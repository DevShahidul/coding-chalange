<section class="relative mt-6 py-8">
    <div>
        <h1 class="text-2xl font-bold lg:text-3xl">{{$title}}</h1>
        <p class="mt-1 text-sm text-gray-500">SKU: {{$sku}}</p>
    </div>

    <div class="grid gap-8 lg:grid-cols-4 lg:items-start">
        <div class="lg:col-span-3">
            <div class="relative mt-4">
                <img alt="Tee" src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" class="h-72 w-full rounded-xl object-cover lg:h-[540px]"/>
            </div>

            <ul class="mt-1 flex gap-1">
                <li>
                <img
                    alt="Tee"
                    src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="h-16 w-16 rounded-md object-cover"
                />
                </li>

                <li>
                <img
                    alt="Tee"
                    src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="h-16 w-16 rounded-md object-cover"
                />
                </li>

                <li>
                <img
                    alt="Tee"
                    src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="h-16 w-16 rounded-md object-cover"
                />
                </li>

                <li>
                <img
                    alt="Tee"
                    src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="h-16 w-16 rounded-md object-cover"
                />
                </li>
            </ul>
        </div>

        <div class="lg:sticky lg:top-24">
            <form class="space-y-4 lg:pt-8">
                <!-- <fieldset>
                    <legend class="text-lg font-bold capitalize">Twitter card</legend>
                    @if(!empty($productInfo['twitterCard']) || $productInfo['twitterCard'] !== null)
                        {{$productInfo['twitterCard']}}
                    @else
                        <span>Null</span>
                    @endif
                </fieldset>
                <fieldset>
                    <legend class="text-lg font-bold capitalize">card images</legend>
                    @if(!empty($productInfo['twitterCardImage']) || $productInfo['twitterCardImage'] !== null)
                        {{$productInfo['twitterCardImage']}}
                    @else
                        <span>Null</span>
                    @endif
                </fieldset> -->

                <fieldset>
                    <legend class="text-lg font-bold">MPN or GTIN</legend>
                    @if(!empty($productInfo['manufacturerPartNumber']) || $productInfo['manufacturerPartNumber'] !== null)
                        {{$productInfo['manufacturerPartNumber']}}
                    @else
                        <span>Null</span>
                    @endif
                </fieldset>
                
                </fieldset>

                <fieldset>
                    <legend class="text-lg font-bold capitalize">Tags</legend>
                    @if(!empty($productInfo['tags']) || $productInfo['tags'] !== null)
                        <div class="space-x-1 mt-2">
                            @foreach($productInfo['tags'] as $tag)
                                <span class="inline-block rounded-full border border-blue-200 px-3 py-1 text-xs bg-blue-100">
                                    {{$tag}}
                                </span>
                            @endforeach
                        </div>
                    @else
                        <span>Null</span>
                    @endif
                </fieldset>
                </fieldset>

                <fieldset>
                    <legend class="text-lg font-bold capitalize">Category</legend>
                    @if(!empty($productInfo['googleProductCategory']) || $productInfo['googleProductCategory'] !== null)
                        {{$productInfo['googleProductCategory']}}
                    @else
                        <span>Null</span>
                    @endif
                </fieldset>

                <fieldset>
                    <legend class="text-lg font-bold">Color</legend>
                    <div class="mt-2 flex gap-1">
                        @if(!empty($productInfo['googleColorCategory']) || $productInfo['googleColorCategory'] !== null)
                            @foreach($googleColorCategory as $color)
                                <label for="color_green" class="cursor-pointer">
                                    <input type="radio" id="color_{{$color['name']}}" name="color" class="peer sr-only" checked />
                                    <span class="block h-6 w-6 rounded-full border border-gray-200 bg-[{{$color['code']}}] ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"></span>
                                </label>
                            @endforeach
                        @else
                            <label for="color_green" class="cursor-pointer">
                                <input type="radio" id="color_green" name="color" class="peer sr-only" checked  />

                                <span class="block h-6 w-6 rounded-full border border-gray-200 bg-green-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"></span>
                            </label>

                            <label for="color_blue" class="cursor-pointer">
                                <input
                                    type="radio"
                                    id="color_blue"
                                    name="color"
                                    class="peer sr-only"
                                />

                                <span class="block h-6 w-6 rounded-full border border-gray-200 bg-blue-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"></span>
                            </label>

                            <label for="color_pink" class="cursor-pointer">
                            <input
                                type="radio"
                                id="color_pink"
                                name="color"
                                class="peer sr-only"
                            />

                            <span
                                class="block h-6 w-6 rounded-full border border-gray-200 bg-pink-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                            ></span>
                            </label>

                            <label for="color_red" class="cursor-pointer">
                            <input
                                type="radio"
                                id="color_red"
                                name="color"
                                class="peer sr-only"
                            />

                            <span
                                class="block h-6 w-6 rounded-full border border-gray-200 bg-red-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                            ></span>
                            </label>

                            <label for="color_indigo" class="cursor-pointer">
                            <input
                                type="radio"
                                id="color_indigo"
                                name="color"
                                class="peer sr-only"
                            />

                            <span
                                class="block h-6 w-6 rounded-full border border-gray-200 bg-indigo-700 ring-1 ring-transparent ring-offset-1 peer-checked:ring-gray-300"
                            ></span>
                            </label>
                        @endif
                    </div>
                </fieldset>

                <fieldset>
                    <legend class="text-lg font-bold">Material</legend>
                    <div class="mt-2 flex gap-1">
                        <label for="material_cotton" class="cursor-pointer">
                            <input
                                type="radio"
                                id="material_cotton"
                                name="material"
                                class="peer sr-only"
                                checked
                            />

                            <span
                                class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"
                            >
                                Cotton
                            </span>
                        </label>

                        <label for="material_wool" class="cursor-pointer">
                            <input
                                type="radio"
                                id="material_wool"
                                name="material"
                                class="peer sr-only"
                                checked
                            />

                            <span
                                class="block rounded-full border border-gray-200 px-3 py-1 text-xs peer-checked:bg-gray-100"
                            >
                                Wool
                            </span>
                        </label>
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend class="text-lg font-bold">Pricing</legend>
                    <p class="text-xl font-bold mt-2">
                        @if($price)
                            {{$currency}}{{$price}}
                        @else
                            {{$currency}}0.0
                        @endif
                    </p>
                </fieldset>

                <button type="submit" class="w-full rounded bg-red-700 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white">
                    Add to cart
                </button>
            </form>
        </div>

        <div class="lg:col-span-3">
            <div class="prose max-w-none [&>iframe]:mt-6 [&>iframe]:aspect-video [&>iframe]:w-full [&>iframe]:rounded-xl space-y-6">
                <div class="[&>span~p]:mt-2 [&>span~h3]:mt-2">
                    <span class="text-xs font-bold">Long Description</span>
                    {!! $description_long !!}
                </div>
                <div class="[&>span~p]:mt-2 [&>span~h3]:mt-2">
                    <span class="text-xs font-bold">Medium Description</span>
                    {!! $description_medium !!}
                </div>
                <div class="[&>span~p]:mt-2 [&>span~h3]:mt-2">
                    <span class="text-xs font-bold">Short Description</span>
                    {!! $description_short!!}
                </div>
            </div>
        </div>
    </div>
</section>