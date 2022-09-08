<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <div>
                {{-- The Master doesn't talk, he acts. --}}
                <div>
                    <a href="/admin/properties/add" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"> <b> + </b> &nbsp; Add Property</a>
                </div>

                <br/>
                <hr class="mb-4"/>
                <table class="table  w-full shadow-lg bg-white border-collapse">
                    <thead>
                    <tr>
                        <th class="bg-green-300 border text-left px-8 py-4"># (show)</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Name</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Price</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Category</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Location</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Owner</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Verified</th>
                        <th class="bg-green-300 border text-left px-8 py-4"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $property)
                        <tr>
                            <td class="border px-8 py-4"><a href="#" class="text-blue-600 hover:text-blue-700 transition duration-300 ease-in-out mb-4">{{ $loop->iteration}}</a></td>
                            <td class="border px-8 py-4">{{$property->name}}</td>
                            <td class="border px-8 py-4"> Ksh {{$property->price}}</td>
                            <td class="border px-8 py-4">{{$property->category->name}}</td>
                            <td class="border px-8 py-4">{{$property->location->name}}</td>
                            <td class="border px-8 py-4">{{$property->ownership->name}}</td>
                            <td class="border px-8 py-4">
                               @if($property->verified == 1 )
                                        <span class="inline-block py-1.5 px-1.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-600 text-white rounded">Verified</span>
                                @else
                                        <span class="inline-block py-1.5 px-1.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded">Not Verified</span>
                                @endif
                            </td>
                            <td class="border px-8 py-4">
                                <button wire:click="edit({{ $property->id }})" class="inline-block px-4 py-1.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                                <button wire:click="delete({{ $property->id }})" class="inline-block px-4 py-1.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>


                <div class="mt-2">
                    {{ $properties->links() }}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
