<template>
  <div class="employees text-center">
    <div class="employees__item" v-for="employee in employees">
      <img :src="employee.photo" alt="" class="img-fluid employees__img">
      <h4 class="employees__name">{{ employee.name }}</h4>
      <span class="d-block employees__charge">{{ employee.charge }}</span>
    </div>
  </div>
</template>

<script>
  export default {
    name: "Employee",
    mounted() {
      this.fetchEmployees();
    },
    data() {
      return {
        photo: '',
        name: '',
        charge: '',
        employees: []
      }
    },
    methods: {
      fetchEmployees() {
        axios.get('/../js/employees.json')
          .then(res => {
            this.employees = res.data
          })
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>