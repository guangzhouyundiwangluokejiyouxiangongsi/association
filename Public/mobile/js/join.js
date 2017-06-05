$(function(){

      $('#sex label').eq(0).css('background','url(/Public/mobile/img/sex_check.png) no-repeat left center /20%')
      $('#sex label input').click(function(){
         $('#sex label input').parent().css('background','url(/Public/mobile/img/sex_default.png) no-repeat left center /20%')
        if($('#sex label input').attr("checked")){
          $(this).parent().css({
            'background':'url(/Public/mobile/img/sex_check.png) no-repeat left center /20%',
            'background-size':'20%'
          })
        }
      })
      $('.submit').attr('disabled',true);
      $('.message_list #check .code').click(function(){
        if (!mobile){
          $('.tip').html('手机号码格式错误或已被注册!');
          return false;
        }
        $.post('/Home/send_sms_reg_code',{'mobile':$('#mobile input').val()},function(res){
          var obj = eval('('+res+')');
          if (obj.status == 1){
            $('.submit').addClass('son_click');
            $('.submit').attr('disabled',false);
            $(this).addClass('con_click')
            times();
          }else{
            $('.tip').html(obj.msg);
          }
        })
        return false;
      })

});

  function times(){
    i = 60;
    var time = setInterval(function(){
       $('.code').html( i +'秒后重新获取');
       $('.code').attr('disabled',true);
    i--;
    if(i == 0){clearInterval(time); 
      $('.code').html('重新获取');
      $('.code').removeClass('con_click');
      $('.code').attr('disabled',false);
    }else{
      // $('.code').attr({'disabled':"disabled"});
    }
    },1000);
  }
  var user = false;
  var password = false;
  var nickname = false;
  var mobile = false;
  var store = false;
 function checkForm(){  
      var check=$('#check input').val();
      if(!user){
        $('.tip').html('账号格式错误！')
         return false; 
      }
      if(!password){
        $('.tip').html('密码格式错误!')
        return false; 
      }
      if(!user_name){
        $('.tip').html('昵称格式错误！')
       return false; 
      }
      if(mobile==''){
        $('.tip').html('手机号码格式错误！')
         return false; 
      }
      if(check==''){
        $('.tip').html('验证码不能为空！')
         return false; 
      }
      $.post('/Home/regstore',$('#userform').serialize(),function(res){
          if (res.status == 1){
            window.location.href="http://www.yundi88.com/index.php/Mobile/Payment/join.html";
          } else {
            $('.code').html(res.msg);
            return false;
          }
        })
      return false;
}
 //  企业名    
function check_company_name(obj){
  var reg= /^[a-zA-Z\u4E00-\u9FA5]{4,16}$/;
  if($('#company_name input').val()==''){
    $('.tip').html('企业名称不能为空！')
    store = false;
    return false; 
  }
  else if(!reg.test($('#company_name input').val())){
     $('.tip').html('你输入的企业格式错误！')
     store = false;
      return false; 
  }
   else{
    $('.tip').html('')
  }
  $.ajax({
    type:'post',
    url:"/Home/ajax_store",
    data:'storename='+$('#company_name input').val(),
    success:function(res){
      if (res){
         $('.tip').html('企业名称已存在');
         store = false;
      } else {
        store = true;
        // subb();
      }
    }
  })
}
//  账号
function check_user(obj){
  var reg=/^[a-zA-Z][a-zA-Z_\$0-9\#]{5,15}/;
  if($('#user input').val()==''){
    $('.tip').html('你输入的账号不能为空！')
    user = false;
    return false; 
  }
  else if(!reg.test($('#user input').val())){
      $('.tip').html('你输入的账号有误！')
      user = false;
      return false; 
  }
  else{
    $('.tip').html('')
  }
  $.ajax({
    type:'post',
    url:"/Home/ajax_seller",
    data:'sellername='+$('#user input').val(),
    success:function(res){
      if(res){
        $('.tip').html('账号已存在');
        user = false;
      } else {
        user = true
        // subb();
      }
    }
  })
}
 //  密码    
function check_password(obj){
  var reg= /(?!^\\d+$)(?!^[a-zA-Z]+$)(?!^[_#@]+$).{6,}/;
  if($('#password input').val()==''){
    $('.tip').html('你的密码不能为空！')
    password = false;
    return false; 
  }
  else if(!reg.test($('#password input').val())){
     $('.tip').html('你输入的密码格式错误！')
     password = false;
      return false; 
  
  }
   else{
    $('.tip').html('')
  }
  password = true;
  // subb();
}
 //  昵称
function check_user_name(obj){
  var reg= /^[a-zA-Z\u4E00-\u9FA5]{2,}$/;
  if($('#user_name input').val()==''){
    $('.tip').html('你的昵称不能为空！');
    nickname = false;
    return false; 
  }
  else if(!reg.test($('#user_name input').val())){
      $('.tip').html('你输入的昵称格式错误！');
      nickname = false;
      return false; 
  }
  else{
    $('.tip').html('')
  }
  nickname = true;
  // subb();
}
//  手机号码
function check_telephone(obj){ 
  var reg= /^1[3|4|5|7|8][0-9]{9}$/; 
  if($('#mobile input').val()==''){
    $('.tip').html('你的手机号码不能为空！')
    mobile = false;
    return false; 
  }
  else if(!reg.test($('#mobile input').val())){ 
    $('.tip').html('你输入的手机号码有误！');
    mobile = false;
    return false; 
  } 
  else{
    $('.tip').html('')
  }
  $.ajax({
    type:'post',
    url:"/Home/ajax_mobile",
    data:'mobile='+$('#mobile input').val(),
    success:function(res){
      if(res){
        $('.tip').html('手机号码已存在');
        mobile = false;
        return false;
      } else {
        mobile = true;
        $('.tip').html('')
      }
    }
  })
} 

