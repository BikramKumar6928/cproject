<div id="loginModel" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="login-container">
				<div id="loginbox"  class="mainbox col-md-6 col-sm-6">
					<div class="panel panel-info" >
						<div class="panel-heading">
							<div class="panel-title">Sign In</div>
							<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
						</div>

						<div style="padding-top:30px" class="panel-body" >
							<form id="loginform" method="POST" class="form-horizontal" role="form">

								<!-- Add Error showing part here -->

								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" required>
								</div>

								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="">
								</div>



								<div class="input-group">
									<div class="checkbox">
										<label>
											<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
										</label>
									</div>
								</div>
								<div style="margin-top:10px" class="form-group">
									<!-- Button -->
									<div class="col-sm-12 controls" style="margin:5px;">
										<input id="btn-login" type="submit" value="LOGIN" name="login" class="btn btn-success">
										<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
										<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Google</a>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12 control">
										<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
											Don't have an account!
											<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
												Sign Up Here
											</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div id="signupbox" style="display:none;" class="mainbox col-md-6 col-sm-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							<div class="panel-title">Sign Up</div>
							<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
						</div>
						<div class="panel-body" >
							<form id="signupform" action="test.php" method="POST" class="form-horizontal" role="form">
								<div id="signupalert" style="display:none" class="alert alert-danger">
									<p>Error:</p>
									<span></span>
								</div>
								<div class="form-group">
									<label for="email" class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
										<input  class="form-control" type="email" name="email" placeholder="Email Address" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="firstname" class="col-md-3 control-label"  >First Name</label>
									<div class="col-md-9">
										<div id="fname-alert"></div>
										<input type="text" id="fname" class="form-control" pattern="[a-zA-Z]+" name="firstname" placeholder="First Name" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="lastname" class="col-md-3 control-label">
										Last Name</label>
										<div class="col-md-9">
											<div id="lname-alert"></div>
											<input type="text" id="lname" class="form-control" pattern="[a-zA-Z]+" name="lastname" placeholder="Last Name" required="">
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="col-md-3 control-label">Password</label>
										<div class="col-md-9">
											<input type="password" id="password" class="form-control" name="password" placeholder="Password" required="">
										</div>
									</div>
									<div class="form-group">
										<!-- Button -->
										<div class="col-md-offset-3 col-md-9">
											<input id="btn-signup" type="submit" name="signup" class="btn btn-info" value="Sign Up"><i class="icon-hand-right"></i> &nbsp;
											<span style="margin-left:8px;">or</span>
										</div>
									</div>
									<div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
										<div class="col-md-offset-3 col-md-9">
											<button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
