@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> {{ trans('labels.Products') }} <small>{{ trans('labels.ListingAllProducts') }}...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i>
                    {{ trans('labels.breadcrumb_dashboard') }}</a></li>
            <li class="active"> {{ trans('labels.Products') }}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">

        <div class="">
            <h3 class="products___title">Products</h3>
            <a href="{{ URL::to('admin/products/add') }}">
                <button class="btn btn-success"
                    style="float: right;font-weight:bold;">{{ trans('labels.AddNew') }}</button>
            </a>
            <button type="button" class="btn__imp" style="float: right" data-toggle="modal"
                data-target="#exportModal">Export</button>
            <button type="button" class="btn__imp" style="float: right" data-toggle="modal"
                data-target="#importModal">Import</button>

        </div>
        <br />
        <div class="container first-content">
            <br />
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
                        <button type="button" class="btn btn-default dropdown-toggle  btn____togle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Product vendor
                            <span class="caret" style="margin-left:5px;"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Monroeoffical
                                        </label>
                                    </div>
                                </a></li>
                            <li><a href="#">Clear</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle  btn____togle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tangged with
                            <span class="caret" style="margin-left:5px;"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <input type="text" class="input___text__" />
                                </a></li>
                            <li><a href="#">Clear</a></li>
                        </ul>
                    </div>

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle  btn____togle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More filters

                        </button>

                    </div>
                </div>
                <a href="#" class="btn btn-primary btn___disable disabled" tabindex="-1" aria-disabled="true"
                    role="button" data-bs-toggle="button"><i class="fa fa-star" aria-hidden="true"></i> Saved</a>
                <select class="sort____bn">
                    <option value="0" class="option___cs"><i class="fa fa-arrow-down" aria-hidden="true"></i> sort
                    </option>

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
                        <th><div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">

                                </label>
                            </div>
                            {{-- <span class="disply__non"></span></th> --}}
                        <th>
                            Product
                        </th>
                        <th>@sortablelink('categories_name', trans('labels.Category') )</th>
                        <th>@sortablelink('products_name', trans('labels.Name') )</th>
                        <th>{{ trans('labels.Additional info') }}</th>
                        <th>@sortablelink('created_at', trans('labels.ModifiedDate') )</th>

                    </tr>
                </thead>
                <tbody>
                    @if(count($results['products'])>0)
                        @php  $resultsProduct = $results['products']->unique('products_id')->keyBy('products_id');  @endphp
                        @foreach ($resultsProduct as  $key=>$product)
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
                                    <a href="{{url('admin/products/edit')}}/{{ $product->products_id }}">
                                        <div class="col-lg-3 col-md-3 col-6">
                                            <img src="{{asset($product->path)}}"
                                                alt="" class="table___img">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-6 second___div">
                                            <h6 style="font-weight: bold;">{{ $product->products_name }}</h6>
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td>{{ $product->categories_name }}</td>
                            <td>{{ $product->products_name }} @if(!empty($product->products_model)) ( {{ $product->products_model }} ) @endif</td>
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
                            <td>{{ $product->productupdate }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">{{ trans('labels.NoRecordFound') }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            <div class="w-100 last__result">
                <p>Showing 1 to 1 of 1 entries</p>
            </div><br />
        </div>
</div>

<!-- Import button  Modal -->
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Import products by CSV</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times" style="font-size:27px;font-weight:normal;"
                            aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="modal-body">

                <p>Download a <a href="">sample CSV template</a> to see an example of the format required.</p>
                <div class="Modal____sty">
                    <i class="fa fa-arrow-circle-up" style="font-size:50px;padding-top:6%;" aria-hidden="true"></i>
                    <button>Add file</button>
                    <p style="padding-bottom:5%;">or drop file to upload</p>
                </div>
                <hr />
                <div class="form-check" style="">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <p style="font-weight:normal; margin-left:8px;"> Overwrite any current products that have the
                            same handle. <a href="">learn more</a></p>
                    </label>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" style="font-weight: bold;"
                    data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-secondary" style="font-weight: bold;">Upload and continue</button>
            </div>
        </div>
    </div>
</div>
<!-- <==========Export button modal======>                                       -->

<div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Export products</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times" style="font-size:27px;font-weight:normal;"
                            aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="modal-body">

                <p>This CSV file can update all product information. To update just inventory <br />quantites use the <a
                        href="">CSV file for inventory</a>. </p>
                <h4>Export</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        <span style="font-size:14px;margin-left:8px;font-weight:normal">Current page</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <span style="font-size:14px;margin-left:8px;font-weight:normal">All Products</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled"
                        disabled>
                    <label class="form-check-label" for="flexRadioDisabled">
                        <span style="font-size:14px;margin-left:8px;font-weight:normal"> Selected: 0 products</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled"
                        disabled>
                    <label class="form-check-label" for="flexRadioDisabled">

                        <span style="font-size:14px;margin-left:8px;font-weight:normal"> 1 product matching your
                            search</span>
                    </label>
                </div>
                <h4>Export as</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefaultt" id="flexRadioDefault2"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <span style="font-size:14px;margin-left:8px;font-weight:normal">CSV for Excel, Numbers, or other
                            spreadsheet programs</span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefaultt" id="flexRadioDefault2"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <span style="font-size:14px;margin-left:8px;font-weight:normal">Plain CSV file</span>
                    </label>
                </div>
                <hr />
                <p>Learn more about <a href=""> exporting products to CSV file </a>or the <a href="">Bulk editor</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Export products</button>
            </div>
        </div>
    </div>
</div>

</section>

@endsection