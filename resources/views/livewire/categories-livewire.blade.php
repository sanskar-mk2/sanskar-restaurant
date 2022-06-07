@section('title', 'Categories')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-gray-900">
            Categories
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white px-4 py-8 shadow sm:rounded-lg sm:px-10">
            {{-- All Stories --}}
            <form wire:submit.prevent="add">
                <x-text-input-with-label name="name" />
                <p class="mt-2 text-sm text-green-600">{{ $success_message }}</p>
                <x-submit-button text="Add Category" />
            </form>
            @foreach($categories as $category)
                <div class="bg-yellow-200 mt-4 p-4 rounded-md">
                <livewire:category-livewire :category="$category" key="{{ $category->id }}" />
                </div>
            @endforeach
        </div>

    </div>
</div>