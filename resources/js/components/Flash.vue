<template>
    <div class="alert alert-flash"
         :class="'alert-'+level"
         role="alert"
         v-show="show"
         v-text="content">
    </div>
</template>

<script>
    export default {
        el: '#app',
        props: ['message'],

        data() {
            return {
                content: this.message,      //此处赋予初始值
                level: 'success',
                show: false
            }
        },

        created() {
            if (this.message) {
                this.flash();       // 更改逻辑为：如果有消息，则展示
            }

            window.events.$on(
                'flash', data => this.flash(data)
            );
        },

        methods: {
            flash(data) {
                // 修改处理方式：如果传入了对象参数，则重写 body，level
                if(data) {
                    this.content = data.message;
                    this.level = data.level;
                }

                this.show = true;

                this.hide();
            },

            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 3000);
            }
        }
    };
</script>

<style>
    .alert-flash {
        position: fixed;
        right: 25px;
        bottom: 25px;
    }
</style>
