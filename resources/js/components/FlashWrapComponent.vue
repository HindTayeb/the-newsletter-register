<template>
<div class="alert-toast m-8 w-5/6 max-w-sm">
            <input type="checkbox" class="hidden" id="footertoast">
            <label :class="vColor" class="close cursor-pointer flex items-start justify-between w-full p-2 bg-red-500 h-15 rounded shadow-lg text-white" title="close" for="footertoast">
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
        props: ['color'],

        data() {
            return {
                vColor: this.color
            }
        }
    }
</script>
<style>
.msg-container {
    display: inline-block
}
.alert-toast {
		-webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
				animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	}
	.alert-toast input:checked ~ * {
        display: none;
	}

    @-webkit-keyframes slide-in-right {
        0% {
            -webkit-transform:translateX(1000px); 
            transform:translateX(1000px);
            opacity:0
        }
        100%{ 
            -webkit-transform:translateX(0);
            transform:translateX(0);
            opacity:1}
            }@keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@-webkit-keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}@keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}

</style>