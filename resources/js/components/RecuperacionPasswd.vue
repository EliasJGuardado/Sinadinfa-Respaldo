<template>
  <div class="vue-tempalte">
    <form>
      <h3>Se te olvidó tu contraseña</h3>

      <div class="form-group">
        <label>Dirección de correo electrónico</label>
        <input type="email" class="form-control form-control-lg" />
      </div>

      <button type="submit" class="btn btn-dark btn-lg btn-block">
        Restablecer la contraseña
      </button>
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