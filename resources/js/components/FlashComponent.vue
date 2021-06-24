<template>
<p> {{ body }} </p>
</template>

<script>
    export default {
        props: ['message'],

        data() {
            return {
                body: this.message
            }
        }
    }
</script>