<script setup>

import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Bars3Icon, UserIcon } from "@heroicons/vue/24/outline/index.js";

</script>

<template>
    <header class="flex h-10 border-b border-gray-300 mx-auto max-w-7xl">
        <Menu>
            <MenuButton>
                <span class="sr-only">Open menu</span>
                <Bars3Icon class="w-10 h-10 p-2" aria-hidden="true" />
            </MenuButton>
            <MenuItems>
            </MenuItems>
        </Menu>
        <div class="flex-grow"></div>
        <button>
            <span class="sr-only">Sign in</span>
            <UserIcon class="w-10 h-10 p-2" aria-hidden="true" />
        </button>
    </header>
    <slot />
</template>
