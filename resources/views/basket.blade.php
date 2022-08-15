@extends('layouts.app')

@section('content')




            <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
              <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                <div class="flex items-start justify-between">
                  <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                  
                </div>
  
                <div class="mt-8">
                  <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-200">

                        @foreach ($cartItems as $product)
                            <li class="flex py-6">
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                  <img src="{{ URL($product->attributes->image) }}" alt="{{$product->name}}" class="h-full w-full object-cover object-center">
                                </div>
          
                                <div class="ml-4 flex flex-1 flex-col">
                                  <div>
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                      <h3>
                                        <a href="{{ route('product.show', $product->id )}}">  {{$product->name}} </a>
                                      </h3>
                                      <p class="ml-4">£{{$product->price}}</p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">{{$product->details}}</p>
                                  </div>
                                  <div class="flex flex-1 items-end justify-between text-sm">
                                    <p class="text-gray-500">Qty: {{$product->quantity}}</p>
          
                                    <div class="flex">
                                        <form action="{{ route('cart.remove')}}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                            
                                        </form>
                                      
                                    </div>
                                  </div>
                                </div>
                              </li>
                        @endforeach
                    </ul>
                  </div>
                </div>
              </div>
  
              <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                  <p>Subtotal</p>
                  <p>£{{Cart::getTotal()}}</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                <div class="mt-6">
                  <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                </div>
                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                  <p>
                    or <a href="{{ route('products')}}" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></a>
                  </p>
                </div>
              </div>

  
@endsection