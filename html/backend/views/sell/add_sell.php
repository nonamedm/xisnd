<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

$this->load->view( 'header' );

?>
<style type="text/css">
/*2018.10.09后台文件上传*/

.file_num{

    height: 34px;

    margin-bottom: 24px;

    margin-top: 50px;

    max-width: 500px;

    border:1px solid rgba(210,210,210,1);

}



.file_num .p1{

    width:80px;

    height:32px;

    position: relative;

    top: -6px;

    font-size: 16px;

    color: #5e5e5e;

    line-height: 34px;

    text-align: center;

    display: inline-block;

    background:rgba(248,248,246);

    border-right:1px solid rgba(210,210,210,1);

}

.file_name{

  width: 300px;

  height: 30px;

  margin:0;

  margin-left: 0px;

  padding-left: 8px;

  font-size:16px;

  border:0;

  position: relative;

  top: -6px;

  line-height: 15px;

  color: #999;

}

a.input {

  width:84px;

  height:28px;

  line-height: 25px;

  color: #222;

  font-size: 16px;

  background:rgba(248,248,246,1);

  border:1px solid rgba(210,210,210,1);

  text-align:center;

  display:inline-block;

  overflow:hidden;

  position:relative;

  top:2px;

  margin-left: 15px;

}

a{

  text-decoration:none;
}

.ff {

  opacity:0;

  filter:alpha(opacity=0);

  font-size:100px;

  position:absolute;

  top:0;

  right:0;

}

.dd-placeholder:before {

  content:'';

  display:block;

  background:#000;

  border-top:2px solid #24b7e5;

  margin-top:-2px;

}



</style>
<link href="<?php echo base_url(); ?>resource/admin/icon-css/flag-icon.css" rel="stylesheet">
<!--右侧部分开始-->

