<?php 
abc($this->data['khoai']);
if (!empty($this->data['data_home'])) {
    foreach ($this->data['data_home'] as $key => $value) {
        if ($value['content']!="") {
            $content = json_decode($value['content'], true);
        }
        if ($key==0) { ?>
                <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
                <div class="row margin-bottom-40">
                  <!-- BEGIN SALE PRODUCT -->
                  <div class="col-md-12 sale-product">
                    <h2><?php echo $value['title'];?></h2>
                    <div class="owl-carousel owl-carousel5">
                        <?php 
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>
                                <div>                        
                                    <div class="product-item">
                                      <div class="pi-img-wrapper">
                                        <img src="<?php echo base_url_cloud().'timthumb.php?src='.$_web['base_url_cdn'].$v['image'].'&h=259&w=194&zc=2';?>" class="img-responsive" alt="<?php echo $v['name'];?>">
                                        <div>
                                          <a href="<?php echo $_web['base_url_cdn'].$v['image'];?>" class="btn btn-default fancybox-button">Zoom</a>
                                          <a href="#product-pop-up" class="btn btn-default fancybox-fast-view" data-id="<?php echo $v['id'];?>">View</a>
                                        </div>
                                      </div>
                                      <h3><a href="<?php echo base_url().'product/'.alias($v['name']).'-'.$v['id'].'.htm';?>"><?php echo $v['name'];?></a></h3>
                                      <div class="pi-price">$<?php echo ($sale==true) ? number_format($v['saleoff'],0,'','.') : number_format($v['price'],0,'','.');?></div>
                                      <a href="javascript:void(0);" class="btn btn-default add2cart" data-id="<?php echo $v['id'];?>"> Add To Cart</a>
                                      <input type="hidden" class="hidden_product" value="<?php echo $v['name'];?>" />
                                      <input type="hidden" class="hidden_price" value="<?php if ($sale==true) { 
                                                                                        echo $v['saleoff'];
                                                                                    }else{
                                                                                        echo $v['price'];
                                                                                    }?>">

                                      <?php echo ($sale==true) ? '<div class="sticker sticker-sale"></div>' : '';?>
                                      <?php 
                                      if ($v['state']!="") {
                                          $pos = strpos($v['state'], "|3|");
                                          if ($pos !== false) {
                                            echo '<div class="sticker sticker-new"></div>';
                                          }
                                      }
                                      ?>
                                    </div>
                                </div>
                            <?php 
                            }
                        }
                        ?>
                    </div>
                  </div>
                  <!-- END SALE PRODUCT -->
                </div>
                <!-- END SALE PRODUCT & NEW ARRIVALS -->
        <?php 
        }

    }
}
?>








<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40 ">
  <!-- BEGIN SIDEBAR -->
  <div class="sidebar col-md-3 col-sm-4">
    <ul class="list-group margin-bottom-25 sidebar-menu">
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
      <li class="list-group-item clearfix dropdown">
        <a href="shop-product-list.html">
          <i class="fa fa-angle-right"></i>
          Mens
          
        </a>
        <ul class="dropdown-menu">
          <li class="list-group-item dropdown clearfix">
            <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Shoes </a>
              <ul class="dropdown-menu">
                <li class="list-group-item dropdown clearfix">
                  <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                  </ul>
                </li>
                <li class="list-group-item dropdown clearfix">
                  <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport  </a>
                  <ul class="dropdown-menu">
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                    <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                  </ul>
                </li>
              </ul>
          </li>
          <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
          <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
          <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
          <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
        </ul>
      </li>
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Kids</a></li>
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Accessories</a></li>
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sports</a></li>
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Brands</a></li>
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Electronics</a></li>
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Home & Garden</a></li>
      <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Custom Link</a></li>
    </ul>
  </div>
  <!-- END SIDEBAR -->


