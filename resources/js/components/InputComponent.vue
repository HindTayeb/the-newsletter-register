<template>
<div>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                :id="vId" :type="vType" :name="vName" :placeholder="vPlacehoder"> 
                <p v-if="msg.phone" class="text-red-500 text-xs italic">{{msg.phone}}</p>
    </div>
</template>


<script>

    export default {
        props: ['id', 'type','name', 'placeholder'],

        data() {
            return {
                vId: this.id,
                vType: this.type,
                vName: this.name,
                vPlacehoder: this.placeholder,
                msg: []
            }
        }, watch: {
            vType(value){
                if(value == "tel"){
                    this.validateNumber(value);
                }
            }
        },

        methods :{
            validateNumber(value){
                if(/^(05)(0|1|3|4|5|6|7|8|9)([0-9]{7})$/i.test(value)){
                    this.msg['phone'] = '';
                }
                else {
                    this.msg['phone'] = 'Please fill number in this format 05********.';
                }
            }
        }
    }
</script>