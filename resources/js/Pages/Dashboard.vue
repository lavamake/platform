<template>
    <app-layout title="Dashboard">
      <div>
        <a-row :gutter="24">
          <a-col :span="6">
            <a-card :bordered="false">
              <a-statistic title="New Users" :value="125670" show-group-separator >
                <template #suffix>
                  <icon-arrow-rise />
                </template>
              </a-statistic>
            </a-card>
          </a-col>
          <a-col :span="6">
            <a-card :bordered="false">
              <a-statistic title="Single Users" :value="125670" show-group-separator >
                <template #suffix>
                  <icon-arrow-rise />
                </template>
              </a-statistic>
            </a-card>
          </a-col>
          <a-col :span="6">
            <a-card :bordered="false">
              <a-statistic title="Silver Users" :value="125670" show-group-separator >
                <template #suffix>
                  <icon-arrow-rise />
                </template>
              </a-statistic>
            </a-card>
          </a-col>
          <a-col :span="6">
            <a-card :bordered="false">
              <a-statistic title="Gold Users" :value="125670" show-group-separator >
                <template #suffix>
                  <icon-arrow-rise />
                </template>
              </a-statistic>
            </a-card>
          </a-col>
        </a-row>
      </div>
      <div class="mt-4">
        <a-card :bordered="false">
          aa
        </a-card>
      </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
        },
    })
</script>
