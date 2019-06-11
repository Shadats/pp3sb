<template>
   <table class="table" style="font">
                <th>
                    <td>ID</td>
                    <td>Nombre</td>
                </th>
                <tr v-for="cliente">
                    <td>{{cliente.id}}</td>
                    <td>{{cliente.name}}</td>
                </tr>
              </table>
</template>

<script>
  props:['cliente']
    export default {
        mounted() {
            console.log('Cliente Formulario Component mounted.')
        }
    }
</script>
