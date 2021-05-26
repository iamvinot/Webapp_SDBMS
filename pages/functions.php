<?php

function send_SMS($number, $message) {
	$purl='';
	$qurl='&sendername=SMSPRO&message=';
	$rurl='&routetype=0';
	$smsurl=$purl.$commanumbers.$qurl.urlencode($message).$rurl;
	return file_get_contents($smsurl);
}
