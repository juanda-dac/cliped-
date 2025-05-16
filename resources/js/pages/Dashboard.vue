<script setup lang="ts">
import { Link, usePage, useForm } from '@inertiajs/vue3';
import { computed } from 'vue';

interface Role{
    id: number;
    name: string;
}

interface Action{
    id: number;
    name: string;
    letter: string;
}

interface Proccess{
    id: number;
    idTop: number | null;
    name: string;
    description: string;
    url: string;
    icon?: string;
    order: number;
    hidden: true | false;
}

interface Permission{
    role: Role,
    action: Action,
    proccess: Proccess,
}

const page = usePage();
const formProps = computed(() => page.props.form);

console.log(formProps.value.userTypes);

const form = useForm({
    
});

</script>

<template>

    <h1 class="font-bold text-3xl">Dashboard</h1>
    <p class="mt-4">
        <Link href="/" class="text-blue-500 hover:underline">Go to Welcome</Link>
    </p>



   
</template>