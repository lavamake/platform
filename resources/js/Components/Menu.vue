<template>
    <a-menu
        :style="{ width: '200px', height: '100%' }"
        :default-open-keys="['2']"
        :default-selected-keys="['2']"
        show-collapse-button
    >
        <a-menu-item key="0_0_0" data-obj="1">
          <template #icon><icon-dashboard /></template>
          控制面板
        </a-menu-item>
        <a-sub-menu key="0">
            <template #icon><icon-user /></template>
            <template #title>用户管理</template>
            <a-menu-item key="0_0">未订阅用户</a-menu-item>
            <a-menu-item key="0_1">基础订阅</a-menu-item>
            <a-menu-item key="0_2">白银订阅</a-menu-item>
            <a-menu-item key="0_3">黄金订阅</a-menu-item>
        </a-sub-menu>
        <a-sub-menu key="1">
            <template #icon><icon-file /></template>
            <template #title>内容管理</template>
            <a-menu-item key="1_0">文章列表</a-menu-item>
            <a-menu-item key="1_1">菜单列表</a-menu-item>
            <a-menu-item key="1_2">Menu 3</a-menu-item>
        </a-sub-menu>
      <a-menu-item key="2" data-obj="1">
        <template #icon><icon-bulb /></template>
        站点服务
      </a-menu-item>
    </a-menu>
</template>

<script>
export default {
    name: "Menu"
}
</script>

<style scoped>

</style>
