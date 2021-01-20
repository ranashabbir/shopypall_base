@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> {{ trans('labels.Products') }} <small>{{ trans('labels.ListingAllProducts') }}...</small> </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
                <li class="active"> {{ trans('labels.Products') }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        
           

    
        
                              <div class="">
                                    <h3 class="products___title">Products</h3>
                                     <a href="{{ URL::to('admin/products/add') }}">
                                     <button class="btn btn-primary" style="float: right;font-weight:bold;">{{ trans('labels.AddNew') }}</button>
                                     </a>
                                     <button type="button" class="btn__imp"  style="float: right">Export</button>
                                     <button type="button" class="btn__imp"  style="float: right">Import</button>
                                    
                                  
                                 </div>
                                <br/> 
                               

                                <div class="container first-content">
                                <br/>
                                <div class="first__content_row">
                              
                             
                            <div class="searc_______option">
                            <div class="form-group">
                <div class="icon-addon addon-md">
                    <input type="text" placeholder="Filter products" class="form-control" id="email">
                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                </div>
            </div> 
        </div>
                        
                                            <div class="btn-group grop___btn_first" role="group">
                                            <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle  btn____togle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Product vendor
                                            <span class="caret" style="margin-left:5px;"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a href="#">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                               Monroeoffical
                                            </label>
                                            </div>
                                            </a></li>
                                            <li><a href="#">Clear</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle  btn____togle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Tangged with
                                            <span class="caret"  style="margin-left:5px;"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a href="#">
                                            <input type="text" class="input___text__"/>
                                            </a></li>
                                            <li><a href="#">Clear</a></li>
                                            </ul>
                                        </div>

                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle  btn____togle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            More filters
                                           
                                            </button>
                                           
                                        </div>
                                        
                                            
                                            
                                        
                                        </div>
                                        <a href="#" class="btn btn-primary btn___disable disabled"  tabindex="-1" aria-disabled="true" role="button" data-bs-toggle="button"><i class="fa fa-star" aria-hidden="true"></i> Saved</a>
                                        <select class="sort____bn" >
                                  <option value="0" class="option___cs"><i class="fa fa-arrow-down" aria-hidden="true"></i> sort</option>
                             
                                <option value="1">A to Z</option>
                                <option value="1">1 to 10</option>
                                <option value="1">A to Z</option>
                                <option value="1">1 to 10</option>
                                </option>
  
                                  </select>
                                
                                 </div>
                                         
                                 <table class="table table-hover h5_heading">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th >
                                            <span class="disply__non">main_img-img</span> 

                                            Products</th>
                                            <th>Catagory</th>
                                            <th>Name</th>
                                            <th>info</th>
                                            <th>modified date</th>
                                         
                                        </tr>
                                     
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            
                                            </label>
                                            </div>
                                         </td>
                                            <td>  <div class="row">
                                                   <div class="col-lg-3 col-md-3 col-6">
                                                   <img src="https://image.shutterstock.com/image-vector/picture-icon-vector-260nw-415924633.jpg" alt="" class="table___img">
                                                   </div>
                                                   <div class="col-lg-4 col-md-4 col-6 second___div">
                                                   <h6 style="font-weight: bold;">short sive tshirts</h6> 
                                                   </div>
                                               </div> </td>
                                            <td>abc</td>
                                            <td>de</td>
                                            <td>info</td>
                                            <td>12/1/2021</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            
                                            </label>
                                            </div>
                                            </td>
                                            <td>   <div class="row">
                                                   <div class="col-lg-3 col-md-3 col-6">
                                                   <img src="https://image.shutterstock.com/image-vector/picture-icon-vector-260nw-415924633.jpg" alt="" class="table___img">
                                                   </div>
                                                   <div class="col-lg-4 col-md-4 col-6 second___div">
                                                   <h6 style="font-weight: bold;">short sive tshirt</h6> 
                                                   </div>
                                               </div> </td>
                                            <td>abc</td>
                                            <td>de</td>
                                            <td>info</td>
                                            <td>12/1/2021</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            
                                            </label>
                                            </div>
                                            </td>
                                            <td>
                                               <div class="row">
                                                   <div class="col-lg-3 col-md-3 col-6">
                                                   <img src="https://image.shutterstock.com/image-vector/picture-icon-vector-260nw-415924633.jpg" alt="" class="table___img">
                                                   </div>
                                                   <div class="col-lg-4 col-md-4 col-6 second___div">
                                                   <h6 style="font-weight: bold;">short sive tshirt</h6> 
                                                   </div>
                                               </div>
                                              
                                                
                                             
                                            </td>
                                            <td>abc</td>
                                            <td>de</td>
                                            <td>info</td>
                                            <td>12/1/2021</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    
                                    <div class="w-100 last__result">
                                       <p>Showing 1 to 1 of 1 entries</p>
                                    </div><br/>
                                    
                              
                              </div>              
                               
                              

        <!-- <=============================old=============> -->
                                </div>
                                                            <!-- <==========Atta==========> -->

                                                  
    </section>
                            
@endsection
