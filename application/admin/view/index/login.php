
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-backend">
    <meta name="csrf-token" content="Y8hlVXYQRrQ6Mbi2ayNbUHB0xUEUniHSDHAuPtXzXOg2rA87OXcq_UpjiPkzYjY6F0WoJHb3eOp6CGpHk5opnQ==">
    <title>Login</title>
    <link href="/static/admin//assets/66d40eeb/css/font-awesome.min.css" rel="stylesheet">
    <link href="/static/admin//assets/88800b20/css/bootstrap.css" rel="stylesheet">
    <link href="/static/admin//assets/97d4fd85/css/AdminLTE.min.css" rel="stylesheet">
    <link href="/static/admin//assets/97d4fd85/css/skins/_all-skins.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/layer/theme/default/layer.css">
</head>
<body class="login-page">



<div class="login-box">
    <div class="login-logo">
        <a href="/static/admin/#"><b>点餐</b>后台 管理系统</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">后台管理系统</p>

        <form id="login-form" action="" method="post">
            <div class="form-group has-feedback field-loginform-username required">

                <input type="text" id="username" class="form-control" name="username" placeholder="用户名" aria-required="true"><span class='glyphicon glyphicon-envelope form-control-feedback'></span>

                <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group has-feedback field-loginform-password required">

                <input type="password" id="password" class="form-control" name="password" placeholder="密码" aria-required="true"><span class='glyphicon glyphicon-lock form-control-feedback'></span>

                <p class="help-block help-block-error"></p>
            </div>


                <div>
                    <span><input type="text" class="form-control" id="checkCode" name="captcha" placeholder="验证码"></span>
                    <span>
                        <img src="{:captcha_src()}" alt="captcha" id="captcha" />
                    </span>
                </div>



            <div class="row">
                <div class="col-xs-8">
                    <div class="form-group field-loginform-rememberme">
                        <div class="checkbox">
                            <label for="loginform-rememberme">
                                <input type="checkbox" id="loginform-rememberme" name="rememberMe" value="1" checked>
                                记住登录信息
                            </label>
                            <p class="help-block help-block-error"></p>

                        </div>
                    </div>            </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="button" class="btn btn-primary btn-block btn-flat" id="login-button">登录</button>            </div>
                <!-- /.col -->
            </div>


        </form>
        <div class="social-auth-links text-center">

            <a href="/static/admin/#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-weibo"></i> 使用faceBook登录</a>
            <a href="/static/admin/#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-weixin"></i> 使用weChat登录</a>
        </div>
        <!-- /.social-auth-links -->



    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->

