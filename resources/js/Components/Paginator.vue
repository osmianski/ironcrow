<script setup>

import { Link } from '@inertiajs/inertia-vue3';
import { ChevronLeftIcon, ChevronRightIcon } from "@heroicons/vue/20/solid/index.js";

defineProps({
    list: Object,
});

</script>

<template>
    <div v-if="list.links.length > 3" class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
        <div class="flex flex-1 justify-between sm:hidden">
            <div v-if="!list.links[0].url" v-html="list.links[0].label"
                 class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500"></div>
            <Link v-else :href="list.links[0].url" v-html="list.links[0].label"
                  class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50" />

            <div v-if="!list.links[list.links.length - 1].url" v-html="list.links[list.links.length - 1].label"
                 class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500"></div>
            <Link v-else :href="list.links[list.links.length - 1].url" v-html="list.links[list.links.length - 1].label"
                  class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50" />
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    <span class="font-medium">{{ list.from }}</span>
                    to
                    <span class="font-medium">{{ list.to }}</span>
                    of
                    <span class="font-medium">{{ list.total }}</span>
                    results
                </p>
            </div>
            <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                    <div v-for="(link, idx) in list.links">
                        <div v-if="!link.url"
                             class="relative inline-flex items-center border py-2 text-sm font-medium focus:z-20"
                             :class="{
                                 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600': link.active,
                                 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50': !link.active,
                                 'rounded-l-md px-2': idx === 0,
                                 'rounded-r-md px-2': idx === list.links.length - 1,
                                 'px-4': idx !== 0 && idx !== list.links.length - 1
                             }"
                        >
                            <span v-if="idx === 0" class="sr-only">Previous</span>
                            <span v-else-if="idx === list.links.length - 1" class="sr-only">Next</span>
                            <span v-else>{{ link.label }}</span>

                            <ChevronLeftIcon v-if="idx === 0" class="h-5 w-5" aria-hidden="true" />
                            <ChevronRightIcon v-else-if="idx === list.links.length - 1" class="h-5 w-5" aria-hidden="true" />
                        </div>
                        <Link v-else :href="link.url"
                              class="relative inline-flex items-center border py-2 text-sm font-medium focus:z-20"
                              :class="{
                                  'z-10 bg-indigo-50 border-indigo-500 text-indigo-600': link.active,
                                  'bg-white border-gray-300 text-gray-500 hover:bg-gray-50': !link.active,
                                  'rounded-l-md px-2': idx === 0,
                                  'rounded-r-md px-2': idx === list.links.length - 1,
                                  'px-4': idx !== 0 && idx !== list.links.length - 1
                              }"
                        >
                            <span v-if="idx === 0" class="sr-only">Previous</span>
                            <span v-else-if="idx === list.links.length - 1" class="sr-only">Next</span>
                            <span v-else>{{ link.label }}</span>

                            <ChevronLeftIcon v-if="idx === 0" class="h-5 w-5" aria-hidden="true" />
                            <ChevronRightIcon v-else-if="idx === list.links.length - 1" class="h-5 w-5" aria-hidden="true" />
                        </Link>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</template>
