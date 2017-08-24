<ion-view view-title="个人中心">
    <ion-content class="stable-bg"overflow-scroll="false">
    	<div class="light-bg ">
<ul class="list list-banner">
    <li class="item item-avatar-left" style="border: 0;float: left;">
        <img src="img/1.jpg">
        <h2  id="name">Stranger</h2>
       
    </li>
   <li class="attention light-bg"> <input type="button" class="button button-small button-positive btn" onclick="attention();" id="atten" value="关注TA"></li>
</ul>



</div>
<ul class="TA light-bg" ui-sref="frame.otherpost"><li><img src="img/pinglun.png" style="margin: 6px 5px 0 5px" width="20px" height="20px"></li><li>TA的发帖</li><li class="rightli">2</li><li><img src="img/pinglun.png" style="margin-top:6px;" width="20px" height="20px"></li></ul>
<ul class="TA2 light-bg" ui-sref="frame.otherjoin"><li><img src="img/pinglun.png" style="margin: 6px 5px 0 5px"width="20px" height="20px"></li><li>TA的参与</li><li class="rightli">2</li><li><img src="img/pinglun.png" style="margin-top:6px;" width="20px" height="20px"></li></ul>
  <ul class="TA light-bg"ui-sref="frame.talk" ><li><img src="img/pinglun.png" style="margin: 6px 5px 0 5px"width="20px" height="20px"></li><li class="calm">和TA聊天</li></ul>
    </ion-content>

</ion-view>
