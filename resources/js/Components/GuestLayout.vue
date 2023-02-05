<script setup>

import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Bars3Icon, UserIcon } from "@heroicons/vue/24/outline/index.js";

</script>

<template>
    <header class="flex border-b border-gray-300 mx-auto max-w-7xl">
        <Menu>
            <MenuButton>
                <span class="sr-only">Open menu</span>
                <Bars3Icon class="w-14 h-14 p-4 hover:bg-gray-100" aria-hidden="true" />
            </MenuButton>
            <MenuItems>
            </MenuItems>
        </Menu>
        <div class="flex-grow"></div>
        <button>
            <span class="sr-only">Sign in</span>
            <UserIcon class="w-14 h-14 p-4 hover:bg-gray-100" aria-hidden="true" />
        </button>
    </header>
    <slot />
</template>
