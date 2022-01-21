<template>
  <a-card :title="app.name">
    <template #extra>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 inline-block" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
      </svg>
<!--      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 inline-block" viewBox="0 0 20 20" fill="currentColor">-->
<!--        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />-->
<!--      </svg>-->
    </template>
    <div class="text-sm">
      <div class="flex flex-row justify-between">
        <div class="">App Key</div>
        <div class="">
          <a-typography-text code>
            {{ app.app_key }}
          </a-typography-text>
        </div>
      </div>
    </div>
    <div class="text-sm mt-4">
      <div class="flex flex-row justify-between">
        <div class="">创建者</div>
        <div class=""><icon-at />{{ app.user.name }}</div>
      </div>
    </div>
    <div class="text-sm mt-4">
      <div class="flex flex-row justify-between">
        <div class="">创建时间</div>
        <div class=""><icon-clock-circle />{{ app.created_at }}</div>
      </div>
    </div>
  </a-card>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  props: {
    app: {
      type: Object,
      default: () => {
        return {
          name: '',
          app_key: '',
          created_at: '',
          user: {
            name: ''
          }
        }
      }
    }
  },
})
</script>

<style scoped>

</style>
