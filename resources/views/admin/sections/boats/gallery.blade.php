<div class="">
    <p class="text-[#343a40] font-bold">Fotos de la embarcación</p>
    <div id="gallery_container" class="flex flex-wrap gap-x-8 gap-y-20 mt-5 border border-[#343a40] p-5">
          
      {{-- Image Slot --}}
      <article id="UploadNewImageCard" class="flex flex-col items-center justify-center gap-y-2">

        <div id="" data-open-modal="upload-image-modal" title="Upload Image" class="w-36 h-24 object-cover border-2 border-[#dadbdc]">
        </div>

        <div class="flex items-center justify-center gap-2 ">

          <p class="text-[#343a40] font-bold ">#0</p>
          <button id="image_1" type="button" data-open-modal="upload-image-modal"><i class="fa-solid fa-upload text-white bg-[#b2b2b2] p-2 rounded-md"></i></i></button>
          <button><i
              class="fa-solid fa-xmark text-white bg-[#b2b2b2] text-2xl rounded-md py-1 px-2"></i></button>
        </div>

      </article>
      {{-- <article class="flex flex-col items-center justify-center gap-y-2">
        <div id="image_1_slot" title="Upload Image" class="w-36 h-24 object-cover border-2 border-[#dadbdc]">
          <input type="hidden" class="hidden" name="image_1">
        </div>
        <div class="flex items-center justify-center gap-2 ">
          <p class="text-[#343a40] font-bold ">#1</p>
          <button id="image_1" type="button" data-open-modal="upload-image-modal"><i class="fa-solid fa-upload text-white bg-green-600 p-2 text-base rounded-md"></i></button>
          <a href="#" id="delete_image_1">
          <button type="button" class=""><i
              class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
          </a>
        </div>
      </article> --}}

    </div>
  </div>