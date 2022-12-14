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
            <li class="active"><a href="<?php echo site_url('page/products')?>?active=cat_01">홈네트워크 시스템</a></li>
			<li><a href="<?php echo site_url('page/products')?>?active=cat_03">로비폰</a></li>
			<li><a href="<?php echo site_url('page/products')?>?active=cat_04">도어폰</a></li>
			<li><a href="<?php echo site_url('page/products')?>?active=cat_05">경비실기</a></li>
		</ul>
	  	<h3>홈네트워크 시스템</h3>
	  	<div class="product_detail">
	  		<div class="product_title">
              ESW-1010
	  		</div>
	  		<div class="product_content">
	  			<img src="<?php echo base_url()?>resource/frontend/images/product/product_01_06.jpg" class="img-responsive center-block">
	  			<div class="intro text-left">
	  				<!-- <h4 class="intro_brand">제조사/브랜드<span>자이 S&amp;D</span></h4> -->
	  				<p class="intro_title">제품설명</p>
	  				<div class="intro_name">제원</div>
	  				<div class="intro_content">
	  					<ul>
	  						<li>디스플레이 : 10.1인치(HD), 정전식 터치 스크린</li>
	  						<li>인터페이스 : 터치스크린</li>
	  						<li>전원 : AC free voltage</li>
	  						<li>크기 : 245(W) X 163.9(H) X 8.9(D)mm</li>
	  					</ul>
	  				</div>
                    <div class="clearfix"></div>
                    <div class="intro_name">기능</div>
	  				<div class="intro_content">
	  					<ul>
	  						<li>원격제어 : 스마트폰(APP)</li>
	  						<li>RF : Wifi, BT, Zigbee(옵션) 지원</li>
	  						<li>통화 및 문열림 : 세대현관/공동현관 방문자 영상 확인 및 통화, 공동현관 문열림, 디지털도어락 문열림 연동</li>
	  						<li>홈 시큐리티 : 방범 및 비상 알림, 방문자 사진 저장 및 확인</li>
	  						<li>홈 컨트롤 : 에너지 관리(냉난방, 전력 등), 가스,조명, 환기, 스마트케어(모드제어), 실시간 에너지, 서브폰 연동(주방TV폰, 욕실TV폰, 욕실폰)</li>
	  						<li>공용시스템 연동 : 차량 입차 정보, 무인택배, 엘리베이터 호출, 지하주차장 비상콜</li>
	  						<li>디지털 컨텐츠 : 날씨 정보, 시간 정보, 주차위치 알림, 공지사항, 관리비, 커뮤니티 시설 정보 조회 및 예약(옵션), 전자주민투표, 음성메모</li>
	  						<li>음성인식 : 카카오 i 음성엔진 탑재</li>
	  					</ul>
	  				</div>
	  				<div class="clearfix"></div>
	  			</div> 
	  		</div>
	  	</div>
		<div class="article">        
		   <p><a href="<?php echo site_url('page/product_1_5')?>"><b><i><img src="<?php echo base_url()?>resource/frontend/images/arrow_top.png" alt=""></i>이전글</b>EHW-1050</a></p>
		   <p><a href="<?php echo site_url('page/product_1_7')?>"><b><i><img src="<?php echo base_url()?>resource/frontend/images/arrow_bottom.png" alt=""></i>도어폰</b>ELP-0710</a></p>
		   <div class="list_button_block"><a href="<?php echo site_url('page/products')?>?active=cat_01" class="list_button">목록</a></div>
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
