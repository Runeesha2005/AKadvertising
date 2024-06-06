<x-app-layout>
{{--    @extends('layouts.app')--}}

    @section('content')
        <div class="container">
            <h1>Analytics Data</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Visitors</th>
                    <th>Page Views</th>
                </tr>
                </thead>
                <tbody>
                @foreach($analyticsData as $data)
                    <tr>
                        <td>{{ $data['date']->format('Y-m-d') }}</td>
                        <td>{{ $data['visitors'] }}</td>
                        <td>{{ $data['pageViews'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection


</x-app-layout>
