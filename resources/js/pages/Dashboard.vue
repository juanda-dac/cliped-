<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

interface Role{
    id: number;
    name: string;
}

const page = usePage();
const roles = computed<Role[]>(() => page.props.roles as Role[]);

</script>

<template>

    <h1 class="font-bold text-3xl">Dashboard</h1>
    <p class="mt-4">
        <Link href="/" class="text-blue-500 hover:underline">Go to Welcome</Link>
    </p>

    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th class="border border-black">ID</th>
                <th class="border border-black">Rol</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="role in roles" :key="role.id">
                <td class="border border-black">{{ role.id }}</td>
                <td class="border border-black">{{ role.name }}</td>
            </tr>
        </tbody>
    </table>
</template>