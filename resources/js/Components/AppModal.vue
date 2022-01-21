<template>
    <a-modal width="70%" :top="80" :align-center="false" :hide-cancel="true" :closable="false" :footer="false" v-model:visible="visible" @ok="handleOk" @cancel="visible = false">
        <div class="flex flex-row items-center">
            {{ app.name }}
        </div>
        <div class="mt-2">
            <a-tabs default-active-key="2">
                <a-tab-pane key="1" title="基本信息">
                    Content of Tab Panel 1
                </a-tab-pane>
                <a-tab-pane key="2" title="API请求记录">
                    Content of Tab Panel 2
                </a-tab-pane>
                <a-tab-pane key="3" title="AccessToken记录">
                    Content of Tab Panel 3
                </a-tab-pane>
                <a-tab-pane key="4" title="安装请求">
                    Content of Tab Panel 3
                </a-tab-pane>
            </a-tabs>
        </div>
    </a-modal>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
    props: {
        show: false,
        app: {}
    },
    data () {
        return {
            visible: this.show
        }
    },
    watch:{
        show (val) {
            this.visible = val
        },
        visible (val) {
            if(!val) {
                this.$emit('close')
            }
        }
    },
    methods: {
        handleOk () {}
    }
})
</script>

<style scoped>

</style>
