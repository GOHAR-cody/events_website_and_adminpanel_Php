<?php  
 include $_SERVER['DOCUMENT_ROOT'] . "/flatkit/include/header.php";

 ?> 
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b">
        Forgot your password?
        <p class="text-xs m-t">Enter your email address below and we will send you instructions on how to change your password.</p>
      </div>
      <form name="reset">
        <div class="md-form-group">
          <input type="email" class="md-input" required>
          <label>Your Email</label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Send</button>
      </form>
    </div>
    <p id="alerts-container"></p>
    <div class="p-v-lg text-center">Return to <a ui-sref="access.signin" href="signin.html" class="text-primary _600">Sign in</a></div>    
  </div>

<!-- ############ LAYOUT END-->

  </div>

  <?php  
 include $_SERVER['DOCUMENT_ROOT'] . "/flatkit/include/footer.php";

 ?> 