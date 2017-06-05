<?php
	
	function getSubstr($string, $start, $length) {
	    if(mb_strlen($string,'utf-8')>$length){
	        $str = mb_substr($string, $start, $length,'utf-8');
	        return $str.'...';
	    }else{
	        return $string;
	    }
	}

	function templogo($store_id,$width,$height)
	{
	    if(empty($store_id)) return '';
	    //判断缩略图是否存在
	    $path = "Public/upload/logo/thumb/$store_id/";
	    $logo_thumb_name ="logo_thumb_{$store_id}_{$width}_{$height}";
	  
	    // 这个商品 已经生成过这个比例的图片就直接返回了
	    if(file_exists($path.$logo_thumb_name.'.jpg'))  return '/'.$path.$logo_thumb_name.'.jpg'; 
	    if(file_exists($path.$logo_thumb_name.'.jpeg')) return '/'.$path.$logo_thumb_name.'.jpeg'; 
	    if(file_exists($path.$logo_thumb_name.'.gif'))  return '/'.$path.$logo_thumb_name.'.gif'; 
	    if(file_exists($path.$logo_thumb_name.'.png'))  return '/'.$path.$logo_thumb_name.'.png'; 
	        
	    $original_img = M('store')->where(array('store_id'=>$store_id))->getField('store_logo');
	    if(empty($original_img)) return '';
	    
	    if(!file_exists('.'.$original_img)){
	    	$tmp = explode('/',$original_img);
	    	$temp = $tmp[ count($tmp) - 1];
	    	unset($tmp[ count($tmp) - 1]);
	    	$tmp = implode('/',$tmp);
	    	if(!is_dir('.'.$tmp)) mkdir('.'.$tmp,0777,true);
	    	copy('http://www.yundi88.com'.$original_img,'.'.$tmp.'/'.$temp);
	    }
	    $original_img = '.'.$original_img; // 相对路径
        $image = new \Think\Image();
        $image->open($original_img);        
        $logo_thumb_name = $logo_thumb_name. '.'.$image->type();
        // 生成缩略图
        if(!is_dir($path)) mkdir($path,0777,true);      
        // 参考文章 http://www.mb5u.com/biancheng/php/php_84533.html  改动参考 http://www.thinkphp.cn/topic/13542.html
        $image->thumb($width, $height,2)->save($path.$logo_thumb_name,NULL,100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        return '/'.$path.$logo_thumb_name;
        // return '/'.$path.$logo_thumb_name;
	}

	function img_all($str)
    {
        preg_match_all("/<img.*?>/si",$str,$matches);
        foreach ($matches[0] as $val) {
            preg_match('/<img.*?src="(.*?)".*?>/is', $val,$img);
            copy_img($img[1]);
        }
    }

	function copy_img($original_img)
	{	
		if (file_exists('.'.$original_img)) return '';
		$tmp = explode('/',$original_img);
    	$temp = $tmp[ count($tmp) - 1];
    	unset($tmp[ count($tmp) - 1]);
    	$tmp = implode('/',$tmp);
    	if(!is_dir('.'.$tmp)) mkdir('.'.$tmp,0777,true);
    	copy('http://www.yundi88.com'.$original_img,'.'.$tmp.'/'.$temp);
	}

	function editorimg($img,$width,$height)
	{	
		$tmp = $img;
		$img2 = explode('/', $img);
		$num = count($img2);
		$img3 = explode('.',$img2[$num-1]);
		$img = $img3[0];
	    if(empty($img)) return '';
	    //判断缩略图是否存在
	    $path = "Public/upload/image/editor/$img/";
	    $logo_thumb_name ="image_editor_{$img}_{$width}_{$height}";
	  
	    // 这个商品 已经生成过这个比例的图片就直接返回了
	    if(file_exists($path.$logo_thumb_name.'.jpg'))  return '/'.$path.$logo_thumb_name.'.jpg'; 
	    if(file_exists($path.$logo_thumb_name.'.jpeg')) return '/'.$path.$logo_thumb_name.'.jpeg'; 
	    if(file_exists($path.$logo_thumb_name.'.gif'))  return '/'.$path.$logo_thumb_name.'.gif'; 
	    if(file_exists($path.$logo_thumb_name.'.png'))  return '/'.$path.$logo_thumb_name.'.png'; 
	        
	    $original_img = $tmp;
	    if(empty($original_img)) return '';
	    
	    $original_img = '.'.$original_img; // 相对路径
	    if(!file_exists($original_img)) return '';
        $image = new \Think\Image();
        $image->open($original_img);        
        $logo_thumb_name = $logo_thumb_name. '.'.$image->type();
        // 生成缩略图
        if(!is_dir($path)) mkdir($path,0777,true);      
        // 参考文章 http://www.mb5u.com/biancheng/php/php_84533.html  改动参考 http://www.thinkphp.cn/topic/13542.html
        $image->thumb($width, $height,2,'255,255,255')->save($path.$logo_thumb_name,NULL,100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        return '/'.$path.$logo_thumb_name;
        // return '/'.$path.$logo_thumb_name;
	}

	// 判断设备
	function is_mobile() {
	 	static $is_mobile = null;
	  
	 	if ( isset( $is_mobile ) ) {
	  		return $is_mobile;
	 	}
	  
	 	if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
	  		$is_mobile = false;
	 		} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false 
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
			|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
	   		$is_mobile = true;
		} else {
		  	$is_mobile = false;
		}
	  
	 	return $is_mobile;
	}