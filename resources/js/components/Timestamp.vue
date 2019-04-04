<template>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-title text-center">
                    <span class="fs19">概览</span>
                </div>
                <div class="card-body text-center">
                    <p>当前时间戳</p>
                    <span>{{ now }}</span>
                    <p>当前UTC</p>
                    <span>{{ utc }}</span>
                    <p>本地时间</p>
                    <span>{{ localTime }}</span>
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
                    <input type="text" name="timestamp" v-model="now"/>
                    <button @click="toUTC" class=""> 转为日期</button>
                    <p v-show="show" class="result">{{ utc2 }}</p>
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
                    <input type="text" id="ts2human_inp" v-model="utc"/>
                    <button @click="toTs"> 转为时间戳</button>
                    <p v-show="show" class="result">{{ ts2 }}</p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                ts: '',
                ts2: '',
                now: '',
                show: false,
                utc: '',
                utc2: '',
                localTime: '',
            }
        },

        created() {
            let dates = new Date();
            this.ts = dates;
            this.now = Math.round(dates.getTime() / 1000);
            this.utc = dates.toJSON();
            this.localTime = dates.toLocaleDateString() + dates.toLocaleTimeString();
        },

        methods: {
            toUTC: function () {
                let utc2 = new Date(this.now * 1000).toJSON();
                this.utc2 = utc2;
                this.show = true;
            },

            toTs: function () {
                let ts2 = Math.round(new Date(this.utc).getTime() / 1000);
                this.ts2 = ts2;
                this.show = true;
            }
        },

    };
</script>
