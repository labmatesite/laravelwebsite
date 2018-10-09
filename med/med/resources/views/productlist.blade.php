@extends('header')
@section('content')
<!--  SLIDER  -->
<style>

    .head_er {
        font-size: 17px;
        color: #fff;
        background: #058ece;
        float: left;
        width: 100%;
        border-bottom: 3px solid #058ece;
        padding: 2px 8px
    }

    .label_txt {
        font-size: 16px;
        float: left;
        width: 100%;
        color: #000;
        padding: 2px 0
    }

    .form_login {
        float: left;
        width: 100%;
        padding: 6px;
        margin: 5px 0;
        border: 1px solid #ccc
    }

    .btn_login {
        background: #328dce;
        color: white;
        border: 1px solid #2171ad;
        font-size: 16px;
        padding: 5px 15px;
        margin: 5px 0;
        float: right;
        border-radius: 3px
    }

    .account_add {
        float: left;
        width: 100%;
        text-align: center;
        font-size: 13px;
        color: #000;
        border-top: 1px solid #ccc;
        margin-top: 18px;
        padding-top: 10px
    }

    .account_new {
        float: left;
        width: 100%;
        text-align: center;
        font-size: 25px;
        color: #328cce;
        cursor: pointer
    }

    .login_add {
        float: left;
        padding: 15px 0;
        width: 100%
    }

    .register_add {
        float: left;
        padding: 15px 0;
        width: 100%
    }

    .register_add {
        display: none
    }

    .show_hed .login_add {
        display: none
    }

    .show_hed .register_add {
        display: inherit
    }

    span.check_bx {
        float: left;
        margin-top: 14px
    }

    span.remb_me {
        padding: 0;
        float: left;
        margin: 0;
        color: #267cb9;
        letter-spacing: .5px
    }

    .check_bx input[type="checkbox"] {
        float: left;
        margin: 4px 4px
    }
    img.phone_hed {
        width: 36px;
        float: left;
        position: absolute;
        margin: -9px -20px
    }

    .margl a {
        font-size: 15px!important
    }

    .full_div {
        border-bottom: 1px solid #ccc;
        margin-bottom: 25px;
        padding-bottom: 10px
    }

    span.modal_no {
        width: 100%;
        float: left;
        font-size: 16px;
        color: #000;
        text-align: center
    }

    .modal_no span {
        color: #20779e
    }

    .cat_hed {
        font-size: 21px;
        color: #126388;
        text-align: left;
        margin: 5px
    }

    .comp:before {
        margin: 3px
    }

    .comp span {
        font-family: 'Square721 Cn BT';
        font-size: 16px;
        letter-spacing: .5px
    }

    .comp {
        color: #fff;
        font-size: 18px!important;
        cursor: pointer;
        background: #1a7ba7;
        padding: 5px 8px;
        border-radius: 2px;
        display: initial
    }

    .margtb25 {
        margin-top: 25px;
        margin-bottom: 25px
    }

    .sho2 {
        display: none
    }

    .show_ico .sho1 {
        display: none
    }

    .show_ico .sho2 {
        display: initial
    }

    .add_compair {
        margin-top: 42px
    }

    .pro_ca {
        border: 1px solid #ececec;
        margin: 0px 0px 10px 0px;
        padding: 5px
    }

    span.product_txt {
        font-size: 17px;
        color: #000;
        padding: 5px 0;
        float: left;
        text-align: center;
        width: 100%;
        height: 50px;
        overflow: auto;
        line-height: 1.2;
        display: contents
    }

    .pro_ca img.product-image_cl {
        padding: 10px
    }

    .search_rig {
        float: right;
        position: absolute;
        right: 0
    }

    .sub_name_pro1 {
        height: 130px;
        overflow: auto;
        margin-bottom: 20px
    }

    .pro_name_sub {
        font-size: 26px;
        color: #10557b;
        /* text-decoration: underline; */
        padding: 1%;
        background: #f5f5f5;
        border-radius: 24px;
        text-align: center;
        margin-bottom: 5%;
    }

    .action--download:hover {
        color: #009688
    }

    .action--compare-add:hover {
        color: #f44336
    }

    .action--compare-add .fa-check,
    .action--compare-add input[type=checkbox]:checked ~ .fa-plus {
        display: none
    }

    .action--compare-add input[type=checkbox]:checked ~ .fa-check {
        display: contents;
        color: #5c5edc
    }

    .check-hidden {
        position: absolute;
        opacity: 0
    }

    .action {
        display: inline-block;
        font-size: 1em;
        white-space: nowrap;
        padding: 0;
        cursor: pointer;
        border: 0;
        background: transparent;
        text-align: center
    }

    .action:focus {
        outline: 0
    }

    .action__text {
        font-family: Square721 Cn BT;
        font-weight: bold;
        letter-spacing: 1px;
        font-size: .813em;
        vertical-align: middle;
        display: inline-block
    }
    .action--compare-add:hover .action__text--invisible,
    .action--download:hover .action__text--invisible {
        opacity: 1;
        top: 49px;
        left: -9px;
        color: #ddd;
        font-size: 75%;
        letter-spacing: 0;
        background: #2f3035;
        border-radius: 2px;
        padding: 3px 5px
    }
    .action__text--invisible {
        position: absolute;
        top: 100%;
        opacity: 0;
        pointer-events: none
    }

    .compare-section {
        position: fixed;
        top: 60px;
        right: 20px
    }

    .action--download {
        color: #f44336;
        position: absolute;
        top: 10px;
        left: 2px
    }

    .pro {
        border: 1px solid rgba(0, 0, 0, 0.20);
        border-radius: 4px;
        padding: 5px!important;
        margin-top: 10px;
        z-index: 10
    }

    .pro img {
        margin: auto
    }

    .row-2 {
        width: 15%;
        right: 20px;
        top: 11em
    }

    .btn-compare {
        background: #f44336
    }

    .mt30 tbody tr td:first-child {
        color: #0030ba;
        font-weight: 600
    }

    .bdrb2 {
        text-align: center;
        padding: 2px 0;
        border-bottom: 2px solid #103d61;
        margin-bottom: 10px;
        margin-top: 20px
    }

    p.product_txt {
        float: left;
        text-align: left;
        margin: 0;
        width: 75%;
        overflow: auto;
        height: 39px;
        font-size: 15px
    }

    .product_txt1 {
        padding-left: 0!important;
        margin-left: 0!important
    }

    .add_img1 figure {
        width: 40px!important
    }

    .product_txt1 a {
        color: #0a395f!important;
        font-size: 16px!important
    }
    .breadcrumb{
        margin-bottom: 0px;
        padding-bottom: 0px;
        padding-top: 0px;
        font-size: 13px;
        background: #e7e7e7;
    }
    .compare{
        float: right;
        margin-right: 119px;
        position: fixed;
        z-index: 999;
        left: 1230px;
        top: 80px;
    }
    .compare a{
        display:none;
        float: right!important;

    }
    @media only screen and (max-width: 600px) {

        .sub_cat_row h3 {
            /* padding-top: 508px; */
        }

        .compare{
            z-index: 9999;
            position: fixed;
            top: 440px;
            left: 200px;
        }
        .compare a{
            position: static;
        }

    }

