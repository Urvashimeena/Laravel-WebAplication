<?php
        $name = Session::get('admin_name');
              
 ?> 

<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin pannel</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                <li><p id="ww">Welcome {{$name}}</p></li>
			    <li class="dropdown">
                                @foreach($image as $result)
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="upload/admin/{{$result->profile}}"><span class="badge"></span></a>
	        		@endforeach
                                <ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
                                                
                                                <li class="m_2">
                                                    <form action="updateprofile" method="post" enctype="multipart/form-data">    
                                                        <input type="file" name="image" class="filestyle" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-icon="None" data-buttonText="Change Profile">
                                                   <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                                    <input type="submit" value="ok" id="but">
                                                        </form>
                                                   </li>
						
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						
						<li class="m_2"><a href="/subadmin"><i class="fa fa-wrench"></i>Add SubAdmin</a></li>
						<li class="m_2"><a href="/subadminlist"><i class="fa fa-wrench"></i>SubAdmin List</a></li>
						<li class="m_2"><a href="logout"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
			
			
                        <li>
                            <a href="index.html"><span class="glyphicon glyphicon-user"></span>&nbsp;Client details</a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="Clientinfo">Client List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Shopkeeper details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                           
                              
								 <li>
                                    <a href="/ShopkeeperList">Shopkeeper list</a>
                                </li>
                              
				<li>
                                    <a href="/category">Add Category</a>
                                </li>
                               
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="compose.html">Compose email</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                      
                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>