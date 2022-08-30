<div class="sub2_4_1_section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="sub2_tab" style="text-align:center;">
                    <a data-active = 'about' href="<?php echo site_url('page/about/42/136')?>">윤리경영</a>
                    <a data-active = 'magazine' href="<?php echo site_url('page/magazine/42/134')?>">사이버 신문고</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var _where = '<?php echo $this->uri->segment(2)?>';
    document.querySelector('[data-active = "'+_where+'"]').className = 'active';
</script>
