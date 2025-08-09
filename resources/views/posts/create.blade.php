<x-app-layout>
    <div class="container mt-5">

        <form method="POST" enctype="multipart/form-data" action="{{ route('new.post') }}">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <h3>Add New Post</h3>
                </div>
            </div>
            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <div>
                        <x-input-label for="caption" :value="__('Post Caption')" />
                        <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption"
                            :value="old('caption')" required autofocus autocomplete="caption" />
                        <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <div>
                        <x-input-label for="image" :value="__('Image Caption')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" required autofocus autocomplete="image" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <x-primary-button class="mt-2">
                        {{ __('Add New Post') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
