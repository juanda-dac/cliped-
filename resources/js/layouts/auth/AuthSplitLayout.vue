<script setup lang="ts">



</script>

<template>
    <div class="w-full h-screen grid grid-cols-12">
        <div class="col-span-4" id="container-form">
            <slot />
        </div>
        <div class="col-span-8 h-full overflow-y-hidden" id="container-image">
            <img src="/auth_bg.png" alt="Img Background" class="w-full object-cover">
        </div>
    </div>
    
</template>
