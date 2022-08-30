<!DOCTYPE html>
<html lang="kr">
	<?php $this->load->view('include/head') ?>
<body>
	<?php $this->load->view('include/header') ?>
    <?php $this->load->view('include/bg_common') ?>
<div class="sub3_1">
    <div class="sub3_1_section1">
        <div class="container">
            <div class="row">
				<div class="col-xs-12" style="padding-top: 65px; text-align: center;">
					<?php $this->load->view('include/announce_nav') ?>
					<p class="title_text1" style="margin-top: 0px !important;">공시정보</p>
					<!--<p>Business Ethics</p>-->
					<div class="line"></div>    
				</div>
	  		<div>
    	</div>
    </div>
	<div class="sub3_1_section2">
		<div class="container">
			<div class="row">      
				<div class="col-lg-12 fleft">
					<div class="kr_form">
						<div class="kr_form_table" id="tableMain">
							
							
						</div> 
					</div>
				</div>
				<div class="clearfix"></div>
				<!--<div class="search_for">
					<form  action="" method="get" >
						<input type="text" value="" name="search_word" id="" placeholder="" />
						<button type="submit">검색</button>
					</form>
				</div>-->
					
				<nav aria-label="..." class="nav_block" id="pagenation" style="text-align: center;">
					
				</nav>
			</div>
		</div>
	</div>
	<div class="sub4_2 sub_content">
		<div class="container">
			<div class="row">
				<div class="title">
					<h1>자이 S&D 공시정보관리규정</h1>
				</div>
			</div>
			<div class="row cs_center text-left">
				<a href="<?php echo base_url()?>resource/frontend/images/managementrule.pdf" target="_blank">
					<img src="<?php echo base_url()?>resource/frontend/images/managementrule.png" class="img-responsive cs_img center-block">
				</a>
			</div>
		</div>
	</div>
</div>

<script>
    function dart (page) {
        
        //var url = 'https://opendart.fss.or.kr/api/list.json?crtfc_key=c8db2f45cb98be574dac43d4cec3ec77b63cfcb6&corp_code=317400&bgn_de=20210101&end_de=20220606&corp_cls=Y&page_no='+page+'&page_count=10';
        $.ajax({
            type: 'POST',
            url: '/page/dataURL/165',
            data: {page:page},
            success: function (data) {
				var jsonObj = JSON.parse(data);
				
				$("#tableMain").html("");
				$("#tableMain").html('<div class="kr_form_tr form_big_title"><div class="kr_form_td form_sorting">No.</div><div class="kr_form_td ">제목</div><div class="kr_form_td form_auther">등록일</div></div>');

				var html = '';

				//onclick="window.open('https://dart.fss.or.kr/dsaf001/main.do?rcpNo=20220531002250', '_blank', 'left=50,top=20,width=910,height=900,scrollbars=yes');"
				
				var startIdx = jsonObj.total_count - (jsonObj.page_count*(jsonObj.page_no-1));
				for (let i = 0; i < jsonObj.list.length; i++) {
					html += '<div class="kr_form_tr">';
					html += '<div class="kr_form_td form_sorting">'+(startIdx-i)+'</div>';
					html += '<div class="kr_form_td form_title"><a onclick="window.open(\'https://dart.fss.or.kr/dsaf001/main.do?rcpNo='+jsonObj.list[i].rcept_no+'\', \'_blank\', \'left=50,top=20,width=910,height=900,scrollbars=yes\');">'+jsonObj.list[i].report_nm+'</a></div>';
					var dt_str = jsonObj.list[i].rcept_dt;
					html += '<div class="kr_form_td form_auther">'+dt_str.substr(0,4)+'-'+dt_str.substr(4,2)+'-'+dt_str.substr(6,2)+'</div>';
					html += '</div>';
				}
				$("#tableMain").append(html);
            },
            error: function (request, status, error) {
                console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
            }
        });
        $.ajax({
            type: 'POST',
            url: '/page/dataURL/165',
            data: {page:page},
            success: function (data) {
				var jsonObj = JSON.parse(data);
				//console.dir(jsonObj);
				$("#pagenation").html("");

				var html = '<ul class="pagination">';
				if(jsonObj.page_no>=12){
					//html += '<li class="first"><a href="javascript:dart(1);" data-ci-pagination-page="1" rel="start">처음</a></li>';
				};
				if(jsonObj.page_no>1){
					html += '<li class="prev"><a href="javascript:dart(1);" data-ci-pagination-page="1" rel="prev">«</a></li>';
				}
				
				for (let i = 1; i <= jsonObj.total_page; i++) {
					if(jsonObj.page_no<5) {
						if(i<10){
							if(i==jsonObj.page_no) {
								html += '<li class="active"><a href="javascript:dart('+i+');">'+i+'</a></li>';
							} else {
								html += '<li class=""><a href="javascript:dart('+i+');">'+i+'</a></li>';
							}
						}
					} else if (jsonObj.page_no>jsonObj.total_page-4){
						if(i>jsonObj.total_page-9){
							if(i==jsonObj.page_no) {
								html += '<li class="active"><a href="javascript:dart('+i+');">'+i+'</a></li>';
							} else {
								html += '<li class=""><a href="javascript:dart('+i+');">'+i+'</a></li>';
							}
						}	
					} else {
						if(i>(jsonObj.page_no-5)&&i<(jsonObj.page_no+5)){
							if(i==jsonObj.page_no) {
								html += '<li class="active"><a href="javascript:dart('+i+');">'+i+'</a></li>';
							} else {
								html += '<li class=""><a href="javascript:dart('+i+');">'+i+'</a></li>';
							}
						}
					}
				}
				if(jsonObj.page_no != jsonObj.total_page) {
					html += '<li class="next"><a href="javascript:dart('+(jsonObj.total_page)+');" data-ci-pagination-page="'+(jsonObj.total_page)+'" rel="next">»</a></li>';
				}
				html += '</ul>'
				$("#pagenation").append(html);
            },
            error: function (request, status, error) {
                console.log('code: '+request.status+"\n"+'message: '+request.responseText+"\n"+'error: '+error);
            }
        });

        
    }
    dart(1);

</script>
	<?php $this->load->view('include/footer') ?>
	<?php $this->load->view('include/footer_script') ?>

</body>
</html>
