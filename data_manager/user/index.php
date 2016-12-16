
 <?php include_once("header.php") ?> 

 <?php
  include("db.php");
 ?>


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
								<i class="ace-icon glyphicon glyphicon-user"></i>
								<a href="newsubscriber.php">New Subscriber</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
					    
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Subscribers 
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							<div class="content table-responsive table-full-width">
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
									 <tr>				
									    <th>*</th>
									    <th>Name</th>
									    <th>Email</th>
									    <th>MobileNo</th>
									    <th>Status</th>
									    <th>Bundle Balance</th>
									    <th>Action</th>
									    <th>View</th>
									    <th>Synch</th>
									 </tr>
									</thead>
									<tbody>

									<?php 
                                         
                                    $result = pg_query($dbcon, "select * from Subscriber");    
                                    if($result) {
                                    	$count = 1;
                                    	while($myrow = pg_fetch_assoc($result)) {                                
										      //var_dump($myrow);
									          ?>									

										    <?php
                                                if(htmlspecialchars($myrow['registerflag']) === "1"){
                                                   	   ?>
                                                   	  <tr style='color:red;'>
                                                   	   <?php
                                                   }else{
                                                   	 ?>
                                                   	   <tr>                                                 	   
                                                   	     <?php
                                                   }

										        ?>	
										   <td class="center">	<?php echo $count; ?> </td>
										   <td> 
										     <?php echo htmlspecialchars($myrow['firstname']); ?> 
										     <?php echo htmlspecialchars($myrow['middlename']); ?> 
										     <?php echo htmlspecialchars($myrow['lastname']); ?> 

										   </td>
										   <td> <?php echo htmlspecialchars($myrow['email']); ?> </td>
										   <td> <?php echo htmlspecialchars($myrow['mobilenumber']); ?> </td> 
										   <td> 

										       <?php
                                                if(htmlspecialchars($myrow['registerflag']) === "0"){
                                                   	   ?>
                                                   	   <span class="label label-sm label-success">
                                                   	   <?php
                                                   }else{
                                                   	 ?>
                                                   	 <span class="label label-sm label-inverse arrowed-in">                                                 	   
                                                   	     <?php
                                                   }

										        ?>										      
										        <?php echo htmlspecialchars($myrow['registerflag']); ?> 
										      </span>
										   </td>
										   <td> 56000.50 MB </td>

										   <td> 
										      <?php
										        if(htmlspecialchars($myrow['registerflag']) === "0"){
                                                   	   ?>
                                                   	   <button class="btn btn-minier btn-danger">
														<i class="ace-icon glyphicon glyphicon-remove"></i>
														Deactivate 
													  </button>
                                                   	   <?php
                                                   }else{
                                                   	 ?>
                                                   	 <button class="btn btn-minier btn-success">
														<i class="ace-icon glyphicon glyphicon-ok"></i>
														Activate
													  </button>                                                 	   
                                                   	     <?php
                                                   }								       

										       ?>
										      
										   </td>

										   <td> 
											  <button class="btn btn-minier btn-info">
												<a href="details.php"><i class="ace-icon glyphicon glyphicon-eye-open"></i></a>	
											  </button>
										   </td>
										   <td> 
										      <button class="btn btn-minier btn-info">
												<i class="ace-icon glyphicon glyphicon-refresh"></i>
											  </button>
										   </td>
										</tr>
										<?php 
										      $count++;
                                               }
                                             }    
                                           pg_close($dbcon);                                       
										 ?>

                                         
									</tbody>
								</table>
							</div>	
						<!-- PAGE CONTENT ENDS -->



							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


		
 <?php include_once("footer.php") ?> 
	






