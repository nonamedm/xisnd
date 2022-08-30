<!DOCTYPE html>
<html lang="kr">
	<?php $this->load->view('include/head') ?>
<body>
	<?php $this->load->view('include/header') ?>
    <?php $this->load->view('include/bg_common') ?>
<div class="sub4_2 sub_content">
	<div class="container">
		<div class="row">
		<div class="title">
			<?php $this->load->view('include/about_nav') ?>
			<h1>자이 S&amp;D 윤리경영</h1>
			<!--<p>Business Ethics</p>-->
      	</div>
		<div class="sub_title">
			<p style="text-indent: 0.1px;text-align: left;width: 70%;margin: 0 auto; font-size:15px;font-family:'맑은 고딕';"> 자이 S&amp;D는 투명하고 공정한 경영을 통해 고객과 사회가 신뢰하는 기업이 되기 위해 윤리규범을 제정, 시행함으로써 윤리경영의 토대를 마련하고,
		교육 및 시스템 구축 등의 다양한 윤리경영 활동을 지속적으로 전개해 오고 있습니다.</p>
		</div>
		<div class="row cs_center text-left">
            <h4>윤리경영 체계</h4>
            <div class="col-md-12 col-sm-12">
                <img src="<?php echo base_url()?>resource/frontend/images/ethmanagement_1.png" class="img-responsive cs_img center-block">
                
            </div>
        </div>
		<div class="row cs_center text-left">
            <h4>윤리경영 추진방향</h4>
            <div class="col-md-12 col-sm-12">
                <img src="<?php echo base_url()?>resource/frontend/images/ethmanagement_2.png" class="img-responsive cs_img center-block">
                
            </div>
        </div>

		<?php $this->load->view('include/about_nav2') ?>
	  
    </div>
    
  </div>
  
</div>
	<?php $this->load->view('include/footer') ?>
	<?php $this->load->view('include/footer_script') ?>

</body>
</html>
