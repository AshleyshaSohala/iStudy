<!-- Custom css -->
<link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/media-queries.css">

    
<!-- Start Student Registration Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="stuRegModalCenter">
      <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label><small id="statusMsg1"></small>
    <input type="name" class="form-control" id="stuname">
  </div>
  <div class="mb-3">
    <label for="sturegemail" class="form-label">Email address</label><small id="statusMsg2"></small>
    <input type="email" class="form-control" id="stuemail" aria-describedby="emailHelp1">
    <div id="emailHelp1" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label><small id="statusMsg3"></small>
    <input type="password" class="form-control" id="stupass">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <span id="successMsg"></span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearAllStuReg()">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
      </div>
    </div>
  </div>
</div> 
<!-- End Student Registration Modal -->


    <!-- Start Student Login Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Student Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="stuloginemail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="stuLogEmail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="stuLogPass">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <span id="statusLogMsg"></span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="checkStuLogin()">Login</button>
      </div>
    </div>
  </div>
</div> 
<!-- End Student Login Modal -->


  <!-- Start Admin Login Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="adminLogEmail" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="adminLogPass">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <small id="statusAdminLogMsg"></small>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="checkAdminLogin()">Login</button>
      </div>
    </div>
  </div>
</div>  
<!-- End Admin Login Modal -->



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/ajaxrequest.js"></script>
    <script src="js/adminajaxrequest.js"></script>
  
  
  </body>
</html>