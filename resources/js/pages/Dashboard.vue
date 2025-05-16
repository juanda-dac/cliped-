<script setup lang="ts">
import { Link, usePage, useForm, router } from '@inertiajs/vue3';
import { computed } from 'vue';
import { City, Role, UserType } from '@/models';

interface FormProps{
    cities: City[];
    roles: Role[];
    userTypes: UserType[];
}

const page = usePage();
const formProps = computed<FormProps>(() => page.props.form as FormProps);
console.log(formProps.value.userTypes)

/**
 * User {
    id: number;
    name: string;
    lastName: string;
    userName: string;
    passwordTxt?: string;
    password?: string;
    email: string;
    phone: string;
    address: string;
    createdAt: string;
    updatedAt: string;
    avatarUrl?: string;
    birthdate?: string;
    docType: string;
    docNumber: string;
    sex: string;
    sexOrientation: string;
    rh: string;
    dataValue: object;
    state: number;
    city: City;
    role: Role;
    userType?: UserType;
}
 */

const form = useForm({
    name: '',
    lastName: '',
    username: '',
    password: '',
    email: '',
    phone: '',
    address: '',
    birthdate: '',
    docType: '',
    docNumber: '',
    sex: '',
    sexOrientation: '',
    rh: '',
    city: '',
    role: '',
    userType: ''
});

const submit = () => {
    form.post(route('addUser'), {
        onSuccess: () => {
            form.reset();
            router.visit(route('dashboard'));
        },
        onError: (errors) => {
            console.log(errors);
        },
    });
}

</script>

<template>

    <h1 class="font-bold text-3xl">Dashboard</h1>
    <p class="mt-4">
        <Link href="/" class="text-blue-500 hover:underline">Go to Welcome</Link>
    </p>

    <div>
        <h4>Register new User</h4>
        <form @submit.prevent="submit">
            <div class="flex gap-2">
                <label for="name">Name</label>
                <input type="text" id="name" v-model="form.name" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" v-model="form.lastName" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="username">Username</label>
                <input type="text" id="username" v-model="form.username" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="password">Password</label>
                <input type="password" id="password" v-model="form.password" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="email">Email</label>
                <input type="email" id="email" v-model="form.email" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="phone">Phone</label>
                <input type="text" id="phone" v-model="form.phone" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="address">Address</label>
                <input type="text" id="address" v-model="form.address" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="birthdate">Birthdate</label>
                <input type="date" id="birthdate" v-model="form.birthdate" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="docType">Document Type</label>
                <input type="text" id="docType" v-model="form.docType" class="border border-gray-300 rounded p-2">
            </div>
            <div class="flex gap-2">
                <label for="docNumber">Document Number</label>
                <input type="text" id="docNumber" v-model="form.docNumber" class="border border-gray-300 rounded p-2">
            </div>
            <div class="grid grid-cols-3 gap-2">
                <div class="flex gap-1">
                    <label for="sex-select">Gender</label>
                    <select v-model="form.sex" id="sex-select" class="border border-gray-300 rounded p-2">
                        <option value="" disabled>Select your sex</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
                <div class="flex gap-1">
                    <label for="sexOrientation">Sex orientation</label>
                    <input type="text" name="sexOrientation" id="sexOrientation" v-model="form.sexOrientation" class="border border-gray-300 rounded p-2">
                </div>
            </div>

            <div class="grid grid-cols-3 gap-2">
                <div class="flex gap-2">
                    <label for="city">City</label>
                    <select name="city" id="city" v-model="form.city" class="border border-gray-300 rounded p-2">
                        <option value="">Choose a city</option>
                        <option v-for="city in formProps.cities" v-bind:value="city.id">{{ city.name }}</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <label for="role">Role</label>
                    <select name="role" id="role" v-model="form.role" class="border border-gray-300 rounded p-2">
                        <option value="">Choose a role</option>
                        <option v-for="role in formProps.roles" v-bind:value="role.id">{{ role.name }}</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <label for="userType">User Type</label>
                    <select name="userType" id="userType" v-model="form.userType" class="border border-gray-300 rounded p-2">
                        <option value="">Choose a user type</option>
                        <option v-for="userType in formProps.userTypes" v-bind:value="userType.id">{{ userType.name }}</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <label for="rh">RH</label>
                    <select name="rh" id="rh" v-model="form.rh" class="border border-gray-300 rounded p-2">
                        <option value="">Choose a RH</option>
                        <option value="o+">O+</option>
                        <option value="o-">O-</option>
                    </select>
                </div>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>


   
</template>