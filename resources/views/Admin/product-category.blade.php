<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <script type="text/javascript" src="lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="admin/css/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/css/H-ui.admin.css" rel="stylesheet" type="text/css"/>
    <link href="admin/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>建材列表</title>
</head>
<body class="pos-r">
<div>
    <div class="pd-20">
        <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:;" onclick="datadel()"
                                                                   class="btn btn-danger radius"><i
                            class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius"
                                                                          onclick="product_add('添加产品','product-add')"
                                                                          href="javascript:;"><i class="Hui-iconfont">
                        &#xe600;</i> 添加产品</a></span> <span class="r">共有数据：<strong>54</strong> 条</span></div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-bg table-hover table-sort">
                <thead>
                <tr class="text-c">
                    <th width="40"><input name="" type="checkbox" value=""></th>
                    <th width="40">房间编号</th>
                    <th width="60">房间图片</th>
                    <th width="100">房间名称</th>
                    <th width="90">所属酒店</th>
                    <th width="100">酒店地址</th>
                    <th width="60">剩余房间数目</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($room as $value)
                    <tr class="text-c va-m">
                        <td><input name="" type="checkbox" value=""></td>
                        <td>{{$value->room_id}}</td>
                        <td><a onClick="product_show('','product-show','10001')" href="javascript:;">
                                <img width="60" class="product-thumb" src="{{$value->room_image}}">
                            </a>
                        </td>
                        <td class="text-l">{{$value->room_name}}</td>
                        <td class="text-l">{{$value->hotel_name}}</td>
                        <td><span class="price">{{$value->hotel_address}}</span></td>
                        <td class="td-status">
                            {{$value->room_num}}
                        </td>
                        <td class="td-manage">
                            {{--<a style="text-decoration:none" onClick="product_stop(this,'10001')" href="javascript:;"--}}
                            {{--title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>--}}
                            {{--<a style="text-decoration:none" class="ml-5"--}}
                            {{--onClick="product_edit('产品编辑','product-add','10001')" href="javascript:;" title="编辑"><i--}}
                            {{--class="Hui-iconfont">&#xe6df;</i></a>--}}
                            <a style="text-decoration:none" class="ml-5" onClick="product_del(this,'10001')"
                               href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="admin/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="admin/js/H-ui.js"></script>
<script type="text/javascript" src="admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
    var setting = {
        view: {
            dblClickExpand: false,
            showLine: false,
            selectedMulti: false
        },
        data: {
            simpleData: {
                enable: true,
                idKey: "id",
                pIdKey: "pId",
                rootPId: ""
            }
        },
        callback: {
            beforeClick: function (treeId, treeNode) {
                var zTree = $.fn.zTree.getZTreeObj("tree");
                if (treeNode.isParent) {
                    zTree.expandNode(treeNode);
                    return false;
                } else {
                    demoIframe.attr("src", treeNode.file + "");
                    return true;
                }
            }
        }
    };

    //var zNodes =[
    //	{ id:1, pId:0, name:"一级分类", open:true},
    //	{ id:11, pId:1, name:"二级分类"},
    //	{ id:111, pId:11, name:"三级分类"},
    //	{ id:112, pId:11, name:"三级分类"},
    //	{ id:113, pId:11, name:"三级分类"},
    //	{ id:114, pId:11, name:"三级分类"},
    //	{ id:115, pId:11, name:"三级分类"},
    //	{ id:12, pId:1, name:"二级分类 1-2"},
    //	{ id:121, pId:12, name:"三级分类 1-2-1"},
    //	{ id:122, pId:12, name:"三级分类 1-2-2"},
    //];

    var code;

    function showCode(str) {
        if (!code) code = $("#code");
        code.empty();
        code.append("<li>" + str + "</li>");
    }

    //$(document).ready(function(){
    //	var t = $("#treeDemo");
    //	t = $.fn.zTree.init(t, setting, zNodes);
    //	demoIframe = $("#testIframe");
    //	demoIframe.bind("load", loadReady);
    //	var zTree = $.fn.zTree.getZTreeObj("tree");
    //	zTree.selectNode(zTree.getNodeByParam("id",'11'));
    //});

    $('.table-sort').dataTable({
        "aaSorting": [[1, "desc"]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            {"orderable": false, "aTargets": [0, 7]}// 制定列不参与排序
        ]
    });
    /*图片-添加*/
    function product_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-查看*/
    function product_show(title, url, id) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-审核*/
    function product_shenhe(obj, id) {
        layer.confirm('审核文章？', {
                    btn: ['通过', '不通过'],
                    shade: false
                },
                function () {
                    $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                    $(obj).parents("tr").find(".td-status")('<span class="label label-success radius">已发布</span>');
                    $(obj).remove();
                    layer.msg('已发布', {icon: 6, time: 1000});
                },
                function () {
                    $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                    $(obj).parents("tr").find(".td-status")('<span class="label label-danger radius">未通过</span>');
                    $(obj).remove();
                    layer.msg('未通过', {icon: 5, time: 1000});
                });
    }
    /*图片-下架*/
    function product_stop(obj, id) {
        layer.confirm('确认要下架吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
            $(obj).parents("tr").find(".td-status")('<span class="label label-defaunt radius">已下架</span>');
            $(obj).remove();
            layer.msg('已下架!', {icon: 5, time: 1000});
        });
    }

    /*图片-发布*/
    function product_start(obj, id) {
        layer.confirm('确认要发布吗？', function (index) {
            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
            $(obj).parents("tr").find(".td-status")('<span class="label label-success radius">已发布</span>');
            $(obj).remove();
            layer.msg('已发布!', {icon: 6, time: 1000});
        });
    }
    /*图片-申请上线*/
    function product_shenqing(obj, id) {
        $(obj).parents("tr").find(".td-status")('<span class="label label-default radius">待审核</span>');
        $(obj).parents("tr").find(".td-manage")("");
        layer.msg('已提交申请，耐心等待审核!', {icon: 1, time: 2000});
    }
    /*图片-编辑*/
    function product_edit(title, url, id) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-删除*/
    function product_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $(obj).parents("tr").remove();

            $.ajax({
                type: "post",
                data: {'table': 'good_order', 'file': 'order_id', 'where': id},
                dataType: "json",
                url: "{{URL('test')}}",
                success: function (obj) {

                },
                error: function (obj) {
                }
            });

            layer.msg('已删除!', {icon: 1, time: 1000});
        });
    }
</script>
<style type="text/css">
    #DataTables_Table_0_info {
        display: none
    }

    #DataTables_Table_0_paginate {
        display: none
    }
</style>
</body>
</html>