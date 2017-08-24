<ion-view view-title="旅友圈">
 
 <ion-nav-buttons side="right-buttons">
  
         <i class="tongxunlu" ui-sref="frame.friend-list"></i>

 </ion-nav-buttons>
    <div class="add" ui-sref="frame.sendpost"><img src="img/add.png" width="40px" height="40px"></div>
 <ion-content class="light-bg" overflow-scroll="false">

<div class="friend-banner">
    <span class="data">发帖：344</span><span class="data2">访问：480</span>
</div>

<ul class="list" >
    <li class="item item-avatar-left" style="border: 0">
        <img src="img/1.jpg" ui-sref="frame.other">
        <h2  id="name">Stranger</h2>
        <p id="date" class="date">2017-04-17 18:27</p>
    </li>
</ul>
<div ui-sref="frame.post" class=" left1">
<p class="describe "><span>首先这虽是一个菲律宾潜水考证的套餐，但是吃住都很好，全包，宝宝浅水度过一个愉快的假期</span></p>
<div class="container">

    <ul class="docs-pictures clearfix">
        <li><img data-original="img/tibet-1.jpg" src="img/thumbnails/tibet-1.jpg" alt="Cuo Na Lake" ></li>
        <li><img data-original="img/tibet-2.jpg" src="img/thumbnails/tibet-2.jpg" alt="Tibetan Plateau"></li>
        <li><img data-original="img/tibet-3.jpg" src="img/thumbnails/tibet-3.jpg" alt="Jokhang Temple"></li>
        <li><img data-original="img/tibet-4.jpg" src="img/thumbnails/tibet-4.jpg" alt="Potala Palace 1"></li>
        <li><img data-original="img/tibet-5.jpg" src="img/thumbnails/tibet-5.jpg" alt="Potala Palace 2"></li>
        <li><img data-original="img/tibet-6.jpg" src="img/thumbnails/tibet-6.jpg" alt="Potala Palace 3"></li>
        <li><img data-original="img/tibet-7.jpg" src="img/thumbnails/tibet-7.jpg" alt="Lhasa River"></li>
        <li><img data-original="img/tibet-8.jpg" src="img/thumbnails/tibet-8.jpg" alt="Namtso 1"></li>
        <li><img data-original="img/tibet-9.jpg" src="img/thumbnails/tibet-9.jpg" alt="Namtso 2"></li>
    </ul>


</div>
</div>
<div class="zan-bg">
    <div class="zhuan"><img src="img/zhuanfa.png" width="20px" height="20px"><span>转</span></div>
    <div class="pinglun" onclick="showBox();" id="pinglun"><img src="img/pinglun.png"width="20px" height="20px"><span>评论<span id="pinglun_data">0</span></span> </div>
    <div class="zan" ><img src="img/zan.png" id="like" onclick="changeImage()" width="20px" height="20px" ><span>赞</span>
        <span id="like_data">0</span></div>
</div>
<div class="bg"></div>
<div class="pinglun-box" id="pinglun-box" style="display:none">
	<form name="inputform">
<textarea  placeholder="回复帖子：" name="message"class="replayarea">
    </textarea>
    <div class="replay">
    	<ul class="face">
    		<li><img src="img/smile.png" width="30px"height="30px">
    		<ul>
    			<li><a href="javascript:insertIcon('[微笑]')"><img border="0" src="img/face/0.gif"/></a></li>
    		  <li><a href="javascript:insertIcon('[龇牙]')"><img border="0" src="img/face/1.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[憨笑]')"><img border="0" src="img/face/2.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[可爱]')"><img border="0" src="img/face/3.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[可怜]')"><img border="0" src="img/face/4.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[抠鼻]')"><img border="0" src="img/face/5.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[汗]')"><img border="0" src="img/face/6.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[害羞]')"><img border="0" src="img/face/7.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[调皮]')"><img border="0" src="img/face/8.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[闭嘴]')"><img border="0" src="img/face/9.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[鄙视]')"><img border="0" src="img/face/10.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[爱]')"><img border="0" src="img/face/11.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[泪]')"><img border="0" src="img/face/12.gif"/></a></li>
    		 <li><a href="javascript:insertIcon('[偷笑]')"><img border="0" src="img/face/13.gif"/></a></li>
    			 <li><a href="javascript:insertIcon('[亲]')"><img border="0" src="img/face/14.gif"/></a></li> 
    		 	 <li><a href="javascript:insertIcon('[生病]')"><img border="0" src="img/face/15.gif"/></a></li>
    		 	 <li><a href="javascript:insertIcon('[太开心]')"><img border="0" src="img/face/16.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[傲慢]')"><img border="0" src="img/face/17.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[右哼哼]')"><img border="0" src="img/face/18.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[左哼哼]')"><img border="0" src="img/face/19.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[嘘]')"><img border="0" src="img/face/20.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[衰]')"><img border="0" src="img/face/21.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[委屈]')"><img border="0" src="img/face/22.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[吐]')"><img border="0" src="img/face/23.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[哈欠]')"><img border="0" src="img/face/24.gif"/></a></li>
    		 	  <li><a href="javascript:insertIcon('[怒]')"><img border="0" src="img/face/26.gif"/></a></li>
    		 	  	  <li><a href="javascript:insertIcon('[疑问]')"><img border="0" src="img/face/27.gif"/></a></li>
    		 	  	  <li><a href="javascript:insertIcon('[残嘴]')"><img border="0" src="img/face/28.gif"/></a></li>
    		 	  	  <li><a href="javascript:insertIcon('[再见]')"><img border="0" src="img/face/29.gif"/></a></li>
    		</ul></li>
    		<li><button class="button button-small button-outline button-stable btn" onclick="cancelbox();" id="cancel">取消</button></li> 
    	<li><button class="button button-small button-positive btn">回复</button></li>
    	</ul></form>
        
        
    </div>
    
</div>


    <div ng-init="init_111()"></div>
  
    </ion-content>

</ion-view>