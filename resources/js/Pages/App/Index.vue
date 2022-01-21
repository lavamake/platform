<template>
  <app-layout title="APP manager">
    <div class="">
      <a-button type="primary" @click="visible = true">Create App</a-button>
    </div>
    <div class="mt-4">
      <div class="grid grid-cols-4 gap-4">
        <app-card :app="{
          name: 'Just test',
          user: {
            name: 'wangxian'
          },
          created_at: '2021-09-11 22:00:12',
          app_key: 'Jusorpw24Js'
        }" />
        <div class="bg-white p-4 rounded">1</div>
        <div class="bg-white p-4 rounded">1</div>
        <div class="bg-white p-4 rounded">1</div>
      </div>
    </div>

  </app-layout>
</template>

<script>
import {defineComponent} from "vue";
import AppLayout from "../../Layouts/AppLayout";
import AppCard from "../../Components/AppCard";

export default defineComponent({
  props: [
    'apps',
    'app'
  ],

  components: {
    AppLayout,
    AppCard
  },

  data () {
    return {
      columns: [
        {
          title: 'name',
          dataIndex: 'name',
        }
      ],
      visible: false,
      form: {
        name: ''
      }
    }
  },

  methods: {
    handleOk () {}
  }
})
</script>
