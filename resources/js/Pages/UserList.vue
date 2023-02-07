<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import LayoutUser from "@/Components/LayoutUser.vue";
import Paginator from "@/Components/Paginator.vue";

defineProps({
    list: Object,
});
</script>

<template>
    <LayoutUser>
        <Head title="Users" />

        <main class="mx-auto max-w-7xl p-4">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Users</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add user</button>
                </div>
            </div>
            <div class="mt-8 flex flex-col">
                <div>
                    <div class="inline-block min-w-full py-2 align-middle">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr v-for="(item, idx) in list.data" :key="item.id" :class="idx % 2 === 0 ? undefined : 'bg-gray-50'">
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ item.name }}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ item.email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <Paginator :list="list" />
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </LayoutUser>
</template>
