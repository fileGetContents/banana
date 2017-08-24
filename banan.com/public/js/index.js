function changeImage() {
    element = document.getElementById('like');
    if (element.src.match("after")) {
        element.src = "img/zan.png";
    }
    else {
        element.src = "img/zanafter.png";
    }
}
function changeImage2() {
    element = document.getElementById('like2');
    if (element.src.match("after")) {
        element.src = "img/zan.png";
    }
    else {
        element.src = "img/zanafter.png";
    }
}

function attention() {
    atten = document.getElementById("atten");

    if (atten.value == "关注TA") {
        atten.value = "已关注";
    }
    else if (atten.value == "已关注") {
        atten.value = "关注TA";
    }

}
function insertIcon(iconCode) {
    var txtarea = document.inputform.message;
    iconCode = '　' + iconCode + '　';
    if (txtarea.createTextRange && txtarea.caretPos) {
        var caretPos = txtarea.caretPos;
        caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == '　' ? iconCode + '　' : iconCode;
        txtarea.focus();
    } else {
        txtarea.value += iconCode;
        txtarea.focus();
    }
}
function insertIcon2(iconCode) {
    var txtarea = document.postform.message;
    iconCode = '　' + iconCode + '　';
    if (txtarea.createTextRange && txtarea.caretPos) {
        var caretPos = txtarea.caretPos;
        caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == '　' ? iconCode + '　' : iconCode;
        txtarea.focus();
    } else {
        txtarea.value += iconCode;
        txtarea.focus();
    }
}
function showBox() {
    var box = document.getElementById('pinglun-box');
    box.style.display = "block";
}

function cancelbox() {
    var box = document.getElementById('pinglun-box');
    box.style.display = "none";
}


function add() {
    var kuchun = document.getElementById("kuchun").innerHTML;
    if (document.getElementById("text_box1").value == kuchun) {
        this.disabled = "disabled";
    }
    else {
        document.getElementById("text_box1").value = parseInt(document.getElementById("text_box1").value) + 1;
    }
}
function minus() {
    if (document.getElementById("text_box1").value > 1) {
        document.getElementById("text_box1").value = parseInt(document.getElementById("text_box1").value) - 1;
    }
}
var buy_button = document.getElementsByClassName("buy_button")
buy_button.click = function () {
    var buy = document.getElementsByClassName("buy");
    buy.className = "show";
    alert("zhu")
};
var choosezzz = function () {
    var pitch = document.getElementsByClassName("pitch");
//pitch[0].style.borderColor="red";
    for (var i = 0; i < pitch.length; i++) {
        pitch[i].onclick = function () {
            for (var j = 0; j < pitch.length; j++) {
                pitch[j].style.borderColor = "";
            }
            this.style.borderColor = "red";
        }
    }
};


var talkzzz = function () {

    var btn = document.getElementById('btn');
    var text = document.getElementById('text');
    var content = document.getElementsByClassName('talkcontent')[0];
    var img = content.getElementsByTagName('img');
    var span = content.getElementsByTagName('span');
    btn.onclick = function () {
        if (text.value == '') {
            alert('不能发送空消息');
        } else {
            content.innerHTML += '<li class="rightli"><img src="img/1.jpg"><span>' + text.value + '</span></li>';
            text.value = '';
        }
    }
};


var paymoney = function () {
    btn = document.getElementById('sendbtn');
    btn.onclick = function () {
        alert('提交订单成功,点击立即支付');
        btn.innerHTML = '立即支付';
        btn.onclick = function () {
            window.location.href = '#/frame/home/payorder/pay';
        }

    }

};

var paymoney2 = function () {
    btn = document.getElementById('sendbtn2');
    btn.onclick = function () {
        alert('提交订单成功,点击立即支付');
        btn.innerHTML = '立即支付';
        btn.onclick = function () {
            window.location.href = '#/frame/start/payorder/pay2';
        }
    }

};


//          order.html
var orderchange = function () {
    var lis = document.getElementById("ul1").getElementsByTagName("li");
    var divs = document.getElementById("contener").getElementsByClassName("no");
    for (var i = 0; i < lis.length; i++) {
        lis[i].index = i;
        lis[i].onclick = function () {
            for (var j = 0; j < lis.length; j++) {
                lis[j].className = "";
            }
            this.className = "hover";
            for (var i = 0; i < divs.length; i++) {
                divs[i].style.display = "none";
            }
            divs[this.index].style.display = "block";
        }
    }
};


