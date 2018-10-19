<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <!-- Latest compiled and minified CSS -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../../public/css/login.css?_version=<?php echo $versionCode?>">
    <script type="text/javascript" src="../../public/js/jquery.min.js"></script>
    <script src="../../public/js/jquery.i18n.properties.min.js"></script>
        <script src="../../public/js/zalyjsNative.js?_version=<?php echo $versionCode?>"></script>
    <script src="../../public/js/template-web.js"></script>
    <script src="../../public/js/zalyjsHelper.js"></script>


</head>
<body>
<div class="site-warning"></div>
<div class="zaly_container">
    <input type="hidden" value="<?php echo $loginNameAlias;?>" class="loginNameAlias">
    <input type="hidden" value="<?php echo $passwordFindWay;?>" class="passwordFindWay">
    <input type="hidden" value="<?php echo $loginWelcomeText;?>" class="loginWelcomeText">
    <input type="hidden" value="<?php echo $loginBackgroundColor;?>" class="loginBackgroundColor">
    <input type="hidden" value="<?php echo $loginBackgroundImage;?>" class="loginBackgroundImage">
    <input type="hidden" value="<?php echo $loginBackgroundImageDisplay;?>" class="loginBackgroundImageDisplay">
    <input type="hidden" value="<?php echo $siteVersionName;?>" class="siteVersionName">

    <div class="container">
        <div  class="login_custom_made">

        </div>
        <div  class="login_div">
            <div class="zaly_login zaly_login_by_pwd" >
                <div class="login_input_div" >

                </div>
            </div>

            <div class="zaly_login zaly_site_register zaly_site_register-name" style="display: none;">

            </div>

            <div class="zaly_login zaly_site_register zaly_site_register-invitecode" style="display: none;">
                <div class="back">
                    <img src="../../public/img/back.png" style="margin-left: 2rem; width: 3rem;height:3rem; margin-top: 2rem;cursor: pointer;" onclick="returnRegisterDiv(); return false;"/>
                </div>
                <div class="login_input_div" >
                    <div class="d-flex flex-row justify-content-center login-header"style="text-align: center;margin-top: 8rem;margin-bottom: 1rem;">
                        <span class="login_phone_tip_font" data-local-value="registerInvitationCodeTip" >输入邀请码</span>
                    </div>

                    <div class="code_div login_name_div_mobile" style="margin-top: 8rem;">
                        <input type="text" class="input_login_site register_input_code" style="margin-left: 0rem;" data-local-placeholder="enterCodePlaceholder" autocapitalize="off"   placeholder="输入邀请码"  >
                        <div class="line" ></div>
                    </div>

                    <div class="d-flex flex-row justify-content-center " >
                        <button type="button" class="btn register_button"  style="margin-top: 7rem;"><span class="span_btn_tip" data-local-value="registerBtnTip">注册并登录</span></button>
                    </div>
                </div>
            </div>

            <div class="zaly_login zaly_site_register zaly_site_update-invitecode" style="display: none;">
                <div class="back">
                    <img src="../../public/img/back.png" style="margin-left: 2rem; width: 3rem;height:3rem; margin-top: 2rem;cursor: pointer;" onclick="returnLoginDiv(); return false;"/>
                </div>
                <div class="login_input_div" >
                    <div class="d-flex flex-row justify-content-center login-header "style="text-align: center;margin-top: 8rem;margin-bottom: 1rem;">
                        <span class="login_phone_tip_font" data-local-value="registerInvitationCodeTip" >输入邀请码</span>
                    </div>

                    <div class="code_div login_name_div_mobile" style="margin-top: 8rem;">
                        <input type="text" class="input_login_site update_input_code" autocapitalize="off" style="margin-left: 0rem;" data-local-placeholder="enterCodePlaceholder" onkeydown="registerAndLoginByKeyDown(event)" placeholder="输入邀请码"  >
                        <div class="line" ></div>
                    </div>

                    <div class="d-flex flex-row justify-content-center " >
                        <button type="button" class="btn update_code_btn"  style="margin-top: 7rem;"><span class="span_btn_tip" data-local-value="registerBtnTip">注册并登录</span></button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div id="powered_by_duckchat" class="powered_by_duckchat">
        Powered by &nbsp; <a class="duckchat_website" target="_blank" href="https://duckchat.akaxin.com" style="cursor: pointer;"> Duckchat</a>
    </div>
</div>


<?php include(dirname(__DIR__) . '/passport/template_login.php'); ?>

<input type="hidden" value="<?php echo $isDuckchat; ?>" class="isDuckchat">
<script src="../../public/js/zalyjsHelper.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/im/zalyKey.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/im/zalyAction.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/im/zalyClient.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/im/zalyBaseWs.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/login/login.js?_version=<?php echo $versionCode?>"></script>

<script type="text/javascript">

</script>
</body>
</html>
