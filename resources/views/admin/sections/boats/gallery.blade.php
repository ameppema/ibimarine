<div class="">
    <p class="text-[#343a40] font-bold">Fotos de la embarcación</p>
    <div class="flex flex-wrap gap-x-8 gap-y-20 mt-5 border border-[#343a40] p-5">
      
      @for ($i = 0; $i < 10; $i++)
          
      {{-- Image Slot --}}
      <article class="flex flex-col items-center justify-center gap-y-2">
        <div id="image_{{$i + 1}}_slot" title="Upload Image" class="w-36 h-24 object-cover border-2 border-[#dadbdc]">
          <input type="hidden" class="hidden" name="image_{{$i + 1}}">
        </div>
        <div class="flex items-center justify-center gap-2 ">
          <p class="text-[#343a40] font-bold ">#{{ $i + 1 }}</p>
          {{-- <button id="image_{{$i + 1}}" type="button" data-open-modal="upload-image-modal"><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button> --}}
          <button id="image_{{$i + 1}}" type="button" data-open-modal="upload-image-modal"><i class="fa-solid fa-upload text-white bg-green-600 p-2 text-base rounded-md"></i></button>
          <button type="button" class=""><i
              class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
        </div>
      </article>

      @endfor



    </div>
  </div>