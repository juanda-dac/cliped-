<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <h1 class="font-bold text-3xl">Welcome</h1>
    <p class="mt-4">
        <Link href="/dashboard" class="text-blue-500 hover:underline">Go to Dashboard</Link>
    </p>
</template>
