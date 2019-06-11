<template>
     <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Ingrese los datos del cliente</div>

                    <div class="card-body">
                        <div formdata="cliente"></div>    
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
      props:['cliente']
      export default {

        
        mounted() {
            console.log('Cliente Formulario Component mounted.')
        }
    }
</script>