</style>
<section class="about_hed">
 <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
          <?php
          $sep = '';
          $home = 'Home';
          $bc     =   '<ul class="hed">';
          $site   =   'https://'.$_SERVER['HTTP_HOST'];
          $crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
          $bc    .=   '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'.$site.'">'.$home.'</a>'.$sep.'<meta itemprop="position" content="1" /></li>';
          $nm     =   count($crumbs);
          $i      =   1;
          foreach($crumbs as $crumb){
              $last_piece = end($crumbs);
              $link    =  ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$crumb) );
              $sep     =  $i==$nm?'':$sep;
              $site   .=  '/'.$crumb;
              if ($last_piece!==$crumb){
                  $bc     .= '<li><a href="'.$site.'">'.$link.'</a>'.$sep.'</li>';
              } else {
                  $bc     .= '<li class="active">'.ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$last_piece)).'</li>';
              }
              $i++;
          }
          $bc .=  '</ul>';
          echo $bc;
          ?>
      </div></div></div>
</section>
<!--SLIDER -->






    <!-- Courses Start -->
        <div id="rs-courses-2" class="rs-courses-2 sec-spacer">
      <div class="container">
        <div class="row">

<div class="col-lg-3 mrg_btm">
    @foreach($categories as $value)
    <div class="pro_list_full">
        <div class="main_ppo_list onclick_list">{{$value->name}}<i class="fa fa-plus plus_fa onclick_list"></i> <i class="fa fa-minus min_fa onclick_list"></i></div>
        <div class="pro_list1">
            <?php  $id = $value->id;
            $sub_cat_data = DB::table('categories')->where('parent_id', '=' , $id)->get(); ?>
            @foreach ($sub_cat_data as $sub_value)
            <a href="/{{$sub_value->page_url}}"><div class="sub_p"><i></i>{{$sub_value->name}}</div></a>
            @endforeach
        </div>
        </div>
        @endforeach
