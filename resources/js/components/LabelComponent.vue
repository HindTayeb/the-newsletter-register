<template>
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :for="labelfor">
        <slot></slot>
    </label>
</template>

<script>
    export default {
        props: ['for'],

        data() {
            return {
                labelfor: this.for
            }
        }
    }
</script>