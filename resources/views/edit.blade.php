<x-app-layout>
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="/home/{{ $user->id }}">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2 mt-4">
                    <h3>Edit Your Profile</h3>
                </div>
            </div>
            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title') ?? $user->profile->title" required autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                            :value="old('description') ?? $user->profile->description" required autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <div>
                        <x-input-label for="url" :value="__('Url')" />
                        <x-text-input id="url" class="block mt-1 w-full" type="text" name="url"
                            :value="old('url') ?? $user->profile->url" required autofocus autocomplete="url" />
                        <x-input-error :messages="$errors->get('url')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <div>
                        <x-input-label for="image" :value="__('Profile Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" required autofocus autocomplete="image" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row  mt-4">
                <div class="col-8 offset-2">
                    <x-primary-button class="mt-2">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
