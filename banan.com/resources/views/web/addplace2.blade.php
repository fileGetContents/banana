<ion-view view-title="选择地区">
     <ion-content class="stable-bg"overflow-scroll="false">
 <div ng-controller="demo">
 	 <div class="list">
            <label class="item item-input">
              <span class="input-label">收货人</span>
              <input ng-model="newUser.firstName" type="text" placeholder="名字">
            </label>
            
         <label class="item item-input">
        	<span class="input-label">选择地区</span>
            <select id="province" ng-model="pro" ng-options="pros.name for pros in provinces" ng-change="proToCity()">
                <option value="">省份</option>
            </select>
            <select ng-model="city" ng-options="cit.name for cit in cities" ng-change="cityToArea()" width="50px"><option value="" >地级市</option></select>
            <select ng-model="area" ng-options="are for are in areas"><option value="">市、县级</option></select>
       </label>
 	 
 	  <label class="item item-input">
              <span class="input-label">联系电话</span>
              <input type="text" placeholder="手机或固定电话">
            </label>
 	 <label class="item item-input">
              <span class="input-label">详细地址</span>
              <input  type="text" placeholder="如街道，楼层门牌号等">
            </label>
 	
 	 <label class="item item-input">
              <span class="input-label">邮政编码</span>
              <input type="text" placeholder="邮政编码（选填）">
            </label>
 	 
 	 
 	 </div>
 	 </div>
     <button class="save" ui-sref="frame.payorder2">保存</button>
   </ion-content>
</ion-view>