<div id="page-wrapper">

	<div class="wrapper wrapper-content animated fadeInRight">

		<div class="row">

			<div class="col-sm-12">

				<div class="ibox float-e-margins">

					<div class="ibox-title">

						<h5>단지추가</h5>

					</div>

					<div class="ibox-content">

						<form id="article" name="article" method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('sell/insert_sell'); ?>">
						<input type="hidden" name="xi_article_index" id="xi_article_index">
						<input type="hidden" name="create_time" id="create_time" value="<?php echo time();?>">
								<table class="table table-bordered form_table">

									<tbody>
										
										<tr>

											<td class="left">제목</td>

											<td><input type="text" placeholder="" class="form-control my_form_input" name="xi_article_title" id="xi_article_title">

											</td>

										</tr>

										<tr>
										<style>
											.faq_type{
												width:200px;margin-right:5px;
											}
										</style>
										<td class="left">지역설정</td>

										<td>
											<select class="form-control my_form_input" name="xi_article_category_index" id="xi_article_category_index">
												<?php foreach($regional_list as $r):?>
												<option value="<?php echo $r['xi_article_category_index'];?>"><?php echo $r['xi_article_category_name'];?></option>
												<?php endforeach; ?>
											</select>
										</td>

										</tr>

										<tr>

											<td class="left">썸네일 업로드</td>

											<td><input type="file" name="xi_article_image" id="xi_article_image">

											</td>

										</tr>

										<tr>

											<td class="left">위치</td>

											<td><input type="text" placeholder="" class="form-control my_form_input" name="xi_article_location" id="xi_article_location">

											</td>

										</tr>
										<tr>

											<td class="left">세대수</td>

											<td><input type="text" placeholder="" class="form-control my_form_input" name="xi_article_num" id="xi_article_num">

											</td>

										</tr>
										<tr>

											<td class="left">면적</td>

											<td><input type="text" placeholder="" class="form-control my_form_input" name="xi_article_size" id="xi_article_size">

											</td>

										</tr>
										<tr>

											<td class="left">입주시기</td>

											<td><input type="text" placeholder="" class="form-control my_form_input" name="xi_article_time" id="xi_article_time">

											</td>

										</tr>
										<tr>

										<td class="left">단지상태</td>

										<td>

											<label class="checkbox-inline i-checks m-r-sm">
                                    		<input type="radio" name="is_state" value="1" style="margin-right: 5px;" checked>공사중</label>
											<label class="checkbox-inline i-checks m-r-sm">
                                    		<input type="radio" name="is_state" value="2" style="margin-right: 5px;">입주중</label>
                                    		<label class="checkbox-inline i-checks m-r-sm">
                                    		<input type="radio" name="is_state" value="3" style="margin-right: 5px;">입주완료</label>

										</td>
									</tr>
									<tr>
                                            <td class="left">단지안내 내용</td>
                                            <td>
                                                <script src="<?php echo base_url()?>resource/ckeditor/ckeditor.js"></script>
                                                <textarea name="xi_article_content1" id="xi_article_content1" rows="3"></textarea>
                                                <script>
                                                    var editor_parents1 = document.getElementById( 'xi_article_content1' );

                                                    CKEDITOR.replace( 'xi_article_content1', {
                                                        language: 'ko-kr',
                                                        toolbar : 'MyConfig',
                                                        }).on( 'change' , function(){
                                                        $( editor_parents1 ).val( CKEDITOR.instances[ 'xi_article_content1' ].getData() ).change();
                                                        });
                                                </script>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="left">특장점 내용</td>
                                            <td>
                                                <script src="<?php echo base_url()?>resource/ckeditor/ckeditor.js"></script>
                                                <textarea name="xi_article_content2" id="xi_article_content2" rows="3"></textarea>
                                                <script>
                                                    var editor_parents2 = document.getElementById( 'xi_article_content2' );

                                                    CKEDITOR.replace( 'xi_article_content2', {
                                                        language: 'ko-kr',
                                                        toolbar : 'MyConfig',
                                                        }).on( 'change' , function(){
                                                        $( editor_parents2 ).val( CKEDITOR.instances[ 'xi_article_content2' ].getData() ).change();
                                                        });
                                                </script>
                                            </td>
                                        </tr>
									</tbody>

								</table>


								<div class="ibox-title" style="height: auto;">

									<h5 style="padding-top: 10px; margin-right: 15px;">공사현장</h5>
									
									<button type="button" class="btn btn-info" style="padding:6px 12px;" data-toggle="modal" data-target="#construction_add_model_pop" id="construction_add_btn">추가</button>
								
								</div>

								<style>
									.panel-body {
										padding: 10px 0px !important;
										width: 100%;
										float: left;
									}
									
									.panel-body> .table-responsive {
										margin-bottom: 10px;
										margin-top: 10px;
									}
								</style>
								<div class="table-responsive" style="margin-top:30px;">
									<table class="table table-bordered">
										<thead>
											<tr>
											
												<th>제목</th>
											
												<th>전체공정률(%)</th>
											
												<th>건축공사</th>
											
												<th>건축공사(%)</th>
											
												<th>전기공사</th>
											
												<th>전기공사(%)</th>
											
												<th>토목공사</th>
											
												<th>토목공사(%)</th>
											
												<th>설비공사</th>
											
												<th>설비공사(%)</th>
												<th>작업</th>
											</tr>
										</thead>
										<tbody id="construction_tbody" style="text-align: center;">

										</tbody>
									</table>
								</div>
								<div class="table-responsive" style="">
									<table class="table table-bordered form_table">

										<tbody style="text-align: center;">
											<tr>

										<td class="left">슬라이드 업로드</td>

										<td class="left54" > 
											<div style="float:left;"> 
					                              <button type="button" class="btn btn-success add button1" name="signup" >추가하기</button>

					                              <button type="button" class="btn btn-danger delete button2" name="signup" >삭제하기</button>  
					                          </div>
					                          <div class="file_num">
					                              <div class="p1">파일 0</div><a href="javascript:void(0);" class="input">파일선택
					                              	<input type="file" class="ff" name="img_file[]"></a><input type="text"  class="file_name" readonly="readonly" value="선택된 파일 없음" /><br><input type="text" class="form-control my_form_input" name="img_title[]"><br>
					                              	</a>
					                          </div>
					                          

										</td>
									</tr>
										</tbody>
									</table>
								</div>

								<div style="clear: both"></div>
								<div class="ibox-title" style="height: auto;">

									<h5 style="padding-top: 10px; margin-right: 15px;">평형정보</h5>
									<button type="button" class="btn btn-info" style="padding:6px 12px;" data-toggle="modal" data-target="#content_modal" id="content_modal_btn">추가</button>
								</div>

								<div style="clear: both"></div>
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>제목</th>
												<th>내용</th>
												<th>작업</th>
											</tr>
										</thead>
										<tbody id=content_tbody style="text-align: center;">

										</tbody>
									</table>
								</div>
								<div style="clear: both"></div>

								<div style="text-align:right; margin-top: 30px;">
								<a class="btn btn-primary" id="ajax_sub">저장하기</a>
								<button style="display: none;" class="btn btn-primary" id="sell_list_submit" type="submit" name="submit">저장하기</button>
								<a href="<?php echo site_url('sell/sell_list');?>"><input class="btn btn-primary" type="button" name="button" value="목록"></a>

								</div>

							</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>





