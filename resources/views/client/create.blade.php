{{--<x-app-layout>--}}

{{--    @section('content')--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 offset-md-2">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">Create Client Profile</div>--}}

{{--                        <div class="card-body">--}}
{{--                            <form method="POST" action="{{ route('clients.store') }}">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="name">Name</label>--}}
{{--                                    <input id="name" type="text" class="form-control" name="name" required autofocus>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="email">Email</label>--}}
{{--                                    <input id="email" type="email" class="form-control" name="email" required>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="phone">Phone</label>--}}
{{--                                    <input id="phone" type="text" class="form-control" name="phone" required>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="address">Address</label>--}}
{{--                                    <textarea id="address" class="form-control" name="address" rows="3" required></textarea>--}}
{{--                                </div>--}}

{{--                                <div class="form-group">--}}
{{--                                    <label for="business_details">Business Details</label>--}}
{{--                                    <textarea id="business_details" class="form-control" name="business_details" rows="3" required></textarea>--}}
{{--                                </div>--}}

{{--                                <button type="submit" class="btn btn-primary">Save Profile</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endsection--}}



{{--</x-app-layout>--}}



<x-app-layout>
    <form action="{{ route('clients.store') }}" method="post">
        @csrf

        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">{{ __('Name') }}</label>
            <input id="name" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-gray-700">{{ __('Email') }}</label>
            <input id="email" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
        </div>

        <div class="mt-4">
            <label for="phone" class="block font-medium text-sm text-gray-700">{{ __('Phone') }}</label>
            <input id="phone" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
        </div>

        <div class="mt-4">
            <label for="address" class="block font-medium text-sm text-gray-700">{{ __('Address') }}</label>
            <input id="address" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
        </div>

        <div class="mt-4">
            <label for="business_details" class="block font-medium text-sm text-gray-700">{{ __('Business Details') }}</label>
            <textarea id="business_details" name="business_details" rows="3" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('business_details') }}</textarea>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Save') }}
            </button>
        </div>

    </form>
</x-app-layout>
