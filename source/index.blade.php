@extends('_layouts.main')

@section('body')
<div class="relative">
    <div class="absolute inset-x-0 bottom-0 bg-gray-100 h-1/2"></div>
    {{-- <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
            <div class="absolute inset-0">
                <img class="object-cover w-full h-full"
                    src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2830&amp;q=80&amp;sat=-100"
                    alt="People working on laptops">
                <div class="absolute inset-0 bg-gray-700 mix-blend-multiply"></div>
            </div>
            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-center sm:text-5xl lg:text-6xl">
                    <span class="block text-white">We build</span>
                    <span class="block text-gray-200">products that scale by default</span>
                </h1>
                <p class="max-w-lg mx-auto mt-6 text-xl text-center text-gray-200 sm:max-w-3xl">
                    We're the right partner for your next project
                </p>
            </div>
        </div>
    </div> --}}
</div>

<div class="bg-gray-100">
    <div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <p class="text-sm font-semibold tracking-wide text-center text-gray-500 uppercase">
            {{ _('Trusted by companies around the globe') }}
        </p>
        <div class="grid grid-cols-2 gap-8 mt-6 md:grid-cols-6 lg:grid-cols-5">
            <div class="flex justify-center col-span-1 md:col-span-2 lg:col-span-1">
                <img class="h-12 grayscale" src="https://res.cloudinary.com/wartnerio/image/upload/v1646148976/website/customers/callingly_vegxwd.svg"
                    alt="Callingly">
            </div>
            <div class="flex justify-center col-span-1 md:col-span-2 lg:col-span-1">
                <img class="h-12 grayscale" src="https://res.cloudinary.com/wartnerio/image/upload/v1646148976/website/customers/aboutyou_exi4nq.png"
                    alt="ABOUT YOU">
            </div>
            <div class="flex justify-center col-span-1 md:col-span-2 lg:col-span-1">
                <img class="h-12 grayscale" src="https://res.cloudinary.com/wartnerio/image/upload/v1646148976/website/customers/domainup_jqm9lg.png" alt="DomainUp">
            </div>
            <div class="flex justify-center col-span-1 md:col-span-2 md:col-start-2 lg:col-span-1">
                <img class="h-12 grayscale" src="https://res.cloudinary.com/wartnerio/image/upload/v1646148976/website/customers/pm_a4c69r.svg"
                    alt="PARROT MEDIA">
            </div>
            <div class="flex justify-center col-span-2 md:col-span-2 md:col-start-4 lg:col-span-1">
                <img class="h-9 grayscale"
                    src="https://res.cloudinary.com/wartnerio/image/upload/v1646148976/website/customers/valantic_v6yufz.svg" alt="valantic">
            </div>
        </div>
    </div>
</div>

@endsection
