<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import LayoutGuest from "@/Components/LayoutGuest.vue";
import startBusiness from '../../images/start-business.svg';

</script>

<template>
    <LayoutGuest>
        <Head title="Home page will be here" />
        <main class="mx-auto max-w-7xl p-4">
            <h1 class="text-2xl text-center">
                An awesome home page will be here!
            </h1>
            <p class="text-center">
                However, it's not there yet. I'm just getting started!
            </p>
            <p class="text-center mt-20 mb-5">
                <img class="inline w-1/2" :src="startBusiness">
            </p>
            <p class="text-center">
                <a href="https://iconscout.com/illustrations/start-business" target="_blank">Start business Illustration</a> by <a href="https://iconscout.com/contributors/pixel-true-designs">Pixel True</a> on <a href="https://iconscout.com">IconScout</a>
            </p>
        </main>
    </LayoutGuest>
</template>
