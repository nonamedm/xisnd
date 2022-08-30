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
                <h1>환경경영</h1>
            </div>
            <!--<div class="sub_title">자이S&amp;D에 대해 궁금하세요? 언제든지 문의하시면 신속하게 답변드립니다. </div>-->
        </div>
        <div class="row cs_center text-left">
            <h4>환경경영방침</h4>
            <div class="col-md-12 col-sm-12">
                <p>전 세계적으로 기후변화, 자원고갈, 물 부족 등 환경 이슈가 중요 이슈로 부상하고 있습니다. 이에 각 정부는 환경에 대한 규제를 강화하고 있으며, 자이 S&D는 환경 친화기업으로서 지속적인 고객만족 증대, 미래세대를 위한 환경보호, 자발적인 참여에 의한 지속적인 프로세스 개선을 통해 고객으로부터 신뢰받는 미래지향적 기업으로 성장 발전하고자 합니다.</p>
            </div>
            <img style="" src="<?php echo base_url()?>resource/frontend/images/env_policy.jpg" class="img-responsive cs_img center-block">
            <!-- <a href="<?php echo base_url()?>resource/frontend/images/env_policy.pdf" target="_blank">
                <img style="" src="<?php echo base_url()?>resource/frontend/images/env_policy.jpg" class="img-responsive cs_img center-block">
            </a> -->
        </div>
        <div class="row cs_center text-left">
            <h4>환경인증서</h4>
            <div class="col-md-12 col-sm-12">
				<h3>ISO 14001 인증서</h3>
                <p>당사는 ISO 14001인증서를 2012년 최초 취득하였으며, 매년 사후관리, 3년 주기의 갱신심사를 통해 지속적 개선을 실시하고 있습니다.</p>
            </div>
            <a href="<?php echo base_url()?>resource/frontend/images/iso14001_full.png" target="_blank">
				<img src="<?php echo base_url()?>resource/frontend/images/iso14001.png" class="img-responsive cs_img pull-left">
			</a>
        </div>
    </div>
</div>
	<?php $this->load->view('include/footer') ?>
	<?php $this->load->view('include/footer_script') ?>

</body>
</html>
