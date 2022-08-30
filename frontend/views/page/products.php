<!DOCTYPE html>
<html lang="kr">
	<?php $this->load->view('include/head') ?>
<body>
	<?php $this->load->view('include/header') ?>
    <?php //$this->load->view('include/bg_common') ?>

<div class="sub6 bg_common">
  <p class="text1">제품소개</p>
  <p class="text2"><img src="<?php echo base_url()?>resource/frontend/images/home.png" alt=""><span>제품소개</span></p>
</div>
<div class="sub6_1 sub_content">
  <div class="container">
    <div class="row">
      <div class="title">
        <h1>제품소개</h1>
        <p>Products</p>
      </div>
	  <div class="product_list product_main text-center ">
	  		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation"><a href="#cat_01" aria-controls="cat_01" role="tab" data-toggle="tab">홈네트워크 시스템</a></li>
			<!--<li role="presentation"><a href="#cat_02" aria-controls="cat_02" role="tab" data-toggle="tab">홈오토메이션 시스템</a></li>-->
			<li role="presentation"><a href="#cat_03" aria-controls="cat_03" role="tab" data-toggle="tab">로비폰</a></li>
			<li role="presentation"><a href="#cat_04" aria-controls="cat_04" role="tab" data-toggle="tab">도어폰</a></li>
			<li role="presentation"><a href="#cat_05" aria-controls="cat_05" role="tab" data-toggle="tab">경비실기</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade" id="cat_01">
				<h3>홈네트워크 시스템</h3>
				<!--신규추가5종-->
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_1_7')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_07.jpg" class="img-responsive center-block">
						</div>
						<h6>ESW-1310</h6>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_1_6')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_06.jpg" class="img-responsive center-block">
						</div>
						<h6>ESW-1010</h6>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_1_5')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_05.jpg" class="img-responsive center-block">
						</div>
						<h6>EHW-1310</h6>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_1_4')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_04.jpg" class="img-responsive center-block">
						</div>
						<h6>EHW-1080</h6>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_1_3')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_03.jpg" class="img-responsive center-block">
						</div>
						<h6>EHW-1070</h6>
					</a>
				</div>
				<!--신규추가5종 끝-->
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_1_1')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_01.jpg" class="img-responsive center-block">
						</div>
						<h6>EHW-1050</h6>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_1_2')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_02.jpg" class="img-responsive center-block">
						</div>
						<h6>EHW-1060</h6>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="cat_02">
				<h3>홈오토메이션 시스템</h3>
				<div class="col-md-12 col-sm-12 item">
					<a href="<?php echo site_url('page/product_2_1')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_02_01.jpg" class="img-responsive center-block">
						</div>
						<h6>EAW-0710</h6>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="cat_03">
				<h3>로비폰</h3>
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_3_2')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_03_02.jpg" class="img-responsive center-block">
						</div>
						<h6>ELP-1010</h6>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 item">
					<a href="<?php echo site_url('page/product_3_1')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_03_01.jpg" class="img-responsive center-block">
						</div>
						<h6>ELP-0710</h6>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="cat_04">
				<h3>도어폰</h3>
				<div class="col-md-4 col-md-offset-2 col-sm-6 item">
					<a href="<?php echo site_url('page/product_4_4')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_04_04.jpg" class="img-responsive center-block">
						</div>
						<h6>EDP-S60</h6>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 item">
					<a href="<?php echo site_url('page/product_4_3')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_04_03.jpg" class="img-responsive center-block">
						</div>
						<h6>EDP-S61</h6>
					</a>
				</div>
				<div class="col-md-4 col-md-offset-2 col-sm-6 item">
					<a href="<?php echo site_url('page/product_4_1')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_04_01.jpg" class="img-responsive center-block">
						</div>
						<h6>EDP-S50</h6>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 item">
					<a href="<?php echo site_url('page/product_4_2')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_04_02.jpg" class="img-responsive center-block">
						</div>
						<h6>EDP-S51</h6>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="cat_05">
				<h3>경비실기</h3>
				<div class="col-md-12 col-sm-12 item">
					<a href="<?php echo site_url('page/product_5_1')?>">
						<div class="product_img">
							<img src="<?php echo base_url()?>resource/frontend/images/product/product_05_01.jpg" class="img-responsive center-block">
						</div>
						<h6>EGP-0720</h6>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	  </div>
    </div>
    
  </div>
  
</div>
	<?php $this->load->view('include/footer') ?>
	<?php $this->load->view('include/footer_script') ?>

</body>
</html>
