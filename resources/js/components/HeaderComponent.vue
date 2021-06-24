<template>
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-4xl" href="#">
            {{title}}
        </a>
        <p class="text-lg text-gray-600">
            {{subtitle}}
        </p>
    </div>
</header>
</template>
<script>
export default {
        props: ['title', 'subtitle'],

        data() {
            return {
                title: this.title,
                subtitle: this.subtitle
            }
        }
    }
</script>