</div>


<div class="col-lg-9">
    <div class="compare" style="float: right; margin-right: 119px;">
        <a href="javascript:" class="btn btn-danger pull-right btn-compare"
           style="display:none; float: right!important; position: fixed; z-index: 999;"> COMPARE </a>
        <br>
    </div>
    <div class="row">
        <h3 style="margin-left: 50px;"> {{$cat_name}}</h3>
      <div class="col-lg-12" align="center">
          @if($sub_cat)
          @foreach($sub_cat as $value)
            <a href="/{{$value->page_url}}"><div class="sub_product"><i></i>{{$value->name}}</div></a>
@endforeach
              @endif
          </div>
</div>

 <div class="row">
@foreach($products_list as $value)
          <div class="col-lg-12 col-md-12 pad_marg">
   <?php
              $image_json = str_replace(array("\t","\n"), "", $value->image_urls);
              $image_text = json_decode($image_json,true);
              if(is_array($image_text)){
              foreach($image_text as  $img_v) {
              $product_img = $img_v;
       //       break;
              }
              }
              ?>
            <div class="img_div">
                <a href="/{{$value->page_url}}">
                    <img src="{{ asset($product_img) }}" alt="" />
                </a>
            </div>
            <div class="col_txtt">
              <a href="/{{$value->page_url }}"><p>{{$value->name}}</p></a>
              <table class="table table-bordered displayshow1 margb0">
              <tbody>
              <tr class="trset1">
                  <?php
                  $json = str_replace(array("\t","\n"), "", $value->specifications);
                  $data = json_decode($json);
                  $i = 1;
                  if($data == ""){ ?>
                  <div class="alert alert-danger"> Sorry Not Found </div>
              <?php } else { $i= 0;
              foreach ($data as $vkey => $vvalue) { ?>
              <tr class="trset1">
                  <td><strong><?php echo $vkey; ?></strong></td>
                  <td><?php echo $vvalue; ?></td>
              </tr>
              <?php $i++;
              if($i == 4){ break; }
              }
              }  ?>
              </tr>
              </tbody>
              </table>
                <div class="row">
                    <div class="col-md-4">
              <a href="/catalogs/{{$value->sku }}" class="enq_pagees">Download Catalog</a>
                    </div>
                    <div class="col-md-8">
                <h4 style="margin-bottom: 30px;"> <div style="margin-top: 0px;" class="col-md-3 col-xs-3 add_compair">
                        <label style="color: #0f2657; width: 232px; font-size: 15px;" class="action action--compare-add" style="border:0px">
                            <input class="check-hidden checkbox" type="checkbox" autocomplete="off" value="{{ $value->id }}"> Add to Compare
                            <i class="fa fa-plus"></i>
                            <i  class="fa fa-check"></i>
                        </label>
                    </div>
                </h4>
                </div>
            </div>
            </div>
          </div>
@endforeach

     </div>
</div>
          </div>
      </div>
        </div>
        <!-- Courses End -->

<script>
    var $btn_compare = $('.btn-compare');
    var get_checked_id = function (e) {
        var array = [];
        var count = 0;
        $(".action--compare-add .checkbox:checked").each(function () {
            count++;
            if (count > 4) {
                swal("Cannot add more than 4 products to Compare..! ", "", "warning");
                return false;
            }
            if (count > 0) {
                $btn_compare.show();
            }
            if (count == 0 || count == null) {
                $btn_compare.hide();
            }
            array.push(this.value);
            $btn_compare.text('COMPARE (' + count + ')');
        });
        if (count == 0) {
            $btn_compare.hide();
        }
        var ids = array.join(",");
        if (ids) {
            $btn_compare.attr('href',  '/compare/?product_id=' + ids);
        }
    };
    $(".checkbox").on("click", get_checked_id);
</script>


@endsection
