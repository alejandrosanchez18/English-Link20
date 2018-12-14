<template>
    <div class="container">
          <form class="form-inline row" v-on:submit.prevent="newCourse()">
                <div class="col-2 form-group">
                 <label for="name" class="">Nombre</label>
                 <input type="text"  class="form-control" id="name" name="name" value="" v-model="name">
               </div>
                <div class="col-2 form-group">
                 <label for="desctiption" class="">Description</label>
                 <input type="text" class="form-control" id="description" name="description" v-model="description">
               </div>
                <div class="col-2 form-group">
                 <label for="price" class="">Precio</label>
                 <input type="number" class="form-control" id="price" name="price" v-model="price">
               </div>
              <div class="col">
              <button type="submit" class="form-control btn btn-primary">Agregar Curso</button>
              </div>
            </form>
    </div>
</template>

<script>
    export default {
       data() {
             return {
                   name: '',
                   description: '',
                   price: '',
             }
      },
        mounted() {
            console.log('Component mounted. 2')
      },
       methods: {
             newCourse() {
                   const params = {
                        id: this.course.id,
                        name: this.course.name,
                        price : this.course.price,
                        description : this.course.description,

                  }
                   axios.post('/courses', params).then((response) => {
                        const course = response.data;
                        this.$emit('new', course);

                        Swal('Usuario agregado!','You clicked the button!','success');
                  }).catch(function (error) {
                        Swal('Error al agregar usuario!','You clicked the button!','error');
  });
             },
       }
    }
</script>
