<template>
    <a-popover position="right" style="width: 200px;">
        <div class="flex flex-row gap-2 items-center">
            <a-avatar :size="16"><img :src="user.avatar" :alt="user.name"></a-avatar>
            <span>{{ user.name }}</span>
        </div>
        <template #content>
            <div class="text-sm">
                <div class="flex flex-row gap-2 items-center">
                    <a-avatar :size="18"><img :src="user.avatar" :alt="user.name"></a-avatar>
                    <span>{{ user.name }}</span>
                </div>
                <div class="mt-2 text-xs">
                    <div class="flex flex-row items-center justify-between">
                        <div class="pr-4">订阅类型</div>
                        <span>{{ user.subscribe_type.title }}</span>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div class="pr-4">到期时间</div>
                        <span>{{ user.subscribe_expired_at }}</span>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="apps">
                        <div class="flex flex-row items-center justify-between" v-for="(app, app_index) in user.apps" :key="app_index">
                            <div class="">{{ app.name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </a-popover>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: {
        user: {
            type: Object,
            default: {}
        }
    }
})
</script>

<style scoped>

</style>
