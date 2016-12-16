
 <?php include_once("header.php") ?> 


 <div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>


						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs fa-spin"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a>
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">
								Subscribers
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="prepaid.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Pre paid
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								
							<li class="">
								<a href="postpaid.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Post Paid
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>



					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Safaricom </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									 Connect
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Synch
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

				</ul><!-- /.nav-list -->




				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Home</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
					  
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title">New Subscriber</h4>
											</div>

											<div class="widget-body">
											  <div class="widget-main no-padding">
												<form class="form-horizontal" role="form" action="" method="POST">
												  <br/>
							                      <div class="form-group">
							                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
							                        Subscriber Name <span class="required">*</span>
							                        </label>
							                        <div class="col-md-6 col-sm-6 col-xs-12">
							                          <input type="text" required="required" class="form-control col-md-7 col-xs-12" placeholder="Full Name">
							                        </div>
							                      </div>

							                      <div class="form-group">
							                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
							                        Subscriber Email <span class="required">*</span>
							                        </label>
							                        <div class="col-md-6 col-sm-6 col-xs-12">
							                          <input type="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email Address">
							                        </div>
							                      </div>

							                      <div class="form-group">
							                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
							                        Subscriber IMSI <span class="required">*</span>
							                        </label>
							                        <div class="col-md-6 col-sm-6 col-xs-12">
							                          <input type="text" required="required" class="form-control col-md-7 col-xs-12" placeholder="International Mobile Subscriber Identity">
							                        </div>
							                      </div>

							                      <div class="form-group">
							                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
							                        Gender <span class="required">*</span>
							                        </label>
							                        <div class="col-md-6 col-sm-6 col-xs-12">
							                          <select class="chosen-select form-control" required>
																<option value="">  </option>
																<option value="M">Male</option>
																<option value="F">Female</option>
													   </select>
							                        </div>
							                      </div>

							                      <div>
												 

							                      
							                  

							                      <div class="ln_solid"></div>
							                      <div class="form-group">
							                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">					   
							                          <button type="submit" class="btn btn-success">Submit</button>
							                        </div>
							                      </div>
							                    </form>
												</div>
											</div>
										</div>

								
								<!-- PAGE CONTENT ENDS -->


							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


		
 <?php include_once("footer.php") ?> 
	






