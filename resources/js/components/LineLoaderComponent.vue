<template>
    <div class="position-absolute" style="right:0;left:0;top:0;bottom:calc(100%-2px);">
        <div class="line-loader">
            <div class="loader" :style="'width:'+width+'%;opacity:'+opacity+';'"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        'loading': {
            type: Boolean
        }
    },
    watch: {
        loading: {
            handler(n,o){
                if(n == true) {
                    this.start()
                } else {
                    this.end()
                }
            },
            deep: true,
        }
    },
    methods: {
        start () {
            for(let i = 0;i < 100;i++) {
                if(this.width<100) {
                    this.width++
                }
            }
            return null
        },
        end () {
            this.opacity = 0
            setTimeout(() => {
                this.width = 0
            },400)
            setTimeout(() => {
                this.opacity = 1
            }, 800)
            return null
        },
    },
    data () {
        return {
            width: 0,
            opacity: 1,
        }
    },

}
</script>

<style>
    .line-loader {
        width: 100%;
        height: 2px;
        background:rgba(172, 172, 172, 0);
    }
    .line-loader .loader {
        background:rgb(20, 212, 138);
        height:2px;
        transition:all ease 0.3s;
    }
</style>
