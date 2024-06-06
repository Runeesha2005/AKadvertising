{{--<x-app-layout>--}}
{{--    <form action="{{ route('communication-logs.store') }}" method="post">--}}
{{--        @csrf--}}

{{--        <div>--}}
{{--            <label for="client_id" class="block font-medium text-sm text-gray-700">{{ __('Client') }}</label>--}}
{{--            <select id="client_id" name="client_id" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>--}}
{{--                @foreach($clients as $client)--}}
{{--                    <option value="{{ $client->id }}">{{ $client->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--            <label for="subject" class="block font-medium text-sm text-gray-700">{{ __('Type') }}</label>--}}
{{--            <input id="subject" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="subject" :value="old('subject')" required autofocus autocomplete="subject" />--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--            <label for="description" class="block font-medium text-sm text-gray-700">{{ __('Details') }}</label>--}}
{{--            <textarea id="description" name="description" rows="3" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('description') }}</textarea>--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--            <label for="communication_date" class="block font-medium text-sm text-gray-700">{{ __('Communication Date') }}</label>--}}
{{--            <input id="communication_date" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="communication_date" :value="old('communication_date')" required autofocus />--}}
{{--        </div>--}}

{{--        <div class="mt-4">--}}
{{--            <label for="communication_date" class="block font-medium text-sm text-gray-700">{{ __('Communication Time') }}</label>--}}
{{--            <input id="communication_date" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="communication_date" :value="old('communication_date')" required autofocus />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition ease-in-out duration-150">--}}
{{--                {{ __('Save') }}--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-app-layout>--}}


<x-app-layout>
    <form action="{{ route('communication-logs.store') }}" method="post">
        @csrf

        <div>
            <label for="client_id" class="block font-medium text-sm text-gray-700">{{ __('Client') }}</label>
            <select id="client_id" name="client_id" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <label for="type" class="block font-medium text-sm text-gray-700">{{ __('Type') }}</label>
            <input id="type" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="type" :value="old('type')" required autofocus autocomplete="type" />
        </div>

        <div class="mt-4">
            <label for="description" class="block font-medium text-sm text-gray-700">{{ __('Description') }}</label>
            <textarea id="description" name="description" rows="3" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('description') }}</textarea>
        </div>

        <div class="mt-4">
            <label for="communication_date" class="block font-medium text-sm text-gray-700">{{ __('Communication Date') }}</label>
            <input id="communication_date" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="communication_date" :value="old('communication_date')" required />
        </div>

        <div class="mt-4">
            <label for="communication_time" class="block font-medium text-sm text-gray-700">{{ __('Communication Time') }}</label>
            <input id="communication_time" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="time" name="communication_time" :value="old('communication_time')" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Save') }}
            </button>
        </div>
    </form>
</x-app-layout>
