<li>
    <a href="{{$link}}" class="block overflow-hidden group">
        @if($image !== null)
            <img src="{{$image}}" alt="{{$imageAlt}}" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
        @else
            <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
        @endif
        <div class="relative pt-3 bg-white">
            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">{{$title}}</h3>
            <p class="mt-2">
                <span class="sr-only"> Regular Price </span>
                <span class="tracking-wider text-gray-900"> 
                    @if($price)
                        {{$currency}}{{$price}}
                    @else
                        {{$currency}}0.0
                    @endif
                </span>
            </p>
        </div>
    </a>
</li>