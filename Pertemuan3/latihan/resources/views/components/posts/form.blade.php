@props(['categories'])

{{-- Form Body --}}
<form action="{{ route('dashboard.store') }}" method="POST">
    @csrf
    <div class="grid gap-4 grid-cols-2">

        {{-- Title --}}
        <div class="col-span-2">
            <label for="title" class="block mb-2.5 text-sm font-medium text-heading">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}"
                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                placeholder="Enter post title">
        </div>

        {{-- Category --}}
        <div>
            <label for="category_id" class="block mb-2.5 text-sm font-medium text-heading">Category</label>
            <select name="category_id" id="category_id"
                class="block w-full px-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body">
                <option value="" selected disabled>Select category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Excerpt --}}
        <div class="col-span-2">
            <label for="excerpt" class="block mb-2.5 text-sm font-medium text-heading">Excerpt</label>
            <textarea name="excerpt" id="excerpt" rows="3"
                class="block bg-neutral-secondary-medium border border-default-medium text-text-heading text-sm rounded-base focus:ring-brand focus:border-brand w-full p-3.5 shadow-xs placeholder:text-body"
                placeholder="Write a short excerpt for the post">{{ old('excerpt') }}</textarea>
        </div>

        {{-- Body --}}
        <div class="col-span-2">
            <label for="body" class="block mb-2.5 text-sm font-medium text-heading">Content</label>
            <textarea name="body" id="body" rows="8"
                class="block bg-neutral-secondary-medium border border-default-medium text-text-heading text-sm rounded-base focus:ring-brand focus:border-brand w-full p-3.5 shadow-xs placeholder:text-body"
                placeholder="Write your post content here">{{ old('body') }}</textarea>
        </div>

        {{-- Form Footer --}}
        <div class="col-span-2 flex items-center space-x-4 border-t border-default pt-4 md:pt-6 st-4 md:st-6">
            <button type="submit"
                class="text-white bg-brand-hover:bg-brand-secondary-hover border border-transparent focus:outline-none focus:ring-4 focus:ring-brand-medium text-sm font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                Create Post
            </button>
            <a href="{{ route('dashboard.index') }}"
                class="text-body bg-neutral-secondary-medium border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary-shadow-xs font-medium leading-5 rounded:base text-sm px-4 py-2.5 focus:outline-none">
                Cancel
            </a>
        </div>
    </div>
</form>

{{-- Image Upload --}}
<div class="col-span-2">
    <label for="image" class="block mb-2.5 text-sm font-medium text-heading">Upload Image</label>
    <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg"
        class="cursor-pointer bg-neutral-secondary-medium border text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full shadow-xs placeholder:text-body">
</div>

{{-- contoh --}}
<div>
    @error('image')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

{{-- implementasi pada field tittle --}}
<div class="col-span-2">
    <label for="title" class="block mb-2.5 text-sm font-medium text-heading">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}"
        class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
        placeholder="Enter post title">
    @error('title')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
