<ion-view>
	<ion-nav-bar class="stable-bg" align-title="center">
    <ion-nav-title>
    	注册
    </ion-nav-title>
</ion-nav-bar>
    <ion-content class=" has-header bgcolor" overflow-scroll="false">
    	<form name="registerForm" novalidate>
        <div class="inputbox">
          
            <i class="icon placeholder-icon ion-ios-person light"></i>
            <input  placeholder="请输入手机号" class="login_input" type="number"  name="number" required ng-minlength="11" ng-maxlength="11" ng-model="user.number">
        </div>
        <div class="inputbox"><i class="icon placeholder-icon ion-unlocked light"></i>
        	<input type="password" placeholder="6-30位数字或字母" name="password" required ng-pattern="/[a-zA-Z0-9]/" ng-maxlength="30" ng-minlength="6" ng-model="user.password" class="login_input" >
        </div>
         <div class="inputbox"><i class="icon placeholder-icon ion-android-checkbox-outline light"></i>
        	<input type="text" name="testcode" required ng-model="user.testcode" class="login_input" >
        	   <button style="margin-top: -20px;margin-right: 20px; color: white;" class=" button-clear getcode" ng-click="getTestCode()" ng-bind="description" ng-disabled="canClick">
                   </button>
        </div>
          
</form>
<p class="usererr assertive padding" ng-show="registerForm.number.$dirty && registerForm.number.$invalid">手机号输入有误</p>
            <p class="usererr assertive padding" ng-show="registerForm.password.$dirty && registerForm.password.$invalid">密码输入格式有误</p>
<button class="loginbtn">注册</button>
<p class="light register" ui-sref="login">有账号，立即登录</p>
<div class="seg">
	<p class="logitit">使用第三方账号登录</p>
	<img src="img/weixing.png">
</div>
    </ion-content>
</ion-view>