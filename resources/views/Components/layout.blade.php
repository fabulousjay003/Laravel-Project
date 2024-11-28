<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdn.tailwindcss.com'></script>
</head>

<body class="h-full">

    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8"
                                src="data:image/jpeg;base64,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"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="size-8 rounded-full"
                                            src="https://laracasts.com/images/lary-ai-face.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Home</a>
                    <a href="/jobs"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Jobs</a>
                    <a href="/contact"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full" src="https://laracasts.com/images/lary-ai-face.svg"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">Fab Jay</div>
                            <div class="text-sm font-medium text-gray-400">adegbuluayomiposi@gmail.com</div>
                        </div>
                        <button type="button"
                            class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

                <x-button href='/jobs/create'>Create Job</x-button>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>


<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->



<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
