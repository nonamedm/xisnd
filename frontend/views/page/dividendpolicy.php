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
                <?php $this->load->view('include/announce_nav') ?>
                <h1>배당정책</h1>
            </div>
        </div>
        <div class="row cs_center text-left">
            <!--<h4>배당정책</h4>-->
            <div class="col-md-12 col-sm-12" style="margin-bottom:5%;">
                <p class="txtR">(단위:백만원)</p>
                <div class="tbList">
                    <table class="mng_01">
                        <caption>배당정책</caption>
                        <thead>
                            <tr>
                                <th scope="col" class="colm01">구분</th>
                                <th scope="col" class="colm02">2016년</th>
                                <th scope="col" class="colm03">2017년</th>
                                <th scope="col" class="colm04">2018년</th>
                                <th scope="col" class="colm05">2019년</th>
                                <th scope="col" class="colm06">2020년</th>
                                <th scope="col" class="colm07">2021년</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="colm01">배당률</td>
                                <td class="colm02">45%</td>
                                <td class="colm03">0%</td>
                                <td class="colm04">0%</td>
                                <td class="colm05">10%</td>
                                <td class="colm06">15%</td>
                                <td class="colm07">20%</td>
                            </tr>
                            <tr>
                                <td class="colm01">배당금</td>
                                <td class="colm02">5,003</td>
                                <td class="colm03">-</td>
                                <td class="colm04">-</td>
                                <td class="colm05">2,678</td>
                                <td class="colm06">4,017</td>
                                <td class="colm07">7,757</td>
                            </tr>
                            <tr>
                                <td class="colm01">당기순이익</td>
                                <td class="colm02">5,008</td>
                                <td class="colm03">8,411</td>
                                <td class="colm04">10,054</td>
                                <td class="colm05">11,856</td>
                                <td class="colm06">20,085</td>
                                <td class="colm07">36,557</td>
                            </tr>
                            <tr>
                                <td class="colm01">배당성향</td>
                                <td class="colm02">99.9%</td>
                                <td class="colm03">0.0%</td>
                                <td class="colm04">0.0%</td>
                                <td class="colm05">22.6%</td>
                                <td class="colm06">20.0%</td>
                                <td class="colm07">21.2%</td>
                            </tr>
                            <tr>
                                <td class="colm01">배당수익률</td>
                                <td class="colm02">45.0%</td>
                                <td class="colm03">0.0%</td>
                                <td class="colm04">0.0%</td>
                                <td class="colm05">1.7%</td>
                                <td class="colm06">1.2%</td>
                                <td class="colm07">2.1%</td>
                            </tr>
                            <tr>
                                <td class="colm01">배당종류</td>
                                <td class="colm02">현금배당</td>
                                <td class="colm03"></td>
                                <td class="colm04"></td>
                                <td class="colm05">현금배당</td>
                                <td class="colm06">현금배당</td>
                                <td class="colm07">현금배당</td>
                            </tr>
                            <tr>
                                <td class="colm01">주당배당금</td>
                                <td class="colm02">2,250</td>
                                <td class="colm03"></td>
                                <td class="colm04"></td>
                                <td class="colm05">100</td>
                                <td class="colm06">150</td>
                                <td class="colm07">200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <p class="txtL">※ 참고사항:<br> 1. 액면가 조정 5,000 --> 1,000원(2019년)<br>
                        2. 2019년 11월 6일 코스피시장 상장으로 상장전 배당수익률은 액면가 기준으로 산출함
                    </p>
            </div>
        </div>
    </div>
</div>
	<?php $this->load->view('include/footer') ?>
	<?php $this->load->view('include/footer_script') ?>

</body>
</html>
