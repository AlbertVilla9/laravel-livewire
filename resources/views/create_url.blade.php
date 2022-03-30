<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create URL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="POST" action="{{ route('create_url.store') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                        <div class="grid grid-rows-2 gap-6">
                            <div>
                                <x-label for="name" :value="__('URL Video')" />
                                <x-input id="urlvideo" class="block mt-1 w-full" type="text" name="urlvideo" value="url" autofocus />
                                {{ $userid =  auth()->user()->id  }}
                                <x-input id="userid" class="block mt-1 w-full" type="hidden" name="userid" value='{{ $userid }}'/>
                            </div>
                                
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Generate URL') }}
                            </x-button>
                        </div>
                        
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>