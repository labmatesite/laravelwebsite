@extends('header')
@section('content')

     <div class="slid_1 dis_none" align="center">
           <img src="image/slide1.jpg" alt="Slide1" />
        </div>


        <!-- Why Choose Us Start-->
        <div class="rs-why-choose sec-spacer">
            <div class="container">
            <div class="__datarow">
                    <div class="col-lg-12 col-md-12">
                        <div class="choose-desc dis_none">
                          <p>
                           Medofficesupplies is a UK based leading manufacturers of medical devices served in the field of Hospitals, Biomedical industry, Pharmaceutical industry, Biotechnology industry, Education institutes and research laboratories.</p>

<p>Our aim is to achieve customer satisfaction by providing clinically superior and cost effective solutions improving patient life. We hold an extensive range of healthcare including medical monitors, diagnostic equipment’s, laboratory medical devices, measuring devices, life supporting medical equipment’s, treatment devices, accessories, consumables and hospital furniture’s providing comprehensive array of products for Medical and Hospital environment.</p>

<p>We assure quality and reliability of our products as all our equipment’s are clinically validated and tested by our engineers before dispatching the consignment.We have been accredited with standard certifications CE, ISO 9001: 2008 as per safety guidelines.</p>

                        </div>


                      <div class="row">
                        <span class="pro_duct_name">Medical Equipment <span class="col_orr"> Directory</span></span>
                      </div>

                          <div class="row choose-list mtb-10">
@foreach($categories as $value)
  <div class="col-md-3"><a class="bg_col" href="/{{$value->page_url}}"> <h3 class="dir_ect">{{$value->name}}</h3></a></div>
@endforeach
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <!-- Why Choose Us End -->

    <!-- Courses Start -->
        <div id="rs-courses-2" class="rs-courses-2 sec-spacer">
      <div class="container">
        <div class="row">
        <span class="pro_duct_name">All <span class="col_orr">Products</span></span>
      </div>
        <div class="row">


@foreach($random_products as $value)
          <div class="col-lg-4 col-md-6 ani_mat">
                    <div class="cource-item">
                        <div class="img_pro">
                            <?php
                            $image_json = str_replace(array("\t","\n"), "", $value->image_urls);
                            $image_text = json_decode($image_json);
                            foreach($image_text as  $img_v) {
                                $product_img = $img_v;
                                break;
                            }
                            ?>
                            <a href="/{{$value->page_url}}"><img src="{{asset($product_img)}}" alt="" /></a>
                        </div>
                        <div class="course-body">
                          <h4 class="course-title"><a href="/{{$value->page_url}}">{{$value->name}}</a></h4>
                          <div class="course-desc">
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
                          </div>
                          <a href="/{{$value->page_url}}" class="cource-btn enq">More Info</a>
                        </div>
                    </div>
          </div>
@endforeach



          </div>
      </div>
        </div>

@endsection
