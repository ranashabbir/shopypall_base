@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> {{ trans('labels.Customers') }} <small>{{ trans('labels.ListingAllCustomers') }}...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
            <li class="active">{{ trans('labels.Customers') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->

        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 form-inline" id="contact-form">
                                    <form name='registration' id="registration" class="registration" method="get" action="{{url('admin/customers/filter')}}">
                                        <input type="hidden" value="{{csrf_token()}}">
                                        <div class="input-group-form search-panel ">
                                            <select type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown" name="FilterBy" id="FilterBy">
                                                <option value="" selected disabled hidden>Filter By</option>
                                                <option value="Name" @if(isset($filter)) @if ($filter=="Name" ) {{ 'selected' }} @endif @endif>{{ trans('labels.Name') }}</option>
                                                <option value="E-mail" @if(isset($filter)) @if ($filter=="E-mail" ) {{ 'selected' }}@endif @endif>{{ trans('labels.Email') }}</option>
                                                <option value="Phone" @if(isset($filter)) @if ($filter=="Phone" ) {{ 'selected' }}@endif @endif>{{ trans('labels.Phone') }}</option>
                                                <option value="Address" @if(isset($filter)) @if ($filter=="Address" ) {{ 'selected' }}@endif @endif>{{ trans('labels.Address') }}</option>
                                                <!-- <option value="Suburb" @if(isset($filter)) @if ($filter=="Suburb" ) {{ 'selected' }}@endif @endif>{{ trans('labels.Suburb') }}</option> -->
                                                <option value="Postcode" @if(isset($filter)) @if ($filter=="Postcode" ) {{ 'selected' }}@endif @endif>{{ trans('labels.Postcode') }}</option>
                                                <option value="City" @if(isset($filter)) @if ($filter=="City" ) {{ 'selected' }}@endif @endif>{{ trans('labels.City') }}</option>
                                                <option value="State" @if(isset($filter)) @if ($filter=="State" ) {{ 'selected' }}@endif @endif>{{ trans('labels.State') }}</option>
                                                <option value="Country" @if(isset($filter)) @if ($filter=="Country" ) {{ 'selected' }}@endif @endif>{{ trans('labels.Country') }}</option>
                                            </select>
                                            <input type="text" class="form-control input-group-form " name="parameter" placeholder="Search term..." id="parameter" @if(isset($parameter)) value="{{$parameter}}" @endif>
                                            <button class="btn btn-primary " id="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                            @if(isset($parameter,$filter)) <a class="btn btn-danger " href="{{url('admin/customers/display')}}"><i class="fa fa-ban" aria-hidden="true"></i> </a>@endif
                                        </div>
                                    </form>
                                    <div class="col-lg-4 form-inline" id="contact-form12"></div>
                                </div>
                                <div class="box-tools pull-right">
                                    <a href="{{ url('admin/customers/add')}}" type="button" class="btn btn-block btn-primary">{{ trans('labels.AddNew') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
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
                                            <th>@sortablelink('id', trans('labels.ID') )</th>
                                            <th style="display: none">{{ trans('labels.Picture') }}</th>
                                            <th>@sortablelink('first_name', trans('labels.Full Name')) </th>
                                            <th>@sortablelink('email', trans('labels.Email')) </th>
                                            <th>{{ trans('labels.Additional info') }} </th>
                                            <th>@sortablelink('entry_street_address', trans('labels.Address'))</th>
                                            <th>{{ trans('labels.Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($customers['result']))
                                        @foreach ($customers['result'] as $key=>$listingCustomers)
                                        <tr>
                                            <td>{{ $listingCustomers->id }}</td>
                                            <td>{{ $listingCustomers->first_name }} {{ $listingCustomers->last_name }}</td>
                                            <td style="text-transform: lowercase">{{ $listingCustomers->email }}</td>
                                            <td>                                               
                                                <strong>{{ trans('labels.Phone') }}: </strong> {{ $listingCustomers->phone }}                                               
                                            </td>

                                            <td>
                                                @if(!empty($listingCustomers->entry_street_address))
                                                {{ $listingCustomers->entry_street_address }},
                                                @endif
                                                @if(!empty($listingCustomers->entry_city))
                                                {{ $listingCustomers->entry_city }},
                                                @endif
                                                @if(!empty($listingCustomers->entry_state))
                                                {{ $listingCustomers->zone_name }},
                                                @endif
                                                @if(!empty($listingCustomers->entry_postcode))
                                                {{ $listingCustomers->entry_postcode }}
                                                @endif
                                                @if(!empty($listingCustomers->countries_name))
                                                {{ $listingCustomers->countries_name }}
                                                @endif

                                            </td>
                                            <td>
                                                <ul class="nav table-nav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                            {{ trans('labels.Action') }} <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('admin/customers/edit') }}/{{$listingCustomers->id}}">{{ trans('labels.EditCustomers') }}</a></li>
                                                            <li role="presentation" class="divider"></li>
                                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('admin/customers/address/display/'.$listingCustomers->id) }}">{{ trans('labels.EditAddress') }}</a></li>
                                                            <li role="presentation" class="divider"></li>
                                                            <li role="presentation"><a data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.Delete') }}" id="deleteCustomerFrom"
                                                                  users_id="{{ $listingCustomers->id }}">{{ trans('labels.Delete') }}</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="4">{{ trans('labels.NoRecordFound') }}</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                                @if (count($customers['result']) > 0)
                                <div class="col-xs-12 text-right">
                                    {{--'vendor.pagination.default'--}}
                                    {{--{{$customers['result']->links()}}--}}
                                    {!! $customers['result']->appends(\Request::except('page'))->render() !!}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>

        <!-- /.row -->

        <!-- deleteCustomerModal -->
        <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="deleteCustomerModalLabel">{{ trans('labels.Delete') }}</h4>
                    </div>
                    {!! Form::open(array('url' =>'admin/customers/delete', 'name'=>'deleteCustomer', 'id'=>'deleteCustomer', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
                    {!! Form::hidden('action', 'delete', array('class'=>'form-control')) !!}
                    {!! Form::hidden('users_id', '', array('class'=>'form-control', 'id'=>'users_id')) !!}
                    <div class="modal-body">
                        <p>{{ trans('labels.DeleteCustomerText') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ trans('labels.Delete') }}</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content notificationContent">

                </div>
            </div>
        </div>

        <!-- Main row -->

        <!-- /.row -->
        <div class="">
                                  
                                     <a href="">
                                     <button class="btn btn-primary" style="float: right;font-weight:bold;">Add Customers</button>
                                     </a>
                
                                     <button type="button" class="btn__imp"  style="float: right">Import Customers</button>
                                     <button type="button" class="btn__imp"  style="float: right">Export</button>
                                  
                                 </div>
                                <br/> 
                     <div class="customer__main">
                              <br/>
                                <div class="first__content_row">
                              
                             
                            <div class="searc_______option">
                            <div class="form-group">
                <div class="icon-addon addon-md">
                    <input type="text" placeholder="Filter customers" class="form-control" id="email">
                    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                </div>
            </div> </div>
                        
                                            <div class="btn-group grop___btn_first" role="group">
                                            <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle  btn____togle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Email subscribtion status
                                            <span class="caret" style="margin-left:5px;"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a href="#">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                               Subcribe
                                            </label>
                                            </div>
                                            </a></li>
                                            <li><a href="#">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            Pending confirmation
                                            </label>
                                            </div>
                                            </a></li>
                                            <li><a href="#">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              Not Subcribed
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
                          
                                      
                                 </div>
                              
                              <div class="customer__content_2">
                                  <div style="margin-left:17px;">
                      
                                  
                              
                              <div class="container">
                                  <div class="row">
                                      <div class="col-lg-6 col-md-6 col-3 mt-3">
                                      <div style="margin-left:0px;">
                                  <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        <span style="margin-left: 8px;">Result 3 of 3 of customers</span> 
                            </label>
                            </div>
                                  
                                  </div>
                                      </div>
                                      <div class="col-lg-6 col-md-6 col-3 mt-2">
                                      <div style="margin-right:30px;">
                                      <select class="customer__select">
                                          <option value="1">Sort by last update(newest first)</option>
                                          <option value="1">last update(newest first)</option>
                                          <option value="1">last update(oldest first)</option>
                                          <option value="1">amount spend(high to low)</option>
                                          <option value="1">amount spend(low to high)</option>
                                      </select>
                                  </div>
                                      </div>
                                  </div>
                              </div>
                              <hr class="w-100"/> 
                                    
                              <div class="container">
                                  <div class="row">
                                      <div class="col-lg-5 col-md-5 col-6">
                                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                             <span style="margin-left: 8px;">Lin Dan</span> 
                           
                          
                            </label>
                            </div>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-6">
                                     <p>0 orders</p>
                                      </div>
                                      <div class="col-lg-2 col-md-2 col-6">
                                      <p>US$0.00 spent</p>
                                      </div>
                                  </div>
                                  <hr class="w-100">
                                  <div class="row">
                                      <div class="col-lg-5 col-md-5 col-6">
                                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                             <span style="margin-left: 8px;">Lin Dan</span> 
                           
                          
                            </label>
                            </div>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-6">
                                     <p>0 orders</p>
                                      </div>
                                      <div class="col-lg-2 col-md-2 col-6">
                                      <p>US$0.00 spent</p>
                                      </div>
                                  </div>
                                  <hr class="w-100">
                                  <div class="row">
                                      <div class="col-lg-5 col-md-5 col-6">
                                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                             <span style="margin-left: 8px;">M Evidea</span> 
                           
                          
                            </label>
                            </div>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-6">
                                     <p>0 orders</p>
                                      </div>
                                      <div class="col-lg-2 col-md-2 col-6">
                                      <p>US$0.00 spent</p>
                                      </div>
                                  </div>
                                  <hr class="w-100">
                                  <div class="row">
                                      <div class="col-lg-4 col-md-4 col-6">
                                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                             <span style="margin-left: 8px;">Monreo@gmail.com</span> 
                           
                          
                            </label>
                            </div>
                                      </div>
                                      <div class="col-lg-2 col-md-3 col-6">
                                     <p class="sub___btn">Subcribe</p>
                                      </div>
                                      <div class="col-lg-2 col-md-3 col-6">
                                     <p class="order____btn">0 orders</p>
                                      </div>
                                      <div class="col-lg-1 col-md-2 col-6">
                                      <p>US$0.00 spent</p>
                                      </div>
                                  </div>
                              </div>
                        
        </div>

    </section>
    <!-- /.content -->
</div>

@endsection
