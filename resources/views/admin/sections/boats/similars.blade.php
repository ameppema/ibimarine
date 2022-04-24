<div class="my-10">
    <p class="text-[#343a40] font-bold">Embarcaciones similares</p>
    <div class="flex flex-wrap gap-x-14 gap-y-5  mt-5 border border-[#343a40] p-5">
        @foreach ($boats as $boat)

        <div class="flex items-center">     
            <input type="checkbox" id="{{$boat->name}}" name="{{$boat->name}}">
            <label form="{{$boat->name}}" class="text-[#343a40] font-bold ml-2">{{$boat->name}}</label>
        </div>

        @endforeach
    </div>


  </div>