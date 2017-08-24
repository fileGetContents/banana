<ion-view hide-nav-bar="true">

    <ion-content overflow-scroll="false">
        <ion-slide-box auto-play="true" does-continue="true" slide-interval="2000">
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
        <div class="bg"></div>
        <div class="row light-bg" style="margin: 0">
            <a class="tab-item " ui-sref="frame.small"><img src="img/ion1.png" width="45px" height="45px">
                <p class="p">小众旅行</p></a>
            <a class="tab-item" ui-sref="frame.outdoor"><img src="img/ion2.png" width="45px" height="45px">
                <p class="p">户外体验</p></a>
            <a class="tab-item " ui-sref="frame.live"><img src="img/ion3.png" width="45px" height="45px">
                <p class="p">美宿旅居</p></a>
            <a class="tab-item " ui-sref="frame.abroad"><img src="img/ion4.png" width="45px" height="45px">
                <p class="p">出境优选</p></a>
        </div>

        <div class="bg"></div>
        <div>
            <p class="bgtit" style="margin-top: 2rem;">香蕉小发现</p>
            <p class="smalltit">每天发现不一样的美</p>
        </div>
        <div class="contain">

            <div class="ad-left">
                <div class="left-top">
                    <img src="{{asset($small[0]->travel_host_image)}}">
                    <div class="bg4">
                        <p class="place"></p>
                        <p class="price">RMB {{$small[0]->travel_expense}}起</p>
                    </div>
                </div>

                <div class="left-bottom">
                    <img src="{{asset($small[1]->travel_host_image)}}">
                    <div class="bg4">
                        <p class="place ">长滩岛</p>
                        <p class="price">RMB {{$small[1]->travel_expense}}</p>
                    </div>
                </div>
            </div>
            <div class="add-right">
                <div class="right-top">
                    <img src="{{asset($small[2]->travel_host_image)}}">
                    <div class="bg4">
                        <p class="place ">长滩岛</p>
                        <p class="price">RMB {{$small[2]->travel_expense}}起</p>
                    </div>
                </div>
                <div class="right-bottom">
                    <img src="{{asset($small[2]->travel_host_image)}}">
                    <div class="bg4">
                        <p class="place ">九寨沟</p>
                        <p class="price">RMB {{$small[2]->travel_expense}}起</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg2"></div>
        <div>
            <p class="bgtit">周末不浪费</p>
            <p class="smalltit">轻松周末，简单旅行</p>
        </div>
        <div class="contain2">

            <div class="contain2-left">
                <div class="contain2-img">
                    <img src="{{asset($weekend[0]->travel_host_image)}}"/>
                </div>
                <p class=" p">泰国</p>
                <p class="contain2-price">RMB {{$weekend[0]->travel_expense}}起</p>
            </div>
            <div class="contain2-left">
                <div class="contain2-img">
                    <img src="{{asset($weekend[1]->travel_host_image)}}"/>
                </div>
                <p class=" p">香港</p>
                <p class="contain2-price">RMB {{$weekend[1]->travel_expense}}起</p>
            </div>

        </div>
        <div class="contain2">

            <div class="contain2-left">
                <div class="contain2-img">
                    <img src="{{asset($weekend[2]->travel_host_image)}}"/>
                </div>
                <p class=" p">长滩岛</p>
                <p class="contain2-price">RMB {{$weekend[2]->travel_expense}}起</p>
            </div>
            <div class="contain2-left">
                <div class="contain2-img">
                    <img src="{{$weekend[3]->travel_host_image}}"/>
                </div>
                <p class=" p">九寨沟</p>
                <p class="contain2-price">RMB {{$weekend[2]->travel_expense}}起</p>
            </div>

        </div>
        <div class="bg2"></div>
        <div>
            <p class="bgtit">香蕉精选</p>
            <p class="smalltit">年轻玩法，最in假期</p>
        </div>
        <div class="ad">
            <img src="img/tibet-8.jpg">
        </div>
        <ul class="list">
            @foreach($sift  as $value)
                <li class="item item-thumbnail-left">
                    <img src="{{asset($value->travel_host_image)}}">
                    <p>{{$value->travel_name}}</p>
                    <p class="list-price"><span class="RMB">RMB </span>
                        <span class="bigprice">{{$value->travel_expense}}</span>
                        <span   class="qi">起 </span>
                    </p>
                </li>
            @endforeach

        </ul>

    </ion-content>
</ion-view>