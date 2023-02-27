@if (Auth::user()->role == 1)
<script>
    window.location = "{{ url('/movie') }}";
</script>
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (Auth::user()->role == 0)
                    {{ __("You're logged in as:") }}
                    <h2>Admin</h2>

                </div>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($users as $user)
        <table class="table w-full border-collapse border border-gray-700 rounded-lg">
            <thead class="bg-gray-900">
                <tr>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">ID</th>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">Name</th>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">Role</th>
                    <th class="px-2 md:px-6 py-3 text-left text-xs md:text-lg font-medium text-gray-200 uppercase tracking-wider">Created At</th>
                </tr>
            </thead>
            <tbody class="bg-gray-800 divide-y divide-gray-900">
                <tr>
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg font-medium text-gray-200">{{ $user->id }}</td>
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg font-medium text-gray-200">{{ $user->name }}
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200">{{ $user->role }}</td>
                    <td class="px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200">{{ $user->created_at }}</td>
                </tr>
            </tbody>
        </table>
        <section class="flex flex-wrap justify-center mb-5 py-5 bg-gray-800">
            <form method="POST" action="{{ route('user.delete', $user->id) }}">
                @csrf
                @method('DELETE')
                <button class="mr-3 bg-blue-700 hover:bg-blue-600 px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200" type="submit">Delete user</button>
            </form>
            <form method="POST" action="{{ route('user.admin', $user->id) }}">
                @csrf
                @method('PUT')
                <button class="mr-3 bg-blue-700 hover:bg-blue-600 px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200" type="submit">Make Admin</button>
            </form>
            <button class="mr-3 bg-blue-700 hover:bg-blue-600 px-2 md:px-6 py-4 md:py-2 whitespace-nowrap text-xs md:text-lg text-gray-200">See Reviews</button>
            </td>
        </section>
        @endforeach
        @endif
    </div>
</x-app-layout>