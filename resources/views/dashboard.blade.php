<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <!-- Shortened Links Card -->

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Shortened Links List -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Shortened Links</h3>

                        @if($links->count() > 0)
                            <ul>
                                @foreach($links as $link)
                                    <li class="mb-3 flex items-center justify-between">
                                        <div>
                                            <!-- Shortened URL -->
                                            <a href="{{ $link->slug }}" target="_blank" class="text-blue-500 hover:underline">
                                                {{ $link->slug }}
                                            </a>

                                            <!-- Redirect count -->
                                            <span class="text-sm font-normal text-gray-500">
                                                ({{ $link->redirects_count }}
                                                {{ $link->redirects_count === 1 ? 'redirect' : 'redirects' }})
                                            </span>

                                            <!-- Target URL -->
                                            <p class="text-sm text-gray-500">Target: {{ $link->target }}</p>
                                        </div>

                                        <!-- Delete Form -->

                                    </li>
                                @endforeach
                            </ul>

                            <!-- Pagination -->
                            <div class="mt-4">
                                {{ $links->links() }}
                            </div>
                        @else
                            <p class="text-gray-500">No shortened links found.</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>




</x-app-layout>