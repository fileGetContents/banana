<ion-view view-title="活动详情" ng-controller="hotelCtrl">
    <ion-content class="stable-bg"   on-scroll="toTopScroll()" >
    
<ion-slide-box  auto-play="true" does-continue="true" slide-interval="2000" id="top">
    <ion-slide>
        <div class="box2 blue"><img src="img/find.jpg"></div>

    </ion-slide>
    <ion-slide>
    <div class="box2 blue"><img src="img/post1.jpg"></div>
</ion-slide>
    <ion-slide>
        <div class="box2 blue"><img src="img/5.jpg"></div>
    </ion-slide>
</ion-slide-box>
         <div class="message light-bg">
            <p>【2017年 旅游快进 】亲子游巴拉巴拉 建行卡号地块骄傲好滴好滴继续</p> 
            <p><span><下班去哪>华东最棒严管</span></p>
            <p class="assertive">￥ 1888.00起</p>
           
        </div>
        <div class="disbanner">
        	<div class="discount"><span class="assertive-bg xsbtn light">优惠</span><span class="dismess ">注册送十元代金券</span></div>
        	<div class="discount"><span class="xsbtn assertive">立减</span><span class="dismess ">下单立减</span></div>
        </div>
        <div class="light-bg" style="padding-left: 20px"><img src="img/dizhi2.png" width="20px" height="20px" style="margin-top: 10px; margin-right:10px ;"><span class="dismess" style="position: absolute;margin-top: 10px;">集合地:浙江省 杭州</span></div>
      
       
       	<form>
       	<div class="datebanner light-bg">
       		<div class="dateimg"><img src="img/date.png" width="20px" height="20px"></div>
       	   
       	    <div onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this)" class="choosedate">出发日期<i class="ion ion-chevron-down" style="margin-left:5px ;"></i></div>
       	 <div class="inpbanner"><input type="button" class="theDate light-bg " value="2017/07/26" readonly name="theDate" ></div>
       	
       	</div>
     	<div class="datebanner light-bg">
       		<div class="dateimg"><img src="img/date.png" width="20px" height="20px"></div>
       	   
       	    <div onclick="displayCalendar(document.forms[0].theDate2,'yyyy/mm/dd',this)" class="choosedate">离店日期<i class="ion ion-chevron-down" style="margin-left:5px ;"></i></div>
       	 <div class="inpbanner"><input type="button" class="theDate light-bg " value="2017/07/26" readonly name="theDate2" ></div>
       	
       	</div>
       	</form>
      
       <ul  class="light-bg defaultClass2">

         <li>印象</li>
          <li>房型</li> 
       																																																													
       </ul>
   <div id="contener3">
   	 <div class="no" style="display: block;">
   	 	<div class="hotelbanner">
   	 	<div class="details_section"><img src="img/hotel1.jpeg"></div>
   	 	<P>护卫无不与号我的烟雾弹Yui因为五月底吴云 恒温库防护好ueuifyi，废话为国分忧use复合句顾长卫u
   	 	
   	 	快捷键考四级才开始上课的基础上了大抽奖空了搜救度搜。就是看好吃会计师的立场上了就是才看见离开房产局
   	 	健康的窗口试乘试驾激烈的检查kjdckshdui
   	 	</P>
   	 	<div class="details_section"><img src="img/hotel2.jpeg"></div>
   	 	<div class="details_section"><img src="img/hotel3.jpeg"></div>
   	 	<P>护卫无不与号我的烟雾弹Yui因为五月底吴云 恒温库防护好ueuifyi，废话为国分忧use复合句顾长卫u
   	 	
   	 	快捷键考四级才开始上课的基础上了大抽奖空了搜救度搜。就是看好吃会计师的立场上了就是才看见离开房产局
   	 	健康的窗口试乘试驾激烈的检查kjdckshdui
   	 	</P>
   	 	
   	 	<div class="details_section"><img src="img/hotel4.jpeg"></div>
   	 	<P>护卫无不与号我的烟雾弹Yui因为五月底吴云 恒温库防护好ueuifyi，废话为国分忧use复合句顾长卫u
   	 	
   	 	快捷键考四级才开始上课的基础上了大抽奖空了搜救度搜。就是看好吃会计师的立场上了就是才看见离开房产局
   	 	健康的窗口试乘试驾激烈的检查kjdckshdui
   	 	</P>
   	 	<div class="details_section"><img src="img/hotel5.jpeg"></div>
   	 	   	 <div class="details_section"><img src="img/hotel6.jpeg"></div>	
   	 	
   	 	</div>
   	 </div>
   	<div class="no">
   	<div class="details_section"><img src="img/hotel5.jpeg"></div>
   		<h3>北玉桂阁楼</h3>
   		<p>快捷键考四级才开始上课的基础上了大抽奖空了搜救度搜。就是看好吃会计师的立场上了就是才看见离开房产局
   	 	健康的窗口试乘试驾激烈的检查kjdckshdui</p>
   	 	<div><p><span>￥</span>398<span>元/晚</span></p></div>
   	</div>
   </div>


     
</ion-content>

 <div class="hotelfoot light-bg" id="yuding" style="display: block;">
	
	<div class="hotelprice">
		
		￥900 起/晚
	
	
	</div>
	 <div ui-sref="frame.payorder2" class="yudingbtn light" >预订</div> 

</div>
  <ul id="ul3" class="light-bg chosenClass defaultClass2" ng-show="showTop">

         <li>印象</li>
          <li>房型</li> 
       																																																													
       </ul>
</ion-view>
       

