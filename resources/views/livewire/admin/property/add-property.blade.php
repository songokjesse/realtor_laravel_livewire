<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <div>
                {{-- Nothing in the world is as soft and yielding as water. --}}
                <div class="max-w-4xl mx-auto mt-5">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Add Property</h5>
                            <hr/>
                        <br>
                        <form wire:submit.prevent="save">
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property
                                    Name</label>
                                <input type="text"
                                       wire:model="property.name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Property Name"
                                       required="">
                                @error('property.name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property
                                    Price</label>
                                <input type="text"
                                       wire:model="property.price"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Property Price"
                                       required="">
                                @error('property.price') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property
                                    Geolocation</label>
                                <input type="text"
                                       wire:model="property.geolocation"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Property Geolocation"
                                       >
                                @error('property.geolocation') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property
                                    Category</label>
                                <select
                                       wire:model="property.category_id"
                                       name="category_id"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       required>
                                    <option disabled selected>Select Property Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('property.category_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property
                                    Location</label>
                                <select
                                       wire:model="property.location_id"
                                       name="location_id"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       required>
                                    <option disabled selected>Select Property Location(Estate)</option>
                                    @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                                @error('property.location_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Property
                                    Owner</label>
                                <select
                                       wire:model="property.ownership_id"
                                       name="location_id"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       required>
                                    <option disabled selected>Select Property Owner</option>
                                    @foreach($ownership as $owner)
                                    <option value="{{$owner->id}}">{{$owner->name}}</option>
                                    @endforeach
                                </select>
                                @error('property.ownership_id') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex items-center justify-start space-x-4">
                                <a href="/admin/properties" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Back</a>
                                <button type="submit"
                                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Save
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
