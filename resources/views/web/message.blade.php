<ion-view view-title="个人资料">
	<ion-content class=" has-header stable-bg" ng-controller="AppCtrl"overflow-scroll="false">
  <div class="messbox"><span>头像</span><span class="messright"><img src="img/3.jpg"></span></div>
  
   <div class="messbox" ng-click="modal.show()"><span>昵称</span><span class="messright" id="pername">陈99</span></div>
    <div class="messbox" ng-click="modal2.show()"><span>电话</span><span class="messright"id="perphone">17789306789</span></div>
    <div class="messbox" ng-click="modal3.show()"><span>电子邮箱</span><span class="messright" id="peremail"></span></div>
 
<button class="save">保存</button>

</ion-content>
<script id="templates/name.html" type="text/ng-template">
      <ion-modal-view style="height: 100%;" class="light-bg">
        <ion-header-bar class="bar bar-header bar-stable">
          <h1 class="title">编辑</h1>
          <button class="button button-clear button-primary" ng-click="modal.hide()">取消</button>
        </ion-header-bar>
        <ion-content class="padding">
          <div class="list">
            <label class="item item-input">
              <span class="input-label">姓名</span>
              <input  type="text" ng-minlength="1" id="inpname">
            </label>
           
            <button class="save" ng-click="createContact(newName)">保存</button>
          </div>
        </ion-content>
      </ion-modal-view>
    </script>
    <script id="templates/phone.html" type="text/ng-template">
      <ion-modal-view style="height: 100%;" class="light-bg">
   
        <ion-header-bar class="bar bar-header bar-stable">
          <h1 class="title">编辑</h1>
          <button class="button button-clear button-primary" ng-click="modal2.hide()">取消</button>
        </ion-header-bar>
        <ion-content class="padding">
         
          
          <div class="card">
             <form name="phoneForm" novalidate>
                 <label class="item  item-input">
                     <span class="input-label">手机号</span>
                     <input type="number" placeholder="请输入11位手机号" name="number" required ng-minlength="11" ng-maxlength="11" ng-model="user.number" id="inpphone">
                 </label>
                 <label class="item item-input">
                     <span class="input-label">登录密码</span>
                     <input type="password" placeholder="6-30位数字或字母" name="password" required ng-pattern="/[a-zA-Z0-9]/" ng-maxlength="30" ng-minlength="6" ng-model="user.password">
                 </label>
                  
                 
                <div class="item item-input">
                    <span class="input-label col-25">验证码</span>
                     <input type="text" name="testcode" required ng-model="user.testcode">
                    <button  class="button button-clear getcode" ng-click="getTestCode()" ng-bind="description" ng-disabled="canClick">
                   </button>
                </div>
            </form>
         </div>
             <p class="usererr assertive" ng-show="phoneForm.number.$dirty && phoneForm.number.$invalid">手机号输入有误</p>
            <p class="usererr assertive" ng-show="phoneForm.password.$dirty && phoneForm.password.$invalid">密码输入格式有误</p>
         
        
        
        
        <button class="save" ng-click="createContact2(newphone)">保存</button>
     <br><br>
        </ion-content>
      </ion-modal-view>
    </script>
    
    <script id="templates/email.html" type="text/ng-template">
      <ion-modal-view class="light-bg" style="height: 100%;">
        <ion-header-bar class="bar bar-header bar-stable">
          <h1 class="title">编辑</h1>
          <button class="button button-clear button-primary" ng-click="modal3.hide()">取消</button>
        </ion-header-bar>
        <ion-content class="padding">
            <div class="list">
             <form name="emailForm" novalidate>
            <label class="item item-input">
                     <span class="input-label">邮箱</span>
                     <input type="email" id="inpemail" placeholder="请输入您的邮箱" name="email" required ng-pattern="/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/"  ng-minlength="1" ng-model="user.email">
                 </label>
            <p class="usererr assertive" ng-show="emailForm.email.$dirty && emailForm.email.$invalid">邮箱输入格式有误</p>
            
         </form>
           <p class="usererr assertive" ng-show="detailForm.number.$dirty && phoneForm.number.$invalid">手机号输入有误</p>
            <p class="usererr assertive" ng-show="phoneForm.password.$dirty && phoneForm.password.$invalid">密码输入格式有误</p>
            <button class="save" ng-click="createContact3(newemail)">保存</button></div>
        </ion-content>
      </ion-modal-view>
    </script>
    </ion-view>
