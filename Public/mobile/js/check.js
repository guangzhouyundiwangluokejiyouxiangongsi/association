 function orient() {
  if (window.orientation == 90 || window.orientation == -90) {
  //ipad、iphone竖屏；Andriod横屏
  $("body").attr("class", "landscape");
  orientation = 'landscape';
  return false;
  }
  else if (window.orientation == 0 || window.orientation == 180) {
  //ipad、iphone横屏；Andriod竖屏
  $("body").attr("class", "portrait");
  orientation = 'portrait';
  return false;
  }

 
  
 
 }

$(function(){


   winHeight =window.innerHeight;
  winWidth =window.innerWidth;
  // alert('winHeight:'+winHeight+'---------'+'winWidth:'+winWidth)
  oldwinHeight=winHeight;
  oldwinWidth=winWidth;
  // orient();
});
//用户变化屏幕方向时调用
$(window).bind( 'orientationchange', function(e){

  winHeight =window.innerHeight;
  winWidth =window.innerWidth;
  // alert('winHeight:'+winHeight+'---------'+'winWidth:'+winWidth+'oldwinHeight:'+oldwinHeight+'---------'+'oldwinWidth:'+oldwinWidth)
  orient();

  // $("<style></style>").text(".header .sort_search{color:red;}").appendTo($("head"));
//页面加载时调用


});

// if(window.orientation!=0){
//         var obj=document.getElementById('orientation');
//         alert('横屏内容太少啦，请使用竖屏观看！');
//         obj.style.display='block';
// }

// window.onorientationchange=function(){ 
// var obj=document.getElementById('orientation');

// if(window.orientation==0){
//                 obj.style.display='none';
//         }else
//         {
//                 alert('横屏内容太少啦，请使用竖屏观看！');
//                 obj.style.display='block';
//         }
// }; 