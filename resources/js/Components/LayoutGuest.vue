<script setup>

import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Bars3Icon, UserIcon } from "@heroicons/vue/24/outline/index.js";
import { Link } from '@inertiajs/inertia-vue3';
import logo62px from '../../images/logo-62px.png';
import logo124px from '../../images/logo-124px.png';

</script>

<template>
    <header class="bg-white border-b border-gray-300 h-14 mb-2.5">
        <div class="flex mx-auto max-w-7xl">
            <Link :href="$page.props.homeUrl" class="relative top-2.5 pl-4">
                <img :src="logo62px" :srcset="`${logo124px} 2x`" />
            </Link>
            <Menu>
                <MenuButton class="flex h-14">
                    <span class="sr-only">Open menu</span>
                    <Bars3Icon class="w-14 h-14 p-4 hover:bg-gray-100" aria-hidden="true" />
                </MenuButton>
                <MenuItems>
                </MenuItems>
            </Menu>
            <div class="flex-grow"></div>
            <Link :href="$page.props.loginUrl" title="Sign in" class="flex h-14">
                <span class="sr-only">Sign in</span>
                <UserIcon class="w-14 h-14 p-4 hover:bg-gray-100" aria-hidden="true" />
            </Link>
        </div>
    </header>
    <slot />
</template>
