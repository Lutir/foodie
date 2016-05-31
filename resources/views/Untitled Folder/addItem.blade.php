@extends('admin')
@section('addItem')
<div class="content-wrapper " id="addItem">               
                <section class="content-header " >
                  <h1>
                    View Menu
                    <small>Edit items in menu here.</small>
                  </h1>                                 
                </section>                
                <section class="content">
                <div class="space-large"></div>
                <div class="container center">
                  <div class="row">                  
                    <div class="col-md-8 col-md-offset-1 ">
                      <select name="vendorName" id="vendorName" class="form-control" required="required">
                        <option value="ccd">Cafe Coffee Day</option>
                        <option value="d1">Dhaba 1</option>
                        <option value="d2">Dhaba 2</option>
                        <option value="d3">Dhaba 3</option>
                        <option value="neelkesh">Neelkesh</option>
                      </select>
                    </div>                    
                  </div>
                  <div class="space-small"></div>
                  <button type="button" class="viewMenu center-1 btn btn-primary  btn-flat margin">View Menu</button>                                
                </div>
                </section>                
              </div>              
              @stop