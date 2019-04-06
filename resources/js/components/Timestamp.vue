<template>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-title text-center">
                    <span class="fs19">概览</span>
                </div>
                <div class="card-body text-center">
                    <p>当前时间戳</p>
                    <span>{{ ts }}</span>
                    <p>本地时间</p>
                    <span>{{ new Date() | moment() }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-title">
                    <span class="fs19">Timestamp Convert UTC</span>
                    <p class="card-text">转换为 UTC</p>
                </div>
                <div class="card-body">
                    <input type="text" name="timestamp" v-model="ts"/>
                    <button @click="toUTC" class=""> 转为日期</button>
                    <p v-show="show" class="result">{{ utc2 | moment('YYYY-MM-DD,HH:mm:ss Z') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-title">
                    <span class="fs19">UTC Convert Timestamp</span>
                    <p class="card-text">转为时间戳</p>
                </div>
                <div class="card-body">
                    <div class="col-auto">
                        <input type="textarea" class="form-control" v-model="utc"/>
                        <p class="result">{{ utc | moment('X') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                ts: '' ,
                show: false,
                utc: '',
                utc2: '',
            }
        },

        created() {
            this.ts = this.$moment().unix();
            // this.ts = Math.round(date.getTime() / 1000);
            this.utc = this.$moment().format();
        },

        methods: {
            toUTC: function () {
                this.utc2 = this.$moment.unix(this.ts);
                this.show = true;
            },
        },

    };
</script>
