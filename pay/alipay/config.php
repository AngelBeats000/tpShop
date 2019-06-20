<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016093000630982",

		//商户私钥
		'merchant_private_key' => "MIIEogIBAAKCAQEA2iK/njabQT+kQsq41EwHG5VQ4gD4NKT6GZznhgA6CBQxCqdL5VJRflbhaw4+u6B1n9aa/G8Kf6LbWM0Ug2l5abD8bmjHwFe+gv+suBiI8seEgnO+Cx7Tba7hZU0TI7iIowiqxotyhPBLvn0odp341+MmcyAEOvN+twOjMr3ufNcbfyC9s4x9JfyBoZJka8B0g0XQPAFlUPHpXCMbZIBlfRfMPELqngPLO8I8AS4/lfdE0BrVfp3qpGRVTsk1Lgn/mhXeQtk0GiTvTA42TBoQhFZkNloZRxei5fWcYDFtjm+A84ERWN2aOTvI1UkOQPzthZ23yUWZAz5aUlDFUqEgZwIDAQABAoIBAC6vRSdNNIkQX81TqZ717od+u2LDJlvN+yDELeDF56WW/K/1Ag9AQOSzH2dUEyUAwGvG+ECSW0LZzewBaCR/zFZMZJoUnruRi9ppccOsrJKZFMj+kGu82y8cQGz3w+LfOY766eG4Mng1HWDVVHWedYVuvenhrkYXmsT8aE8Ryxq4YaTKfTRk1hxI26TP/nKj5TWdugo8jqXIdez72iigVkFBXRHOpaZYC2xJ966jnmNXZeBM3tawZjiRhk0YV1KdDBM3YRN3wQlpmJ6Sk+5HCtyHcn3c6osd4tWcBF80E+LmJOjENQHncKVCXYRF3kPepb8zL+V6oLF/lwQOv7ODl/ECgYEA8O6SwgnNi/sNigfdFiiq38eMOi92AzLHBZuedjKto62KHzhV5PlP7QaaM4mvx/5sTF1H0wKHZ0EFfLOKRxGV0azbQ2XAKp52p6k+lRQ61UH/FkebeD7BOlB8HafcKz86oKQkQALbFrkFhrKT+rYI3eg+kZDxSqm+E03LpiSW1U0CgYEA58cyuVs5zdklzAVmi1uJFMwGZWPsW3fM3JIpnvGatTl1GlveSNQXBCD7IlY3KCR8v5TU/yJplDLcnyzGKyC3zt3MP8WJrZUKDKSdSDTvFvt7WfRzNIG0S/ln7+VCxK68au8ntYSnPpsPZ4DvN4DvSThitOaNNkqaONxVc9O04oMCgYBpM0LRhwZBQPXAd36J1mgGHlOUdHTLILjWMgUXBznaZkQRLcAToujLTj62kkA2y1juXyylbk1BQJrswFh4f60zSI7U9vDZqyeUPcodvh+STqbbS5kPABfPJqWLLWhtWcZ3rjRF3vlbCp7nGcKTjjiA7I+lb+xr9YIRW764ZPGXYQKBgF/ZUrKwdSEZcbYDbbqnqfK9xM9dGTtiOYflseyXAWF8V18FKtF3U+VTNkem27xwCl63z7WKp5qvxejVfUYMi7aypmqg6CSug69iy+A2c8FPUl2K57GJCeR5SXA9oPTxRd369LLuHrOXMDGfck3DtjDTbo5c4XzYMRrek0AJBr69AoGAIpftbeghKScM7ckXHbDsa2svh/entNE1niuJ6neWc3dDwkQUHO5WuaB8Yigo8yoSWlu5HW+TJMLKvzWuwqxOMX3W6sMqBjpx3pTl+f8h4mZ24EONgTT0052Nsa5m4zqMAeWTrkUl/MenVY5XRK6XvEKDGXKlgVqPR7n0Fn7IISw=",
		
		//异步通知地址
		'notify_url' => "http://127.0.0.1/shop/public/index.php/index/Flow/aliNotify",
		
		//同步跳转
		'return_url' => "http://127.0.0.1/shop/public/index.php/index/Flow/paySuccess",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2iK/njabQT+kQsq41EwHG5VQ4gD4NKT6GZznhgA6CBQxCqdL5VJRflbhaw4+u6B1n9aa/G8Kf6LbWM0Ug2l5abD8bmjHwFe+gv+suBiI8seEgnO+Cx7Tba7hZU0TI7iIowiqxotyhPBLvn0odp341+MmcyAEOvN+twOjMr3ufNcbfyC9s4x9JfyBoZJka8B0g0XQPAFlUPHpXCMbZIBlfRfMPELqngPLO8I8AS4/lfdE0BrVfp3qpGRVTsk1Lgn/mhXeQtk0GiTvTA42TBoQhFZkNloZRxei5fWcYDFtjm+A84ERWN2aOTvI1UkOQPzthZ23yUWZAz5aUlDFUqEgZwIDAQAB",
);