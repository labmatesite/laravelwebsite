@extends('header')
@section('content')


<!--  SLIDER  -->
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
        <div class="col-lg-4" align="center">
            <?php
            $json = str_replace(array("\t","\n"), "", $product->image_urls);
            $data = json_decode($json);
            $i=0; foreach ($data as $key => $value) {
                $get_product_details['img'][$i] = $value;
                $i++;
            } ?>
         <img class="imgg" src="{{asset($get_product_details['img'][1])}}">
        </div>

<div class="col-lg-8">
<p class="hed_ttx">{{$product->name}}</p>
<p>{{$product->description}}</p>


</div>



<div class="col-md-12 no-padding">

 
          <!-- Tab panes -->
          <ul class="nav nav-tabs tab_ul act" role="tablist">
            <li class="active"><a href="#one" aria-controls="one" role="tab" class="active show" data-toggle="tab">Description<i class="icofont icofont-rounded-right"></i></a></li>
            <li><a href="#two" aria-controls="two" role="tab" data-toggle="tab">Specification<i class="icofont icofont-rounded-right"></i></a></li>
            <li><a href="#three" aria-controls="three" role="tab" data-toggle="tab">Features<i class="icofont icofont-rounded-right"></i></a></li>
            <li><a href="#four" aria-controls="four" role="tab" data-toggle="tab">Catelog<i class="icofont icofont-rounded-right"></i></a></li>
          </ul> 

          <div class="tab-content adddtab">

       <div role="tabpanel" class="tab-pane active show" id="one">
              
              <h5>Description</h5>
 <p>{{$product->description}}</p>
         
                     </div>

              <div role="tabpanel" class="tab-pane" id="two">               
              <h5>Specification</h5>
                  <table class="table table-bordered displayshow1 margb0">
                      <tbody>
                      <tr class="trset1">
                          <?php

                          $json = str_replace(array("\t","\n"), "", $product->specifications);
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

                      }
                      }  ?>
                      </tr>
                      </tbody>
                  </table>
            </div> 


              <div role="tabpanel" class="tab-pane" id="three">               
              <h5>Features</h5>
                  <p>{{$product->features}}</p>
            </div>         

              <div role="tabpanel" class="tab-pane" id="four">               
              <h5>Download Catalog</h5>
 <p></p>
            </div> 

          </div>

        </div>




          </div>
      </div>
        </div>
        <!-- Courses End -->
@endsection

