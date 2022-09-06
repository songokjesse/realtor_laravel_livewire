<form>
    <div>
        <div class="block p-6 rounded-lg shadow-lg bg-white w-full">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Location Name</h5>
            <p class="text-gray-700 text-base mb-4">
            <div class="form-group mb-4">
{{--                <label for="exampleFormControlInput1">Category Name:</label>--}}
                <input type="text" class="form-control w-full" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                @error('name') <span class="bg-red-100  mb-4 text-base text-red-700 mt-2 mb-3">{{ $message }}</span>@enderror
            </div>
            <button wire:click.prevent="store()" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Save</button>
        </div>
    </div>
</form>
