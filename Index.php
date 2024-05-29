<html>
<body>
<?php
$cz='{
	"pages":[
		{
			"url": "https://freebitco.in/",
			"content": null,
			"urlSettings": {
				"operation": "GET",
				"encoding": "utf8",
				"headers": {},
				"data": null
			},
			"renderType": "jpg",

			"outputAsJson": true,
			"requestSettings": {
				"ignoreImages": false,
				"disableJavascript": false,
				"userAgent": "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.34 (KHTML, like Gecko) Safari/534.34 PhantomJS/2.0.0 (PhantomJsCloud.com/2.0.1)",
				"authentication": {
					"userName": "guest",
					"password": "guest"
				},
				"xssAuditingEnabled": false,
				"webSecurityEnabled": false,
				"resourceWait": 15000,
				"resourceTimeout": 35000,
				"maxWait": 35000,
				"waitInterval": 1000,
				"stopOnError": false,
				"resourceModifier": [],
				"customHeaders": {"cookie":"btc_address=1HbGL6Ena13CL1nkRBs6CbcxaomTkEMxJz; password=1d818952b33edc36e3e193511e87e437056bd209bd0a3dcc376f3f14b9c9f62c; fbtc_userid=49277932; fbtc_session=Ox4DrgIxPezpBZiLVbOqhsgh; have_account=1; login_auth=bfxiyA1GmJs93sRDYMDcj6s3; mobile=1; _ga_M568G97V6N=GS1.1.1716735784.3.1.1716736312.0.0.0; csrf_token=uCOLHg7MTDDY; btc_address=1HbGL6Ena13CL1nkRBs6CbcxaomTkEMxJz; password=1d818952b33edc36e3e193511e87e437056bd209bd0a3dcc376f3f14b9c9f62c; fbtc_userid=49277932; fbtc_session=Ox4DrgIxPezpBZiLVbOqhsgh; have_account=1; login_auth=bfxiyA1GmJs93sRDYMDcj6s3; mobile=1; csrf_token=uCOLHg7MTDDY"},
				"clearCache": false,
				"clearCookies": false,
				"cookies": [],
				"deleteCookies": []
			},
			"suppressJson": [
				"events.value.resourceRequest.headers",
				"events.value.resourceResponse.headers",
				"frameData.content",
				"frameData.childFrames"
			],
			"renderSettings": {
				"quality": 70,
				"pdfOptions": {
					"border": null,
					"footer": {
						"firstPage": null,
						"height": "1cm",
						"lastPage": null,
						"onePage": null,
						"repeating": "%pageNum%/%numPages%"
					},
					"format": "letter",
					"header": null,
					"height": null,
					"orientation": "portrait",
					"width": null
				},
				"clipRectangle": null,
				"renderIFrame": null,
				"viewport": {
					"height": 1280,
					"width": 1280
				},
				"zoomFactor": 1,
				"passThroughHeaders": false
			},
			"scripts": {
				"domReady": [],
				"loadFinished": []
			}
		}
	],
	"proxy":false
}';

function base64_to_jpeg( $base64_string, $output_file ) {
    $ifp = fopen( $output_file, "wb" ); 
    fwrite( $ifp, base64_decode( $base64_string) ); 
    fclose( $ifp ); 
    return( $output_file ); 
}
$i=0;
//while( true){
$url = 'http://PhantomJScloud.com/api/browser/v2/a-demo-key-with-low-quota-per-ip-address/';
$payload = $cz;
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => $payload
    )
);


$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);


//if ($result === FALSE) {  Handle error }
$obj = json_decode( $result );
$base64Enc = $obj->{"content"}->{"data"};
echo "<img src='data:image/jpeg;base64,$base64Enc' />";
echo "[$i]=> success your linkvertise\n";
$i++;
//}

?>
</body>
</html>
