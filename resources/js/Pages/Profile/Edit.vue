<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import DeleteUserForm from './Partials/DeleteUserForm.vue';
    import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
    import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
    import { Head } from '@inertiajs/vue3';
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import { computed } from 'vue';

    const props = defineProps({
        mustVerifyEmail: {
            type: Boolean,
        },
        status: {
            type: String,
        },
        admin_panel: {
            type: Boolean,
        }
    });

    const layoutComponent = computed(() => (props.admin_panel ? AdminLayout : AuthenticatedLayout));
</script>

<template>
    <Head title="Profile" />

    <component :is="layoutComponent">
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Profile
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                <div
                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8"
                >
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        :admin_panel="admin_panel"
                        class="max-w-xl"
                    />
                </div>

                <div
                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8"
                >
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div
                    class="bg-white p-4 shadow sm:rounded-lg sm:p-8"
                >
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </component>
</template>