<div class="modal fade" id="content_modal" tabindex="-1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="content_modal">평형정보</h4>
			</div>
			<div class="modal-body">
				<div class="table-responsive country_search_table">
					<table class="table table-bordered form_table">

						<tbody>

							<tr>

								<td  class="left" style="text-align: center;">
									제목
								</td>

							</tr>
							<tr>
							<td>
									<input type="text" class="form-control" id="xi_article_info_title" name="xi_article_info_title" value="">
								</td>
							</tr>
							<tr>

								<td class="left" style="text-align: center;">내용</td>
								
							</tr>
                               <tr>
								<td style="padding: 15px 5px;">

								
                                                <script src="<?php echo base_url()?>resource/ckeditor/ckeditor.js"></script>
                                                <textarea name="xi_article_info_content" id="xi_article_info_content" rows="3"></textarea>
								</td>

							</tr>

						</tbody>

					</table>
				</div>
				<div style="width: 100%; text-align: right;"><button type="button" class="btn btn-info" style="padding:6px 12px;" id="content_add_btn">저장하기</button>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
			</div>
		</div>
	</div>
</div>
<!--右侧部分结束-->




<div class="modal fade" id="construction_add_model_pop" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="">공사현장</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered form_table">

					<tbody>

									
						<tr>

							<td class="left">제목</td>
							<td>
								<input type="text" class="form-control" id="xi_year_title" name="xi_year_title" value="">
							</td>

						</tr>
						
						<tr>

							<td class="left">전체공정률(%)</td>
							<td>
								<input type="text" class="form-control" id="xi_year_totle_percent" name="xi_year_totle_percent" value="">
							</td>

						</tr>
						<tr>

							<td class="left">건축공사(%)</td>
							<td>
								<input type="text" class="form-control" id="xi_year_colum2" name="xi_year_colum2" value="">
							</td>

						</tr>
						<tr>

							<td class="left">전기공사(%)</td>
							<td>
								<input type="text" class="form-control" id="xi_year_colum4" name="xi_year_colum4" value="">
							</td>

						</tr>
						<tr>

							<td class="left">토목공사(%)</td>
							<td>
								<input type="text" class="form-control" id="xi_year_colum6" name="xi_year_colum6" value="">
							</td>

						</tr>
						<tr>

							<td class="left">설비공사(%)</td>
							<td>
								<input type="text" class="form-control" id="xi_year_colum8" name="xi_year_colum8" value="">
							</td>

						</tr>
						
						<tr>

							<td class="left">건축공사</td>
							<td>
								<textarea class="form-control"  id="xi_year_colum1" name="xi_year_colum1" rows="3"></textarea>
							</td>

						</tr>
						<tr>

							<td class="left">전기공사</td>
							<td>
							<textarea class="form-control"  id="xi_year_colum3" name="xi_year_colum3" rows="3"></textarea>
							</td>

						</tr>
						<tr>

							<td class="left">토목공사</td>
							<td>
								<textarea class="form-control"  id="xi_year_colum5" name="xi_year_colum5" rows="3"></textarea>
							</td>

						</tr>

						<tr>

							<td class="left">설비공사</td>
							<td>
							<textarea class="form-control"  id="xi_year_colum7" name="xi_year_colum7" rows="3"></textarea>
								
							</td>
						</tr>
						

					</tbody>

				</table>
				<div style="width: 100%; text-align: right;"><button type="button" class="btn btn-info" id="add_new_construction_btn" style="padding:6px 12px;">저장하기</button>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('footer');?>
