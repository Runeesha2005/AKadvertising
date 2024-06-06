{{--<!-- resources/views/admin/dashboard.blade.php -->--}}
{{--<x-app-layout>--}}
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <h1>Consultation Requests</h1>--}}
{{--        <table class="table table-bordered">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>First Name</th>--}}
{{--                <th>Last Name</th>--}}
{{--                <th>Email</th>--}}
{{--                <th>Company Name</th>--}}
{{--                <th>Telephone</th>--}}
{{--                <th>Service</th>--}}
{{--                <th>Message</th>--}}
{{--                <th>Created At</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach ($consultationRequests as $request)--}}
{{--                <tr>--}}
{{--                    <td>{{ $request->id }}</td>--}}
{{--                    <td>{{ $request->first_name }}</td>--}}
{{--                    <td>{{ $request->last_name }}</td>--}}
{{--                    <td>{{ $request->email }}</td>--}}
{{--                    <td>{{ $request->company_name }}</td>--}}
{{--                    <td>{{ $request->telephone }}</td>--}}
{{--                    <td>{{ $request->service }}</td>--}}
{{--                    <td>{{ $request->message }}</td>--}}
{{--                    <td>{{ $request->created_at }}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--@endsection--}}



{{--<!-- resources/views/admin/dashboard.blade.php -->--}}

{{--<x-app-layout>--}}


{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <h1>Consultation Requests</h1>--}}
{{--        <table class="table table-bordered">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>First Name</th>--}}
{{--                <th>Last Name</th>--}}
{{--                <th>Email</th>--}}
{{--                <th>Company Name</th>--}}
{{--                <th>Telephone</th>--}}
{{--                <th>Service</th>--}}
{{--                <th>Message</th>--}}
{{--                <th>Created At</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach ($consultationRequests as $request)--}}
{{--                <tr>--}}
{{--                    <td>{{ $request->id }}</td>--}}
{{--                    <td>{{ $request->first_name }}</td>--}}
{{--                    <td>{{ $request->last_name }}</td>--}}
{{--                    <td>{{ $request->email }}</td>--}}
{{--                    <td>{{ $request->company_name }}</td>--}}
{{--                    <td>{{ $request->telephone }}</td>--}}
{{--                    <td>{{ $request->service }}</td>--}}
{{--                    <td>{{ $request->message }}</td>--}}
{{--                    <td>{{ $request->created_at }}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--</x-app-layout>--}}


<!-- resources/views/admin/dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Consultation Requests') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <h1 class="text-2xl font-bold mb-4">Consultation Requests</h1>
                    @if($consultationRequests->isEmpty())
                        <p class="text-center">No consultation requests found.</p>
                    @else
                        <table class="table-auto w-full">
                            <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">First Name</th>
                                <th class="px-4 py-2">Last Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Company Name</th>
                                <th class="px-4 py-2">Telephone</th>
                                <th class="px-4 py-2">Service</th>
                                <th class="px-4 py-2">Message</th>
                                <th class="px-4 py-2">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($consultationRequests as $request)
                                <tr>
                                    <td class="border px-4 py-2">{{ $request->id }}</td>
                                    <td class="border px-4 py-2">{{ $request->first_name }}</td>
                                    <td class="border px-4 py-2">{{ $request->last_name }}</td>
                                    <td class="border px-4 py-2">{{ $request->email }}</td>
                                    <td class="border px-4 py-2">{{ $request->company_name }}</td>
                                    <td class="border px-4 py-2">{{ $request->telephone }}</td>
                                    <td class="border px-4 py-2">{{ $request->service }}</td>
                                    <td class="border px-4 py-2">{{ $request->message }}</td>
                                    <td class="border px-4 py-2">{{ $request->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
