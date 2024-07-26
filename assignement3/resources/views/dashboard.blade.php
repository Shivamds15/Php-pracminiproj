<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
            
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <x-tooltip text="This is a tooltip" placement="right">
                        Hover over me
                    </x-tooltip>
            
                    <x-multifield
                       action="{{ route('submitform') }}"
                        method="POST"
                        :fields="[
                            ['type' => 'text', 'name' => 'name', 'label' => 'Name'],
                            ['type' => 'email', 'name' => 'email', 'label' => 'Email'],
                            ['type' => 'select', 'name' => 'gender', 'label' => 'Gender', 'options' => ['M' => 'Male', 'F' => 'Female']],
                            ['type' => 'checkbox', 'name' => 'subscribe', 'label' => 'Subscribe to newsletter', 'value' => old('subscribe')]
                        ]"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
