<template xmlns="http://www.w3.org/1999/html">
   <div>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="form-group" style="width: 300px">
            <label for>Название</label>
            <input type="text" class="form-control" v-model="name" name="name" placeholder="Название">
        </div>
        <div class="form-group" style="width: 300px">
            <label for>Спален</label>
            <input type="text" class="form-control" v-model="bedrooms" name="bedrooms" placeholder="Спален">
        </div>
        <div class="form-group" style="width: 300px">
            <label for>Ванных комнат</label>
            <input type="text" class="form-control" v-model="bathrooms" name="bathrooms" placeholder="Ванных комнат">
        </div>
        <div class="form-group" style="width: 300px">
            <label for>Этажей</label>
            <input type="text" class="form-control" v-model="storeys" name="storeys" placeholder="Этажей">
        </div>
        <div class="form-group" style="width: 300px">
            <label for>Гаражей</label>
            <input type="text" class="form-control" v-model="garages" name="garages" placeholder="Гаражей">
        </div>
        <div class="form-group" style="width: 300px">
            <label for>Минимальная цена</label>
            <input type="text" class="form-control" v-model="price_min" name="price_min" placeholder="Минимальная цена">
        </div>
        <div class="form-group" style="width: 300px">
            <label for>Максимальная цена</label>
            <input type="text" class="form-control" v-model="price_max" name="price_max" placeholder="Максимальная цена">
        </div>
        <div class="row">
            <div class="col-1 mb-3">
                <input @click.prevent="searchHouse" class="btn btn-block btn-primary"  value="Поиск">
            </div>
        </div>
    </div>
       <div class="card-body table-responsive p-0">
           <table class="table table-hover text-nowrap">
               <thead>
               <tr>
                   <th>ID</th>
                   <th>Название</th>
                   <th>Спален</th>
                   <th>Ванных комнат</th>
                   <th>Этажей</th>
                   <th>Гаражей</th>
                   <th>Цена</th>
               </tr>
               </thead>
               <tbody v-for="array in arrays">
                    <th>{{array.id}}</th>
                    <th>{{array.name}}</th>
                    <td>{{array.bedrooms}}</td>
                    <td>{{array.bathrooms}}</td>
                    <td>{{array.storeys}}</td>
                    <td>{{array.garages}}</td>
                    <td>{{array.price}}</td>
               </tbody>
                <p></p>
           </table>
           <p></p>
       </div>

</div>

</template>

<script>
    export default {
        name: "CreateComponent",

        data() {
            return{
                name: null,
                bedrooms: null,
                bathrooms: null,
                storeys: null,
                garages: null,
                price_min: null,
                price_max: null,
                arrays: null,
            }
        },
        mounted() {
            this.getData()

        },
        methods:{
            searchHouse(){
                axios.post('/api/house', {name: this.name, bedrooms: this.bedrooms, bathrooms: this.bathrooms, storeys: this.storeys, garages: this.garages, price_min: this.price_min,price_max: this.price_max})
                    .then( res => {
                        this.arrays = res.data
                    })
            },

        }
    }
</script>
