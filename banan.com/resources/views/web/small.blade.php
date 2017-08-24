<ion-view view-title="国内">

    <ion-content overflow-scroll="false">
        <div id="address" class="header">
            <select id="address" name="address">
                <option value="0">出发地</option>
                <option value="上海">上海</option>
                <option value="上海">上海</option>
                <option value="四川">四川</option>
                <option value="新疆">新疆</option>
            </select>
            <div class="find3"><input type="text" name="" id="small_where" value="" placeholder="世界那么大，你想去哪儿"/>
                <img onclick="small_search()" src="img/find.png">
            </div>
        </div>

        <ion-slide-box auto-play="true" does-continue="true" slide-interval="2000">
            <ion-slide>
                <div class="box3 blue"><img src="img/find.jpg"></div>

            </ion-slide>
            <ion-slide>
                <div class="box3 blue"><img src="img/post1.jpg"></div>
            </ion-slide>
            <ion-slide>
                <div class="box3 blue"><img src="img/5.jpg"></div>
            </ion-slide>
        </ion-slide-box>
        <div class="title2"><p>- - 精选路线 - -</p></div>

        <ul class="list" id="small_list">

            @foreach($sift as $value)
                <li class="item item-thumbnail-left" ui-sref="frame.activedetails({id:{{$value->travel_id}}})">
                    <img src="{{asset($value->travel_host_image)}}">
                    <p>{{$value->travel_name}}</p>
                    <p class="list-price">
                        <span class="RMB">RMB </span>
                        <span class="bigprice">{{$value->travel_expense}}</span>
                        <span class="qi">起 </span>
                    </p>
                </li>
            @endforeach

        </ul>

        <style type="text/css">
            .small_mall {
                width: 100%;
            }

            .small_mall li {
                text-align: center;
            }
        </style>

        <ul class="small_mall">
            <li onclick="small_load_mode()">加载更多>></li>
        </ul>
        <input style="display: none" id="small_start" type="text" name="small_start" value="0"/>
    </ion-content>
</ion-view>


