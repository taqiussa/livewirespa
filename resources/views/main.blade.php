<div>
    @include('layouts.navigation')
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-xl text-gray-600 leading-tight">
                {{ $pageheader }}
            </h2>
        </div>
    </header>
    @switch($pageroute)
        @case('dashboard')
            @include('pages.dashboard')
        @break
        @case('profile')
            @include('pages.user')
        @break
        @case('form_jual')
            @include('pages.form_jual')
        @break
        @case('detail')
            @include('pages.detail')
        @break
        @default
            @include('pages.dashboard')
    @endswitch
</div>
