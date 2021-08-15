<template>
    <span class="flex flex-row overflow-x-auto scrolling-touch" style="width: 10rem;">
        <img
            v-for="(url, index) of field.thumbnails"
            :key="index"
            :src="url"
            :alt="name"
            class="rounded h-8 mr-1"
        >
    </span>
</template>
<script>
    export default {
        props: ['resourceName', 'field'],
    }
</script>

<style scoped>
    img:not(:last-child) {
        margin-right: 0.4rem;
    }
</style>
