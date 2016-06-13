<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
        <title>Home | Admin</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/ionicons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/AdminLTE.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/skin-blue.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('assets/js/hostel.js')}}"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
  <header class="main-header">

    
    <a href="index2.html" class="logo">
      
      <span class="logo-mini"><b>A</b>PT</span>
      
      <span class="logo-lg"><b>Admin</b>Portal</span>
    </a>

    
    <nav class="navbar navbar-static-top" role="navigation">
      
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          

          
          <li class="dropdown notifications-menu">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 notifications</li>
              <li>
                
                <ul class="menu">
                  
                    <a href="#">
                      hello world
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          
                
          
          <li class="dropdown user user-menu">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              
              <span class="hidden-xs">Ritul Jain</span>
            </a>
            <ul class="dropdown-menu">
              
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Ritul Jain
                  <small>Web Developer</small>
                </p>
              </li>
              
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Profile</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Logout</a>
                  </div>
                </div>
                
              </li>
              
              
            </ul>
          </li>
          
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">

    
    <section class="sidebar">

                      
                      <div class="user-panel">
                        <div class="pull-left image">
                          <img src="{{URL::asset('assets/images/pp.jpeg')}}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                          <p>Ritul Jain</p>
                          
                          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                      </div>

                      
                      <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                          <input type="text" name="q" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                              </span>
                        </div>
                      </form>
                      

                      
                      <ul class="sidebar-menu">
                        <li class="header">MENU</li>
                        
                        <li class="treeview"><a href="#" onclick="changeView('dashboard')"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                        
                        <li class="treeview">
                          <a href="#"><i class="fa fa-link"></i> <span>Edit Contents</span> <i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                            <li><a href="#" onclick="changeView('addItem')" ><i class="fa fa-link"></i> <span>Add Item</span></a></li>                  
                            <li><a href="#" onclick="changeView('addHostel')" ><i class="fa fa-link"></i> <span>Add Hostels</span></a></li>
                            <li><a href="#" onclick="changeView('addVendor')"><i class="fa fa-link"></i> <span>Add Place</span></a></li>
                            <li><a href="#" onclick="changeView('addCateg')"><i class="fa fa-link"></i> <span>Add Food Category</span></a></li>
                          </ul>
                        </li>

                        <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Statistics</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Change Tax</span></a></li>
                      </ul>
                      
                    </section>
    
  </aside>

  
<div class="content-wrapper no-view" id="dashboard">                
                <section class="content-header" >
                  <h1>
                    Dashboard
                    <small>Optional description</small>
                  </h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                  </ol>                  
                </section>                
                <section class="content">
                    <p>This will be dashboard</p>
                </section>                
              </div>  

