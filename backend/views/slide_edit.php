<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
    <!--右侧部分开始-->
    <div id="page-wrapper">


    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>슬라이드 수정</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('slide/update'); ?>">
                            <input type="hidden" name="slide_index" id="slide_index" value="<?php echo $slide['slide_index']?>">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">슬라이드 이름</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $slide['slide_name']?>" name="slide_name" id="slide_name">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">슬라이드 카태고리</label>

                            <div class="col-sm-10">
                                    <select class="form-control m-b" name="category_slide_index" id="category">
                                        
                                        <?php foreach($category_slide_list as $v):?>
                                        <option value="<?php echo $v['category_slide_index']?>" <?php if($slide['category_slide_index'] == $v['category_slide_index']):?>selected<?php endif;?> data-type="">
                                            <?php echo $v['category_slide_name']?>
                                        </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                           <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">슬라이드 이미지 보기</label>

                                <div class="col-sm-10">
                            
                                   <img src="<?php echo $slide['slide_image']?>" width="50%" height="50%">
                                
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">슬라이드 이미지</label>

                                <div class="col-sm-10">
                            
                                    <input type="file" name="slide_image" id="slide_image">
                                    <input type="hidden" name="slide_image_bak" id="slide_image_bak" value="<?php echo $slide['slide_image']?>">
                                    <br/>
                                    <span style="font-size:16px;font-weight:600">(<?php foreach($category_slide_list as $vv):?><?php echo $vv['category_slide_name']?>【<?php echo $vv['category_slide_width']?>&nbsp;&nbsp;<?php echo $vv['category_slide_height']?>】<?php endforeach;?>)</span>
                                
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">노출여부</label>

                                <div class="col-sm-10">
									<label class="checkbox-inline i-checks">
                                    <input type="radio" name="slide_option" value="0" <?php if($slide['slide_option'] == 0):?>checked<?php endif;?>>YES</label>
                                    <label class="checkbox-inline i-checks">
                                    <input type="radio" name="slide_option" value="1" <?php if($slide['slide_option'] == 1):?>checked<?php endif;?>>NO</label>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">순서</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $slide['slide_sort']?>" name="slide_sort" id="slide_sort">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">슬라이드 설명</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $slide['slide_description']?>" name="slide_description" id="slide_description">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <input class="btn btn-primary" type="submit" name="submit" value="SAVE">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
        <!--右侧部分结束-->
    </div>
<?php
$this->load->view('footer');
?>
    <!-- 自定义js -->
    <script src="<?php echo base_url(); ?>resource/admin/js/content.js?v=1.0.0"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>resource/admin/js/plugins/iCheck/icheck.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
 

    <!-- Web Uploader -->

    <script type="text/javascript">
        var BASE_URL = '<?php echo base_url(); ?>resource/admin/js/plugins/webuploader';
	    var UPLOAD_URL = '<?php echo site_url("article/webuploader"); ?>';
    </script>

	 <script src="<?php echo base_url(); ?>resource/admin/js/plugins/webuploader/webuploader.min.js"></script>
	 <script src="<?php echo base_url(); ?>resource/admin/js/demo/webuploader-demo.js"></script>