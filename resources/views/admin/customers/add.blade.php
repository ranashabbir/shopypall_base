@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> {{ trans('labels.AddCustomer') }} <small>{{ trans('labels.AddNEWCustomer') }}...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
            <li><a href="{{ URL::to('admin/customers/display')}}"><i class="fa fa-users"></i> {{ trans('labels.ListingAllCustomers') }}</a></li>
            <li class="active">{{ trans('labels.AddCustomer') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        <div style="margin-left: 15px;"> 
                        <h3 class="box-title"><i class="fa fa-arrow-left back__arrow" aria-hidden="true"></i><span class="sapan_cls"></span> Customers</h3>
                    </div><br/>
                    <hr class="new122">
     <div class="container">
       <form>
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12 mx-auto">
           <h3>Customer overview</h3>
         </div>
         <div class="col-lg-6 col-md-6 col-12 mx-auto  add____customer_shadow">
          <div class="row">
            <div class="col-md-6 col-12 mx-auto">
            <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">First Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
            </div>
            <div class="col-md-6 col-12 mx-auto">
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" >
      </div>
            </div> 
      
            <div class="mb-3" style="width:94%;margin-left:3%;">
            <br/>
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" >
        </div>
        <br/>
        <div class="mb-3" style="width:94%;margin-left:3%;">
          <label for="exampleFormControlInput1" class="form-label">Phone</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" >
        </div>
        <br/>
        <div class="form-check" style="margin-left:3%;">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    <span style="font-size:13px;margin-botton:8px; ">  Customer agreed to receive marketing emails.</span>


  </label>
</div>
<p style="margin-left:4%;">You should ask your customers for permission before you subscribe <br/>them to your marketing emails.</p>
          </div>
         </div>
       </div>
       <hr class="new122">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12 mx-auto">
           <h3>Address</h3>
           <p>The primary address of this customer</p>
         </div>
         <div class="col-lg-6 col-md-6 col-12 mx-auto  add____customer_shadow">
          <div class="row">
            <div class="col-md-6 col-12 mx-auto">
            <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">First Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
            </div>
            <div class="col-md-6 col-12 mx-auto">
            <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" >
      </div>
            </div> 
      
            <div class="mb-3" style="width:93%;margin-left:3.5%;">
            <br/>
          <label for="exampleFormControlInput1" class="form-label">Company</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <br/>
        <div class="mb-3" style="width:93%;margin-left:3.5%;">
          <label for="exampleFormControlInput1" class="form-label">Address</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <br/>
        <div class="mb-3" style="width:93%;margin-left:3.5%;">
          <label for="exampleFormControlInput1" class="form-label">Apartment, suite, etc.</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <br/>
        <div class="mb-3" style="width:93%;margin-left:3.5%;">
          <label for="exampleFormControlInput1" class="form-label">City</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <br/>
       
               <div class="row">
                 <div class="col-md-6 col-12 mx-auto">
                 <div class="mb-3 my____from">
        <label for="exampleFormControlInput1" class="form-label">Country/Region</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" >
      </div>
                 </div>
                 <div class="col-md-6 col-12 mx-auto">
                 <div class="mb-3 my____from1" >
        <label for="exampleFormControlInput1" class="form-label">Postal code</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" >
      </div>
                 </div>
               </div>
               <br/>
        <div class="mb-3" style="width:93%;margin-left:3.5%;">
          <label for="exampleFormControlInput1" class="form-label">Phone</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" >
        </div>
          </>
         </div>
       </div>
     
     </div>
     </div>
     <hr class="new122">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mx-auto">
          <h4>Notes</h4>
          <p>Add notes about your customer.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mx-auto add____customer_shadow">
        
        <div class="mb-3" style="width:93%;margin-left:3.5%;">
          <label for="exampleFormControlInput1" class="form-label">Note</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div><br/>
        </div>
      </div>
      
      <div class="row">
      <hr class="new122">
        <div class="col-lg-4 col-md-4 col-12 mx-auto">
          <h4>Tags</h4>
          <p>ags can be used to categorize customers<br/> into groups.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mx-auto add____customer_shadow">
        
        <div class="mb-3" style="width:93%;margin-left:3.5%;">
          <label for="exampleFormControlInput1" class="form-label">Tags</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
        <p style="margin-left:4%;margin-top:2%;">Add existing tags:</p>
        <div class="add_blad__button">
          <button>password page</button>
          <button>prospect</button>
        </div>
        </div>
      </div>
      
      <div class="sub______btn__cs">
      <button class="btn btn-primary">Submit</button>
      <button class="back____btn">Back</button>
      </div>
      </form>
    </div>
    <hr class="new122">
    </section>
    <!-- /.content -->
</div>
@endsection
