<script setup>

import {elementId} from '@/helpers';

defineProps({
    label: {
        type: String,
        required: true,
    },
    name: String,
    type: {
        type: String,
        default: 'text',
    },
    autocomplete: {
        type: String,
        default: 'off',
    },
    required: Boolean,
    modelValue: String,
    error: String,
});

defineEmits(['update:modelValue']);

let id = elementId();

</script>

<template>
    <div>
        <label :for="id" class="block text-sm font-medium text-gray-700">{{ label }}</label>
        <div class="mt-1">
            <input :id="id" :name="name" :type="type" :autocomplete="autocomplete" :required="required || null"
                :value="modelValue" @input="$emit('update:modelValue', $event.target.value)"
                class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" />
        </div>
        <p v-if="error" class="text-sm text-red-500">{{ error }}</p>
    </div>
</template>
