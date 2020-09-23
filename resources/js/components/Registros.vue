<template>
  <div class="vue-tempalte">
    <form>
      <h3>Registro</h3>

      <div class="form-group">
        <label>Nombre completo</label>
        <input type="text" class="form-control form-control-lg" />
      </div>

      <div class="form-group">
        <label>Correo</label>
        <input type="email" class="form-control form-control-lg" />
      </div>

      <div class="form-group">
        <label>Contraseña nueva</label>
        <input type="password" class="form-control form-control-lg" />
      </div>

      <button type="submit" class="btn btn-dark btn-lg btn-block">
        Registrarse
      </button>

      <p class="forgot-password text-right">
        Ya registrado
        <router-link :to="{ name: 'login' }">¿Registrarse?</router-link>
      </p>
    </form>
  </div>
</template>
<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>