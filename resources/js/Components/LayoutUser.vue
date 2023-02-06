<script setup>

import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Bars3Icon, UserIcon } from "@heroicons/vue/24/outline/index.js";
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <header class="bg-white border-b border-gray-300">
        <div class="flex mx-auto max-w-7xl">
            <Menu>
                <MenuButton>
                    <span class="sr-only">Open menu</span>
                    <Bars3Icon class="w-14 h-14 p-4 hover:bg-gray-100" aria-hidden="true" />
                </MenuButton>
                <MenuItems>
                </MenuItems>
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
