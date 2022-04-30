@extends('layout.template')

@section('title', __('Data Protection'))

@section('hero')
    <!-- Hero -->
    <section class="my-5">
        <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">{{__('Data Protection')}}</p>
        </div>
    </section>
@endsection

@section('content')
<div class="container lg:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:w-4/5 lg:border-b-4 lg:border-b-old-gold">

    <!-- Cards -->
    <h1>Protección de datos</h1>
   
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection