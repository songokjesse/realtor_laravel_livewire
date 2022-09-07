<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <div>
                {{-- The Master doesn't talk, he acts. --}}
                <div>
                    <a href="/admin/properties/add" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"> <b> + </b> &nbsp; Add Property</a>
                </div>


                <div class="mt-2">
                    {{ $properties->links() }}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
