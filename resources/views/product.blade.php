@extends('layouts.app')

@section('content')

<div class="bg-white">
  <div class="flex items-center justify-center max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="mt-6 w-1/3" >

      <x-product 
        name="{{$product->name}}"
        price="{{$product->price}}"
        text=""
        image="{{$product->image}}"
        id="{{$product->id}}"
        >

        HELLO WORLD
      </x-product>
   
    </div>
  </div>
</div>
@endsection