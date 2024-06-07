<x-app-layout>
    <div class="bg-orange-100">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl font-bold text-orange-600 mb-6">Contact Us</h1>
                <p class="text-lg text-gray-700">Get in touch with us for inquiries, collaborations, or any other questions you may have. We're here to help!</p>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-orange-600 mb-2">Location</h2>
                        <!-- Google Maps Embed -->
                        <div class="mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.782833006405!2dYOUR_LONGITUDE!3dYOUR_LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3AYOUR_LOCATION_NAME!2sYOUR_LOCATION_NAME!5e0!3m2!1sen!2sus!4v1623113358069!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-orange-600 mb-2">Email</h2>
                        <p class="text-gray-700"><a href="mailto:runeeshasenadeera@gmail.com" class="text-orange-600">runeeshasenadeera@gmail.com</a></p>
                        <button class="mt-3 bg-orange-600 text-white px-4 py-2 rounded-md">Send Email</button>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-orange-600 mb-2">Phone</h2>
                        <p class="text-gray-700"><a href="tel:+94778277584" class="text-orange-600">+94 778277584</a></p>
                        <button class="mt-3 bg-orange-600 text-white px-4 py-2 rounded-md">Call Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

