<div class="group relative">
<div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
    <a href="{{ route('product.show', [$id]) }}">
    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
</div>
<div class="mt-4 flex justify-between">
    <div>
    <h3 class="text-sm text-gray-700">
        
        <span aria-hidden="true" class="absolute inset-x-0 top-0"></span>
        {{$name}}
        
    </h3>
</a>
    <p class="mt-1 text-sm text-gray-500">{{$text}}</p>
    </div>
    <p class="text-sm font-medium text-gray-900">£{{$price}}</p>
</div>
<a href="{{ route('add.to.basket', $id) }}" class="flex items-right max-w-fit bg-green-400 hover:bg-green-200 rounded px-2 mt-1">
    Add to basket
</a>
</div>
{{$slot}}