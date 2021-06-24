<template>
<div class="alert-toast m-8 w-5/6 max-w-sm">
            <input type="checkbox" class="hidden" id="footertoast">
            <label :class="color" class="close cursor-pointer flex items-start justify-between w-full p-2 bg-red-500 h-15 rounded shadow-lg text-white" title="close" for="footertoast">
                <div class="msg-container">
                <slot></slot>
                </div>
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </label>
        </div>
</template>

<script>
    export default {
        
    }
</script>
<style>
.msg-container {
    display: inline-block
}
</style>