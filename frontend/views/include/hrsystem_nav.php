<div class="sub2_4_1_section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="sub2_tab2" style="text-align:center;">
                    <a data-active = 'educulture' onclick="javascript:selector(this);" class="active">교육제도/조직문화</a>
                    <a data-active = 'welfare' onclick="javascript:selector(this);" class="">복리후생</a>
                    <a data-active = 'compensation' onclick="javascript:selector(this);" class="">보상제도</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="educulture" class="row cs_center text-left" style="margin-top: 20px; display: block;">
    <div class="col-md-12 col-sm-12">
        <h4>교육제도</h4>
        <h3>자이S&D는 직무전문성과 리더십을 갖춘 인재 육성을 실천하고 있습니다.</h3>
        
        <div style="display: inline-block;">
            <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/safetycheck_1.jpg" class="img-responsive cs_img pull-left">
            <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/safetycheck_2.jpg" class="img-responsive cs_img pull-left">
            <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/safetycheck_3.jpg" class="img-responsive cs_img pull-left">
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <h4>조직문화</h4>
        <h3>각 본부별 조직문화 CA(Change Agent), CC(Culture Coordinator)를 운영하여, 조직문화 개선을 위한 다양한 활동을 전개해 나가고 있습니다.</h3>
        
        <div style="display: inline-block;">
            <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/safetyconf.jpg" class="img-responsive cs_img pull-left">
        </div>
    </div>
</div>
<div id="welfare" class="row cs_center text-left" style="margin-top: 20px; display: none;">
    <div class="col-md-12 col-sm-12">
        <h4>복리후생</h4>
        <h3>각 본부별 조직문화 CA(Change Agent), CC(Culture Coordinator)를 운영하여, 조직문화 개선을 위한 다양한 활동을 전개해 나가고 있습니다.</h3>
    
        <div style="display: inline-block;">
            <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/safetyrules.png" class="img-responsive cs_img pull-left">
        </div>
    </div>
 
</div>
<div id="compensation" class="row cs_center text-left" style="margin-top: 20px; display: none;">
    <div class="col-md-12 col-sm-12">
        <h4>성과에 기반한 보상</h4>
        <h3>① 공정한 성과관리 - 자이S&D는 역량평가와 업적평가에 근거한 공정한 성과관리 체계를 구축하고 있습니다.</h3>
        <h3>② 합리적 보상 - 성과에 근거한 공정한 보상과 개인별 차등 보상체계를 적용하여 합리적 보상을 실시하고 있습니다.</h3>
        <h3>③ 성과급 지급 - 조직별 성과에 기반하여 수익의 일부를 성과급으로 지급하고 있습니다.</h3>
        <div style="display: inline-block;">
        <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/checkact_1.jpg" class="img-responsive cs_img pull-left">
            <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/checkact_2.jpg" class="img-responsive cs_img pull-left">
            <img style="margin: 0 20px 0 20px;" src="<?php echo base_url()?>resource/frontend/images/checkact_3.jpg" class="img-responsive cs_img pull-left">
        </div>
    </div>
</div>


<script>
    //클릭시 활성 / 비활성 구분
    function selector(e) {
        var _value = e.getAttribute( 'data-active' );
        // var _queryId = document.getElementById(''+_queryId);
        // _queryId.style.display= "block";
        $('#educulture').css('display','none');
        $('#welfare').css('display','none');
        $('#compensation').css('display','none');
        document.querySelector('[data-active = "educulture"]').classList.remove('active');
        document.querySelector('[data-active = "welfare"]').classList.remove('active');
        document.querySelector('[data-active = "compensation"]').classList.remove('active');
        
        
        
        $('#'+_value).css('display','block');
        e.className='active';
        
    }
</script>
