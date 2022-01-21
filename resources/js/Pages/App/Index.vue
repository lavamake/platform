<template>
  <app-layout title="APP manager">
      <Head title="APP管理" />
    <div class="">
      <a-button type="primary" @click="visible = true">Create App</a-button>
    </div>
    <div class="mt-4">
      <div class="grid grid-cols-4 gap-4">
          <div v-for="(app, app_index) in apps.data" :key="app_index">
              <Link :href="route('platform.app.show',  app.id)">
                  <app-card :app="app" />
              </Link>
          </div>
      </div>
        <div class="mt-4">
            <a-card>
                <a-pagination :current="apps.current_page" :page-size="apps.per_page" :total="apps.total" show-total/>
            </a-card>
        </div>
    </div>

  </app-layout>
</template>

<script>
import {defineComponent} from "vue";
import AppLayout from "../../Layouts/AppLayout";
import AppCard from "../../Components/AppCard";
import { Head, Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
  props: {
      apps: {
          type: Object,
          default: () => {
              return {}
          }
      }
  },

    mounted() {
      console.log(this.apps);
    },
  components: {
    AppLayout,
    AppCard,
      Link,
      Head
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
