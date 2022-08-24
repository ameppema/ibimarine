<footer class="text-old-black text-center mx-auto lg:flex lg:justify-between lg:my-10 lg:w-4/5  lg:gap-4">
    <div class="lg:flex lg:justify-evenly">
        <div class="lg:hidden">
            <p>{{__('All rights reserved')}}</p>
        </div>
        <div>
            <span class="hidden lg:inline">&nbsp;&nbsp</span>
            <p class="inline"><a href="{{route('legal.terms')}}">{{__('Terms and Conditions')}}</a></p>
            <span class="hidden lg:inline">&nbsp;&nbsp</span>
            <span class="lg:hidden">-</span>  
            <p class="inline"><a href="{{route('legal.privacy')}}">{{__('Privacy Policy')}}</a></p>
            <span class="hidden lg:inline">&nbsp;&nbsp</span>
        </div>
        <div>
            {{-- <p class="inline"><a href="{{route('legal.cookies')}}">{{__('Cookies policy')}}</a></p>
            <span class="hidden lg:inline">&nbsp;&nbsp</span> --}}
            <span class="lg:hidden">-</span>
            <p class="inline"><a href="{{route('legal.dataprotection')}}">{{__('Data Protection')}}</a></p>
        </div>
        <div class="lg:-order-1">
            <p> <b>IBIMARINE &copy;</b> </p>
        </div>
    </div>
    <div class="ml-36 hidden lg:justify-self-end lg:flex">
        <p class="mr-5">{{__('Find us')}}:</p>
        <a href="#" class="text-old-gold"><i class="fa-brands fa-facebook-square mr-3"></i></a>
        <a href="#" class="text-old-gold"><i class="fa-brands fa-instagram-square "></i></a>
    </div>
</footer>