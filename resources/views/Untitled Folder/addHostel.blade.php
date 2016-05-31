@extends('admin')
@section('addHostel')
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
                      <input type="text" name="hostelName" id="hostelName" class="form-control" value="" required="required" placeholder="Enter Hostel Name" />
                    </div>                                        
                  </div>
                  <div class="space-small"></div>
                  <button type="button" class="center-1 btn btn-primary  btn-flat margin" onclick="addHostelName()">Submit</button>                                
                </div>

                <div class="modal fade" id="success">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      
                      <div class="modal-body">
                        <h4>Hostel Name successfully added!</h4>                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>             
                      </div>
                    </div>
                  </div>
                </div>
                </section>                       
              </div>   
              @stop