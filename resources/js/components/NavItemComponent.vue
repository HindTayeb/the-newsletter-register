<template>
<li><a class="hover:text-gray-500 hover:underline px-4" :href="itemlink">
<slot></slot>
</a></li>
</template>
<script>
export default {
        props: ['link'],

        data() {
            return {
                itemlink: this.link
            }
        }
    }
</script>