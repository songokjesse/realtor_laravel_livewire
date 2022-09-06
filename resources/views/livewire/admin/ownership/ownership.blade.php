    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

            <div>
                {{-- Because she competes with no one, no one can compete with her. --}}
                @if(session()->has('message'))
                    <div class="bg-green-100 rounded-lg w-full mb-4 text-base text-green-700 mb-3">
                        {{session('message')}}
                    </div>
                @endif

                @if($updateMode)
                    @include('livewire.admin.ownership.update')
                @else
                    @include('livewire.admin.ownership.create')
                @endif
                <br/>
                <hr class="mb-4"/>
                <table class="table  w-full shadow-lg bg-white border-collapse">
                    <thead>
                    <tr>
                        <th class="bg-green-300 border text-left px-8 py-4">#</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Name</th>
                        <th class="bg-green-300 border text-left px-8 py-4">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ownership as $owner)
                    <tr>
                        <td class="border px-8 py-4">{{ $loop->iteration}}</td>
                        <td class="border px-8 py-4">{{$owner->name}}</td>
                        <td class="border px-8 py-4">
                            <button wire:click="edit({{ $owner->id }})" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</button>
                            <button wire:click="delete({{ $owner->id }})" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
                </div>
            </div>
        </div>
    </div>
