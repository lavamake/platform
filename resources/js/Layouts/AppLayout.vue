<template>
    <div class="bg-gray-100">
        <a-layout>
            <a-layout-header>
                <Head />
            </a-layout-header>
            <a-layout>
                <a-layout-sider>
                    <Menu />
                </a-layout-sider>
                <a-layout-content>
                    <div class="p-6">
                        <main>
                            <slot></slot>
                        </main>
                    </div>
                </a-layout-content>
            </a-layout>
        </a-layout>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import Menu from '@/Components/Menu.vue'
    import Head from '@/Components/Head.vue'

    export default defineComponent({
        props: {
            title: String,
        },

        components: {
            Head,
            JetApplicationMark,
            JetBanner,
            Menu
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
