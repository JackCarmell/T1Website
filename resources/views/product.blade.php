@extends('layouts.app')

@section('content')

{{-- <div class="bg-white">
  <div class="flex items-center justify-center max-w-2xl mx-auto py-8 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="mt-6 w-1/3" >

      <x-product 
        name="{{$product->name}}"
        price="{{$product->price}}"
        text=""
        image="{{$product->image}}"
        id="{{$product->id}}"
        hasLink='false'
        >

       {{$product->description}}

       <a href="{{ route('add.to.basket', $product->id) }}" class="flex items-right max-w-fit bg-green-400 hover:bg-green-200 rounded px-2 mt-1">
        Add to basket
        </a>
      </x-product>
   
    </div>
  </div>
</div> --}}
<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="pt-6">

      <!-- Image gallery -->
      <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-4 lg:gap-x-8">
        <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block col-span-2 col-start-2 ">
          <img src="{{ URL($product->image)}}" alt="" class="w-full h-full object-center object-cover">
        </div>
        
        
        

            <!-- Sizes -->
            <div class="mt-10 col-span-4">
              
              
              <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <!-- Description and details -->
                <div>
                  <h3 class="sr-only">Description</h3>
        
                  <div class="space-y-6">
                    <p class="text-base text-gray-900">{{$product->description}}</p>
                  </div>
                </div>
        
            

              <fieldset class="mt-4">
                <legend class="sr-only">Choose a size</legend>
                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-gray-50 text-gray-200 cursor-not-allowed">
                    <input type="radio" name="size-choice" value="XXS" disabled class="sr-only" aria-labelledby="size-choice-0-label">
                    <span id="size-choice-0-label"> 5 </span>
  
                    <span aria-hidden="true" class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                      <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                        <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                      </svg>
                    </span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                    <span id="size-choice-1-label"> 5.5 </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                    <span id="size-choice-2-label"> 6 </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                    <span id="size-choice-3-label"> 6.5 </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                    <span id="size-choice-4-label"> 7 </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                    <span id="size-choice-5-label"> 8 </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                    <span id="size-choice-6-label"> 9 </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="3XL" class="sr-only" aria-labelledby="size-choice-7-label">
                    <span id="size-choice-7-label"> 10 </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
                </div>
              </fieldset>
            </div>
            <form class="mt-10" method="POST" action="{{ route('cart.store')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $product->id }}" name="id">
              <input type="hidden" value="{{ $product->price }}" name="price">
              <input type="hidden" value="1" name="quantity">
              <input type="hidden" value="{{ $product->name }}" name="name">
              <input type="hidden" value="{{ $product->text }}" name="text">
              <input type="hidden" value="{{ $product->image }}" name="image">
              <button type="submit" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to bag</button>
          </form>
        </div>
      </div>
  
      
  </div>
  
@endsection