<!-- 自定义js -->
<style>

.xi_article_info_content img{

	width: 100px;
	height:50px;
}
</style>
<script src="<?php echo base_url(); ?>resource/admin/js/content.js?v=1.0.0"></script>
<script>
        window.url_list = {

            editor_url : '<?php echo base_url(); ?>resource/ckeditor/',

            update_images : '<?php echo site_url('article/uploadContentImage');?>',

            upload_file_url : '<?php echo base_url()?>uploads/article/'

        };
    </script>

<script src="<?php echo base_url(); ?>resource/admin/js/plugins/iCheck/icheck.min.js"></script>

<script>


$( document ).ready( function () {
var editor_3 =  CKEDITOR.replace( 'xi_article_info_content', {
                                                        language: 'ko-kr',
                                                        toolbar : 'MyConfig',
                                                        });


 var editor_parents3 = document.getElementById( 'xi_article_info_content' );

                                                   editor_3.on( 'change' , function(){
                                                        $( editor_parents3 ).val( CKEDITOR.instances[ 'xi_article_info_content' ].getData() ).change();
                                                        });
$("#ajax_sub").click(function(){

	var form_array = $("#article").serializeArray(),obj = {};
    
	$( form_array ).each(function( key , value ){

		obj[value.name] = obj[value.name] || {};
		
		obj[value.name][Object.keys( obj[value.name] ).length] = value.value;
	
	});
	
	$.ajax({
　　　　 url : "<?php echo site_url('sell/insertAjax');?>",
　　　　 type : "post",
        dataType:"json",
　　 	data: {
				'form_array':form_array,
				'ajax_data':ajax_data,
				'content_ajax_data':content_ajax_data
			},
　　　　success : function(success_data) {
	   console.log(success_data.status);
　　　　if(success_data.status=="1"){

			$("#xi_article_index").val(success_data.id);
			$("#sell_list_submit").trigger("click");
		}else{
			
		}
　　}
});

});



		var option = "";
		var _this = "";
		var data_index = 0;
		var ajax_data = new Array();


		$( "#construction_add_btn" ).click( function () {
			option = "add";

		} );

		$( document ).on( "click", ".delete_btn", function () {

			if($(this).parent().parent().attr("data-index")==""){
				var r = confirm( "삭제하시겠습니까?" )
			if ( r == true ) {
				$( this ).parent().parent().remove();
				ajax_data = [];

				$( "#construction_tbody > tr" ).each( function () {
					ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_year_title': $( this ).find( ".xi_year_title" ).html(),
						'xi_year_totle_percent': $( this ).find( ".xi_year_totle_percent" ).html(),
						'xi_year_colum1': $( this ).find( ".xi_year_colum1" ).html(),
						'xi_year_colum2': $( this ).find( ".xi_year_colum2" ).html(),
						'xi_year_colum3': $( this ).find( ".xi_year_colum3" ).html(),
						'xi_year_colum4': $( this ).find( ".xi_year_colum4" ).html(),
						'xi_year_colum5': $( this ).find( ".xi_year_colum5" ).html(),
						'xi_year_colum6': $( this ).find( ".xi_year_colum6" ).html(),
						'xi_year_colum7': $( this ).find( ".xi_year_colum7" ).html(),
						'xi_year_colum8': $( this ).find( ".xi_year_colum8" ).html()
					} );
				} );
		
			} else {

			}
			}else{
				var r = confirm( "삭제하시겠습니까?" )
			if ( r == true ) {
				
		         
		         $.ajax({
　　　　 url : "<?php echo site_url('sell/insertAjax');?>",
　　　　 type : "post",
        dataType:"json",
　　 	data: {
				
				'data_index':$(this).parent().parent().attr("data-index")
			},
　　　　success : function(success_data) {
	   console.log(success_data.status);
　　　　if(success_data.status=="1"){
	     $( this ).parent().parent().remove();
				ajax_data = [];

				$( "#construction_tbody > tr" ).each( function () {
					ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_year_title': $( this ).find( ".xi_year_title" ).html(),
						'xi_year_totle_percent': $( this ).find( ".xi_year_totle_percent" ).html(),
						'xi_year_colum1': $( this ).find( ".xi_year_colum1" ).html(),
						'xi_year_colum2': $( this ).find( ".xi_year_colum2" ).html(),
						'xi_year_colum3': $( this ).find( ".xi_year_colum3" ).html(),
						'xi_year_colum4': $( this ).find( ".xi_year_colum4" ).html(),
						'xi_year_colum5': $( this ).find( ".xi_year_colum5" ).html(),
						'xi_year_colum6': $( this ).find( ".xi_year_colum6" ).html(),
						'xi_year_colum7': $( this ).find( ".xi_year_colum7" ).html(),
						'xi_year_colum8': $( this ).find( ".xi_year_colum8" ).html()
					} );
				} );
		}else{
			
		}
　　}
});


			} else {

			}

			}
			

		} );
		$( document ).on( "click", ".change_btn", function () {
			option = "change";
			_this = $( this );
			$( '#construction_add_model_pop' ).modal( 'show' );
			$( "#xi_year_title" ).val( $( this ).parent().parent().find( ".xi_year_title" ).html() );
			$( "#xi_year_totle_percent" ).val( $( this ).parent().parent().find( ".xi_year_totle_percent" ).html() );
			$( "#xi_year_colum1" ).val( $( this ).parent().parent().find( ".xi_year_colum1" ).html() );
			$( "#xi_year_colum2" ).val( $( this ).parent().parent().find( ".xi_year_colum2" ).html() );
			$( "#xi_year_colum3" ).val( $( this ).parent().parent().find( ".xi_year_colum3" ).html() );
			$( "#xi_year_colum4" ).val( $( this ).parent().parent().find( ".xi_year_colum4" ).html() );
			$( "#xi_year_colum5" ).val( $( this ).parent().parent().find( ".xi_year_colum5" ).html() );
			$( "#xi_year_colum6" ).val( $( this ).parent().parent().find( ".xi_year_colum6" ).html() );
			$( "#xi_year_colum7" ).val( $( this ).parent().parent().find( ".xi_year_colum7" ).html() );
			$( "#xi_year_colum8" ).val( $( this ).parent().parent().find( ".xi_year_colum8" ).html() );

		} );
		$( "#add_new_construction_btn" ).click( function () {
			var xi_year_title = $( "#xi_year_title" ).val();
			var xi_year_totle_percent = $( "#xi_year_totle_percent" ).val();
			var xi_year_colum1 = $( "#xi_year_colum1" ).val();
			var xi_year_colum2 = $( "#xi_year_colum2" ).val();
			var xi_year_colum3 = $( "#xi_year_colum3" ).val();
			var xi_year_colum4 = $( "#xi_year_colum4" ).val();
			var xi_year_colum5 = $( "#xi_year_colum5" ).val();
			var xi_year_colum6 = $( "#xi_year_colum6" ).val();
			var xi_year_colum7 = $( "#xi_year_colum7" ).val();
			var xi_year_colum8 = $( "#xi_year_colum8" ).val();

			if ( option == "add" ) {


				data_index++;

				$( "#construction_tbody" ).prepend( '<tr data-index='+""+'><td class="xi_year_title">' + xi_year_title + '</td><td class="xi_year_totle_percent">' + xi_year_totle_percent + '</td><td class="xi_year_colum1">' + xi_year_colum1 + '</td><td class="xi_year_colum2">' + xi_year_colum2 + '</td><td class="xi_year_colum3">' + xi_year_colum3 + '</td><td class="xi_year_colum4">' + xi_year_colum4 + '</td><td class="xi_year_colum5">' + xi_year_colum5 + '</td><td class="xi_year_colum6">' + xi_year_colum6 + '</td><td class="xi_year_colum7">' + xi_year_colum7 + '</td><td class="xi_year_colum8">' + xi_year_colum8 + '</td><td class="change_option"><a class="btn btn-success btn-xs change_btn">수정</a> <a class="btn btn-danger btn-xs delete_btn">삭제</a></td></tr>' );
				ajax_data = [];

				$( "#construction_tbody > tr" ).each( function () {
					ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_year_title': $( this ).find( ".xi_year_title" ).html(),
						'xi_year_totle_percent': $( this ).find( ".xi_year_totle_percent" ).html(),
						'xi_year_colum1': $( this ).find( ".xi_year_colum1" ).html(),
						'xi_year_colum2': $( this ).find( ".xi_year_colum2" ).html(),
						'xi_year_colum3': $( this ).find( ".xi_year_colum3" ).html(),
						'xi_year_colum4': $( this ).find( ".xi_year_colum4" ).html(),
						'xi_year_colum5': $( this ).find( ".xi_year_colum5" ).html(),
						'xi_year_colum6': $( this ).find( ".xi_year_colum6" ).html(),
						'xi_year_colum7': $( this ).find( ".xi_year_colum7" ).html(),
						'xi_year_colum8': $( this ).find( ".xi_year_colum8" ).html()
					} );
				} );
				
				 var arr = ajax_data;
				
				console.log(arr);
				$("#year_list").val();


				$( "#xi_year_title" ).val( "" );
				$( "#xi_year_totle_percent" ).val( "" );
				$( "#xi_year_colum1" ).val( "" );
				$( "#xi_year_colum2" ).val( "" );
				$( "#xi_year_colum3" ).val( "" );
				$( "#xi_year_colum4" ).val( "" );
				$( "#xi_year_colum5" ).val( "" );
				$( "#xi_year_colum6" ).val( "" );
				$( "#xi_year_colum7" ).val( "" );
				$( "#xi_year_colum8" ).val( "" );



			} else if ( option == "change" ) {

				var xi_year_title = $( "#xi_year_title" ).val();
				var xi_year_totle_percent = $( "#xi_year_totle_percent" ).val();
				var xi_year_colum1 = $( "#xi_year_colum1" ).val();
				var xi_year_colum2 = $( "#xi_year_colum2" ).val();
				var xi_year_colum3 = $( "#xi_year_colum3" ).val();
				var xi_year_colum4 = $( "#xi_year_colum4" ).val();
				var xi_year_colum5 = $( "#xi_year_colum5" ).val();
				var xi_year_colum6 = $( "#xi_year_colum6" ).val();
				var xi_year_colum7 = $( "#xi_year_colum7" ).val();
				var xi_year_colum8 = $( "#xi_year_colum8" ).val();

				ajax_data = [];
				_this.parent().parent().html( '<td class="xi_year_title">' + xi_year_title + '</td><td class="xi_year_totle_percent">' + xi_year_totle_percent + '</td><td class="xi_year_colum1">' + xi_year_colum1 + '</td><td class="xi_year_colum2">' + xi_year_colum2 + '</td><td class="xi_year_colum3">' + xi_year_colum3 + '</td><td class="xi_year_colum4">' + xi_year_colum4 + '</td><td class="xi_year_colum5">' + xi_year_colum5 + '</td><td class="xi_year_colum6">' + xi_year_colum6 + '</td><td class="xi_year_colum7">' + xi_year_colum7 + '</td><td class="xi_year_colum8">' + xi_year_colum8 + '</td><td class="change_option"><a class="btn btn-success btn-xs change_btn">수정</a> <a class="btn btn-danger btn-xs delete_btn">삭제</a></td>' );

				$( "#construction_tbody > tr" ).each( function () {
					ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_year_title': $( this ).find( ".xi_year_title" ).html(),
						'xi_year_totle_percent': $( this ).find( ".xi_year_totle_percent" ).html(),
						'xi_year_colum1': $( this ).find( ".xi_year_colum1" ).html(),
						'xi_year_colum2': $( this ).find( ".xi_year_colum2" ).html(),
						'xi_year_colum3': $( this ).find( ".xi_year_colum3" ).html(),
						'xi_year_colum4': $( this ).find( ".xi_year_colum4" ).html(),
						'xi_year_colum5': $( this ).find( ".xi_year_colum5" ).html(),
						'xi_year_colum6': $( this ).find( ".xi_year_colum6" ).html(),
						'xi_year_colum7': $( this ).find( ".xi_year_colum7" ).html(),
						'xi_year_colum8': $( this ).find( ".xi_year_colum8" ).html()
					} );
				} );
				
				$( "#xi_year_title" ).val( "" );
				$( "#xi_year_totle_percent" ).val( "" );
				$( "#xi_year_colum1" ).val( "" );
				$( "#xi_year_colum2" ).val( "" );
				$( "#xi_year_colum3" ).val( "" );
				$( "#xi_year_colum4" ).val( "" );
				$( "#xi_year_colum5" ).val( "" );
				$( "#xi_year_colum6" ).val( "" );
				$( "#xi_year_colum7" ).val( "" );
				$( "#xi_year_colum8" ).val( "" );
				$( '#construction_add_model_pop' ).modal( 'hide' );


			}
		
			

		} );
		
		$('#construction_add_model_pop').on('hidden.bs.modal', function (e) {
				$( "#xi_year_title" ).val( "" );
				$( "#xi_year_totle_percent" ).val( "" );
				$( "#xi_year_colum1" ).val( "" );
				$( "#xi_year_colum2" ).val( "" );
				$( "#xi_year_colum3" ).val( "" );
				$( "#xi_year_colum4" ).val( "" );
				$( "#xi_year_colum5" ).val( "" );
				$( "#xi_year_colum6" ).val( "" );
				$( "#xi_year_colum7" ).val( "" );
				$( "#xi_year_colum8" ).val( "" );
		});


	var content_option = "";
		var content_this = "";
		var content_data_index = 0;
		var content_ajax_data = new Array();


		$( "#content_modal_btn" ).click( function () {
			content_option = "add";

		} );

		$( document ).on( "click", ".content_delete_btn", function () {

			if($( this ).parent().parent().attr("data-index")==""){

						var t = confirm( "삭제하시겠습니까?" )
			if ( t == true ) {
				$( this ).parent().parent().remove();
				content_ajax_data = [];

				$( "#content_tbody > tr" ).each( function () {
					content_ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_article_info_title': $( this ).find( ".xi_article_info_title" ).html(),
						'xi_article_info_content': $( this ).find( ".xi_article_info_content" ).html(),
					} );
				} );
				console.log( content_ajax_data );
			} else {

			}
			}else{

					var t = confirm( "삭제하시겠습니까?" )
			if ( t == true ) {
 $.ajax({
　　　　 url : "<?php echo site_url('sell/insertAjax');?>",
　　　　 type : "post",
        dataType:"json",
　　 	data: {
				
				'data_index':$(this).parent().parent().attr("data-index")
			},
　　　　success : function(success_data) {
	   console.log(success_data.status);
　　　　if(success_data.status=="1"){
	    $( this ).parent().parent().remove();
				content_ajax_data = [];

				$( "#content_tbody > tr" ).each( function () {
					content_ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_article_info_title': $( this ).find( ".xi_article_info_title" ).html(),
						'xi_article_info_content': $( this ).find( ".xi_article_info_content" ).html(),
					} );
				} );
				console.log( content_ajax_data );
		}else{
			
		}
　　}
});


			} else {

			}

			}
			

		} );
		$( document ).on( "click", ".content_change_btn", function () {
			content_option = "change";
			content_this = $( this );
			$( '#content_modal' ).modal( 'show' );
			$( "#xi_article_info_title" ).val( $( this ).parent().parent().find( ".xi_article_info_title" ).html() );
			$( "#xi_article_info_content" ).val( $( this ).parent().parent().find( ".xi_article_info_content" ).html() );
			editor_3.setData($( "#xi_article_info_content" ).val( $( this ).parent().parent().find( ".xi_article_info_content" ).html() ));                      
				
		} );
		$( "#content_add_btn" ).click( function () {

			var xi_article_info_title = $( "#xi_article_info_title" ).val();
			var xi_article_info_content = $( "#xi_article_info_content" ).val();

			if ( content_option == "add" ) {

				content_data_index++;

				$( "#content_tbody" ).prepend( '<tr data-index='+""+'><td class="xi_article_info_title">' + xi_article_info_title + '</td><td class="xi_article_info_content">' + xi_article_info_content + '</td><td class="change_option"><a class="btn btn-success btn-xs content_change_btn">수정</a> <a class="btn btn-danger btn-xs content_delete_btn">삭제</a></td></tr>' );
				content_ajax_data = [];

				$( "#content_tbody > tr" ).each( function () {
					content_ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_article_info_title': $( this ).find( ".xi_article_info_title" ).html(),
						'xi_article_info_content': $( this ).find( ".xi_article_info_content" ).html(),
					} );
				} );
				console.log( content_ajax_data );
				$( "#xi_article_info_title" ).val( "" );
				editor_3.setData('');                      
				$( "#xi_article_info_content" ).val( "" );

			} else if ( content_option == "change" ) {

				var xi_article_info_title = $( "#xi_article_info_title" ).val();
				var xi_article_info_content = $( "#xi_article_info_content" ).val();

				
				content_this.parent().parent().html( '<td class="xi_article_info_title">' + xi_article_info_title + '</td><td class="xi_article_info_content">' + xi_article_info_content + '</td><td class="change_option"><a class="btn btn-success btn-xs content_change_btn">수정</a> <a class="btn btn-danger btn-xs content_delete_btn">삭제</a></td>' );
                 
				content_ajax_data = [];

				$( "#content_tbody > tr" ).each( function () {
					content_ajax_data.push( {
						'id': $( this ).attr( "data-index" ),
						'xi_article_info_title': $( this ).find( ".xi_article_info_title" ).html(),
						'xi_article_info_content': $( this ).find( ".xi_article_info_content" ).html(),
					} );
				} );
				console.log( content_ajax_data );
				$( '#content_modal' ).modal( 'hide' );
				$( "#xi_article_info_title" ).val( "" );
				editor_3.setData('');                      
				$( "#xi_article_info_content" ).val( "" );
			}

		} );
		
		$( '#content_modal' ).on('hidden.bs.modal', function (e) {
				$( "#xi_article_info_title" ).val( "" );
				editor_3.setData('');                      
				$( "#xi_article_info_content" ).val( "" );

		});


	} );
</script>
<script> 

  var i=0;

$(".add").click(function(){

    i=$(".left54").children('.file_num').length;

    $(".left54").append('<div class="file_num"><div class="p1">파일 <span>'+i+'</span></div><a href="javascript:void(0);" class="input">파일선택<input type="file" class="ff" name="img_file[]"></a><input type="text" class="file_name" readonly="readonly" value="선택된 파일 없음" /><br><input type="text" class="form-control my_form_input" name="img_title[]"><br></div>');
});

$(".delete").click(function(){

  $(".left54>.file_num:last-child").remove();

});
$(document).on("change",".ff",function(){

            var fileSize = this.files[0].size;

            var size = fileSize / 1024 / 1024;

            if (size > 5) {

                alert("최대 5MB 이하 첨부 가능！");

                this.value="";

                return false;

            }else{

                // $(".file_name").val($(this).val());  

                $(this).parents('.input').siblings('.file_name').val($(this).val());  

            }

        });
</script>