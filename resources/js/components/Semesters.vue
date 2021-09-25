<template>
  <div class="text-center w-100">
      <h3>Select a Semester</h3>

        <span v-if="loading">Loading semesters</span>
            <div v-if="semesters && semesters.length > 0" >
                <b-card v-for="item in semesters" :key="item.id" class="mb-2">
                    <b-text>
                        <p>{{ item.name }}</p>
                    </b-text>
                    <b-button :href="'semester/'+item.id" variant="primary">Select Semester</b-button>
                </b-card>
            </div>


  </div>
</template>

<script>

export default {
    data: function() {
        return {
            semesters: [],
            loading: true
        }
    },
    mounted: function() {
        this.getSemesters();
    },
    methods: {
         getSemesters() {
            axios.get('/semesters').then((response) => {
                this.loading = false;
                this.semesters = response.data.data;
                console.log(this.semesters, this.loading)
            });

        }
    },

}
</script>

<style>

</style>