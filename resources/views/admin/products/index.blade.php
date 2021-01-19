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
        
            <!-- Info boxes -->

            <!-- /.row -->
         
          
       
           <!-- <a href="{{ URL::to('admin/products/add') }}" type="button" style="float:right" class="btn btn-primary ">{{ trans('labels.AddNew') }}</a><br/> -->
     
           
          <!-- <br/>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header ">

                            <div class="col-lg-12"> <h5 class="my-3" style="font-weight: bold; ">{{ trans('labels.FilterByCategory/Products') }}:</h5>
                               
                                <br>
                           <div class="col-lg-9 form-inline">

                                <form  name='registration' id="registration" class="registration" method="get">
                               
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                               
                                    <div class="input-group-form search-panel "> 
                                        <select id="FilterBy" type="button" class="btn btn-default dropdown-toggle form-control input-group-form " data-toggle="dropdown" name="categories_id">

                                            <option value="" selected disabled hidden>{{trans('labels.ChooseCategory')}}</option>
                                            @foreach ($results['subCategories'] as  $key=>$subCategories)
                                                <option value="{{ $subCategories->id }}"
                                                        @if(isset($_REQUEST['categories_id']) and !empty($_REQUEST['categories_id']))
                                                          @if( $subCategories->id == $_REQUEST['categories_id'])
                                                            selected
                                                          @endif
                                                        @endif
                                                >{{ $subCategories->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="fsearch-bar">
                                        <div class="search">
                                          <input type="text" class="searchTerm" placeholder="search the products"  name="product" id="parameter"  @if(isset($product)) value="{{$product}}" @endif>
                                        <button type="submit" class="btn btn-primary" id="submit" type="submit">
                                   <i class="fa fa-search "></i>
                                  </button>
                                     </div>
                                     </div>
                                      
                                        @if(isset($product,$categories_id))  <a class="btn btn-danger " href="{{url('admin/products/display')}}"><i class="fa fa-ban" aria-hidden="true"></i> </a>@endif
                                    </div>
                                </form>
                                <div class="col-lg-4 form-inline" id="contact-form12"></div>
                            </div>
                           
                            </div>
                        </div> -->
                        <!-- /.box-header -->
                        <!-- <div class="box-body">

                            <div class="row">
                                <div class="col-xs-12">
                                    @if (count($errors) > 0)
                                        @if($errors->any())
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                {{$errors->first()}}
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>@sortablelink('products_id', trans('labels.ID') )</th>
                                            <th>{{ trans('labels.Image') }}</th>
                                            <th>@sortablelink('categories_name', trans('labels.Category') )</th>
                                            <th>@sortablelink('products_name', trans('labels.Name') )</th>
                                            <th>{{ trans('labels.Additional info') }}</th>
                                            <th>@sortablelink('created_at', trans('labels.ModifiedDate') )</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($results['products'])>0)
                                            @php  $resultsProduct = $results['products']->unique('products_id')->keyBy('products_id');  @endphp
                                            @foreach ($resultsProduct as  $key=>$product)
                                                <tr>
                                                    <td>{{ $product->products_id }}</td>
                                                    <td><img src="{{asset($product->path)}}" alt="" height="50px"></td>
                                                    <td>
                                                        {{ $product->categories_name }}
                                                    </td>
                                                    <td>
                                                        {{ $product->products_name }} @if(!empty($product->products_model)) ( {{ $product->products_model }} ) @endif
                                                    </td>
                                                    <td>
                                                        {{ $product->first_name }} {{ $product->last_name }}
                                                    </td>
                                                    <td>
                                                        <strong>{{ trans('labels.Product Type') }}:</strong>
                                                        @if($product->products_type==0)
                                                            {{ trans('labels.Simple') }}
                                                        @elseif($product->products_type==1)
                                                            {{ trans('labels.Variable') }}
                                                        @elseif($product->products_type==2)
                                                            {{ trans('labels.External') }}
                                                        @endif
                                                        <br>
                                                        @if(!empty($product->manufacturers_name))
                                                            <strong>{{ trans('labels.Manufacturer') }}:</strong> {{ $product->manufacturers_name }}<br>
                                                        @endif
                                                        <strong>{{ trans('labels.Price') }}: </strong>   
                                                        @if(!empty($result['commonContent']['currency']->symbol_left)) {{$result['commonContent']['currency']->symbol_left}} @endif {{ $product->products_price }} @if(!empty($result['commonContent']['currency']->symbol_right)) {{$result['commonContent']['currency']->symbol_right}} @endif
                                                        <br>
                                                        <strong>{{ trans('labels.Weight') }}: </strong>  {{ $product->products_weight }}{{ $product->products_weight_unit }}<br>
                                                        <strong>{{ trans('labels.Viewed') }}: </strong>  {{ $product->products_viewed }}<br>
                                                        @if(!empty($product->specials_id))
                                                            <strong class="badge bg-light-blue">{{ trans('labels.Special Product') }}</strong><br>
                                                            <strong>{{ trans('labels.SpecialPrice') }}: </strong>  {{ $product->specials_products_price }}<br>

                                                            @if(($product->specials_id) !== null)
                                                                @php  $mytime = Carbon\Carbon::now()  @endphp
                                                                <strong>{{ trans('labels.ExpiryDate') }}: </strong>

                                                                {{-- @if($product->expires_date > $mytime->toDateTimeString()) --}}
                                                                    {{  date('d-m-Y', $product->expires_date) }}
                                                                {{-- @else
                                                                    <strong class="badge bg-red">{{ trans('labels.Expired') }}</strong>
                                                                @endif --}}
                                                                <br>
                                                            @endif
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $product->productupdate }}
                                                    </td>

                                                    <td>
                                                      <a class="btn btn-primary" style="width: 100%; margin-bottom: 5px;" href="{{url('admin/products/edit')}}/{{ $product->products_id }}">{{ trans('labels.EditProduct') }}</a>
                                                      </br>
                                                      @if($product->products_type==1)
                                                          <a class="btn btn-info" style="width: 100%;  margin-bottom: 5px;" href="{{url('admin/products/attach/attribute/display')}}/{{ $product->products_id }}">{{ trans('labels.ProductAttributes') }}</a>

                                                          </br>
                                                      @endif
                                                      <a class="btn btn-warning" style="width: 100%;  margin-bottom: 5px;" href="{{url('admin/products/images/display/'. $product->products_id) }}">{{ trans('labels.ProductImages') }}</a>
                                                      </br>
                                                      <a class="btn btn-danger" style="width: 100%;  margin-bottom: 5px;" id="deleteProductId" products_id="{{ $product->products_id }}">{{ trans('labels.DeleteProduct') }}</a>
                                                      </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">{{ trans('labels.NoRecordFound') }}</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>

                                </div>


                            </div>
                                <div class="col-xs-12" style="background: #eee;">


                                  @php
                                    if($results['products']->total()>0){
                                      $fromrecord = ($results['products']->currentpage()-1)*$results['products']->perpage()+1;
                                    }else{
                                      $fromrecord = 0;
                                    }
                                    if($results['products']->total() < $results['products']->currentpage()*$results['products']->perpage()){
                                      $torecord = $results['products']->total();
                                    }else{
                                      $torecord = $results['products']->currentpage()*$results['products']->perpage();
                                    }

                                  @endphp
                                  <div class="col-xs-12 col-md-6" style="padding:30px 15px; border-radius:5px;">
                                    <div>Showing {{$fromrecord}} to {{$torecord}}
                                        of  {{$results['products']->total()}} entries
                                    </div>
                                  </div>
                                <div class="col-xs-12 col-md-6 text-right">
                                    {{$results['products']->links()}}
                                </div>
                              </div>
                        </div> -->
                        <!-- /.box-body -->
                    <!-- </div> -->
                    <!-- /.box -->
                <!-- </div> -->
                <!-- /.col -->
            <!-- </div> -->

            <!-- deleteProductModal -->
            <!-- <div class="modal fade" id="deleteproductmodal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="deleteProductModalLabel">{{ trans('labels.DeleteProduct') }}</h4>
                        </div>
                        {!! Form::open(array('url' =>'admin/products/delete', 'name'=>'deleteProduct', 'id'=>'deleteProduct', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
                        {!! Form::hidden('action',  'delete', array('class'=>'form-control')) !!}
                        {!! Form::hidden('products_id',  '', array('class'=>'form-control', 'id'=>'products_id')) !!}
                        <div class="modal-body">
                            <p>{{ trans('labels.DeleteThisProductDiloge') }}?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
                            <button type="submit" class="btn btn-primary" id="deleteProduct">{{ trans('labels.DeleteProduct') }}</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div> -->
            <!-- /.row -->

            <!-- Main row -->

            <!-- /.row -->
                                
      
        <!-- /.content -->


        
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
                                <div class="row ">
                                <br/>
                                <span>  <i class="fa fa-search my____search"></i></span>
                                <input type="search" placeholder="search the products" class="select_option1 " >
                                 
                                               
                        
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
                                        <a href="#" class="btn btn-primary btn___disable disabled" tabindex="-1" aria-disabled="true" role="button" data-bs-toggle="button"><i class="fa fa-star" aria-hidden="true"></i> Saved</a>
                                        <select class="select_option_1" >
                                  <option value="0"><i class="fa fa-arrow-down" aria-hidden="true"></i> sort</option>
                             
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
