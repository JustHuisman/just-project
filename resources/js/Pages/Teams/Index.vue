<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from '@/Jetstream/Pagination.vue';

defineProps({
    team: Object,
    users: Array,
});
</script>

<template>
    <AppLayout title="Team Members">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Team Members
            </h2>
        </template>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="w-full whitespace-nowrap">
                <tr class="text-left font-bold">
                    <th class="pb-4 pt-6 px-6">Name</th>
                    <th class="pb-4 pt-6 px-6">Email</th>
                </tr>

                <tr v-for="user in users.data" :key="user.id">
                    <td class="border-t">
                        {{ user.name }}
                    </td>
                    <td class="border-t">
                        {{ user.email }}
                    </td>
                </tr> 
            </table>

            <pagination class="mt-6" :links="users.links" />

        </div>
    </AppLayout>
</template>
