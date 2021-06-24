<template>
<li><a class="hover:text-gray-500 hover:underline px-4" :href="link">
<slot></slot>
</a></li>
</template>
<script>
export default {
        props: ['link'],

        data() {
            return {
                link: this.link
            }
        }
    }
</script>