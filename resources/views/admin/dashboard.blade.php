<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @can ('role_access')
        <h1>Admin should see this</h2>
    @endcan

    <h1>everyone should see this<h2>
</x-admin-layout>