<?php 
if (!empty($this->data['data_home'])) {
    foreach ($this->data['data_home'] as $key => $value) {
        if ($value['content']!="") {
            $content = json_decode($value['content'], true);
        }
        if ($key==1) { ?>
                <!-- BEGIN CONTENT -->
                  <div class="col-md-9 col-sm-8">
                    <h2><?php echo $value['title'];?></h2>
                    <div class="owl-carousel owl-carousel3">
                    <?php 
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>
                                <div>
                                <div class="product-item">
                                  <div class="pi-img-wrapper">
                                    <img src="<?php echo base_url_cloud().'timthumb.php?src='.$_web['base_url_cdn'].$v['image'].'&h=550&w=600&zc=2';?>" class="img-responsive" alt="Berry Lace Dress">
                                    <div>
                                      <a href="<?php echo $_web['base_url_cdn'].$v['image'];?>" class="btn btn-default fancybox-button">Zoom</a>
                                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view" data-id="<?php echo $v['id'];?>">View</a>
                                    </div>
                                  </div>
                                  <h3><a href="<?php echo base_url().'product/'.alias($v['name']).'-'.$v['id'].'.htm';?>"><?php echo $v['name'];?></a></h3>
                                  <div class="pi-price">$<?php echo ($sale==true) ? number_format($v['saleoff'],0,'','.') : number_format($v['price'],0,'','.');?></div>
                                  <a href="javascript:void(0);" class="btn btn-default add2cart" data-id="<?php echo $v['id'];?>"> Add To Cart</a>
                                      <input type="hidden" class="hidden_product" value="<?php echo $v['name'];?>" />
                                      <input type="hidden" class="hidden_price" value="<?php if ($sale==true) { 
                                                                                        echo $v['saleoff'];
                                                                                    }else{
                                                                                        echo $v['price'];
                                                                                    }?>">
                                  <?php echo ($sale==true) ? '<div class="sticker sticker-sale"></div>' : '';?>
                                  <?php 
                                  if ($v['state']!="") {
                                      $pos = strpos($v['state'], "|3|");
                                      if ($pos !== false) {
                                        echo '<div class="sticker sticker-new"></div>';
                                      }
                                  }
                                  ?>
                                </div>
                              </div>

                                <?php 
                            }
                        }
                        ?>
                    </div>
                  </div>
                  <!-- END CONTENT -->
                
        <?php 
        }

    }
}
?>

</div>
<!-- END SIDEBAR & CONTENT -->


<!-- BEGIN TWO PRODUCTS & PROMO -->
<div class="row margin-bottom-35 ">

    
<?php 
if (!empty($this->data['data_home'])) {
    foreach ($this->data['data_home'] as $key => $value) {
        if ($value['content']!="") {
            $content = json_decode($value['content'], true);
        }
        if ($key==2) { ?>
                <!-- BEGIN TWO PRODUCTS -->
                  <div class="col-md-6 two-items-bottom-items">
                    <h2><?php echo $value['title'];?></h2>
                    <div class="owl-carousel owl-carousel2">

                        <?php 
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>
                                <div>
                                <div class="product-item">
                                  <div class="pi-img-wrapper">
                                    <img src="<?php echo base_url_cloud().'timthumb.php?src='.$_web['base_url_cdn'].$v['image'].'&h=550&w=600&zc=2';?>" class="img-responsive" alt="Berry Lace Dress">
                                    <div>
                                      <a href="<?php echo $_web['base_url_cdn'].$v['image'];?>" class="btn btn-default fancybox-button">Zoom</a>
                                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view" data-id="<?php echo $v['id'];?>">View</a>
                                    </div>
                                  </div>
                                  <h3><a href="<?php echo base_url().'product/'.alias($v['name']).'-'.$v['id'].'.htm';?>"><?php echo $v['name'];?></a></h3>
                                  <div class="pi-price">$<?php echo ($sale==true) ? number_format($v['saleoff'],0,'','.') : number_format($v['price'],0,'','.');?></div>
                                  <a href="javascript:void(0);" class="btn btn-default add2cart" data-id="<?php echo $v['id'];?>"> Add To Cart</a>
                                      <input type="hidden" class="hidden_product" value="<?php echo $v['name'];?>" />
                                      <input type="hidden" class="hidden_price" value="<?php if ($sale==true) { 
                                                                                        echo $v['saleoff'];
                                                                                    }else{
                                                                                        echo $v['price'];
                                                                                    }?>">
                                  <?php echo ($sale==true) ? '<div class="sticker sticker-sale"></div>' : '';?>
                                  <?php 
                                  if ($v['state']!="") {
                                      $pos = strpos($v['state'], "|3|");
                                      if ($pos !== false) {
                                        echo '<div class="sticker sticker-new"></div>';
                                      }
                                  }
                                  ?>
                                </div>
                              </div>

                                <?php 
                            }
                        }
                        ?>

                    </div>
                  </div>
                  <!-- END TWO PRODUCTS -->
        <?php 
        }

    }
}
?>



  
  <!-- BEGIN PROMO -->
  <div class="col-md-6 shop-index-carousel">
    <div class="content-slider">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo base_url().'themes/shopdefault/public/';?>images/index-sliders/slide1.jpg" class="img-responsive" alt="Berry Lace Dress">
          </div>
          <div class="item">
            <img src="<?php echo base_url().'themes/shopdefault/public/';?>images/index-sliders/slide2.jpg" class="img-responsive" alt="Berry Lace Dress">
          </div>
          <div class="item">
            <img src="<?php echo base_url().'themes/shopdefault/public/';?>images/index-sliders/slide3.jpg" class="img-responsive" alt="Berry Lace Dress">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PROMO -->
</div>        
<!-- END TWO PRODUCTS & PROMO -->
