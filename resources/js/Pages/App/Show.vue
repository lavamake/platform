<template>
    <app-layout>
        <a-card>
            <div class="flex flex-row items-center">

            </div>
            <div class="mt-2">
                <a-tabs default-active-key="1">
                    <a-tab-pane key="1" title="基本信息">
                        Content of Tab Panel 1
                    </a-tab-pane>
                    <a-tab-pane key="2" title="网站统计">
                        网站统计
                    </a-tab-pane>
                    <a-tab-pane key="3" title="API请求记录">
                        Content of Tab Panel 2
                    </a-tab-pane>
                    <a-tab-pane key="4" title="AccessToken记录">
                        Content of Tab Panel 3
                    </a-tab-pane>
                    <a-tab-pane key="5" title="安装请求">
                        Content of Tab Panel 3
                    </a-tab-pane>
                </a-tabs>
            </div>
        </a-card>
    </app-layout>
</template>

<script>
import {defineComponent} from "vue";
import AppLayout from "../../Layouts/AppLayout";

export default defineComponent({
    name: "Show",
    components: {
        AppLayout
    }
})
</script>

<style scoped>

</style>
