<ion-view view-title="个人中心">
    <ion-content overflow-scroll="false">

<div class="person-head" >
	<div class="head-img" >
    	<img src="img/3.jpg">
    </div>
   
  </div>

<div class="whe">
	<div class="whe-lt whe-br" ui-sref="frame.order">
    	<p class="lf-tp"><img src="img/order.png">我的订单</p>
      
    </div>
    <div class="whe-lt" ui-sref="frame.moneybag">
    	<p class="lf-tp"><img src="img/bag.png">我的钱包</p>
        
    </div>
</div>

<div class="person" >
	<div class="pn-lt" ui-sref="frame.message">
    	<p><img class="img-lf" src="img/message.png">个人资料<img class="img-rt" src="img/arr_rt.png"></i></p>
    </div>
	<div class="pn-lt" ui-sref="frame.order">
    	<p><img class="img-lf" src="img/dingdan.png" >小店订单<img class="img-rt" src="img/arr_rt.png"></p>
    </div>
	<div class="pn-lt" ui-sref="frame.made">
    	<p><img class="img-lf" src="img/dingzhi.png" >我的定制<img class="img-rt" src="img/arr_rt.png"></p>
    </div>
	<div class="pn-lt" ng-click="show()" ng-controller="actionsheetCtl">
    	<p><img class="img-lf" src="img/kefu.png" width="30px" height="30px">联系我们<img class="img-rt" src="img/arr_rt.png"></p>
    </div>
	
 
</div>
 <button class="exit" ui-sref="login">退出登录</button>

    </ion-content>

</ion-view>
