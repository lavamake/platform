<template>
    <div class="bg-white flex flex-row justify-between items-center shadow">
        <div style="width: 200px">
            <div class="p-4">
                <ApplicationLogo class="block w-auto"/>
            </div>
        </div>
        <div class="p-4">
            <a-avatar :size="24">
                <img
                    alt="avatar"
                    src="https://p1-arco.byteimg.com/tos-cn-i-uwbnlip3yd/3ee5f13fb09879ecb5185e440cef6eb9.png~tplv-uwbnlip3yd-webp.webp"
                />
            </a-avatar>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import ApplicationLogo from '@/Jetstream/ApplicationLogo.vue'

export default defineComponent({
    name: "Head",

    components: {
        ApplicationLogo
    }
})
</script>

<style scoped>

</style>
