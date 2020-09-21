<!--==========================
    login modal
  ============================-->
    <!-- Modal login Form -->
    <div id="login-modal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Enter Login Credentials</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> 
          <div class="modal-body">
            <form method="POST" action="./includes/login.inc.php" class="login-form">
              <div class="form-group">
                <input type="text" class="form-control" name="uid" placeholder="Your user name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="text-center">
                <button type="submit" name="submit" class="btn">LOGIN</button>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
