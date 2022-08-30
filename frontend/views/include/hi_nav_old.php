<p class="title_text1">Home Improvement 사업부문</p>

<div class="sub2_tab2">
    <a data-active = '150' href="<?php echo site_url('page/hi/41/150')?>">HI</a>
    <a data-active = '53' href="<?php echo site_url('page/network/41/53')?>">홈네트워크</a>
    <a data-active = '54' href="<?php echo site_url('page/service/41/54')?>">Customer Satisfaction</a>
</div>
<script>
    var _where = '<?php echo $this->uri->segment(4)?>';
    document.querySelector('[data-active = "'+_where+'"]').className = 'active';
</script>