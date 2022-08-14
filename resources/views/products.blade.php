@extends('layouts.app')

@section('content')

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    @if ({{$categories}})
      @foreach ($categories as $category)
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">{{$category->name}}</h2>
      @endforeach
    @endif
    
    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      
      @foreach ($products as $product)  
      <x-product 
        name="{{$product->name}}"
        text="{{$product->details}}"
        price="{{$product->price}}"
        image="{{$product->image}}"
        id="{{$product->id}}"
        >

      </x-product>

      @endforeach
      
    </div>
  </div>
</div>
@endsection