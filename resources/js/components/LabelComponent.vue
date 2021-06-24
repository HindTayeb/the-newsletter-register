<template>
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" :for="labelfor">
        {{ labelname }}
    </label>
</template>

<script>
    export default {
        props: ['label', 'label-for'],

        data() {
            return {
                labelname: this.label,
                labelfor: this.label-for
            }
        }
    }
</script>