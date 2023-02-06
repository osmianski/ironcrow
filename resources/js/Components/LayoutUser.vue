<script setup>

import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Bars3Icon, UserIcon, UsersIcon } from "@heroicons/vue/24/outline/index.js";
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <header class="bg-white border-b border-gray-300">
        <div class="flex mx-auto max-w-7xl">
            <Menu as="div" class="relative">
                <MenuButton>
                    <span class="sr-only">Open menu</span>
                    <Bars3Icon class="w-14 h-14 p-4 hover:bg-gray-100" aria-hidden="true" />
                </MenuButton>
                <transition
                    enter-active-class="transition duration-100 ease-out"
                    enter-from-class="transform scale-95 opacity-0"
                    enter-to-class="transform scale-100 opacity-100"
                    leave-active-class="transition duration-75 ease-in"
                    leave-from-class="transform scale-100 opacity-100"
                    leave-to-class="transform scale-95 opacity-0"
                >
                    <MenuItems class="absolute left-0 mt-1 w-56 origin-top-left divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="px-1 py-1">
                            <MenuItem v-slot="{ active }">
                                <Link :href="$page.props.userListUrl" :class="[active ? 'bg-blue-500 text-white' : 'text-gray-900', 'group flex w-full items-center rounded-md px-2 py-2 text-sm']">
                                    <UsersIcon :active="active" class="mr-2 h-5 w-5 text-blue-400" aria-hidden="true" />
                                    Users
                                </Link>
                            </MenuItem>
                        </div>
                    </MenuItems>
                </transition>
            </Menu>
            <div class="flex-grow"></div>
            <Link :href="$page.props.logoutUrl" method="post" as="button">
                <span class="sr-only">Log out</span>
                <UserIcon class="w-14 h-14 p-4 hover:bg-gray-100" aria-hidden="true" />
            </Link>
        </div>
    </header>
    <slot />
</template>
