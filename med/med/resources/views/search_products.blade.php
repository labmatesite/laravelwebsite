@extends('header')
@section('content')


    <style>
    .btn-body .details_btn {
        padding-left: 6.75rem;
        padding-right: 6.75rem;
        margin-top: 14px;
        background-color: #0f3661;
        border-color: #0f3661
    }
</style>
<br>
<div class="container">
    <?php if($pro_search!==""){foreach($pro_search as $key=>$value){?>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="<?php echo base_url().$value['page_url'];?>">
            <div class="thumbnail" style="box-shadow:5px 4px 20px 1px #c5c5c5">
                <?php $json=str_replace(array("\t","\n"),"",$value->image_urls);$data=json_decode($json);$i=0;foreach($data as $key=>$value_img){$related_prod_img['img'][$i]=$value_img;$i++;}?><img itemprop="image" src="<?php echo base_url().$related_prod_img['img']['1']?>" alt="<?php echo $value['name'];?>">
                <div class="caption">
                    <h4 title="<?php echo $value->name;?>" style="color:#f05a2b"><?php echo substr($value->name,0,40)."..";?></h4>
                    <p title="<?php echo $value->description;?>" style="color:#133a64">
                        <?php echo substr($value->description,0,300)."...";?>
                    </p>
                    <p><a class="btn btn-primary btn-sm" role="button" href="<?php echo base_url().$value->page_url;?>"> View More Details</a></p>
                </div>
            </div>
        </a>
    </div>
    <?php }}else{?>
    <div class="alert alert-danger">No Products Founds </div>
    <?php }?>
</div>
</div>

@endsection