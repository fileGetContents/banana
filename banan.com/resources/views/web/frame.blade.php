<ion-nav-bar class="stable-bg" align-title="center">
    <ion-nav-back-button style="color: black"></ion-nav-back-button>
    <ion-nav-title>
    </ion-nav-title>
</ion-nav-bar>

<ion-tabs class="tabs-stable tabs-icon-top">
    <!--首页-->
    <ion-tab title="首页" icon-on="ion-ios-home tabcolor" icon-off="ion-ios-home-outline" href="#/frame/start">
        <ion-nav-view name="start"></ion-nav-view>
    </ion-tab>
    <!--分类-->
    <ion-tab title="社区"icon-on="ion-ios-camera tabcolor" icon-off="ion-ios-camera-outline"href="#/frame/friend">
        <ion-nav-view name="friend"></ion-nav-view>
    </ion-tab>
    <!--购物车-->
    <ion-tab title="小店" icon-on="ion-ios-cart tabcolor" icon-off="ion-ios-cart-outline" href="#/frame/home">
        <ion-nav-view name="home"></ion-nav-view>
    </ion-tab>
    <!--个人中心-->
    <ion-tab title="我的" icon-on="ion-ios-person tabcolor" icon-off="ion-ios-person-outline" href="#/frame/person">
        <ion-nav-view name="person"></ion-nav-view>
    </ion-tab>
    <!--个人中心-->

</ion-tabs>

