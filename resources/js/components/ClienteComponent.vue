<template>
		<div class="container">
			<button @click="altacliente=true">Ingresar</button>
			  <table class="table" style="font">
				<th>
					<td>ID</td>
					<td>Nombre</td>
				</th>
				<tr v-for="cliente in clientes">
					<td>{{cliente.id}}</td>
					<td>{{cliente.name}}</td>
				</tr>
			  </table>
			<cliente-component v-if="altacliente"></cliente-component>
		</div>
</template>
<script>
	export default {

		data(){
			return{
				altacliente:false,
				clientes:[]
			}
		},

		mounted(){
			this.mostrarCliente();
			console.log('Component mounted.');
		},

		methods:{
			mostrarCliente:function(){
				axios.get('cliente').then(respose =>{
					this.clientes = respose.data
				})
			}
		}	

	}
</script>

