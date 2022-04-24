{{-- Upload Image Modal --}}
<div data-target-modal="update-image-modal" id="update-image-modal" class="hidden fixed top-0 left-0 z-10  bg-black/50  h-screen w-full">

    <!-- Overlay content -->
    <div class="h-screen flex flex-col items-center">

        {{-- Overlay Body --}}
        <div class="w-[90%] lg:max-w-xl text-old-black">

            <div class="mx-auto py-4 my-10 bg-white rounded">
                {{-- Head content --}}
                <div class="my-2 pb-2 border-b-2">
                    <div class="px-5 flex justify-between">
                        <div>
                            <p class="text-xl font-bold uppercase">Actualizar imagen</p>
                        </div>
                        <div data-close-modal="update-image-modal" id="close_edit_modal" class="-mt-5 cursor-pointer">
                            <span class="text-5xl text-old-gold">&times;</span>
                        </div>
                    </div>
                </div>

                {{-- Body Content --}}
                <div class="mt-5 px-5">

                    <form id="update_image_form" action="{{ route('image.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="file" name="image_src" id="update_image_src">
                        <input type="text" name="image_alt" id="update_image_alt" placeholder="image alt...">
                        <input type="hidden" name="image_id" id="image_id" value="">
                        <input type="hidden" name="belongs_to" id="update_belongs_to" value="boats">
                        <input type="hidden" name="gallery_type" id="update_gallery_type" value="none">
                        <input type="submit" value="Guardar Imagen">

                    </form>

                </div>
            </div>

        </div>

    </div>

</div>