<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="forest">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script is:inline>
        // ☝️ This script prevent the FART effect.
        if (localStorage.getItem("theme") === null) {
            document.documentElement.setAttribute("data-theme", "forest");
        } else
            document.documentElement.setAttribute(
                "data-theme",
                localStorage.getItem("theme")
            );
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @powerGridStyles
</head>

<body class="h-full" x-data>

<div class="bg-base-100 drawer drawer-mobile ">
    <input id="my-drawer" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content">
        @include('layouts.topnav')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

               {{$slot}}
            </div>
        </div>
    </div>
    <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
        <label for="my-drawer" class="drawer-overlay"></label>
        <aside class="bg-base-100 w-80">
            <div class="z-20 bg-base-100 bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2 ">
                <a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2">
                    <div
                        class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl">
                        <span class="uppercase">{{str(config('app.name'))->substr(0,3)}}</span> <span
                            class="text-base-content lowercase">{{str(config('app.name'))->substr(3)}}</span>
                    </div>
                </a>

                <a href="/docs/changelog" class="link link-hover font-mono text-xs text-opacity-50">
                    <div data-tip="Changelog" class="tooltip tooltip-bottom">1.0.0</div>
                </a>
            </div>
            <div class="mx-1 lg:hidden ">
                <div class="form-control">
                    <input type="text" id="search" placeholder="Search" class="input search-box input-bordered"/>
                </div>
            </div>
            @include('layouts.sidenav')
        </aside>

    </div>
</div>

@livewireScripts
@powerGridScripts
</body>

</html>
