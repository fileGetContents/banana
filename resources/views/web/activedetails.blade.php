<ion-view view-title="活动详情">
    <ion-content class="stable-bg" on-scroll="toTopScroll()">

        <ion-slide-box auto-play="true" does-continue="true" slide-interval="2000" id="top">

            @foreach(unserialize($info->travel_images) as $value)
                <ion-slide>
                    <div class="box2 blue"><img src="{{asset($value)}}"></div>
                </ion-slide>
            @endforeach

        </ion-slide-box>
        <div class="message light-bg">
            <p>{{$info->travel_name}}</p>
            <p><span> <下班去哪>{{$info->}} </span></p>
            <p class="assertive">￥ {{$info->travel_expense}}起</p>

        </div>
        <div class="disbanner">
            <div class="discount"><span class="assertive-bg xsbtn light">优惠</span><span class="dismess ">注册送十元代金券</span>
            </div>
            <div class="discount"><span class="xsbtn assertive">立减</span><span class="dismess ">下单立减</span></div>
        </div>
        <div class="light-bg" style="padding-left: 20px;"><img src="img/dizhi2.png" width="20px" height="20px" style="margin-top: 10px; margin-right:10px ;"><span
                    class="dismess" style="position: absolute;margin-top: 10px;">集合地:{{$info->travel_venue}}</span>
        </div>


        <form>
            <div class="datebanner light-bg">
                <div class="dateimg"><img src="img/date.png" width="20px" height="20px"></div>

                <div onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this)" class="choosedate">选择日期<i
                            class="ion ion-chevron-down" style="margin-left:5px ;"></i></div>
                <div class="inpbanner"><input type="button" class="theDate light-bg " value="2017/07/26" readonly
                                              name="theDate"></div>

            </div>

        </form>
        <div class="datebanner light-bg" ui-sref="frame.pannel">
            <img src="img/1.jpg"> <img src="img/2.jpg"> <img src="img/3.jpg"><img src="img/4.jpg">
            <span style="float: right;margin-top: -5px;">55人报名 <span
                        style="color: #FDD87E; font-size:20px ;">></span></span>
        </div>
        <ul id="ul2" class="light-bg defaultClass">

            <a ng-click="demo1();">
                <li>须知</li>
            </a>
            <a ng-click="demo2();">
                <li>行程</li>
            </a>
            <a ng-click="demo3();">
                <li> 费用</li>
            </a>
            <a ng-click="demo4();">
                <li>目的地</li>
            </a>
        </ul>
        <div class="padding" id="know">
            <p class="arttit"><img src="img/shuoming.png"><span>活动说明</span></p>
            <div>
               {{$info->travel_notice}}
            </div>
        </div>
        <div class="padding" id="journey">
            <p class="arttit"><img src="img/xingchen.png" width="18px" height="18px"><span>行程</span></p>
            <div>
              {{$info->travel_voyage}}
            </div>
        </div>

        <div class="padding" id="cost">
            <p class="arttit"><img src="img/feiyong.png" width="30px" height="30px"><span>费用</span></p>
            <div>
               {{$info->travel_expense}}
            </div>
        </div>

        <div class="padding" id="bourn">
            <p class="arttit"><img src="img/mudi.png" width="30px" height="30px"><span>目的地</span></p>
            <div>
               {{ $info->travel_bourn }}
            </div>
        </div>


    </ion-content>

    <div class="foot">

        <div class="kefu">

            <img src="img/kefu.png" width="30px" height="30px">


        </div>
        <div class="buy_button2 light" ui-sref="frame.payorder2">立即购买</div>

    </div>
    <div class="top" ng-show='showTop' ng-click="returntop();"><img src="img/top.png"></div>
    <ul id="ul22" class="light-bg chosenClass" ng-show='showTop'>
        <a ng-click="demo1();">
            <li>须知</li>
        </a>
        <a ng-click="demo2();">
            <li>行程</li>
        </a>
        <a ng-click="demo3();">
            <li> 费用</li>
        </a>
        <a ng-click="demo4();">
            <li>目的地</li>
        </a>
    </ul>
</ion-view>
       
