<x-app-layout>
    <div class="bg-orange-100">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl font-bold text-orange-600 mb-6">About Us</h1>
                <p class="text-lg text-gray-700">AK Advertising is a leading provider of advertising, marketing, and event management services. We are dedicated to delivering exceptional experiences for our clients.</p>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-orange-600 mb-2">Our Services</h2>
                        <ul class="list-disc list-inside">
                            <li>Advertising: Billboards, Printed Advertisements</li>
                            <li>Graphic Designing</li>
                            <li>Strategic Planning: Market Research and Analysis</li>
                            <li>Event Planning/Management: Dealer Conventions</li>
                            <li>Social Media Marketing</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-orange-600 mb-2">Our Approach</h2>
                        <p class="text-gray-700">At AK Advertising, we prioritize client satisfaction and strive to exceed expectations with every project. Our team of experts collaborates closely with clients to understand their needs and deliver customized solutions.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-orange-600 mb-2">Our Mission</h2>
                        <p class="text-gray-700">Our mission is to empower businesses with innovative marketing strategies and memorable event experiences. We are committed to driving success for our clients and building long-lasting relationships.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-orange-600 mb-6">Client Reviews</h2>

                <!-- Client Review Form -->
                <form id="review-form" class="bg-white shadow-lg rounded-lg p-6 mb-12">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="position" class="block text-sm font-medium text-gray-700">Your Position</label>
                        <input type="text" id="position" name="position" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="review" class="block text-sm font-medium text-gray-700">Your Review</label>
                        <textarea id="review" name="review" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required></textarea>
                    </div>
                    <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded-md">Submit Review</button>
                </form>

                <!-- Display Client Reviews -->
                <div id="reviews" class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Reviews will be dynamically generated here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Script to handle form submission and display reviews -->
    <script>
        // Load existing reviews from local storage
        document.addEventListener('DOMContentLoaded', function() {
            const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            const reviewsContainer = document.getElementById('reviews');
            reviews.forEach(review => {
                const reviewBlock = createReviewBlock(review);
                reviewsContainer.appendChild(reviewBlock);
            });
        });

        // Handle form submission
        document.getElementById('review-form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form values
            const name = document.getElementById('name').value;
            const position = document.getElementById('position').value;
            const reviewText = document.getElementById('review').value;

            // Create review object
            const review = {
                name: name,
                position: position,
                reviewText: reviewText
            };

            // Add review to local storage
            const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            reviews.push(review);
            localStorage.setItem('reviews', JSON.stringify(reviews));

            // Create and append new review block
            const reviewsContainer = document.getElementById('reviews');
            const reviewBlock = createReviewBlock(review);
            reviewsContainer.appendChild(reviewBlock);

            // Clear form fields
            document.getElementById('review-form').reset();
        });

        // Function to create review block
        function createReviewBlock(review) {
            const reviewBlock = document.createElement('div');
            reviewBlock.classList.add('bg-white', 'shadow-lg', 'rounded-lg', 'overflow-hidden', 'p-6');
            const reviewText = document.createElement('p');
            reviewText.classList.add('text-gray-700', 'mb-4');
            reviewText.textContent = `"${review.reviewText}"`;
            const reviewAuthor = document.createElement('p');
            reviewAuthor.classList.add('font-semibold', 'text-orange-600');
            reviewAuthor.textContent = `- ${review.name}, ${review.position}`;
            reviewBlock.appendChild(reviewText);
            reviewBlock.appendChild(reviewAuthor);
            return reviewBlock;
        }
    </script>
</x-app-layout>
