<div class="sub2_4_1_section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="sub2_tab" style="text-align:center;">
                    <a data-active = 'announce' href="<?php echo site_url('page/announce/160/162')?>">공시정보</a>
                    <a data-active = 'notice' href="<?php echo site_url('article/notice/43/50?search_word=%EA%B3%B5%EC%8B%9C')?>">공고정보</a>
                    <a data-active = 'dividendpolicy' href="<?php echo site_url('page/dividendpolicy/160/166')?>">배당정책</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var _where = '<?php echo $this->uri->segment(2)?>';
    document.querySelector('[data-active = "'+_where+'"]').className = 'active';
</script>
<script src="//code.jquery.com/jquery.min.js"></script>


