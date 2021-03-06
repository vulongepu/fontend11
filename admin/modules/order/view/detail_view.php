<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="dashboard-breadcrumb">
        <div class="pull-left">
            <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> <?php echo lang('dashboard'); ?></a></li>
                        <li><?php echo lang('order'); ?></li>
            <li class="active"><?php echo lang('order_detail'); ?></li>
      </ol>

        </div>
        <div class="pull-right">
            <a class="btn-main with-icon" data-toggle="modal" data-target="#widget_manager" href="#"></a>
        </div>
        <div class="clearfix"></div>
    </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          
          <form action="<?php echo base_url().'posts/posts/save'?>" method="post">
          <input type="hidden" name="id_posts" value="<?php if(isset($this->data['data']['id'])) echo $this->data['data']['id'];?>">
      <div class="col-md-12" style="min-height:750px;">
          <div class="tabbable-custom ">
            <?php 
                    if (isset($this->data['flash_success'])) {
                        echo '<div class="alert alert-success">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <strong>'.lang('success').'</strong> '.$this->data['flash_success'].'
                                </div>';
                    }
                    ?>
              <ul class="nav nav-tabs ">
                  <li class="active">
                      <a href="#tab_detail" data-toggle="tab" aria-expanded="true"><?php echo lang('detail');?></a>
                  </li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane active" id="tab_detail">

                      <div class="row">
                        

                            <div class="col-md-6">
                              
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Thông tin người mua</h3>
                                  <div class="pull-right">
                                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                  
                                    </span>
                                  </div>
                                </div>
                                <div class="panel-body">
                                      <table class="table table-hover" id="dev-table">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td><?php echo lang('fullname');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_buy']['fullname'];?></td>
                                          </tr>
                                          <tr>
                                            <td><?php echo lang('email');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_buy']['email'];?></td>
                                          </tr>
                                          <tr>
                                            <td><?php echo lang('phone');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_buy']['phone'];?></td>
                                          </tr>
                                          <tr>
                                            <td><?php echo lang('address');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_buy']['full_address'];?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                              </div>

                        </div>
                        <div class="col-md-6">

                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Thông tin người nhận</h3>
                                  <div class="pull-right">
                                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                  
                                    </span>
                                  </div>
                                </div>
                                <div class="panel-body">
                                      <table class="table table-hover" id="dev-table">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td><?php echo lang('fullname');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_receive']['fullname'];?></td>
                                          </tr>
                                          <tr>
                                            <td><?php echo lang('email');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_receive']['email'];?></td>
                                          </tr>
                                          <tr>
                                            <td><?php echo lang('phone');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_receive']['phone'];?></td>
                                          </tr>
                                          <tr>
                                            <td><?php echo lang('address');?></td>
                                            <td><?php echo $this->data['data_info_order']['info_receive']['full_address'];?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                              </div>

                        </div>
                        <div class="col-md-6">
                          
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Đơn giá</h3>
                                  <div class="pull-right">
                                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                  
                                    </span>
                                  </div>
                                </div>
                                <div class="panel-body">
                                      <table class="table table-hover" id="dev-table">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th></th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Mã đơn hàng</td>
                                            <td><?php echo $this->data['data_info_order']['invoice']; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Tiền hàng</td>
                                            <td><?php echo covertMoney($this->data['data_info_order']['sub_total']).' '. $this->data['data_info_order']['currency_code']; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Phí vận chuyển</td>
                                            <td><?php echo covertMoney($this->data['data_info_order']['shippingFee']).' '. $this->data['data_info_order']['currency_code']; ?></td>
                                          </tr>
                                          <tr>
                                            <td>Tổng tiền</td>
                                            <td><?php echo covertMoney($this->data['data_info_order']['total']).' '. $this->data['data_info_order']['currency_code']; ?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                
                              </div>

                        </div>
                        <div class="col-md-6">
                          
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Ghi chú</h3>
                                  <div class="pull-right">
                                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                  
                                    </span>
                                  </div>
                                </div>
                                <div class="panel-body">
                                  <div class="form-group">
                                      <label class="col-sm-12 control-label text-left">Trạng thái: </label>
                                      <div class="col-sm-12">
                                        <select class="form-control" id="status">
                                            <?php 
                                            if (!empty($this->data['order_status'])) {
                                                foreach ($this->data['order_status'] as $key => $value) {
                                                    if ($value['id']==$this->data['data_info_order']['status']) {
                                                       $selected = ' selected';
                                                    }else{
                                                      $selected='';
                                                    }
                                                    echo '<option value="'.$value['id'].'" '.$selected.'>'.$value['title'].'</option>';
                                                }
                                            }
                                            ?>
                                            
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-12 control-label text-left"><?php echo lang('note_content');?></label>
                                      <div class="col-sm-12">
                                          <textarea class="form-control" id="note" name="note" cols="50" rows="5">
                                            <?php if(isset($this->data['data_info_order']['note'])) echo trim($this->data['data_info_order']['note']); ?>
                                          </textarea>

                                      </div>
                                  </div>
                                  <div style="clear: both;"></div>
                                  <br/>
                                  <div class="col-md-12 sidebar-box text-left">
                                      <div class="form-group">
                                          <div class="form-actions">
                                              <div class="btn-set">
                                                  <button type="button" value="save" id="save_order" class="btn btn-success" data-id="<?php echo $this->data['data_info_order']['id'];?>"><i class="fa fa-save"></i> <?php echo lang('save_one');?></button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>


                                </div>
                              </div>


                        </div>
                        
                        <div class="col-md-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Thông tin sản phẩm đặt hàng</h3>
                                  <div class="pull-right">
                                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                  
                                    </span>
                                  </div>
                                </div>
                                <div class="panel-body">
                                      <table class="table table-hover" id="dev-table">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if (isset($this->data['data_info_order']['product']) && !empty($this->data['data_info_order']['product'])) {
                                          $stt = 1;
                                           foreach ($this->data['data_info_order']['product'] as $key => $value) { ?>
                                                   <tr>
                                                      <td><?php echo $stt++;?></td>
                                                      <td>
                                                          <img src="<?php echo (isset($value['image']) && $value['image']!='') ? base_url_cloud().'timthumb.php?src='.base_url_cloud().'cdn/'.$value['image'].'&h=80&w=100&zc=2' : base_url().'tmp/public/plugins/image_tools/timthumb.php?src='.base_url().'tmp/public/images/img.png&h=80&w=100&zc=2'; ?>" width="100" height="80" class="img-thumbnail"/>
                                                      </td>
                                                      <td><strong><?php echo $value['name'];?></strong>
                                                          <?php 
                                                          echo isset($value['size']) ? "<p>Size: <strong>".$value['size']."</strong>.</p>" : '';
                                                          echo isset($value['color']) ? "<p>Color: <strong>".$value['color']."</strong>.</p>" : '';
                                                          ?>
                                                      </td>
                                                      <td><?php echo covertMoney($value['price']) .' '.$this->data['data_info_order']['currency_code']; ?></td>
                                                      <td><?php echo $value['quantity']; ?></td>
                                                      <td><?php echo covertMoney($value['total']) .' '.$this->data['data_info_order']['currency_code']; ?></td>
                                                    </tr>
                                                    
                                            <?php 
                                           }
                                        }
                                        ?>
                                        </tbody>
                                      </table>
                                </div>
                              </div>
                        </div>





                      </div>
                          
                        





                  </div>
              </div>


              












          </div>
      </div>


</form>

  

      </div>
      <!-- /.row -->
      <!-- Main row -->

    </section>
    <!-- /.content -->
  </div>


<div class="loading"></div>
<div class="fade_loading"></div>