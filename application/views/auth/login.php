<?php $this->load->view('auth/templates/header') ?>

<main class="d-flex align-items-center justify-content-center" 
      style="min-height: 100vh; background: linear-gradient(135deg, #001f4d, #003366);">
   <div class="col-12" style="max-width: 400px;">
      <div class="card shadow-lg border-0" style="border-radius: 20px;">
         <div class="card-body p-4">

            <!-- Logo -->
            <div class="text-center mb-3">
               <img src="<?= base_url('img/identitas/UMP.png') ?>" 
                    alt="Logo SD" 
                    style="max-width:90px; height:auto;">
            </div>

            <h4 class="text-center mb-4" style="color:#001f4d; font-weight:600;">Login Admin</h4>

            <?= form_open("auth/login", ["class" => "form-signin"]) ?>
               <!-- Email -->
               <div class="form-group mb-3">
                  <label for="inputEmail" class="font-weight-bold">Email</label>
                  <input type="text" 
                         name="identity" 
                         class="form-control form-control-lg" 
                         id="inputEmail" 
                         placeholder="Masukkan email" 
                         required autofocus>  
               </div>

               <!-- Password -->
               <div class="form-group mb-3">
                  <label for="inputPassword" class="font-weight-bold">Password</label>
                  <div class="input-group">
                     <input type="password" 
                            name="password" 
                            id="inputPassword" 
                            class="form-control form-control-lg" 
                            placeholder="Masukkan password" 
                            required>
                     <div class="input-group-append">
                        <span class="input-group-text bg-white border-left-0" 
                              style="cursor: pointer;" 
                              onclick="togglePassword('inputPassword', this)">
                           <i class="fa fa-eye"></i>
                        </span>
                     </div>
                  </div>
               </div>

               <!-- Submit -->
               <button class="btn btn-lg btn-block text-uppercase" 
                       type="submit" 
                       style="background:#001f4d; color:#fff; border-radius:10px; font-weight:600;">
                       Sign In
               </button>
            <?= form_close() ?>
         </div>
      </div>
   </div>
</main>

<!-- JS Toggle Password -->
<script>
function togglePassword(fieldId, el) {
   const input = document.getElementById(fieldId);
   const icon = el.querySelector("i");

   if (input.type === "password") {
      input.type = "text";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
   } else {
      input.type = "password";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
   }
}
</script>

<?php $this->load->view('auth/templates/footer') ?>
