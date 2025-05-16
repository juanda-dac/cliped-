<script setup lang="ts">


const gradientBg = ['#3884f5', '#0ab5d6']

</script>

<template>
    <div class="w-full h-full bg-gradient-to-r p-8" :class="[`from-[${gradientBg[0]}] to-[${gradientBg[1]}]`]" id="auth-form-container">
        <section class="w-full h-full border border-white rounded-xl grid grid-rows-12" id="auth-form-layout">
            <div class="logo row-span-2 p-10">
                <a href="#" class="flex justify-center items-center">
                    <img src="/edusys_logo.png" alt="" class="w-[80%] h-1/2">
                </a>
            </div>
            <div class="row-span-9">
                Test
            </div>
            <div class="footer row-span-1">
                <div class="logos">
                    <div>
                        <img src="/cliped_logo.png" alt="">
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
    </div>
</template>