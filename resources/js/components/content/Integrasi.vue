<template>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" v-on:click="component = 'form-Memulai'" class="list-group-item list-group-item-secondary ">
                                    Memulai <i class="fa fa-chevron-right float-right float-center"></i>
                                </a>
                                <a href="#AturanApi" class="list-group-item list-group-item-action" v-on:click="component = 'form-AturanApi'">Aturan Penggunaan Api<i class="fa fa-chevron-right float-right float-center"></i></a>
                                <a href="#DataApi" class="list-group-item list-group-item-action" v-on:click="component = 'form-DataApi'">Data Api<i class="fa fa-chevron-right float-right float-center"></i></a>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="d list-group-item list-group-item-secondary">Tipe Akun<i class="fa fa-chevron-right float-right float-center"></i></a>
                                <ul class="collapse list-unstyled list-group-item " id="pageSubmenu">
                                    <li>
                                        <a class="list-group-item list-group-item-action" href="#">Ringkasan</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item list-group-item-action" href="#">Page 2</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item list-group-item-action" href="#">Page 3</a>
                                    </li>
                                </ul>
                                <a href="#" class="list-group-item list-group-item-action disabled">Masih Mikir</a>
                            </div>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-8">
        <keep-alive>
        <component v-bind:is="component"></component>
        </keep-alive>
            
        </div>
    </div>

</template>
<script>
import AturanApi from './AturanApi.vue'
import Memulai from './Memulai.vue'
import DataApi from './DataApi.vue'

export default {
    components:{
        'form-AturanApi':AturanApi,
        'form-DataApi':DataApi,
        'form-Memulai':Memulai
    },
    data(){
        return{
            component:'form-Memulai'
        }
    },
    methods: {
        
    },
}
</script>
