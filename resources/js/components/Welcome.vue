<template>
    <div class="container-fluid">
        <div class="row">
            <!--<div class=" flex-xl-nowrap">-->
            <ul class="nav nav-pills flex-column col-md-2 jumbotron" id="left-side">
                <!--<div v-for="(type, id) in types">-->
                <li class="nav-item" v-for="type in types">
                    <a class="nav-link active" href="">
                        {{ type.name }}
                    </a>
                </li>
                <!--</div>-->
                <div class="tile like">
                    <i class="fas fa-thumbs-up"></i>
                </div>
            </ul>
            <!--</div>-->

            <div class="col-md-9 " id="right-side">
                <div v-for="type in types">
                    <button type="button"
                            class="btn btn-lg btn-secondary btn-block  tid">
                        {{ type.name }}
                    </button>
                    <div class="row">
                        <div v-for="site in siteArray">
                                <div class="col-4 col-md-3">
                                    <div class="card border-success">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ site.name }}</h5>
                                            <p class="card-text">{{ site.intro }} </p>
                                            <a href="siteUrl(site)"
                                               class="btn btn-sm btn-outline-primary">
                                                Go
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['types', 'sites'],
        data: function () {
            return {
                siteArray: '',
            }
        },

        mounted() {
            siteFilter(this.types,this.sites){
                let siteArray = [];
                types.forEach(function(type){
                    sites.forEach(function(site){
                        if (type.id === site.type_id){
                            siteArray.push(site);
                        }
                    })
                });
                return siteArray;
                // return this.sites && this.sites.filter()
            };
        },
        computed: {
        },

        methods: {
            siteUrl(site){
                // console.log(site.url);
            },
        },
    }
</script>
