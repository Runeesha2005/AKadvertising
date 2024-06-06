<x-app-layout>
    <form action="{{ route('projects.store') }}" method="post">
        @csrf

        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">{{ __('Name') }}</label>
            <input id="name" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <label for="description" class="block font-medium text-sm text-gray-700">{{ __('Description') }}</label>
            <textarea id="description" name="description" rows="3" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('description') }}</textarea>
        </div>

        <div class="mt-4">
            <label for="start_date" class="block font-medium text-sm text-gray-700">{{ __('Start Date') }}</label>
            <input id="start_date" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="start_date" :value="old('start_date')" required autofocus autocomplete="start_date" />
        </div>

        <div class="mt-4">
            <label for="end_date" class="block font-medium text-sm text-gray-700">{{ __('End Date') }}</label>
            <input id="end_date" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="end_date" :value="old('end_date')" required autofocus autocomplete="end_date" />
        </div>

        <div class="mt-4">
            <label for="client_id" class="block font-medium text-sm text-gray-700">{{ __('Client') }}</label>
{{--            <select id="client_id" name="client_id" class="block w-full p-1 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">--}}
{{--                @foreach($clients as $client)--}}
{{--                    <option value="{{ $client->id }}">{{ $client->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}

            <select id="client_id" name="client_id" class="block w-full p-1 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <option value="">Select Client</option> <!-- Add an empty option for better usability -->
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Save') }}
            </button>
        </div>
    </form>
</x-app-layout>
