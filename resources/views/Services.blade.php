<x-app-layout>
    <div class="bg-gray-100">
        <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Our Services</h1>
                <p class="text-lg text-gray-700">AK Advertising offers a wide range of services to meet your advertising, marketing, and event management needs. Explore our offerings below:</p>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Advertising</h2>
                        <p class="text-gray-700">We specialize in various forms of advertising, including billboards, printed advertisements, and digital marketing campaigns.</p>
                    </div>
                </div>
                <!-- Service Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Graphic Designing</h2>
                        <p class="text-gray-700">Our talented graphic designers create visually stunning designs for logos, branding materials, and marketing collateral.</p>
                    </div>
                </div>
                <!-- Service Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <h2 class="text-lg font-semibold text-gray-900 mb-2">Event Management</h2>
                        <p class="text-gray-700">We excel in planning and executing events, from dealer conventions to corporate gatherings, ensuring a seamless and memorable experience.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>



        <section class="p-4">
            <div class="relative bg-clip-border bg-white text-gray-700 flex h-full min-h-[314px] w-full flex-col items-center justify-center rounded-xl !bg-orange-500 px-8">
                <div class="container mx-auto text-center">
                    <h2 class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-white mb-4">Pricing</h2>
                    <p class="block antialiased font-sans text-xl font-normal leading-relaxed text-white mb-8 opacity-70">Choose the perfect plan for your dining experience</p>
                </div>
            </div>
            <div class="px-10 pt-8 pb-16 -mt-16 lg:px-30 xl:px-40">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md lg:h-max lg:scale-105 z-10 translate-y-0">
                        <div class="p-6 text-center">
                            <h5 class="antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-orange-500 flex justify-center mt-2 mb-2">Basic Plan</h5>
                            <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-gray-900 flex justify-center mt-5 mb-2">$9.99<span class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 self-end -translate-y-1">/per month</span></h3>
                            <ul class="flex flex-col items-center justify-start gap-3 pt-6 mt-2 mb-5">
                                <div class="">
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Basic SEO optimization</p>
                                    </li>
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Social media account setup and management</p>
                                    </li><li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Monthly performance reports</p>
                                    </li>
                                </div>
                            </ul>
                            <a href="{{ route('paypal.test_checkout') }}" class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-orange-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-full flex items-center justify-center gap-4">
                                join
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md lg:h-max lg:scale-105 z-10 translate-y-0">
                        <div class="p-6 text-center">
                            <h5 class="antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-orange-500 flex justify-center mt-2 mb-2">Premium Plan</h5>
                            <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-gray-900 flex justify-center mt-5 mb-2">$19.99<span class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 self-end -translate-y-1">/per month</span></h3>
                            <ul class="flex flex-col items-center justify-start gap-3 pt-6 mt-2 mb-5">
                                <div class="">
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Advanced SEO strategies</p>
                                    </li>  <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Targeted social media advertising</p>
                                    </li>
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Content creation (blog posts, articles)</p>
                                    </li>
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Bi-weekly performance reports</p>
                                    </li>
                                </div>
                            </ul>
                            <a href="{{ route('paypal.test_checkout') }}" class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-orange-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-full flex items-center justify-center gap-4">
                                join
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md lg:h-max lg:scale-105 z-10 translate-y-0">
                        <div class="p-6 text-center">
                            <h5 class="antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-orange-500 flex justify-center mt-2 mb-2">Ultimate Plan</h5>
                            <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-gray-900 flex justify-center mt-5 mb-2">$29.99<span class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 self-end -translate-y-1">/per month</span></h3>
                            <ul class="flex flex-col items-center justify-start gap-3 pt-6 mt-2 mb-5">
                                <div class="">
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Comprehensive SEO and PPC campaigns</p>
                                    </li><li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Dedicated account manager</p>
                                    </li>
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Custom content marketing strategies</p>
                                    </li>
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Email marketing campaigns</p>
                                    </li>
                                    <li class="flex items-center gap-2 py-1 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-inherit">Daily performance tracking and reporting</p>
                                    </li>
                                </div>
                            </ul>
                            <a href="{{ route('paypal.test_checkout') }}" class="align-middle select-none font-sans font-bold text-center uppercase transition-all text-xs py-3 px-6 rounded-lg bg-orange-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-full flex items-center justify-center gap-4">
                                join
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</x-app-layout>
