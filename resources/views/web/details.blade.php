<ion-view view-title="商品详情">
	
    <ion-content ng-controller="BuyCtrl"overflow-scroll="false">
        <ion-slide-box  auto-play="true" does-continue="true" slide-interval="2000" >
            <ion-slide>
                <div class="box2 blue"><img src="img/find.jpg"></div>

            </ion-slide>
            <ion-slide>
                <div class="box2 blue"><img src="img/post1.jpg"></div>
            </ion-slide>
            <ion-slide>
                <div class="box2 blue"><img src="img/5.jpg"></div>
            </ion-slide>
            <ion-slide>
                <div class="box2 blue"><img src="img/5.jpg"></div>
            </ion-slide>
        </ion-slide-box>

        <div class="message">
            <p>2017年 旅游快进</p>
            <p class="assertive">￥ 18.00</p>
            <div><span>运费：免运费</span><span class="sale">销量：8件</span></div>
        </div>
      <div class="bg3 ">
          <div class="choose light-bg" ng-click="showContact4(s)">请选择：款式   数量<i class="ion ion-chevron-right"></i></div>
      </div>
        <div class="details_section"><img src="img/details1.JPG"></div>
        <div class="details_section"><img src="img/details2.JPG"></div>
        <div class="details_section"><img src="img/details3.JPG"></div>
        <div class="details_section"><img src="img/details4.JPG"></div>


    </ion-content>
   <script id="templates/buy.html" type="text/ng-template">
   <ion-modal-view style="height:256px;bottom:48px;background-color:white;">
   	<button class="button button-clear button-primary" ng-click="modal4.hide()" >取消</button>   
   	<ion-content>
          	    
   	<div class="buy-box">
   	
            <div class="buy_section1">
                <div class="buy_img">
                    <img src=" img/details2.JPG">
                </div>
                <div class="buy_message">
                    <p>成都三元乔亚朵酒店</p>
                    <p style="color: red">￥1400元起</p>
                    
                </div>
                <i class="close" ng-click="modal4.hide()"><img src="img/close.png" width="20px" height="20px"></i>
                
            </div>
            <div class="buy_section2" id="buy_section2">
                <p>款式：</p>
                <button class="pitch light-bg">套餐一</button>
                <button class="pitch light-bg">套餐二</button>
                <button class="pitch light-bg">套餐二</button>
            </div>

            <div class="buy_section2">
                <p>购买数量:剩余<span id="kuchun">10</span>件</p>
                <div class="catecenter">

                    <em id="min1" onclick="minus();">-</em>
                    <input type="number" id="text_box1"  class="num" value="1" />
                    <em id="add1" onclick="add();">+</em>
                </div>
            
            </div>
       
   	</div>
    	<div class="buy_button light"   ui-sref="frame.payorder" ng-click="modal4.hide()" >立即购买</div> 
     
   	</ion-content>
        <ion-modal-view>
   </script>
    
        
<!--    <div ng-init="init_box()"></div> -->
</ion-view>