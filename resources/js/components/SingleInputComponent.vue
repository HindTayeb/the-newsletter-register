<template>
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        {{ labelname }}
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
        id="{{ inputid }}" type="{{ inputtype }}" name="{{ inputname }}" placeholder="{{ inputplaceholder }}">
        <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
</div><!-- /flex -->
</template>

<script>
   export default {
        props: ['label','id', 'type', 'name', 'placeholder'],

        data() {
            return {
                labelname: this.label,
                inputid: this.id,
                inputtype: this.type,
                inputname: this.name,
                inputplaceholder: this.placeholder
            }
        }
    }
</script>
