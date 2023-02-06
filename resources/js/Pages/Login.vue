<script setup>
import { Head, useForm } from '@inertiajs/inertia-vue3';
import NoLayout from "@/Components/NoLayout.vue";
import FormInput from "@/Components/FormInput.vue";

const props = defineProps({
    loginUrl: String,
});

const form = useForm({
    email: '',
    password: '',
});

const submit = () => {
    form.post(props.loginUrl, {
        onFinish: () => form.reset('password'),
    });
};

</script>

<template>
    <NoLayout>
        <Head title="Sign in" />

        <main class="flex flex-col justify-center py-12 sm:px-6 lg:px-8 sm:w-[40rem]">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6" method="POST" @submit.prevent="submit">
                        <FormInput label="Email address" v-model="form.email" :error="form.errors.email"
                            type="type" autocomplete="email" required />
                        <FormInput label="Password" v-model="form.password" :error="form.errors.password"
                            type="password" autocomplete="current-password" required />

                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </NoLayout>
</template>
