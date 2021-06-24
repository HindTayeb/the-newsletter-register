<template>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                :id="iid" :type="itype" :name="iname" :placeholder="iplacehoder"> 
</template>


<script>
    export default {
        props: ['id', 'type','name', 'placeholder'],

        data() {
            return {
                iid: this.id,
                itype: this.type,
                iname: this.name,
                iplacehoder: this.placeholder
            }
        }
    }
</script>