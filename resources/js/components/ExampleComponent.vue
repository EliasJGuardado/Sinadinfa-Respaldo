<template>
  <div class="vue-tempalte">
    <form>
      <h3>Iniciar sesión en Sinadinfa</h3>

      <div class="form-group">
        <label>Nombre de usuario</label>
        <input type="email" class="form-control form-control-lg" />
      </div>

      <div class="form-group">
        <label>Constraseña</label>
        <input type="password" class="form-control form-control-lg" />
      </div>

      <button type="submit" class="btn btn-dark btn-lg btn-block">
        Iniciar sesión
      </button>

      <p class="forgot-password text-right mt-2 mb-4">
        <router-link to="/forgot-password">¿Olvidate tu cuenta?</router-link>
      </p>

      <button type="submit" class="btn btn-dark btn-lg btn-block">
        Crear cuenta nueva
      </button>

      <!--  <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>-->
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
