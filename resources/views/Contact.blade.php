<x-app-layout>
    <div class="bg-gray-100">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Contact Us</h1>
                <p class="text-lg text-gray-700">Got a question or inquiry? We'd love to hear from you! Reach out to us using the contact form below:</p>
            </div>
            <div class="mt-10">
                <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="px-6 py-8">
                        <!-- Contact Form -->
{{--                        <form action="{{ route('contact.store') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="mb-4">--}}
{{--                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>--}}
{{--                                <input type="text" id="name" name="name" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">--}}
{{--                            </div>--}}
{{--                            <div class="mb-4">--}}
{{--                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>--}}
{{--                                <input type="email" id="email" name="email" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">--}}
{{--                            </div>--}}
{{--                            <div class="mb-4">--}}
{{--                                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>--}}
{{--                                <textarea id="message" name="message" rows="4" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="text-center">--}}
{{--                                <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100">Send Message</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
