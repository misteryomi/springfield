<template>
  <div class="text-center w-100">
      <h3>Select a Course Group</h3>

        <span v-if="loading">Loading course groups</span>
            <div v-if="course_groups && course_groups.length > 0" >
                <b-card v-for="item in course_groups" :key="item.id" class="mb-2">
                    <b-text>
                        <p>{{ item.name }}</p>
                    </b-text>
                    <b-button :href="'course_group/'+item.id" variant="primary">Select course_group</b-button>
                </b-card>
            </div>


  </div>
</template>

<script>

export default {
    data: function() {
        return {
            course_groups: [],
            loading: true
        }
    },
    mounted: function() {
        this.getCourseGroups();
    },
    methods: {
         getCourseGroups() {
            axios.get('/course-groups').then((response) => {
                this.loading = false;
                this.course_groups = response.data.data;
                console.log(this.course_groups, this.loading)
            });

        }
    },

}
</script>

<style>

</style>