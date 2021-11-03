<template>

<div class="content">

<div class="input-group col-md-3">

<div class="input-group-prepend">

<span class="input-group-text" id="basic-addon1">DNI</span>

</div>

<input type="text" class="form-control" v-model="dni" placeholder="DNI" aria-label="Username" aria-describedby="basic-addon1">

<div class="col-md-3">

<button class="btn btn-primary" @click="buscar()">Buscar</button>
</div>
<input placeholder="Apellidos y Nombres" v-model="txtape_nom" type="text">
<input placeholder="Celular" v-model="txtcelular" type="text">
<input placeholder="SEXO" v-model="txtsexo" type="text">



</div>

</div>
</template>

<script>
export default {

data() {
    
return {

txtape_nom:"",
txtcelular:"",
txtsexo:"",
dni:"",

notas: [],

modoEditar: false,

nota: {nombre: '', descripcion: ''}

}

},

created(){

axios.get('/notas').then(res=>{

this.notas = res.data;

})

},

methods:{

buscar(){

const TOKEN ='38c0ec5a8aefaf9e57d9e2b44d1c99b6a6e7f9cfa3ee6e702e86720cf6e3d94c'
const BASEURL = 'https://vemasystem.com/api/';
const ENDPOINT = 'dni';
const dniB = { dni: this.dni };
axios.create({
    baseURL: BASEURL,
    headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer '+TOKEN
    }

})

        .post(ENDPOINT,dniB)
        .then(res => {
           //ira la modificacion de los datos
            this.txtape_nom=res.data.nombre_completo;
            this.txtcelular=res.data.apellido_paterno;
            this.txtsexo=res.data.apellido_materno;
          console.log(res.data);

           });

        //alert("Buscar"+this.dni);

},

cancelarEdicion(){

this.modoEditar = false;

this.nota = {nombre: '', descripcion: ''};

}

}

}

</script>