var orderchange2 = function () {
    var lis = document.getElementById("ul22").getElementsByTagName("li");
    for (var i = 0; i < lis.length; i++) {
        lis[i].index = i;
        lis[i].onclick = function () {
            for (var j = 0; j < lis.length; j++) {

                lis[j].style = "";
            }
            this.style.color = "#FFAF15";
            this.style.borderBottom = "1px solid #FFAF15";
        }
    }

};

var orderchange3 = function () {
    var lis = document.getElementById("ul3").getElementsByTagName("li");
    var divs = document.getElementById("contener3").getElementsByClassName("no");
    var yuding = document.getElementById("yuding");
    for (var i = 0; i < lis.length; i++) {
        lis[i].index = i;
        lis[i].onclick = function () {
            for (var j = 0; j < lis.length; j++) {
                lis[j].style = "";
            }
            this.style.color = "#FFAF15";
            this.style.borderBottom = "1px solid #FFAF15";
            for (var i = 0; i < divs.length; i++) {
                divs[i].style.display = "none";

            }
            divs[this.index].style.display = "block";
        }
    }

};

var timepicker = function () {
    $("#calendar").ionCalendar({
        lang: 'zh-cn',
        format: 'YYYY年M月D日',
        onClick: function (date) {
            $('#result').html(date)
        }
    });
};

function newname() {
    var pername = document.getElementById("pername");
    var inpname = document.getElementById("inpname");
    pername.innerHTML = inpname.value


}

function newphone() {
    var perphone = document.getElementById("perphone");
    var inpphone = document.getElementById("inpphone");
    perphone.innerHTML = inpphone.value
}

function newemail() {
    var peremail = document.getElementById("peremail");
    var inpemail = document.getElementById("inpemail");
    peremail.innerHTML = inpemail.value;
}

$scope.goGoodDetail = function (target_url) {
    console.log(11);
    // window.open( target_url,'_bank','location=yes')
    $state.go("frame.activedetails", {id: target_url});
};

/**
 * 后台数据连接
 */

function small_search() {
    $.ajax({
        type: "post",
        data: {
            "like": $("#small_where").val(),
            'address': $("#address").val(),
            'start': 0
        },
        dataType: "json",
        url: "like/address",
        success: function (obj) {
            var small_list = "";
            if (obj.length > 0) {
                for (var i in obj) {
                    small_list = small_list +
                        '<li class="item item-thumbnail-left"  ui-sref="frame.activedetails" >' +
                        '<img src="' + obj[i].travel_host_image + '"><p>' + obj[i].travel_name + '</p>' +
                        '<p class="list-price"><span class="RMB">RMB </span>' +
                        '<span class="bigprice">' + obj[i].travel_expense + '</span><span class="qi" >起 </span>' +
                        '</p></li>';
                }
            }
            $("#small_list").children().remove();
            $("#small_list").append(small_list);
            $("#small_start").val(5)
        },
        error: function () {
        }
    })
}

// 加载更多
function small_load_mode() {
    var start = $("#small_start").val();
    $.ajax({
        type: "post",
        data: {
            "like": $("#small_where").val(),
            'address': $("#address").val(),
            'start': start
        },
        dataType: "json",
        url: "like/address",
        success: function (obj) {
            var small_list = "";
            if (obj.length > 0) {
                for (var i in obj) {
                    small_list = small_list +
                        '<li class="item item-thumbnail-left"   ui-sref="frame.activedetails">' +
                        '<img src="' + obj[i].travel_host_image + '"><p>' + obj[i].travel_name + '</p>' +
                        '<p class="list-price"><span class="RMB">RMB </span>' +
                        '<span class="bigprice">' + obj[i].travel_expense + '</span><span class="qi">起 </span>' +
                        '</p></li>';
                }
            }
            $("#small_list").append(small_list);
            var start = parseInt($("#small_start").val()) + 5;
            $("#small_start").val(start)
        },
        error: function () {
        }
    })
}

