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
	  <div class="product_list text-center">
	  	<!-- Nav tabs -->
		<ul class="nav-tabs">
			<li><a href="<?php echo site_url('page/products')?>?active=cat_01">홈네트워크 시스템</a></li>
			<li><a href="<?php echo site_url('page/products')?>?active=cat_03">로비폰</a></li>
			<li><a href="<?php echo site_url('page/products')?>?active=cat_04">도어폰</a></li>
			<li class="active" ><a href="<?php echo site_url('page/products')?>?active=cat_05">경비실기</a></li>
		</ul>
	  	<h3>홈네트워크 시스템</h3>
	  	<div class="product_detail">
	  		<div class="product_title">
	  			EGP-0720
	  		</div>
	  		<div class="product_content">
	  			<img src="<?php echo base_url()?>resource/frontend/images/product/product_05_01.jpg" class="img-responsive center-block">
	  			<div class="intro text-left">
	  				<!-- <h4 class="intro_brand">제조사/브랜드<span>자이 S&amp;D</span></h4> -->
	  				<p class="intro_title">제품설명</p>
	  				<div class="intro_name">제원</div>
	  				<div class="intro_content">
	  					<ul>
	  						<li>디스플레이 : 7인치 LCD</li>
	  						<li>인터페이스 : 터치 스크린(감압식), 푸시 버튼 방식</li>
	  						<!-- <li>카메라 : 200만화소</li> -->
	  						<li>전원 : AC free voltage</li>
	  						<li>크기 : 412(W) X 134(H) X 104(D)mm</li>
	  					</ul>
	  				</div>
	  				<div class="clearfix"></div>
	  				<div class="intro_name">기능</div>
	  				<div class="intro_content">
	  					<ul>
	  						<li>통화방식 : 핸즈프리, 수화기</li>
	  						<li>우회통화</li>
	  						<li>통화 및 문열림 : 월패드/로비폰 통화, 공동현관 문열림</li>
	  						<li>홈 시큐리티 : 세대 방범 알림 및 이력 관리</li>
	  						<li>기타 : 공지사항, 택배 알림</li>
	  					</ul>
	  				</div>
	  				<div class="clearfix"></div>
	  			</div> 
	  		</div>
	  	</div>
		<div class="article">    
		   <p><a href="<?php echo site_url('page/product_4_2')?>"><b><i><img src="<?php echo base_url()?>resource/frontend/images/arrow_top.png" alt=""></i>이전글</b>EDP-S51</a></p>
		   <p><a ><b><i><img src="<?php echo base_url()?>resource/frontend/images/arrow_bottom.png" alt=""></i>다음글</b>다음글이 없습니다.</a></p>
		   <div class="list_button_block"><a href="<?php echo site_url('page/products')?>?active=cat_05" class="list_button">목록</a></div>
		</div>
	  	<div class="clearfix"></div>
	  </div>
    </div>
    
  </div>
  
</div>
	<?php $this->load->view('include/footer') ?>
	<?php $this->load->view('include/footer_script') ?>

</body>
</html>