<div id="yii-debug-toolbar" data-url="/debug/default/toolbar?tag=5a62e2a81bb0f" style="display:none" class="yii-debug-toolbar-bottom"></div><style>
    #yii-debug-toolbar-logo {
        position: fixed;
        right: 31px;
        bottom: 4px;
    }

    @media print {
        .yii-debug-toolbar {
            display: none !important;
        }
    }

    .yii-debug-toolbar {
        font: 11px Verdana, Arial, sans-serif;
        text-align: left;
        width: 96px;
        transition: width .3s ease;
        z-index: 1000000;
    }

    .yii-debug-toolbar_active {
        width: 100%;
    }

    .yii-debug-toolbar_position_top {
        margin: 0 0 20px 0;
        width: 100%;
    }

    .yii-debug-toolbar_position_bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        margin: 0;
    }

    .yii-debug-toolbar__bar {
        position: relative;
        padding: 0;
        font: 11px Verdana, Arial, sans-serif;
        text-align: left;
        overflow: hidden;
        box-sizing: content-box;

        background: rgb(255, 255, 255);
        background: -moz-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0); /* IE6-9 */

        border: 1px solid rgba(0, 0, 0, 0.11);

        /* ensure debug toolbar text is displayed ltr even on rtl pages */
        direction: ltr;
    }

    .yii-debug-toolbar.yii-debug-toolbar_active:not(.yii-debug-toolbar_animating) .yii-debug-toolbar__bar {
        overflow: visible;
    }
    .yii-debug-toolbar:not(.yii-debug-toolbar_active) .yii-debug-toolbar__bar,
    .yii-debug-toolbar.yii-debug-toolbar_animating .yii-debug-toolbar__bar {
        height:40px;
    }

    .yii-debug-toolbar__bar:after {
        content: '';
        display: table;
        clear: both;
    }

    .yii-debug-toolbar__view {
        height: 0;
        overflow: hidden;
        background: white;
    }

    .yii-debug-toolbar__view iframe {
        margin: 0;
        padding: 0;
        padding-top: 10px;
        height: 100%;
        width: 100%;
        border: 0;
    }

    .yii-debug-toolbar_iframe_active .yii-debug-toolbar__view {
        height: 100%;
    }

    .yii-debug-toolbar_iframe_animating .yii-debug-toolbar__view {
        transition: height .3s ease;
    }

    .yii-debug-toolbar__block {
        float: left;
        margin: 0;
        border-right: 1px solid rgba(0, 0, 0, 0.11);
        padding: 4px 8px;
        line-height: 32px;
        white-space: nowrap;
    }

    .yii-debug-toolbar__block_active,
    .yii-debug-toolbar__ajax:hover {
        background: rgb(247, 247, 247); /* Old browsers */
        background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
    }

    .yii-debug-toolbar__block a {
        display: inline-block;
        text-decoration: none;
        color: black;
    }

    .yii-debug-toolbar__block img {
        vertical-align: middle;
    }

    .yii-debug-toolbar__label {
        display: inline-block;
        padding: 2px 4px;
        font-size: 12px;
        font-weight: normal;
        line-height: 14px;
        white-space: nowrap;
        vertical-align: baseline;
        color: #ffffff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
        background-color: #999999;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .yii-debug-toolbar__label:empty {
        display: none;
    }

    a.yii-debug-toolbar__label:hover,
    a.yii-debug-toolbar__label:focus {
        color: #ffffff;
        text-decoration: none;
        cursor: pointer;
    }

    .yii-debug-toolbar__label_important,
    .yii-debug-toolbar__label_error {
        background-color: #b94a48;
    }

    .yii-debug-toolbar__label_important[href] {
        background-color: #953b39;
    }

    .yii-debug-toolbar__label_warning,
    .yii-debug-toolbar__badge_warning {
        background-color: #f89406;
    }

    .yii-debug-toolbar__label_warning[href] {
        background-color: #c67605;
    }

    .yii-debug-toolbar__label_success {
        background-color: #468847;
    }

    .yii-debug-toolbar__label_success[href] {
        background-color: #356635;
    }

    .yii-debug-toolbar__label_info {
        background-color: #3a87ad;
    }

    .yii-debug-toolbar__label_info[href] {
        background-color: #2d6987;
    }

    .yii-debug-toolbar__label_inverse,
    .yii-debug-toolbar__badge_inverse {
        background-color: #333333;
    }

    .yii-debug-toolbar__label_inverse[href],
    .yii-debug-toolbar__badge_inverse[href] {
        background-color: #1a1a1a;
    }

    .yii-debug-toolbar__title {
        background: rgb(247, 247, 247); /* Old browsers */
        background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
    }

    .yii-debug-toolbar__block_last{ /* creates space for .yii-debug-toolbar__toggle, .yii-debug-toolbar__external */
        width: 80px;
        height: 40px;
        float: left;
    }

    .yii-debug-toolbar__toggle,
    .yii-debug-toolbar__external {
        cursor: pointer;
        position: absolute;

        width: 30px;
        height: 30px;
        font-size: 25px;
        font-weight: 100;
        line-height: 28px;
        color: #ffffff;
        text-align: center;

        opacity: 0.5;
        filter: alpha(opacity=50);

        transition: opacity .3s ease;
    }

    .yii-debug-toolbar__toggle:hover,
    .yii-debug-toolbar__toggle:focus,
    .yii-debug-toolbar__external:hover,
    .yii-debug-toolbar__external:focus {
        color: #ffffff;
        text-decoration: none;
        opacity: 0.9;
        filter: alpha(opacity=90);
    }

    .yii-debug-toolbar__toggle-icon,
    .yii-debug-toolbar__external-icon {
        display: inline-block;

        background-position: 50% 50%;
        background-repeat: no-repeat;
    }

    .yii-debug-toolbar__toggle {
        right: 10px;
        bottom: 4px;
    }

    .yii-debug-toolbar__toggle-icon {
        padding: 7px 0;
        width: 10px;
        height: 16px;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMTUuNTYzIDQwLjgzNmEuOTk3Ljk5NyAwIDAgMCAxLjQxNCAwbDE1LTE1YTEgMSAwIDAgMCAwLTEuNDE0bC0xNS0xNWExIDEgMCAwIDAtMS40MTQgMS40MTRMMjkuODU2IDI1LjEzIDE1LjU2MyAzOS40MmExIDEgMCAwIDAgMCAxLjQxNHoiLz48L3N2Zz4=');
        transition: -webkit-transform .3s ease-out;
        transition: transform .3s ease-out;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .yii-debug-toolbar_active .yii-debug-toolbar__toggle-icon {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }

    .yii-debug-toolbar_iframe_active .yii-debug-toolbar__toggle-icon {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .yii-debug-toolbar__external {
        display: none;
        right: 50px;
        bottom: 4px;
    }

    .yii-debug-toolbar_iframe_active .yii-debug-toolbar__external {
        display: block;
    }

    .yii-debug-toolbar__external-icon {
        padding: 8px 0;
        width: 14px;
        height: 14px;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMzkuNjQyIDkuNzIyYTEuMDEgMS4wMSAwIDAgMC0uMzgyLS4wNzdIMjguMTAzYTEgMSAwIDAgMCAwIDJoOC43NDNMMjEuNyAyNi43OWExIDEgMCAwIDAgMS40MTQgMS40MTVMMzguMjYgMTMuMDZ2OC43NDNhMSAxIDAgMCAwIDIgMFYxMC42NDZhMS4wMDUgMS4wMDUgMCAwIDAtLjYxOC0uOTI0eiIvPjxwYXRoIGQ9Ik0zOS4yNiAyNy45ODVhMSAxIDAgMCAwLTEgMXYxMC42NmgtMjh2LTI4aDEwLjY4M2ExIDEgMCAwIDAgMC0ySDkuMjZhMSAxIDAgMCAwLTEgMXYzMGExIDEgMCAwIDAgMSAxaDMwYTEgMSAwIDAgMCAxLTF2LTExLjY2YTEgMSAwIDAgMC0xLTF6Ii8+PC9zdmc+');
    }

    .yii-debug-toolbar__switch-icon {
        margin-left: 10px;
        padding: 5px 10px;
        width: 18px;
        height: 18px;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDUwIDUwIiB2ZXJzaW9uPSIxLjEiPjxwYXRoIGQ9Im00MS4xIDIzYy0wLjYgMC0xIDAuNC0xIDF2MTAuN2wtMjUuNi0wLjFjMCAwIDAtMiAwLTIuOCAwLTAuOC0wLjctMS0xLTAuNmwtMy41IDMuNWMtMC42IDAuNi0wLjYgMS4zIDAgMmwzLjQgMy40YzAuNCAwLjQgMS4xIDAuMiAxLTAuNmwwLTIuOWMwIDAgMjAuOCAwLjEgMjYuNiAwIDAuNiAwIDEtMC40IDEtMXYtMTEuN2MwLTAuNi0wLjQtMS0xLTF6TTkgMjYuOSA5IDI2LjkgOSAyNi45IDkgMjYuOSIvPjxwYXRoIGQ9Im05IDI2LjljMC42IDAgMS0wLjQgMS0xdi0xMC43bDI1LjYgMC4xYzAgMCAwIDIgMCAyLjggMCAwLjggMC43IDEgMSAwLjZsMy41LTMuNWMwLjYtMC42IDAuNi0xLjMgMC0ybC0zLjQtMy40Yy0wLjQtMC40LTEuMS0wLjItMSAwLjZsMCAyLjljMCAwLTIwLjgtMC4xLTI2LjYgMC0wLjYgMC0xIDAuNC0xIDF2MTEuN2MwIDAuNiAwLjQgMSAxIDF6Ii8+PC9zdmc+');
    }

    .yii-debug-toolbar__ajax {
        position: relative;
    }

    .yii-debug-toolbar__ajax:hover .yii-debug-toolbar__ajax_info,
    .yii-debug-toolbar__ajax:focus .yii-debug-toolbar__ajax_info {
        visibility: visible;
    }
    .yii-debug-toolbar__ajax_info {
        visibility: hidden;
        transition: visibility .2s linear;
        background-color: white;
        box-shadow: inset 0 -10px 10px -10px #e1e1e1;
        position: absolute;
        bottom: 40px;
        left: -1px;
        padding: 10px;
        max-width: 480px;
        max-height: 480px;
        word-wrap: break-word;
        overflow: hidden;
        overflow-y: auto;
        box-sizing: border-box;
        border: 1px solid rgba(0, 0, 0, 0.11);
        z-index: 1000001;
    }
    .yii-debug-toolbar__ajax a {
        color: #337ab7;
    }
    .yii-debug-toolbar__ajax table {
        width: 100%;
        table-layout: auto;
        border-spacing: 0;
        border-collapse: collapse;
    }
    .yii-debug-toolbar__ajax table td {
        padding: 4px;
        font-size: 12px;
        line-height: normal;
        vertical-align: top;
        border-top: 1px solid #ddd;
    }
    .yii-debug-toolbar__ajax table th {
        padding: 4px;
        font-size: 11px;
        line-height: normal;
        vertical-align: bottom;
        border-bottom: 2px solid #ddd;
    }
    .yii-debug-toolbar__ajax_request_status {
        color: white;
        padding: 2px 5px;
    }
    .yii-debug-toolbar__ajax_request_url {
        max-width: 170px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style><script>(function () {
        'use strict';

        var findToolbar = function () {
                return document.querySelector('#yii-debug-toolbar');
            },
            ajax = function (url, settings) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                settings = settings || {};
                xhr.open(settings.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.setRequestHeader('Accept', 'text/html');
                xhr.onreadystatechange = function (state) {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200 && settings.success) {
                            settings.success(xhr);
                        } else if (xhr.status != 200 && settings.error) {
                            settings.error(xhr);
                        }
                    }
                };
//                xhr.send(settings.data || '');
            },
            url,
            div,
            toolbarEl = findToolbar(),
            toolbarAnimatingClass = 'yii-debug-toolbar_animating',
            barSelector = '.yii-debug-toolbar__bar',
            viewSelector = '.yii-debug-toolbar__view',
            blockSelector = '.yii-debug-toolbar__block',
            toggleSelector = '.yii-debug-toolbar__toggle',
            externalSelector = '.yii-debug-toolbar__external',

            CACHE_KEY = 'yii-debug-toolbar',
            ACTIVE_STATE = 'active',

            animationTime = 300,

            activeClass = 'yii-debug-toolbar_active',
            iframeActiveClass = 'yii-debug-toolbar_iframe_active',
            iframeAnimatingClass = 'yii-debug-toolbar_iframe_animating',
            titleClass = 'yii-debug-toolbar__title',
            blockClass = 'yii-debug-toolbar__block',
            blockActiveClass = 'yii-debug-toolbar__block_active',
            requestStack = [];

        if (toolbarEl) {
            url = toolbarEl.getAttribute('data-url');

            ajax(url, {
                success: function (xhr) {
                    div = document.createElement('div');
                    div.innerHTML = xhr.responseText;

                    toolbarEl.parentNode && toolbarEl.parentNode.replaceChild(div, toolbarEl);

                    showToolbar(findToolbar());
                },
                error: function (xhr) {
                    toolbarEl.innerText = xhr.responseText;
                }
            });
        }

        function showToolbar(toolbarEl) {
            var barEl = toolbarEl.querySelector(barSelector),
                viewEl = toolbarEl.querySelector(viewSelector),
                toggleEl = toolbarEl.querySelector(toggleSelector),
                externalEl = toolbarEl.querySelector(externalSelector),
                blockEls = barEl.querySelectorAll(blockSelector),
                iframeEl = viewEl.querySelector('iframe'),
                iframeHeight = function () {
                    return (window.innerHeight * 0.7) + 'px';
                },
                isIframeActive = function () {
                    return toolbarEl.classList.contains(iframeActiveClass);
                },
                showIframe = function (href) {
                    toolbarEl.classList.add(iframeAnimatingClass);
                    toolbarEl.classList.add(iframeActiveClass);

                    iframeEl.src = externalEl.href = href;
                    viewEl.style.height = iframeHeight();
                    setTimeout(function() {
                        toolbarEl.classList.remove(iframeAnimatingClass);
                    }, animationTime);
                },
                hideIframe = function () {
                    toolbarEl.classList.add(iframeAnimatingClass);
                    toolbarEl.classList.remove(iframeActiveClass);
                    removeActiveBlocksCls();

                    externalEl.href = '#';
                    viewEl.style.height = '';
                    setTimeout(function() {
                        toolbarEl.classList.remove(iframeAnimatingClass);
                    }, animationTime);
                },
                removeActiveBlocksCls = function () {
                    [].forEach.call(blockEls, function (el) {
                        el.classList.remove(blockActiveClass);
                    });
                },
                toggleToolbarClass = function (className) {
                    toolbarEl.classList.add(toolbarAnimatingClass);
                    if (toolbarEl.classList.contains(className)) {
                        toolbarEl.classList.remove(className);
                    } else {
                        toolbarEl.classList.add(className);
                    }
                    setTimeout(function () {
                        toolbarEl.classList.remove(toolbarAnimatingClass);
                    }, animationTime);
                },
                toggleStorageState = function (key, value) {
                    if (window.localStorage) {
                        var item = localStorage.getItem(key);

                        if (item) {
                            localStorage.removeItem(key);
                        } else {
                            localStorage.setItem(key, value);
                        }
                    }
                },
                restoreStorageState = function (key) {
                    if (window.localStorage) {
                        return localStorage.getItem(key);
                    }
                },
                togglePosition = function () {
                    if (isIframeActive()) {
                        hideIframe();
                    } else {
                        toggleToolbarClass(activeClass);
                        toggleStorageState(CACHE_KEY, ACTIVE_STATE);
                    }
                };

            toolbarEl.style.display = 'block';

            if (restoreStorageState(CACHE_KEY) === ACTIVE_STATE) {
                toolbarEl.classList.add(activeClass);
            }

            window.onresize = function () {
                if (toolbarEl.classList.contains(iframeActiveClass)) {
                    viewEl.style.height = iframeHeight();
                }
            };

            barEl.onclick = function (e) {
                var target = e.target,
                    block = findAncestor(target, blockClass);

                if (block && !block.classList.contains(titleClass)
                    && e.which !== 2 && !e.ctrlKey // not mouse wheel and not ctrl+click
                ) {
                    while (target !== this) {
                        if (target.href) {
                            removeActiveBlocksCls();
                            block.classList.add(blockActiveClass);
                            showIframe(target.href);
                        }
                        target = target.parentNode;
                    }

                    e.preventDefault();
                }
            };

            toggleEl.onclick = togglePosition;
        }

        function findAncestor(el, cls) {
            while ((el = el.parentElement) && !el.classList.contains(cls));
            return el;
        }

        function renderAjaxRequests() {
            var requestCounter = document.getElementsByClassName('yii-debug-toolbar__ajax_counter');
            if (!requestCounter.length) {
                return;
            }
            var ajaxToolbarPanel = document.querySelector('.yii-debug-toolbar__ajax');
            var tbodies = document.getElementsByClassName('yii-debug-toolbar__ajax_requests');
            var state = 'ok';
            if (tbodies.length) {
                var tbody = tbodies[0];
                var rows = document.createDocumentFragment();
                if (requestStack.length) {
                    var firstItem = requestStack.length > 20 ? requestStack.length - 20 : 0;
                    for (var i = firstItem; i < requestStack.length; i++) {
                        var request = requestStack[i];
                        var row = document.createElement('tr');
                        rows.appendChild(row);

                        var methodCell = document.createElement('td');
                        methodCell.innerHTML = request.method;
                        row.appendChild(methodCell);

                        var statusCodeCell = document.createElement('td');
                        var statusCode = document.createElement('span');
                        if (request.statusCode < 300) {
                            statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_success');
                        } else if (request.statusCode < 400) {
                            statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_warning');
                        } else {
                            statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_error');
                        }
                        statusCode.textContent = request.statusCode || '-';
                        statusCodeCell.appendChild(statusCode);
                        row.appendChild(statusCodeCell);

                        var pathCell = document.createElement('td');
                        pathCell.className = 'yii-debug-toolbar__ajax_request_url';
                        pathCell.innerHTML = request.url;
                        pathCell.setAttribute('title', request.url);
                        row.appendChild(pathCell);

                        var durationCell = document.createElement('td');
                        durationCell.className = 'yii-debug-toolbar__ajax_request_duration';
                        if (request.duration) {
                            durationCell.innerText = request.duration + " ms";
                        } else {
                            durationCell.innerText = '-';
                        }
                        row.appendChild(durationCell);
                        row.appendChild(document.createTextNode(' '));

                        var profilerCell = document.createElement('td');
                        if (request.profilerUrl) {
                            var profilerLink = document.createElement('a');
                            profilerLink.setAttribute('href', request.profilerUrl);
                            profilerLink.innerText = request.profile;
                            profilerCell.appendChild(profilerLink);
                        } else {
                            profilerCell.innerText = 'n/a';
                        }
                        row.appendChild(profilerCell);

                        if (request.error) {
                            if (state !== "loading" && i > requestStack.length - 4) {
                                state = 'error';
                            }
                        } else if (request.loading) {
                            state = 'loading'
                        }
                        row.className = 'yii-debug-toolbar__ajax_request';
                    }
                    while (tbody.firstChild) {
                        tbody.removeChild(tbody.firstChild);
                    }
                    tbody.appendChild(rows);
                }
                ajaxToolbarPanel.style.display = 'block';
            }
            requestCounter[0].innerText = requestStack.length;
            var className = 'yii-debug-toolbar__label yii-debug-toolbar__ajax_counter';
            if (state === 'ok') {
                className += ' yii-debug-toolbar__label_success';
            } else if (state === 'error') {
                className += ' yii-debug-toolbar__label_error';
            }
            requestCounter[0].className = className;
        };

        var proxied = XMLHttpRequest.prototype.open;

        XMLHttpRequest.prototype.open = function (method, url, async, user, pass) {
            var self = this;
            /* prevent logging AJAX calls to static and inline files, like templates */
            if (url.substr(0, 1) === '/' && !url.match(new RegExp("{{ excluded_ajax_paths }}"))) {
                var stackElement = {
                    loading: true,
                    error: false,
                    url: url,
                    method: method,
                    start: new Date()
                };
                requestStack.push(stackElement);
                this.addEventListener("readystatechange", function () {
                    if (self.readyState == 4) {
                        stackElement.duration = self.getResponseHeader("X-Debug-Duration") || new Date() - stackElement.start;
                        stackElement.loading = false;
                        stackElement.statusCode = self.status;
                        stackElement.error = self.status < 200 || self.status >= 400;
                        stackElement.profile = self.getResponseHeader("X-Debug-Tag");
                        stackElement.profilerUrl = self.getResponseHeader("X-Debug-Link");
                        renderAjaxRequests();
                    }
                }, false);
                renderAjaxRequests();
            }
            proxied.apply(this, Array.prototype.slice.call(arguments));
        };

        // catch fetch AJAX requests
        if (window.fetch) {
            var originalFetch = window.fetch;

            window.fetch = function(input, init) {
                var method;
                var url;
                if (typeof input === "string") {
                    method = (init && init.method) || 'GET';
                    url = input;
                } else if (window.Request && input instanceof Request) {
                    method = input.method;
                    url = input.url;
                }
                var promise = originalFetch(input, init);

                /* prevent logging AJAX calls to static and inline files, like templates */
                if (url.substr(0, 1) === '/' && !url.match(new RegExp("{{ excluded_ajax_paths }}"))) {
                    var stackElement = {
                        loading: true,
                        error: false,
                        url: url,
                        method: method,
                        start: new Date()
                    };
                    requestStack.push(stackElement);
                    promise.then(function(response) {
                        stackElement.duration = response.headers.get("X-Debug-Duration") || new Date() - stackElement.start;
                        stackElement.loading = false;
                        stackElement.statusCode = response.status;
                        stackElement.error = response.status < 200 || response.status >= 400;
                        stackElement.profile = response.headers.get("X-Debug-Tag");
                        stackElement.profilerUrl = response.headers.get("X-Debug-Link");
                        renderAjaxRequests();

                        return response;
                    }).catch(function(error) {
                        stackElement.loading = false;
                        stackElement.error = true;
                        renderAjaxRequests();

                        throw error;
                    });
                    renderAjaxRequests();
                }

                return promise;
            };
        }

    })();</script><script src="/static/admin/assets/5521ea29/jquery.js"></script>
<script src="/static/admin/assets/ca37c23b/yii.js"></script>
<script src="/static/admin/assets/ca37c23b/yii.activeForm.js"></script>
<script src="/static/admin/assets/88800b20/js/bootstrap.js"></script>
<script src="/static/admin/assets/97d4fd85/js/adminlte.min.js"></script>
<script src="/static/layer/layer.js"></script>
<script type="text/javascript">
//    jQuery(function ($) {
//        jQuery('#login-form').yiiActiveForm([], []);
//    });

    $("#captcha").click(function () {
        $(this).attr('src','/captcha?id='+Math.random());
    });
//    $("#checkCode").blur(function () {
//        $.post('login/',$("#checkCode").val(),function (data) {
//            //信息框-例3
//            console.dir(data);
//            layer.msg(data.msg);
//            window.location.href='login';
//        },"json");
//    });
//    $("#username").blur(function () {
//        $.post('login/',$("#username").val(),function (data) {
//            //信息框-例3
//            console.dir(data);
//            layer.msg(data.msg);
//        },"json");
//    });
//    $("#password").blur(function () {
//        $.post('login/',$("#password").val(),function (data) {
//            //信息框-例3
//            console.dir(data);
//            layer.msg(data.msg);
//        },"json");
//    });
    $("#login-button").click(function () {
       $.post('/admin/index/login',$("#login-form").serialize(),function (data) {
           if (data.code == '0'){

               //自定页
               layer.open({
                   title: [data.msg+'<i class="layui-icon" style="font-size: 30px; color:&#xe69c;">&#xe60c;</i> ', 'font-size:18px;text-align:center;padding-left:20px;padding-right:20px;color:#3C8DBC'],
                   type: 1,
                   skin: 'layui-anim-up', //样式类名
                   closeBtn: 0, //不显示关闭按钮
                   anim: 2,
                   shadeClose: true, //开启遮罩关闭
                   content: false
               });
           }else {
               //信息框-例5
               layer.msg(data.msg, function(){
                //关闭后的操作
                   window.location.href=data.url;
               });

           }
       },'json');
    });
</script></body>
</html>
