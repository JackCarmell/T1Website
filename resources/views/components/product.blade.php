<div class="group relative">
<div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
    <a href="{{ route('product.show', [$id]) }}">
    <img src="{{ URL($image) }}" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
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
@if ($hasLink == 'true')
<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{ $id }}" name="id">
    <input type="hidden" value="{{ $name }}" name="name">
    <input type="hidden" value="{{ $price }}" name="price">
    <input type="hidden" value="{{ $image }}"  name="image">
    <input type="hidden" value="{{ $text }}"  name="text">
    <input type="hidden" value="1" name="quantity">
    <button class="flex items-right max-w-fit bg-green-400 hover:bg-green-200 rounded px-2 mt-1">Add To Cart</button>
</form>
@endif

</div>
{{$slot}}

