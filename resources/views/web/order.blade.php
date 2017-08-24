<ion-view view-title="我的订单">
	<ion-content class=" has-header stable-bg"overflow-scroll="false">
  
        <ul id="ul1">
            <li >全部</li>
            <li>待付款</li>
            <li>待发货</li>
            <li>已发货</li>
       </ul>


<div id="contener">
	<!--全部-->
    <div class=" has-header no" style="display: block;">
    
       <div class="order_banner light-bg">
       	<div class="order_tit">
       		<span id="ordernum">订单号：28290473920820
       			
       		</span>
       		<span id="state">等待付款
       			
       		</span>
       	</div>
       	<div class="ordercontent">
       		<div class="imgbanner"><img src="img/1.jpg"></div>
       		<div class="inform">2017年  新年创意门头  3件</div>
       	</div>
       	<div class="order_foot"><span>付款金额：￥54.00</span><span><button class="samllbtn">立即支付</button></span></div>
       </div>
    </div>
  
 <!-- 代付款-->
       <div class=" has-header no">
    
       <div class="order_banner light-bg">
       	<div class="order_tit">
       		<span id="ordernum">订单号：28290473920820
       			
       		</span>
       		<span id="state">等待付款
       			
       		</span>
       	</div>
       	<div class="ordercontent">
       		<div class="imgbanner"><img src="img/1.jpg"></div>
       		<div class="inform">2017年  新年创意门头  3件</div>
       	</div>
       	<div class="order_foot"><span>付款金额：￥54.00</span><span><button class="samllbtn">立即支付</button></span></div>
       </div>
    </div>
    
    <!--待发货-->
         <div class=" has-header no">
    
       <div class="order_banner light-bg">
       	<div class="order_tit">
       		<span id="ordernum">订单号：28290473920820
       			
       		</span>
       		<span id="state">待发货
       			
       		</span>
       	</div>
       	<div class="ordercontent">
       		<div class="imgbanner"><img src="img/1.jpg"></div>
       		<div class="inform">2017年  新年创意门头  3件</div>
       	</div>
       	<div class="order_foot"><span>付款金额：￥54.00</span></div>
       </div>
    </div>
    
    
      
    <!--已出票-->
         <div class=" has-header no">
    
       <div class="order_banner light-bg">
       	<div class="order_tit">
       		<span id="ordernum">订单号：28290473920820
       			
       		</span>
       		<span id="state">已发货
       			
       		</span>
       	</div>
       	<div class="ordercontent">
       		<div class="imgbanner"><img src="img/1.jpg"></div>
       		<div class="inform">2017年  新年创意门头  3件</div>
       	</div>
       	<div class="order_foot"><span>付款金额：￥54.00</span></div>
       </div>
    </div>
    
</div>
	<div ng-init="init_order()"></div>
</ion-content>
    </ion-view>