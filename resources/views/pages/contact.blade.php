@extends('layout.template')

@section('title', 'Contacto')

@section('hero')
    <!-- Hero -->
    <section class="my-5">
        <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">{{__('Contact')}}</p>
        </div>
    </section>
@endsection

@section('content')
<div class="container lg:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:w-4/5 lg:border-b-4 lg:border-b-old-gold">

    <!-- Cards -->
        <div class="w-4/5 mx-auto my-6 md:max-w-[340px] lg:max-w-full lg:w-full sm:max-w-[300px]">
            <!-- Card Head -->
            <div class="relative lg:h-56 xl:h-96">

                    <img class="mx-auto w-full object-cover rounded-t-[12px] max-h-[200px] xl:max-h-full overflow-y-hidden"  src="/storage/{{$contact->image}}" alt="Contact Ibimarine">
            </div>
            <!-- Card body -->
            <div class="p-4 lg:py-6 lg:px-32 text-center text-old-black">
                <div>
                    <p class="text-sm lg:text-xl">
                        {{$contact->description}}
                    </p>
                </div>
            </div>


        </div>
   
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection