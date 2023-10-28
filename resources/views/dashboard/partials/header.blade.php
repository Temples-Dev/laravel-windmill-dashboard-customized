<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
    <div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
        <!-- Mobile hamburger -->
        @include("dashboard.partials.hamburger")

        <!-- Search input -->
        @include("dashboard.partials.search-input")

        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            @include("dashboard.partials.theme-toggler")

            <!-- Notifications menu -->
          @include("dashboard.partials.notification")
            <!-- Profile menu -->
            @include("dashboard.partials.profile")
        </ul>
    </div>
</header>
