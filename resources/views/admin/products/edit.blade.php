@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> {{ trans('labels.EditProduct') }} <small>{{ trans('labels.EditProduct') }}...</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i>
                    {{ trans('labels.breadcrumb_dashboard') }}</a></li>
            <li><a href="{{ URL::to('admin/products/display')}}"><i class="fa fa-database"></i>
                    {{ trans('labels.ListingAllProducts') }}</a></li>
            <li class="active">{{ trans('labels.EditProduct') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- <====================Edit page Update==================> -->

        <div class="row">
            <div class="col-md-6 col-6 mx-auto">
                <h3 class="box-title"><i class="fa fa-arrow-left back__arrow" style="position:relative;right:2%;"
                        aria-hidden="true"></i><span class="sapan_cls"></span> {{$result['description'][1]['products_name']}} <span
                        style="background-color:rgba(164,232,242,1);padding:4px 12px;border-radius:18px;font-size:15px;">Draft</span>
                </h3>
            </div>
            <div class="col-md-6 col-6 mx-auto">
                <div class="edit__button_1">
                    <button class="Dublicate___buton" data-toggle="modal"
                        data-target="#dublicatebuttonModal">Dublicate</button>
                    <button class="Dublicate___buton">preview</button>
                    <div class="btn-group grop___btn_first" role="group">
                        <div class="btn-group" role="group">
                            <button type="button " disabled>
                                <i class="fa fa-chevron-left " aria-hidden="true"></i>

                            </button>

                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" disabled>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>

                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12 mx-auto edit_page__main">
                @foreach($result['description'] as $key=>$description_data)
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><span style="font-weight: normal;">{{ trans('labels.ProductName') }} ({{ $description_data['language_name'] }})</span> </label>
                    <input type="text" name="products_name_<?=$description_data['languages_id']?>" class="form-control" value="{{$description_data['products_name']}}" id="exampleFormControlInput1" placeholder="title..">
                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.EnterProductNameIn') }} {{ $description_data['language_name'] }} </span><span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                </div><br />
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><span
                        style="font-weight: normal;">{{ trans('labels.Description') }} ({{ $description_data['language_name'] }})</span></label>
                        <textarea id="editor<?=$description_data['languages_id']?>" name="products_description_<?=$description_data['languages_id']?>" class="form-control" rows="2">
                            {{stripslashes($description_data['products_description'])}}
                        </textarea>
                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                            {{ trans('labels.EnterProductDetailIn') }} {{ $description_data['language_name'] }}
                        </span>
                </div><br />
                @endforeach
            </div>
            <div class="col-lg-4 col-md-4 col-12 mx-auto edit_page__main1" style="margin-bottom: 20px;">
                <h5>{{ trans('labels.Status') }}</h5>
                <select class="form-select draft___prod" aria-label="Default select example">
                    <option value="1" @if($result['product'][0]->products_status==1) selected @endif >{{ trans('labels.Active') }}</option>
                    <option value="0" @if($result['product'][0]->products_status==0) selected @endif>{{ trans('labels.Inactive') }}</option>
                    {{-- <option selected>Draft</option>
                    <option value="1">active</option>
                    <option value="2">draft</option> --}}

                </select>

                <span style="display:flex;">
                    <p>SALES CHANNELS AND APPS</p> <a style="margin-left:80px;" href="">Manage</a>
                </span>
                <hr />
                <span style="display:flex;">
                    <p>Online Store</p> <a style="margin-left:170px;" href="">Selected</a>
                </span>
                <a href="">Schulde availability</a>
            </div>
            
            <div class="col-lg-4 col-md-4 col-12 mx-auto edit_page__main1" style="margin-bottom: 20px;">
                <h4>Organization</h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><span style="font-weight:normal;"> Product type </span>
                    </label>
                    <select class="form-control field-validate prodcust-type" name="products_type" onChange="prodcust_type();">
                        <option value="">{{ trans('labels.Choose Type') }}</option>
                        <option value="0" @if($result['product'][0]->products_type==0) selected @endif>{{ trans('labels.Simple') }}</option>
                        <option value="1" @if($result['product'][0]->products_type==1) selected @endif>{{ trans('labels.Variable') }}</option>
                        <option value="2" @if($result['product'][0]->products_type==2) selected @endif>{{ trans('labels.External') }}</option>
                    </select><span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                        {{ trans('labels.Product Type Text') }}.</span>
                    {{-- <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="types..."> --}}
                </div>
                <br />
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><span style="font-weight:normal;">
                            Vendor
                        </span></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ifull">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mx-auto edit_page__main1">
                <h4>COLLECTIONS</h4>
                <div class="searc_______option" style="width:97%;">
                    <div class="form-group">
                        <div class="icon-addon addon-md">
                            <input type="text" placeholder="search for collections" class="form-control" id="email">
                            <label for="search" class="glyphicon glyphicon-search" rel="tooltip"
                                title="email"></label>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><span style="font-weight:normal;">
                            Tages
                        </span></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="vintage,cotton,summer">
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12 mx-auto edit_page__main">
                <span style="display:flex;">
                    <p>Media</p>
                    <select class="form-select draft___prod1" aria-label="Default select example">
                        <option selected>Add media from URL</option>
                        <option value="1">Add image from URL</option>
                        <option value="2">Embed youtube video</option>

                    </select>
                </span>
                <br />
                <div class="edit__upload_file">
                    
                    <i class="fa fa-arrow-circle-up" style="font-size:40px;" aria-hidden="true"></i>
                    <button>Add file</button>
                    <p>or drop files to upload</p>
                </div>

            </div>
            
        </div>
            <div class="row ">
                <div class="col-lg-7 col-md-7 col-12 mx-auto edit_page_main_2">
                    <span style="display:flex;">
                        <p>Varients</p>
                        <a href="" class="add_varient-cs">Add varients</a>
                        <select class="form-select draft___prod122" aria-label="Default select example">
                            <option selected>More options</option>
                            <option value="1">edit option</option>
                            <option value="2">reorder varient</option>

                        </select>
                    </span>
                    <br />
                    <span style="display:flex;">
                        <p>Select</p>
                        <a href="#" style="margin-left:11px;">All</a>
                        <a href="#" style="margin-left:11px;">None</a>
                        <a href="#" style="margin-left:11px;">red</a>
                    </span>

                    <div style="overflow-x:auto;">
                        <table style="border-collapse: collapse; border-spacing: 0;width: 113%;" class="table-hover">
                            <tr>
                                <th style="text-align: left;padding: 8px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                    </div>
                                </th>
                                <th style="text-align: left;padding: 8px;"></th>
                                <th style="text-align: left;padding: 8px;">Color</th>
                                <th style="text-align: left;padding: 8px;">Price</th>
                                <th style="text-align: left;padding: 8px;">Quantity</th>
                                <th style="text-align: left;padding: 8px;margin-left:12px;">SKU</th>

                            </tr>

                            <tr>
                                <hr />
                                <td style="text-align: left;padding: 8px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <button class="images___button">
                                        <img src="https://images.unsplash.com/photo-1611223178400-a1e2b0f8bcab?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80"
                                            alt="" class="edit__product____img" />
                                    </button>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="mb-3" style="width:102%">

                                        <input type="text" class="form-control " id="exampleFormControlInput1"
                                            placeholder="colors">
                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="mb-3" style="width:100%">

                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="PKR.0.00">
                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="mb-3" style="width:102%">

                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </td>
                                <td style="text-align: left; padding: 8px;">
                                    <div class="mb-3" style="width:102%">

                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="btn-grouppp" style="width:100%">
                                        <button style="width:100%">Edit</button>
                                        <button style="width:100%" data-toggle="modal" data-target="#deleteModaltable">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <button class="images___button">
                                        <img src="https://images.unsplash.com/photo-1611223178400-a1e2b0f8bcab?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80"
                                            alt="" class="edit__product____img" />
                                    </button>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="mb-3" style="width:102%">

                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="colors">
                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="mb-3" style="width:100%">

                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="PKR.0.00">
                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="mb-3" style="width:102%">

                                        <input type="number" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="mb-3" style="width:102%">

                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </td>
                                <td style="text-align: left;padding: 8px;">
                                    <div class="btn-grouppp" style="width:100%">
                                        <button style="width:100%">Edit</button>
                                        <button style="width:100%" data-toggle="modal" data-target="#deleteModaltable">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
            </div>
            <hr class="edit_hr">
            <span>
                <button class="archive__button" data-toggle="modal" data-target="#archiveModal">Archive product</button>
                <button class="delete__button" data-toggle="modal" data-target="#deleteModal">Delete product</button>
            </span>
            <button class="btn btn-success" style="float: right;">Save</button>

            <!-- <=====================Dublicate button modal===============> -->

            <div class="modal fade" id="dublicatebuttonModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Duplicate product</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times"
                                        style="font-size:27px;font-weight:normal;" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="modal-body" style=" overflow-y: scroll;">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Title..">
                                <hr />
                                <p>Select details to copy. All other details except 3D models and videos will<br /> be
                                    copied
                                    from the original product and any variants.</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <span style="font-weight:normal; margin-left:9px;"> Images</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <span style="font-weight:normal; margin-left:9px;"> SKUs</span>
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled"
                                        disabled>
                                    <label class="form-check-label" for="flexCheckDisabled">
                                        <span style="font-weight:normal; margin-left:9px;"> Barcodes</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <span style="font-weight:normal; margin-left:9px;"> Inventory quantities</span>

                                    </label>
                                </div>
                                <hr />
                                <p>Product status</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <span style="font-weight:normal; margin-left:9px;">Set as draft</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <span style="font-weight:normal; margin-left:9px;">Set as active</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" style="font-weight: bold;"
                                data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success" style="font-weight: bold;">Dublicate
                                product</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <=====================Archive button modal===============> -->

            <div class="modal fade" id="archiveModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Archive product?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times"
                                        style="font-size:27px;font-weight:normal;" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Archiving this product will hide it from your sales channels and Shopify admin.
                                You'll find it using the status filter in your product list.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="font-weight: bold;"
                                data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success" style="font-weight: bold;">Archive
                                product</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <=====================Delete button modal===============> -->

            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Delete Dress Collection Linnea Danling?
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times"
                                        style="font-size:27px;font-weight:normal;" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete the product Dress Collection Linnea Danling? This can’t
                                be undone.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="font-weight: bold;"
                                data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" style="font-weight: bold;">Delete
                                product</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <=====================Table Delete button modal===============> -->

            <div class="modal fade" id="deleteModaltable" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLongTitle">Delete product?
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times"
                                        style="font-size:27px;font-weight:normal;" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete the variant product? This action cannot be reversed..</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="font-weight: bold;"
                                data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" style="font-weight: bold;">Delete
                                product</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <=====================Add to cart modal===============> -->

            <div class="modal fade " id="addtocart" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal_for_right" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="margin-top:1%" id="exampleModalLongTitle">JUST ADDED TO YOUR
                                CART
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times"
                                        style="font-size:27px;font-weight:normal;" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div style="display:flex;">
                                <figure>
                                    <img src="https://cdn.shopify.com/s/files/1/0516/5160/8762/products/w_200x.png?v=1611565673"
                                        alt="" style="width:50px;height:57px;" />
                                </figure>
                                <h4 style="margin-left:12px;">Short Sleeve Tshit</h4>

                            </div>
                            <p class="modal___color_text">Color:blue</p>
                            <p class="modal_quantity_text">Qty:1</p>
                            <br />
                            <button class="modal__view_button">VIEW CART<span>(3)</span></button>
                            <div style="display:flex;justify-content:center;">
                                <a href="" style="margin-top:2%;">Continue shopping</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <=================Add to cart page start=======> -->
        {{-- <br />
        <div class="container" style="margin-top: 3%;">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12 mx-auto">
                    <img src="https://cdn.shopify.com/s/files/1/0516/5160/8762/products/w_1024x1024@2x.png?v=1611565673"
                        alt="" class="add_to_cart_image_product" />
                </div>
                <div class="col-lg-7 col-md-7 col-12 mx-auto">
                    <h1 style="font-weight:bold;">Short Sleeve Tshit</h1>
                    <h3>Rs.1,000.00</h3>
                    <p>Color</p>
                    <select class="select__color">
                        <option value="">blue</option>
                        <option value="">blue</option>
                    </select>
                    <br />
                    <button class="add__to__cartBtn" data-toggle="modal" data-target="#addtocart">ADD TO
                        CART</button>
                    <br />
                    <button class="buy__it_buton">BUY IT NOW</button>
                    <br />
                    <p style="margin-top:10%;">Test Product</p>
                    <br />
                    <button class="share__buttonsss"><i class="fa fa-facebook-official" aria-hidden="true"
                            style="color:#3b5998;"></i>
                        SHARE</button>
                    <button class="share__buttonsss"><i class="fa fa-twitter" aria-hidden="true"
                            style="color:#00aced;"></i> TWEET</button>
                    <button class="share__buttonsss"><i class="fa fa-pinterest" aria-hidden="true"
                            style="color:#d5494f"></i>
                        PINIT</button>
                </div>
            </div>
        </div>
        <br /> --}}
        {{-- <div class="container-fluid" style="margin-top: 5%;">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12 mx-auto">
                    <h4>Quick links</h4>
                    <p>Search</p>
                </div>
                <div class="col-lg-7 col-md-7 col-12 mx-auto">
                    <h4>Newsletter</h4>
                    <div class="input-group" style="width:77%">
                        <input type="email" class="form-control" placeholder="email address">
                        <button type="" class="subcribe___btn">SUBCRIBE</button>
                    </div>
                </div>
            </div>
            <hr />
            <hr class="footer_hr">
            <p style="float:right; margin-right:15%;">© 2021, IfuFull Powered by Shopify</p>
        </div>
        <br />

        <div class="container">
            <h1 class="text-center my-2">Your cart</h1>
            <p class="text-center">Continue shopping</p>
            <div style="overflow-x:auto;">
                <table class="table tabel___width__cs">
                    <thead>
                        <tr>
                            <th>
                            </th>
                            <th>
                                PRODUCT</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>TOTAL</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="https://cdn.shopify.com/s/files/1/0516/5160/8762/products/w_x190.png?v=1611565673"
                                    alt="" style="width=70px;height:70px;" />
                            </td>
                            <td>
                                <div style="margin-right:3%;">
                                    <h5>Short Sleeve Tshit</h5>
                                    <p>Color:blue</p>
                                    <a href="">Remove</a>
                                </div>
                            </td>
                            <td>
                                <h5>Rs:1000.00</h5>
                            </td>
                            <td>
                                <input type="number" class="product___price-num" />
                            </td>
                            <td>
                                <h4 style="margin-right:15px;">Rs.4,000.00
                                </h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="footer_hr">
            <div class="col-4" style="float:right;margin-right:21%;">
                <div class="row">
                    <div class="col-md-4 col-6">
                        <h4>Subtotal </h4>
                    </div>
                    <div class="col-md-8 col-6">
                        <h5 class="mt-2" style="margin-left:15px;">Rs.7,000.00 PKR</h5>

                    </div>
                </div>
                <p>Taxes and shipping calculated at checkout</p>
                <button class="btn__checkouttt">CHECK OUT</button>
            </div>
        </div>
        <br />
        <div class="container-fluid" style="margin-top: 5%;">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-12 mx-auto">
                    <h4>Quick links</h4>
                    <p>Search</p>
                </div>
                <div class="col-lg-7 col-md-7 col-12 mx-auto">
                    <h4>Newsletter</h4>
                    <div class="input-group" style="width:77%">
                        <input type="email" class="form-control" placeholder="email address">

                        <button type="" class="subcribe___btn">SUBCRIBE</button>
                    </div>
                </div>
            </div>
            <hr />
            <hr class="footer_hr">
            <p style="float:right; margin-right:15%;">© 2021, IfuFull Powered by Shopify</p>
        </div>
        <br /> --}}
    </section>
    <!-- /.content -->
</div>
<script src=" {!! asset('admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}"></script>
<script type="text/javascript">
$(function() {

    //for multiple languages
    @foreach($result['languages'] as $languages)
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor{{$languages->languages_id}}');
    @endforeach
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();

});
</script>
@endsection