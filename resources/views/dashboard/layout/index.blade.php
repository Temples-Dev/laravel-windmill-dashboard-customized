<!DOCTYPE html>
<html class="" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TM Manger Dashboard</title>

    {{-- tailwindcss --}}
    @vite('resources/css/app.css')
    {{-- alpine, chart --}}
    @vite(['resources/js/app.js'])
    {{-- tm resources --}}
    @vite([ 'resources/js/admin-js/focus-trap.js'])

<script src="{{ asset('js/admin-js/charts-bars.js') }}" defer></script>
<script src="{{ asset('js/admin-js/charts-pie.js') }}" defer></script>
<script src="{{ asset('js/admin-js/charts-lines.js') }}" defer></script>

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('dashboard.partials.sidebar-desktop')

        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        </div>

        <!-- Mobile sidebar -->
        @include('dashboard.partials.sidebar-mobile')


        <div class="flex flex-col flex-1 w-full">
            <!--header  -->
            @include('dashboard.partials.header')

            @yield('content')
        </div>
    </div>



    <script>
        function data() {

            return {
                isSideMenuOpen: false,
                toggleSideMenu() {
                    this.isSideMenuOpen = !this.isSideMenuOpen
                },
                closeSideMenu() {
                    this.isSideMenuOpen = false
                },
                isNotificationsMenuOpen: false,
                toggleNotificationsMenu() {
                    this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
                },

                closeNotificationsMenu() {
                    this.isNotificationsMenuOpen = true
                },
                isProfileMenuOpen: false,
                toggleProfileMenu() {
                    this.isProfileMenuOpen = !this.isProfileMenuOpen
                },
                closeProfileMenu() {
                    this.isProfileMenuOpen = true
                },
                isPagesMenuOpen: false,
                togglePagesMenu() {
                    this.isPagesMenuOpen = !this.isPagesMenuOpen
                },
                // Modal
                isModalOpen: false,
                trapCleanup: null,
                openModal() {
                    this.isModalOpen = true
                    this.trapCleanup = focusTrap(document.querySelector('#modal'))
                },
                closeModal() {
                    this.isModalOpen = false
                    this.trapCleanup()
                },
            }
        }
    </script>
</body>

</html>
