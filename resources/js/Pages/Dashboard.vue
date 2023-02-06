<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import LayoutUser from "@/Components/LayoutUser.vue";
</script>

<template>
    <LayoutUser>
        <Head title="Dashboard will be here" />
        <main class="mx-auto max-w-7xl p-4">
            <h1 class="text-2xl text-center">
                Dashboard will be here
            </h1>
            <p class="text-center">
                However, it's not there yet. I'm just getting started!
            </p>
            <p class="text-center mt-20 mb-5">
                <img class="inline w-1/2" src="/images/financial-graph.svg">
            </p>
            <p class="text-center">
                <a href="https://iconscout.com/illustrations/financial-graph" target="_blank">Financial graph Illustration</a> by <a href="https://iconscout.com/contributors/iconscout">IconScout Store</a> on <a href="https://iconscout.com">IconScout</a>
            </p>
        </main>
    </LayoutUser>
</template>
