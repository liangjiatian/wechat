<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016080200150263",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAqt+cjwHfsey+ISQwXvUpbHTLCNI80BGD3giLMOrfbnFDreXU55HXit4XfUxWsLCKnhf0FmywgdAfYmzdmDO6sg8TwTJC9iWzKAP41B9D649h6Ovwf39+PUGFRz7zYpf0HHMJLTWGCYFvDIJW9L13cGzlxZqHNPcQBg57J7+ll8ltUrWd2Fo0flyXjAKsLYBDxHt47k3eG8vwstde92MGqcpm3TRsqA04TBMdXpUCWSASlvBh7LXOoA+N/MWWUrmGc6ONcOqbt0GCNqWTox3hqKb14GMQtqJBewAUFMFfqbRjmiEcq+YbVNvAampNkxCvx70c8mzj9fNcbh+zUcc3fQIDAQABAoIBAC0WdgwyNWGQk5bRIsZbsIOCyfRY7V0F0iLrZDcTMsPEtVQUmjpEfHiTI+WXGCTlYJ5YubqVEXoffbiN+2bm93N2kQLgjVTAG+cKLUVjvptQqUg5wasS7C+js1RaYwR4DhzXqes4/VZSxgep+OH5gKO0yGh83wJ10s+WUJ7rbfl/6Z4Pq88/Yqb+Lv4H+9NFCa4mNTIuNg7jpYphZkQM2nO9i61c4mR5PwKZvjxz5hNJdvLLZxvlXIxnR+xMfDgSgXNgkxEAN3oBYLAvM7id0l9io6FUUVKGUUtrV+3YOTulb9ze3v8jRs8VON5C9BYvMlsms/WKKaxCd2pxe2iQBoECgYEA2C1Aei3tlM8ZOTFGcur+PkqBY5Y/xz7tPgFyWSpc0RYYOn5Gs8alh2j5A3KQ5rqJ2KgEdMpZOzket6BvnXTbFJHwAL/ViEYxrw9yKnfZFWL6FcFaipoOAtVFNxbSToQ4/ZLKaapJ5OaiIOBcLpqCaGYx9ESCre/jSntdvg3rUB0CgYEAylnjT2lrIUzOa3PXt1qQ3sbiNvjgTEmqoIsRm/KrEgZGyADT/zywm1IHkcjPl2ezm62aQX73amoJijO1X8nULZvbdCdM4PUznB6Z/KVch0Tnw6d6xN3kDdQo3T2liTTHc8qh+lhXRc5ndMOorleuFXzL2W6CSTuL4MleOlafpuECgYEAtwNgcc+OMow+A3BW/xU5Fw1Gi0P5TLpWaUcaQqidmZnF+0dKngpPutrA7g1A5UUJTHW6CBIDByNtgPH/bGMw0jJW6Jt/sHYUu+sssQ1zqCp6JI7kEzEnKXjaty/H7hb8lJiAaoJzOqmSmpi3EfFW9AGIyw5xP8Y2O6lDjJIGJHUCgYBixAUDGb1Ef6yxHdXIlNfpJMH9evRfyAUUX0y1BXkiTxX1QRI4nnLFHQC803sft2ofLlkAZux0cFU/s4Vvv59ks5Il25jWpFgQd49JlZzYGXXWNcTimjtZ1JgthI1rrus7RUhSXRQb6mbswyNuFTXPHx6QfjPxcrMPgLoRV36NgQKBgDJNTJdppXdr/Bs4JRTQzUazRSiQGRlFBwUgA744JHHaHA7OCoFCtiym9nR82I8hoViGMI0jyWdYofO/wBP2h/8eh6JU5+c32sxjU+iG2Fmy5zuSqY7DZqXY9uzOKjOb4j4x6rsWrMyW1IIPd0dImtkM8L/gnTwA8SVJh20od39A",
		
		//异步通知地址
		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1V48ZByUMalsVcTiIGHdMjXmaYbDXKoMvcmzCxLumZeVfCeJ34bfGKvJEjcOCBC3VINgwegCY/LLcJrcG9pd1zr+wKYR0zdqbfzsN9An6+J9735s5MYqTMbPaFMQ3VF3JdJK3+iYCnjiTdubuCSsGbsnNYRWjJrY6hPar6C1nSOYdWrupqPVYMfsbK6tCM1+Zt8CLBiKk5PsuztOvPEKIJVVQUycAyJQiMLOoQx/2k0agNnWWuPPnwmfN8HRhMMEEhO7GjBrctwtHm1I1BQqR3Mc7yo0xEkZvl8veycKulJ4LITYXse8Bk4FXd/cAxAALVwv6hhvIYVI06T0zgPa4QIDAQAB",
);