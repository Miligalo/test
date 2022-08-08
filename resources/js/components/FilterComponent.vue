<template>
    <div>
        <SearchComponent></SearchComponent>
    </div>
</template>

<script>
import SearchComponent from "./SearchComponent";
export default {
    name: "FilterComponent",
    data(){
      return {
            houses: null
    }
    },

    components: {
        SearchComponent
    }
}
</script>

<style scoped>

</style>
