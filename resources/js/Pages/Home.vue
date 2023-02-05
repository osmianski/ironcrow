<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import GuestLayout from "@/Components/GuestLayout.vue";
</script>

<template>
    <GuestLayout>
        <Head title="Home page will be here" />
        <main class="mx-auto max-w-7xl p-6">
            <h1 class="text-2xl text-center">
                An awesome home page will be here!
            </h1>
            <p class="text-center">
                However, it's not there yet. I'm just getting started!
            </p>
            <p class="text-center">
                <img class="inline w-1/2" src="/images/start-business.svg">
            </p>
            <p class="text-center">
                <a href="https://iconscout.com/illustrations/start-business" target="_blank">Start business Illustration</a> by <a href="https://iconscout.com/contributors/pixel-true-designs">Pixel True</a> on <a href="https://iconscout.com">IconScout</a>
            </p>
        </main>
    </GuestLayout>
</template>
