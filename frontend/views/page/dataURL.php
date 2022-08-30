<?php
    $page = $_REQUEST["page"];
    $url="https://opendart.fss.or.kr/api/list.json";
    
    $headers = [
        'Accept: ' . $_SERVER['HTTP_ACCEPT'],
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: ' . $_SERVER['HTTP_ACCEPT_LANGUAGE'],
        'Cache-Control: no-cache',
        'User-Agent: ' . $_SERVER['HTTP_USER_AGENT']
    ];
    $data = [
        'crtfc_key' => 'c8db2f45cb98be574dac43d4cec3ec77b63cfcb6',
        'corp_code' => '317400',
        'bgn_de' => '19900101',
        //'end_de' => '20220606',
        'corp_cls' => 'Y',
        'page_no' => $page,
        'page_count' => '10'
    ];
    $url .= '?'.http_build_query($data);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

	curl_close($ch);

	$json = json_decode($result);
    
	//echo "<pre>";
	echo $result;
    //print_r($json);
	//echo "</pre>";
?>

