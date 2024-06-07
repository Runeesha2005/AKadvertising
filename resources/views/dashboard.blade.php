<x-app-layout>


    <div class="bg-gray-100 min-h-screen">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Dashboard</h1>
                <p class="text-lg text-gray-700">Welcome to the Dashboard! Use the buttons below to navigate to different sections.</p>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Button for Clients -->
                <a href="{{ route('clients.index') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Clients
                </a>
                <!-- Button for Projects -->
                <a href="{{ route('projects.index') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Projects
                </a>
                <!-- Button for Communication Logs -->
                <a href="{{ route('communication-logs.index') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Communication Logs
                </a>
                <!-- Button for Product Categories -->
                <a href="{{ route('product-category.index') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Product Categories
                </a>
                <!-- Button for Campaigns -->
                <a href="{{ route('campaign.index') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Campaigns
                </a>
                <!-- Button for Users -->
                <a href="{{ route('user.index') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Users
                </a>

                <a href="{{ route('admin.dashboard') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Consultation Requests
                </a>

                <a href="{{ route('analysis.dashboard') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Analysis Dashboard
                </a>

                <a href="{{ route('clients.index') }}" class="block text-center rounded-lg bg-orange-500 px-6 py-4 text-white font-semibold hover:bg-orange-600">
                    Clients
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
