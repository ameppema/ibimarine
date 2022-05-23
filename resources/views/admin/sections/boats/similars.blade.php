<div class="my-10">
    <p class="text-[#343a40] font-bold">Embarcaciones similares</p>
    <div class="flex flex-wrap gap-x-14 gap-y-5  mt-5 border border-[#343a40] p-5">
        
        @foreach ($boats as $similar_boat)
        {{-- @dump($similar_boat->id) --}}
        <div class="flex items-center">     
            <input type="checkbox" id="{{$similar_boat->name}}" name="similar_boats[]" value="{{$similar_boat->id}}"  @if (isset($boat) && $boat->similarBoats->pluck('similar_boat_id')->contains($similar_boat->id)) checked @endif>
            <label form="{{$similar_boat->name}}" class="text-[#343a40] font-bold ml-2">{{$similar_boat->name}}</label>
        </div>

        @endforeach
    </div>
</div>