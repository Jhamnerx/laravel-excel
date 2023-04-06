<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script> --}}




</body>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('laravelBladeSortable', () => ({
            name: '',
            sortOrder: [],
            animation: 150,
            ghostClass: '',
            dragHandle: null,
            group: null,
            allowSort: true,
            allowDrop: true,

            wireComponent: null,
            wireOnSortOrderChange: null,
            init() {
                console.log(this);
                this.sortOrder = this.computeSortOrderFromChildren()
                window.Sortable.create(this.$refs.root, {
                    handle: this.dragHandle,
                    animation: this.animation,
                    ghostClass: this.ghostClass,
                    group: {
                        name: this.group,
                        put: this.allowDrop,
                    },
                    sort: this.allowSort,
                    onSort: evt => {
                        const previousSortOrder = [...this.sortOrder]
                        this.sortOrder = this.computeSortOrderFromChildren()

                        if (!this.wireComponent) {
                            return
                        }

                        const from = evt?.from?.dataset?.name
                        const to = evt?.to?.dataset?.name

                    },
                });
            },

            computeSortOrderFromChildren() {
                return [].slice.call(this.$refs.root.children)
                    .map(child => child.dataset.sortKey)
                    .filter(sortKey => sortKey)
            }
        }))
    })
</script>

</html>