<div class="content-wrapper no-view" id="addItem">               
                <section class="content-header " >
                  <h1>
                    Add Items
                    <small>Edit items in menu here.</small>
                  </h1>                                 
                </section>                
                <section class="content">
                <div class="space-large"></div>
                <div class="container center">
                  <div class="row">
                    <div class="col-md-9 col-md-offset-1">
                      <input type="text" name="dish" id="dish" class="form-control" value="" required="required" placeholder="Enter Dish name">
                    </div>                    
                  </div>
                  <div class="space-small"></div>
                  <div class="row">                  
                    <div class="col-md-3 col-md-offset-1 ">
                      <select name="menuVenue" id="menuVenue" class="form-control" required="required">
                        <option value="">Select Vendor</option>
                        @for($i=0;$i< sizeof($data['vendors']);$i++)
                          <option value="{!! $data['vendors'][$i]->vendorName !!}">{!! $data['vendors'][$i]->vendorName !!}</option>
                        @endfor
                      </select>
                    </div>   
                    <div class="col-md-1">
                      <select name="menuType" id="menuType" class="form-control" required="required">
                        <option value="">Type</option>
                        <option value="veg">Veg</option>
                        <option value="nveg">Non-Veg</option>                        
                      </select>
                    </div>   
                    <div class="col-md-3">
                      <select name="menuCateg" id="menuCateg" class="form-control" required="required">
                        <option value="">Select Category</option>
                        @for($i=0;$i< sizeof($data['categ']);$i++)
                          <option value="{!! $data['categ'][$i]->name !!}">
                          {!! $data['categ'][$i]->name !!}</option>
                        @endfor
                      </select>
                    </div> 
                    <div class="col-md-2">
                      <input type="number" name="cost" id="cost" class="form-control" value="" required="required" placeholder="Enter Cost" min="5" max="1000">
                    </div>                    
                  </div>
                  <div class="space-small"></div>
                  <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                  <button type="button" class="center btn btn-primary  btn-flat margin" onclick="addItem('add')">Add Item</button>                                
                  <button type="button" class="center btn btn-primary  btn-flat margin" onclick="addItem('remove')">Remove Item</button>    
                  </div>                            
                  </div>
                </div>
                </section>                
              </div>      

          <div class="content-wrapper no-view" id="addVendor">               
                <section class="content-header " >
                  <h1>
                    Add Vendor
                    <small>Optional description</small>
                  </h1>                                  
                </section>                
                <section class="content">
                    <section class="content">
                <div class="space-large"></div>
                <div class="container center">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                      <input type="text" name="VendorName" id="vendorName" class="form-control" value="" required="required" placeholder="Enter Vendor Name" required="true" />
                    </div>                                        
                  </div>
                  <div class="space-small"></div>
                  <div class="col md-7 col-md-offset-3 hidden-xs">
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="addName('vendor')">Add Vendor</button>                                
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="removeName('vendor')">Remove Vendor</button>                             
                  <button type="button" class=" btn btn-primary  btn-flat margin" onclick="viewAll('vendor')">View all Vendors</button>                                
                </div>
                <div class="visible-xs">
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="addName('vendor')">Add Vendor</button>                                
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="removeName('vendor')">Remove Vendor</button>                             
                  <button type="button" class=" btn btn-primary  btn-flat margin" onclick="viewAll('vendor')">View all Vendors</button>                                
                </div>                
                </section>                
              </div>   


              <div class="content-wrapper" id="addCateg">               
                <section class="content-header " >
                  <h1>
                    Add Category
                    <small>Optional description</small>
                  </h1>                                  
                </section>                
                <section class="content">
                    <section class="content">
                <div class="space-large"></div>
                <div class="container center">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                      <input type="text" name="categName" id="categName" class="form-control" value="" required="required" placeholder="Enter food category Name" required="true" />
                    </div>                                        
                  </div>
                  <div class="space-small"></div>
                  <div class="col md-6 col-md-offset-2 hidden-xs">
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="addName('categ')">Add Food Category</button>                                
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="removeName('categ')">Remove Food Category</button>        
                  <button type="button" class=" btn btn-primary  btn-flat margin" onclick="viewAll('categ')">View all Food Category</button>                                
                </div>
                <div class="visible-xs">
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="addName('categ')">Add Food Category</button>                                
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="removeName('categ')">Remove Food Category</button>                   
                  <button type="button" class=" btn btn-primary  btn-flat margin" onclick="viewAll('categ')">View all Food Category</button>                                
                </div>                
                </section>                
              </div>   
                                          


  <div class="content-wrapper no-view" id="addHostel">               
                <section class="content-header " >
                  <h1>
                    Add Hostels
                    <small>Optional description</small>
                  </h1>                                  
                </section>                
                <section class="content">
                <div class="space-large"></div>
                <div class="container center">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                      <input type="text" name="hostelName" id="hostelName" class="form-control" value="" required="required" placeholder="Enter Hostel Name" required="true" />
                    </div>                                        
                  </div>
                  <div class="space-small"></div>
                  <div class="col md-7 col-md-offset-3 hidden-xs">
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="addName('hostel')">Add hostel</button>                                
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="removeName('hostel')">Remove hostel</button>                             
                  <button type="button" class=" btn btn-primary  btn-flat margin" onclick="viewAll('hostel')">View all hostels</button>                                
                </div>
                <div class="visible-xs">
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="addName('hostel')">Add hostel</button>                                
                  <button type="button" class="btn btn-primary  btn-flat margin" onclick="removeName('hostel')">Remove hostel</button>                             
                  <button type="button" class=" btn btn-primary  btn-flat margin" onclick="viewAll('hostel')">View all hostels</button>                                
                </div>                
                

                
                </section>                       
              </div>   
  

  <div class="modal fade" id="success">
    <div class="modal-dialog">
      <div class="modal-content status">
        
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>             
        </div>
      </div>
    </div>
  </div>

  <footer class="main-footer">
    
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    
    <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
    
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    
    <div class="tab-content">
      
      <!-- <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        

      </div>
      
      
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      
      
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          
        </form>
      </div>
       -->
    </div>
  </aside>
      
  <div class="control-sidebar-bg"></div>
</div>


              
            <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap.js')}}"></script>            
            <script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>

</body>
</html>
