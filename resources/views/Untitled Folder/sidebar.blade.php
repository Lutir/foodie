@extends('admin')
@section('sidebar')
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
                      </ul>
                    </li>

                    <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Statistics</span></a></li>
                    <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Change Tax</span></a></li>
                  </ul>
                  
                </section>
                @stop