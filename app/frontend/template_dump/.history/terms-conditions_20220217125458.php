<?php
    session_start();

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['de', 'en'];

    if($_SESSION['lang'] != null){
      $lang = $_SESSION['lang'];
    }

    $lang = in_array($lang, $acceptLang) ? $lang : 'de';
    require_once "languages/{$lang}.php"; 

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#557b97">

    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/0250/8511/6462/files/favicon_32x32.png?v=1577736892"
        type="image/png">
    <title>Terms of service</title>

    <!-- /snippets/social-meta-tags.liquid -->

    <meta property="og:site_name" content="BIO STRUCTURE LAB">
    <meta property="og:title" content="Terms of service">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Indigo is your trusted source for premium marine collagen powder for hair, skin, & nails. Inspired by people, made by nature to elevate your wellness routine.">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Terms of service">
    <meta name="twitter:description"
        content="Indigo is your trusted source for premium marine collagen powder for hair, skin, & nails. Inspired by people, made by nature to elevate your wellness routine.">

    <link rel="stylesheet" href="css/slick.min.css" />
    <!-- Swiper Slider CSS -->
    <link href="css/swiper-bundle.min.css?v=10428913506363814048" rel="stylesheet" type="text/css" media="all" />

    <link href="css/theme.scss.css?v=3425957597989302598" rel="stylesheet" type="text/css" media="all" />
    <link href="css/envoy.css?v=6561905467274492954" rel="stylesheet" type="text/css" media="all" />

    <script>
        var theme = {
            breakpoints: {
                medium: 750,
                large: 990,
                widescreen: 1400
            },
            strings: {
                addToCart: "Add to cart",
                soldOut: "Sold out",
                unavailable: "Unavailable",
                regularPrice: "Regular price",
                salePrice: "Sale price",
                sale: "Sale",
                showMore: "Show More",
                showLess: "Show Less",
                addressError: "Error looking up that address",
                addressNoResults: "No results for that address",
                addressQueryLimit: "You have exceeded the Google API usage limit. Consider upgrading to a \u003ca href=\"https:\/\/developers.google.com\/maps\/premium\/usage-limits\"\u003ePremium Plan\u003c\/a\u003e.",
                authError: "There was a problem authenticating your Google Maps account.",
                newWindow: "Opens in a new window.",
                external: "Opens external website.",
                newWindowExternal: "Opens external website in a new window.",
                removeLabel: "Remove [product]",
                update: "Update",
                quantity: "Quantity",
                discountedTotal: "Discounted total",
                regularTotal: "Regular total",
                priceColumn: "See Price column for discount details.",
                quantityMinimumMessage: "Quantity must be 1 or more",
                cartError: "There was an error while updating your cart. Please try again.",
                removedItemMessage: "Removed \u003cspan class=\"cart__removed-product-details\"\u003e([quantity]) [link]\u003c\/span\u003e from your cart.",
                unitPrice: "Unit price",
                unitPriceSeparator: "per",
                oneCartCount: "1 item",
                otherCartCount: "[count] items",
                quantityLabel: "Quantity: [count]"
            },
            moneyFormat: "${{amount}}",
            moneyFormatWithCurrency: "${{amount}} USD"
        }

        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <script src="js/lazysizes.js?v=9422402313628365795" async="async"></script>
    <script src="js/vendor.js?v=1200183919454698418"></script>
    <script src="js/theme.js?v=11472053029047550797" defer="defer"></script>
    <script src="js/envoy.min.js?v=7709812156291905896" defer="defer"></script>

    <script async="" type="text/javascript" data-api-key="pubkey-15vkcqh4c9A4n274S3u4fJyN13824Y"
        id="stamped-script-widget" src="https://cdn2.stamped.io/files/widget.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn2.stamped.io/files/widget.min.css">

    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
    <link rel="stylesheet" media="all" integrity="sha256-PkqjwHo6YXgNFrxLgo0v754aIKRKrjbgKae5jl7lpNA="
        crossorigin="anonymous"
        href="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/policy-3e4aa3c07a3a61780d16bc4b828d2fef9e1a20a44aae36e029a7b98e5ee5a4d0.css">
    <meta name="google-site-verification" content="PuXBOqgiT8qtzvV_AXTpkKmyuoHYrauJwU58eJnwlMM">
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/25085116462/digital_wallets/dialog">
    <meta name="shopify-checkout-api-token" content="f454fbd65db0682f71dfd1194dcf3a7d">
    <meta id="in-context-paypal-metadata" data-shop-id="25085116462" data-venmo-supported="true"
        data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="USD">
    <meta id="amazon-payments-metadata" data-amazon-payments="true" data-amazon-payments-seller-id="A1ZGOZ9RY8FZ4Z"
        data-amazon-payments-callback-url="https://www.indigocollagen.com/25085116462/amazon_payments/callback"
        data-amazon-payments-sandbox-mode="false"
        data-amazon-payments-client-id="amzn1.application-oa2-client.ff2e0324b0d847d381e81bd48ce17833"
        data-amazon-payments-region="US" data-amazon-payments-language="en-US"
        data-amazon-payments-widget-library-url="https://static-na.payments-amazon.com/OffAmazonPayments/us/js/Widgets.js">
    <script id="apple-pay-shop-capabilities"
        type="application/json">{"shopId":25085116462,"countryCode":"US","currencyCode":"USD","merchantCapabilities":["supports3DS"],"merchantId":"gid:\/\/shopify\/Shop\/25085116462","merchantName":"Indigo Collagen","requiredBillingContactFields":["postalAddress","email"],"requiredShippingContactFields":["postalAddress","email"],"shippingType":"shipping","supportedNetworks":["visa","masterCard","amex","discover","jcb","elo","chinaUnionPay"],"total":{"type":"pending","label":"Indigo Collagen","amount":"1.00"}}</script>
    <script id="shopify-features"
        type="application/json">{"accessToken":"f454fbd65db0682f71dfd1194dcf3a7d","betas":["rich-media-storefront-analytics"],"domain":"www.indigocollagen.com","predictiveSearch":true,"shopId":25085116462,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en"}</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "indigocollagen.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = { "active": "USD", "rate": "1.0" };
        Shopify.country = "US";
        Shopify.theme = { "name": "Working Indigo - By Pivofy", "id": 127169724589, "theme_store_id": 796, "role": "main" };
        Shopify.theme.handle = "null";
        Shopify.theme.style = { "id": null, "handle": null };
        Shopify.cdnHost = "cdn.shopify.com";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "/";</script>
    <script type="module">!function (o) { (o.Shopify = o.Shopify || {}).modules = !0 }(window);</script>
    <script>!function (o) { function n() { var o = []; function n() { o.push(Array.prototype.slice.apply(arguments)) } return n.q = o, n } var t = o.Shopify = o.Shopify || {}; t.loadFeatures = n(), t.autoloadFeatures = n() }(window);</script>
    <script>window.ShopifyPay = window.ShopifyPay || {};
        window.ShopifyPay.apiHost = "shop.app\/pay";</script>
    <script>(function () {
            function asyncLoad() {
                var urls = ["https:\/\/static.klaviyo.com\/onsite\/js\/klaviyo.js?company_id=P2VuFv\u0026shop=indigocollagen.myshopify.com", "https:\/\/rechargeassets-bootstrapheroes-rechargeapps.netdna-ssl.com\/static\/js\/recharge.js?shop=indigocollagen.myshopify.com", "https:\/\/cdn-scripts.signifyd.com\/shopify\/script-tag.js?shop=indigocollagen.myshopify.com", "https:\/\/cdn1.stamped.io\/files\/widget.min.js?shop=indigocollagen.myshopify.com", "https:\/\/thfeed.thimatic-apps.com\/thfeed\/assets\/gallaryfeed.js?shop=indigocollagen.myshopify.com", "https:\/\/accessibly.app\/public\/widget\/run.js?shop=indigocollagen.myshopify.com", "https:\/\/bundle.thimatic-apps.com\/theme_files\/only_style.php?shop=indigocollagen.myshopify.com"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if (window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();</script>
    <script
        id="__st">var __st = { "a": 25085116462, "offset": -18000, "reqid": "8ca4529b-c8c7-4dd7-ba8a-f8a5fe8307e0", "pageurl": "www.indigocollagen.com\/policies\/terms-of-service", "u": "8a58632a39f8" };</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script>!function (o) { o.addEventListener("DOMContentLoaded", function () { window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || { siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9" }; var t = ['form[action*="/contact"] input[name="form_type"][value="contact"]', 'form[action*="/comments"] input[name="form_type"][value="new_comment"]', 'form[action*="/account"] input[name="form_type"][value="customer_login"]', 'form[action*="/account"] input[name="form_type"][value="recover_customer_password"]', 'form[action*="/account"] input[name="form_type"][value="create_customer"]', 'form[action*="/contact"] input[name="form_type"][value="customer"]'].join(","); function n(e) { e = e.target; null == e || null != (e = function e(t, n) { if (null == t.parentElement) return null; if ("FORM" != t.parentElement.tagName) return e(t.parentElement, n); for (var o = t.parentElement.action, r = 0; r < n.length; r++)if (-1 !== o.indexOf(n[r])) return t.parentElement; return null }(e, ["/contact", "/comments", "/account"])) && null != e.querySelector(t) && ((e = o.createElement("script")).setAttribute("src", "https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"), o.body.appendChild(e), o.removeEventListener("focus", n, !0), o.removeEventListener("change", n, !0), o.removeEventListener("click", n, !0)) } o.addEventListener("click", n, !0), o.addEventListener("change", n, !0), o.addEventListener("focus", n, !0) }) }(document);</script>
    <script integrity="sha256-fnL7TRTwbWDFcwa4DcFG8Ozb5OTAlB9PNTe+5NVDFK8="
        data-source-attribution="shopify.loadfeatures" defer="defer"
        src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-7e72fb4d14f06d60c57306b80dc146f0ecdbe4e4c0941f4f3537bee4d54314af.js"
        crossorigin="anonymous"></script>
    <script crossorigin="anonymous" defer="defer"
        src="//cdn.shopify.com/shopifycloud/shopify/assets/shopify_pay/storefront-b61f50798075db890698930c4405673937fe89353f7fea7be88b5ce16a9c0af8.js?v=20210208"></script>
    <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4="
        data-source-attribution="shopify.dynamic-checkout" defer="defer"
        src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js"
        crossorigin="anonymous"></script>


    <style id="shopify-dynamic-checkout-cart">
        @media screen and (min-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 50px;
            }
        }

        @media screen and (max-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 300px;
            }
        }
    </style>
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>

    <script>(function (w, d, t, r, u) { var f, n, i; w[u] = w[u] || [], f = function () { var o = { ti: "56343584" }; o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad") }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function () { var s = this.readyState; s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null) }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i) })(window, document, "script", "//bat.bing.com/bat.js", "uetq");</script>



    <script type="text/javascript">
        //var sm_quantity_selector_attr = 'id';
        var sm_override_checkout_button = true;
        if (window.location.pathname == '/collections/all') {
            window.location.replace('/collections/all-products');
        }

        var sm_is_cart_page = false;

    </script>

    <style>
        #gift_container,
        #gift_container .giftContainerContent,
        #smProductDetailGiftWrapper {
            all: unset;
        }

        #gift_container .giftContainerContent *,
        #smProductDetailGiftWrapper * {
            all: unset;
        }

        #sticky_gift_icon.stickyGartRight {
            right: 20px;
            bottom: 20px;
        }

        #sticky_gift_icon {
            position: fixed;
            bottom: 200px;
            right: 15px;
            z-index: 9999;
        }

        #sticky_gift_icon a {
            text-decoration: none;
            font-size: 20px;
            color: #34495e;
        }

        #sticky_gift_icon span {
            display: block;
            -webkit-border-radius: 40px;
            -moz-border-radius: 40px;
            border-radius: 40px;
            background-color: rgba(255, 255, 255, .9);
            -webkit-box-shadow: 1px 1px 5px grey;
            -moz-box-shadow: 1px 1px 5px grey;
            box-shadow: 1px 1px 5px grey;
            padding: 10px;
            width: 40px;
            height: 40px;
            margin: 0 auto;
            line-height: 40px !important;
            text-align: center;
            text-align: -moz-center;
            text-align: -webkit-center;
            position: relative;
            box-sizing: content-box !important;
            z-index: 1;
        }

        #sticky_gift_icon mark {
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border: 2px solid #FFF;
            width: 20px;
            height: 20px;
            background-color: #FF6B6B;
            position: absolute;
            top: -5px;
            left: -10px;
            font-size: 10px;
            line-height: 20px;
            font-family: Roboto, sans-serif;
            color: #FFF;
            font-weight: 700;
            box-sizing: content-box !important;
        }

        #sticky_gift_icon svg.showGifts {
            height: 30px;
            width: 30px;
            margin-top: 3px;
        }

        #sticky_gift_icon svg.hideGifts {
            height: 25px;
            width: 25px;
            margin-top: 8px;
            display: none;
        }

        #gift_container {
            color: black;
            position: fixed;
            z-index: 9999999;
            bottom: 95px;
            right: 20px;
            max-height: 80%;
            overflow-y: scroll;
            overflow-x: hidden;
            -webkit-box-shadow: rgba(0, 0, 0, 0.16) 0px 5px 40px, rgb(0, 0, 0) 0px 5px 0px 0px inset !important;
            -moz-box-shadow: rgba(0, 0, 0, 0.16) 0px 5px 40px, rgb(0, 0, 0) 0px 5px 0px 0px inset !important;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 5px 40px, rgb(0, 0, 0) 0px 5px 0px 0px inset !important;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            font-size: 13px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        #gift_container .giftContainerContent {
            float: right;
            background: white;
            width: 320px;
            position: relative;
            padding: 10px 10px 0px 10px;
            display: none;
        }

        #gift_container .giftContainerContent .giftWrapper {
            color: black;
            padding: 5px;
            margin: 0px 0px 10px;
            background: rgb(255, 255, 255) none repeat scroll 0% 0%;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 15px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
            -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 15px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 15px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
            position: relative;
            display: block;
        }

        #gift_container .giftContainerContent .orderGiftsTitle,
        #gift_container .giftContainerContent .productsToOfferGiftsTitle {
            text-align: center;
            padding: 5px;
            margin: 0 auto;
            font-weight: bold;
            display: block;
            border-bottom: 1px solid gray;
            width: 95%;
        }

        #gift_container .giftContainerContent ul {
            display: inline;
        }

        #gift_container .giftContainerContent li {
            padding: 10px 20px;
            display: block;
        }

        #gift_container .giftContainerContent li img {
            width: 22%;
            float: left;
            display: block;
        }

        #gift_container .giftContainerContent .smItems {
            width: 70%;
            display: block;
            float: left;
            margin-left: 5%;
        }

        #gift_container .giftContainerContent .giftWrapper a {
            display: inline;
            cursor: pointer;
            text-decoration: underline;
        }

        #gift_container .giftContainerContent .smAddGiftToCart {
            padding: 4px 10px;
            margin-top: 4px;
            background: rgba(168, 168, 168, 0.46) none repeat scroll 0% 0%;
            border-radius: 2px;
            position: relative;
            display: block;
            font-weight: bold;
            cursor: pointer;
        }

        #gift_container .giftContainerContent .giftAlreadyInCart {
            padding: 5px 20px;
            display: block;
            text-align: center;
        }

        #gift_container .giftContainerContent .giftAlreadyInCart a {
            font-weight: bold;
        }

        #gift_container .giftContainerContent .removeFromCart {
            display: block;
            margin-top: 10px;
            cursor: pointer;
            text-decoration: underline;
        }


        #gift_container .giftContainerContent .item-variants select {
            display: block;
            color: #444;
            padding: .3em 1.0em .3em .3em;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            margin-top: 2px;
            border: 1px solid #aaa;
            -moz-border-radius: .2em;
            -webkit-border-radius: .2em;
            border-radius: .2em;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: #fff;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 width="292.362px" height="292.362px" viewBox="0 0 292.362 292.362" style="enable-background:new 0 0 292.362 292.362;"	 xml:space="preserve"><g>	<path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424		C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428		s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>'), linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
            background-repeat: no-repeat, repeat;
            background-position: right .7em top 50%, 0 0;
            background-size: .65em auto, 100%;
        }

        #gift_container .giftContainerContent .item-variants select::-ms-expand {
            display: none;
        }

        #gift_container .giftContainerContent .item-variants select:hover {
            border-color: #888;
        }

        #gift_container .giftContainerContent .item-variants select:focus {
            border-color: #aaa;
            -moz-box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
            -webkit-box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
            box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
            -moz-box-shadow: 0 0 0 3px -moz-mac-focusring;
            -webkit-box-shadow: 0 0 0 3px -moz-mac-focusring;
            box-shadow: 0 0 0 3px -moz-mac-focusring;
            color: #222;
            outline: none;
        }

        #gift_container .giftContainerContent .item-variants select option {
            font-weight: normal;
        }

        *[dir="rtl"] #gift_container .giftContainerContent .item-variants select,
        :root:lang(ar) #gift_container .giftContainerContent .item-variants select,
        :root:lang(iw) #gift_container .giftContainerContent .item-variants select {
            background-position: left .7em top 50%, 0 0;
            padding: .6em .8em .5em 1.4em;
        }

        #gift_container .giftContainerContent .item-variants select:disabled,
        #gift_container .giftContainerContent .item-variants select[aria-disabled=true] {
            color: graytext;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 width="292.362px" height="292.362px" viewBox="0 0 292.362 292.362" style="enable-background:new 0 0 292.362 292.362;"	 xml:space="preserve"><g>	<path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424		C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428		s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>'), linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
        }

        #gift_container .giftContainerContent .item-variants select:disabled:hover,
        #gift_container .giftContainerContent .item-variants select[aria-disabled=true] {
            border-color: #aaa;
        }

        #gift_container .giftContainerContent:after {
            bottom: 100%;
            left: 89%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: white;
            border-width: 8px;
            margin-left: -8px;
        }

        #gift_container .button {
            background: #6394F8;
            color: white;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            display: block;
            border-radius: 3px;
            font-size: 16px;
            margin: 25px 0 15px 0;
        }

        #gift_container .button:hover {
            background: #729ef9;
        }

        #gift_container .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        #gift_container #overlaySection {
            display: none;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            opacity: 0.6;
            z-index: 99;
        }


        #smProductDetailGiftWrapper {
            position: relative;
            font-size: 13px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: #000;
            padding: 10px;
            margin: 20px 0px 50px;
            background: rgb(255, 255, 255) none repeat scroll 0% 0%;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px 0px, rgba(0, 0, 0, 0.1) 0px 1px 1px 1px;
            -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px 0px, rgba(0, 0, 0, 0.1) 0px 1px 1px 1px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px 0px, rgba(0, 0, 0, 0.1) 0px 1px 1px 1px;
            display: block;
            clear: both;
        }

        #smProductDetailGiftWrapper.alreadyInCart {
            border: 1px solid #00800070;
            background: rgb(245, 251, 244);
        }

        #smProductDetailGiftWrapper .alreadyInCartProductTitle {
            display: block;
            text-align: center;
        }

        #smProductDetailGiftWrapper .alreadyInCartProductTitle a {
            cursor: pointer;
            text-decoration: underline;
            font-weight: bold;
        }

        #smProductDetailGiftWrapper .removeFromCart {
            display: block;
            text-align: center;
            margin-top: 20px;
            cursor: pointer;
            text-decoration: underline;
        }


        #smProductDetailGiftWrapper li {
            padding: 10px 20px;
            display: inline-block;
        }

        #smProductDetailGiftWrapper li img {
            width: 22%;
            float: left;
            display: block;
        }

        #smProductDetailGiftWrapper .smItems {
            width: 70%;
            display: block;
            float: left;
            margin-left: 5%;
        }

        #smProductDetailGiftWrapper .giftWrapper a {
            display: inline;
            cursor: pointer;
            text-decoration: underline;
        }

        #smProductDetailGiftWrapper .item-variants select {
            display: block;
            color: #444;
            padding: .5em 1.0em .3em .3em;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            margin-top: 6px;
            border: 1px solid #aaa;
            -moz-border-radius: .2em;
            -webkit-border-radius: .2em;
            border-radius: .2em;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: #fff;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="292.362px" height="292.362px" viewBox="0 0 292.362 292.362" style="enable-background:new 0 0 292.362 292.362;" xml:space="preserve"><g> <path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424 C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428 s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>'), linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
            background-repeat: no-repeat, repeat;
            background-position: right .7em top 50%, 0 0;
            background-size: .65em auto, 100%;
            text-align: left;
        }

        #smProductDetailGiftWrapper .item-name {
            display: block;
            cursor: pointer;
            text-decoration: underline;
            text-align: left;
        }

        #smProductDetailGiftWrapper .item-variants select option {
            font-weight: normal;
        }

        #smProductDetailGiftWrapper .smAddGiftToCart {
            padding: 8px 8px;
            margin-top: 6px;
            background: rgba(168, 168, 168, 0.46) none repeat scroll 0% 0%;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            position: relative;
            display: block;
            font-weight: bold;
            cursor: pointer;
        }

        #smProductDetailGiftWrapper .productsToOfferGiftsTitle {
            text-align: center;
            padding: 5px;
            margin: 0 auto;
            font-weight: bold;
            display: block;
            border-bottom: 1px solid gray;
            width: 95%;
            margin-bottom: 20px;
            line-height: 20px;
        }

        #smProductDetailGiftWrapper .productsToOfferGiftsTitle a {
            cursor: pointer;
            text-decoration: underline;
        }

        #gift_container .offerGiftsUntilDate,
        #smProductDetailGiftWrapper .offerGiftsUntilDate {
            display: block;
            margin-top: 5px;
            text-align: center;
            border-top: 1px solid black;
            padding: 10px;
        }

        #gift_container .offerGiftsUntilDateIcon,
        #smProductDetailGiftWrapper .offerGiftsUntilDateIcon {
            padding: 0 1.0em .3em .3em;
            background-color: #fff;
            background-image: url('data:image/svg+xml;charset=US-ASCII,<svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m482 292.25v-246.25c0-8.285156-6.714844-15-15-15h-76v-16c0-8.285156-6.714844-15-15-15s-15 6.714844-15 15v16h-60v-16c0-8.285156-6.714844-15-15-15s-15 6.714844-15 15v16h-60v-16c0-8.285156-6.714844-15-15-15s-15 6.714844-15 15v16h-60v-16c0-8.285156-6.714844-15-15-15s-15 6.714844-15 15v16h-76c-8.285156 0-15 6.714844-15 15v391c0 8.285156 6.714844 15 15 15h249.804688c24.25 36.152344 65.488281 60 112.195312 60 74.4375 0 135-60.5625 135-135 0-32.070312-11.25-61.5625-30-84.75zm-391-231.25v15c0 8.285156 6.714844 15 15 15s15-6.714844 15-15v-15h60v15c0 8.285156 6.714844 15 15 15s15-6.714844 15-15v-15h60v15c0 8.285156 6.714844 15 15 15s15-6.714844 15-15v-15h60v15c0 8.285156 6.714844 15 15 15s15-6.714844 15-15v-15h61v60h-422v-60zm-61 361v-271h422v113.804688c-21.464844-14.394532-47.269531-22.804688-75-22.804688-47.398438 0-89.164062 24.558594-113.257812 61.613281-2.027344-1.023437-4.3125-1.613281-6.742188-1.613281h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h22.722656c-3.386718 9.554688-5.730468 19.601562-6.882812 30h-15.839844c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h15.839844c1.152344 10.398438 3.492187 20.445312 6.882812 30zm347 60c-57.898438 0-105-47.101562-105-105s47.101562-105 105-105 105 47.101562 105 105-47.101562 105-105 105zm0 0"/><path d="m437 362h-45v-45c0-8.285156-6.714844-15-15-15s-15 6.714844-15 15v60c0 8.285156 6.714844 15 15 15h60c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15zm0 0"/><path d="m136 182h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15zm0 0"/><path d="m136 242h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15zm0 0"/><path d="m136 302h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15zm0 0"/><path d="m227 212h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15zm0 0"/><path d="m227 272h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15zm0 0"/><path d="m136 362h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15zm0 0"/><path d="m347 212h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15zm0 0"/></svg>');
            background-repeat: no-repeat, repeat;
            background-size: 16px auto;
        }

        .productGiftIcon {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 15%;
            z-index: 1;
        }

        .svgTextValue {
            display: inline-block;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 0;
            right: 0;
            margin: auto;
            text-align: center;
            color: black;
        }
    </style>
    <div style="display:none" id="sticky_gift_icon" class="stickyGartRight">
        <a href="#">
            <span
                style="background-size: 30px;background-repeat: no-repeat;background-position: center; background-color:#ffffff">
                <svg class="showGifts" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M32,271.692v192c0,17.664,14.368,32,32,32h160v-224H32z"></path>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M480,143.692H378.752c7.264-4.96,13.504-9.888,17.856-14.304c25.824-25.952,25.824-68.192,0-94.144
                        c-25.088-25.28-68.8-25.216-93.856,0c-13.888,13.92-50.688,70.592-45.6,108.448h-2.304c5.056-37.856-31.744-94.528-45.6-108.448
                        c-25.088-25.216-68.8-25.216-93.856,0C89.6,61.196,89.6,103.436,115.36,129.388c4.384,4.416,10.624,9.344,17.888,14.304H32
                        c-17.632,0-32,14.368-32,32v48c0,8.832,7.168,16,16,16h208v-64h64v64h208c8.832,0,16-7.168,16-16v-48
                        C512,158.06,497.664,143.692,480,143.692z M222.112,142.636c0,0-1.344,1.056-5.92,1.056c-22.112,0-64.32-22.976-78.112-36.864
                        c-13.408-13.504-13.408-35.52,0-49.024c6.496-6.528,15.104-10.112,24.256-10.112c9.12,0,17.728,3.584,24.224,10.112
                        C208.128,79.5,229.568,134.924,222.112,142.636z M295.776,143.692c-4.544,0-5.888-1.024-5.888-1.056
                        c-7.456-7.712,13.984-63.136,35.552-84.832c12.896-13.024,35.456-13.088,48.48,0c13.44,13.504,13.44,35.52,0,49.024
                        C360.128,120.716,317.92,143.692,295.776,143.692z"></path>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M288,271.692v224h160c17.664,0,32-14.336,32-32v-192H288z"></path>
                        </g>
                    </g>
                </svg>
                <svg class="hideGifts" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492"
                    style="enable-background:new 0 0 492 492;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
                        c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
                        c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
                        L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
                        c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
                        c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
                        c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" />
                        </g>
                    </g>
                </svg>
                <mark class="giftsCount" style="background-color:#ff6b6b">0</mark>
            </span>
        </a>
    </div>


    <div id="gift_container">
        <div class="giftContainerContent">
        </div>
        <div id="overlaySection" style="display: none;">
            <div class="overlaySectionWrapper">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="margin: 10px auto; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; shape-rendering: auto;"
                    width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <circle cx="50" cy="50" fill="none" stroke="#6a6a6a" stroke-width="6" r="35"
                        stroke-dasharray="164.93361431346415 56.97787143782138">
                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s"
                            values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                    </circle>
                </svg>
            </div>
        </div>
    </div>

    <div id="smGiftIcon1" style="display:none">
        <svg height="100%" viewBox="0 0 423334 423334" width="100%">
            <g>
                <circle class="svgBackground" cx="211667" cy="211667" r="211667" style="fill: rgb(0, 255, 0);" />
                <g>
                    <path class="fil1" style="fill: white"
                        d="M119059 155901l185216 0c2805,0 5080,2275 5080,5080l0 41401c0,2805 -2275,5080 -5080,5080l-185216 0c-2805,0 -5080,-2275 -5080,-5080l0 -41401c0,-2805 2275,-5080 5080,-5080zm180136 10160l-175056 0 0 31241 175056 0 0 -31241z" />
                    <path class="fil1" style="fill: white"
                        d="M296643 220462l0 104671c0,2805 -2275,5080 -5080,5080l-159792 0c-2805,0 -5080,-2275 -5080,-5080l0 -104671c0,-2797 2282,-5079 5079,-5079l2 0c2797,0 5079,2289 5079,5079l0 99591 149632 0 0 -99591c0,-2797 2282,-5079 5079,-5079l2 0c2797,0 5079,2289 5079,5079z" />
                    <path class="fil1" style="fill: white"
                        d="M193635 161672c0,-2805 2275,-5080 5080,-5080 2805,0 5080,2275 5080,5080l0 163461c0,2805 -2275,5080 -5080,5080 -2805,0 -5080,-2275 -5080,-5080l0 -163461z" />
                    <path class="fil1" style="fill: white"
                        d="M219539 161672c0,-2805 2275,-5080 5080,-5080 2805,0 5080,2275 5080,5080l0 163461c0,2805 -2275,5080 -5080,5080 -2805,0 -5080,-2275 -5080,-5080l0 -163461z" />
                    <path class="fil1" style="fill: white"
                        d="M209789 163399c-2587,-2281 -68864,-61052 -31914,-69713 33612,-7880 40371,65311 40391,65520 262,2783 -1781,5254 -4564,5516 -1491,140 -2893,-381 -3913,-1323zm-29612 -59831c-13041,3056 11194,28506 26055,42753 -3158,-17890 -10654,-46364 -26055,-42753z" />
                    <path class="fil1" style="fill: white"
                        d="M221711 142929c11236,-11089 24112,-25587 18671,-29124 -5427,-3528 -13257,14265 -18671,29124zm24187 -37618c19846,12904 -28410,55572 -31713,58458 -1268,1217 -3135,1739 -4942,1208 -2685,-789 -4222,-3606 -3433,-6291 56,-189 19543,-66734 40088,-53375z" />
                </g>
            </g>
        </svg>
    </div>
    <div id="smGiftIcon2" style="display:none">
        <svg height="100%" width="100%" viewBox="0 0 64 64">
            <g>
                <path class="svgBackground"
                    d="M56.8,19.4c-2.4,0.3-4.2,1.8-5.7,3.7c0.4,0.5,0.8,0.8,1.1,1.2c0,1.3,0,2.6,0,4.4c1.1,0.6,2.5,1.7,4.2,2.3   c0.9,0.3,2.3,0,3.1-0.6c1.1-0.7,0.8-2,0.2-3.1c-0.7-1.4-0.8-2.9-0.2-4.5C60.4,20.7,59.1,19,56.8,19.4z M56.9,23   c-0.8,0.6-1.9,0.8-2.9,0.9c-0.3,0-1.6,0-1.7,0.3c0.5-1.2,1.8-2.3,2.9-2.9c0.4-0.2,0.7-0.4,1.1-0.4c0.4,0,0.8,0.1,1.1,0.4   C57.9,21.9,57.5,22.5,56.9,23z" />
                <path class="svgBackground"
                    d="M47.8,22.8c-1.5-1.9-3.2-3.4-5.7-3.7c-2.3-0.3-3.6,1.3-2.7,3.5c0.7,1.6,0.5,3-0.2,4.5   c-0.6,1.1-0.8,2.4,0.2,3.1c0.8,0.6,2.2,0.9,3.1,0.6c1.6-0.6,3-1.6,4.2-2.3c0-1.8,0-3.1,0-4.4C47.1,23.6,47.4,23.3,47.8,22.8z    M44.4,23.5c-1-0.2-2-0.5-2.8-1.1c-0.1-0.1-0.2-0.2-0.3-0.3c-0.5-0.5-0.9-1.4,0-1.7c0.8-0.3,1.9,0.3,2.6,0.7c1.1,0.7,2,1.6,2.6,2.7   C46.4,23.6,44.8,23.6,44.4,23.5z" />
                <path class="svgBackground"
                    d="M49.4,23.5c-1.3,0-2.4,1.1-2.4,2.4c0,1.3,1.1,2.4,2.4,2.4c1.3,0,2.4-1.1,2.4-2.4   C51.8,24.6,50.7,23.5,49.4,23.5z" />
                <path class="svgBackground"
                    d="M58.8,12.3h-7.2v7.2c1.3-1.1,2.9-2,4.9-2.3c1.9-0.3,3.5,0.3,4.5,1.6c1,1.3,1.1,3,0.4,4.7   c0,0.1-0.1,0.2-0.1,0.3h1.5v-7.5C62.9,14.1,61.1,12.3,58.8,12.3z" />
                <path class="svgBackground"
                    d="M37.6,23.2c-0.7-1.7-0.6-3.5,0.4-4.7c1-1.3,2.6-1.9,4.5-1.6c2.1,0.3,3.8,1.3,5,2.4v-7H5.2   c-2.3,0-4.1,1.8-4.1,4.1v7.5h36.7C37.7,23.6,37.7,23.4,37.6,23.2z" />
                <path class="svgBackground"
                    d="M43.3,32.5c-0.5,0.2-1,0.2-1.5,0.2c-1.3,0-2.6-0.4-3.5-1c-0.5-0.4-1.9-1.5-1.6-3.7H1.1v19.8   c0,2.3,1.8,4.1,4.1,4.1h42.4V30.2c-0.2,0.1-0.4,0.2-0.6,0.4C45.9,31.2,44.7,32,43.3,32.5z" />
                <path class="svgBackground"
                    d="M60.7,32c-0.9,0.6-2.2,1-3.5,1c-0.5,0-1-0.1-1.5-0.2c-1.4-0.5-2.6-1.3-3.6-1.9c-0.2-0.1-0.3-0.2-0.5-0.3v21.1   h7.2c2.3,0,4.1-1.8,4.1-4.1V27.9h-0.7C62.7,30.3,61.2,31.6,60.7,32z" />
            </g>
        </svg>
    </div>
    <div id="smGiftIcon3" style="display:none">
        <svg height="100%" width="100%" viewBox="0 0 64 64">
            <circle cx="50%" cy="50%" r="50%" fill="red" class="svgBackground" />
            <switch>
                <foreignObject x="10" y="4" width="70%" height="85%" style="line-height: normal; text-align:center;">
                    <div>
                        <p xmlns="http://www.w3.org/1999/xhtml" class="svgTextValue"
                            style="color: black; font-family: Arial; font-size: 14px; text-align: center; line-height: normal; font-weight: bold">
                        </p>
                    </div>
                </foreignObject>
            </switch>
        </svg>
    </div>

    <img alt="smNoImage" style="display:none" class="smNoImage"
        src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-100-c91dd4bdb56513f2cbf4fc15436ca35e9d4ecd014546c8d421b1aece861dfecf_small.gif" />

    <script
        type="text/javascript">var sm_translations_labels = { "gift_already_in_cart": "Gift GIFT_NAME already in cart", "remove_from_cart": "Remove from cart?", "add_to_cart": "Add to cart", "add_product_to_cart_and_get_gift": "Add PRODUCT_NAME to cart and get free gift", "add_multiple_products_to_cart_and_get_gift": "Add any product from collection(s) TYPE_VALUES to cart and get free gift", "pick_free_gift_for_multiple_products": "You added to cart product from collection(s) TYPE_VALUES, you can pick free gift", "pick_free_gift_for_product": "You can pick free gift for PRODUCT_NAME", "buy_for_more_and_get_gift": "If you spend ORDER_MINIMUM (TO_SPEND more), you will get free gift", "pick_free_gift_for_order": "You spend more then ORDER_MINIMUM, pick your free gift", "active_until": "active until UNTIL_DATE", "gift_cart_property_label": "Free gift: 100% off" }; var sm_desing_settings = { "selectedGiftIcon": 1, "giftIconColor": { "hue": 120, "saturation": 0, "brightness": 0.75, "alpha": 1 }, "giftIconTextValue": "Free Gift", "selectedGiftBoxPosition": 1, "backgroundColorOfGiftBox": { "hue": 1, "saturation": 0, "brightness": 1 }, "backgroundColorOfGiftBoxIcon": { "hue": 1, "saturation": 0, "brightness": 1 }, "giftBoxIconIsPulsed": 0, "hideGiftBox": 0 }; var sm_products_gifts = []; var sm_orders_gifts = []; var sm_multiple_products_gifts = []; var sm_pro_version_settings = []; var sm_money_format = "$@@amount&&";</script>

    <script type="text/javascript">
    </script>


    <script id="sca_fg_cart_ShowGiftAsProductTemplate" type="text/template">

  <div class="item not-sca-qv" id="sca-freegift-{{productID}}">
    <a class="close_box" style="display: none;position: absolute;top:5px;right: 10px;font-size: 22px;font-weight: bold;cursor: pointer;text-decoration:none;color: #aaa;">×</a>
    <a href="/products/{{productHandle}}" target="_blank"><img style="margin-left: auto; margin-right: auto; width: 50%;" class="lazyOwl" data-src="{{productImageURL}}"></a>
    <div class="sca-product-shop">
      <div class="review-summary3">
        <div class="yotpo bottomLine" style="text-align:center"
          data-product-id="{{productID}}"
          data-product-models="{{productID}}"
          data-name="{{productTitle}}"
          data-url="/products/{{productHandle}}">
        </div>
      </div>
      <div class="f-fix"><span class="sca-product-title" style="white-space: nowrap;color:#000;{{showfgTitle}}">{{productTitle}}</span>
          <div id="product-variants-{{productID}}">
            <div class="sca-price" id="price-field-{{productID}}">
              <span class="sca-old-price">{{variant_compare_at_price}}</span>
              <span class="sca-special-price">{{variant_price}}</span>
            </div>
            <div id="stay-content-sca-freegift-{{productID}}" class="sca-fg-cart-item">
              <a class="close_box" style="display: none;position: absolute;top:5px;right: 10px;font-size: 22px;font-weight: bold;cursor: pointer;text-decoration:none;color: #aaa;">×</a>
              <select id="product-select-{{productID}}" name="id" style="display: none">
                {{optionVariantData}}
              </select>
            </div>
          </div>
          <button type='button' id="sca-btn-select-{{productID}}" class="sca-button" onclick="onclickSelect_{{productID}}();"><span>{{SelectButton}}</span></button>
          <button type='button' id="sca-btn-{{productID}}" class="sca-button" style="display: none"><span>{{AddToCartButton}}</span></button>
      </div>
    </div>
  </div>
  
</script>
    <script id="sca_fg_cart_ShowGiftAsProductScriptTemplate" type="text/template">


    var selectCallback_{{productID}}=function(t,a){if(t?(t.available?(SECOMAPP.jQuery("#sca-btn-{{productID}}").removeClass("disabled").removeAttr("disabled").html("<span>{{AddToCartButton}}</span>").fadeTo(200,1),SECOMAPP.jQuery("#sca-btn-{{productID}}").unbind("click"),SECOMAPP.jQuery("#sca-btn-{{productID}}").click(SECOMAPP.jQuery.proxy(function(){SECOMAPP.addGiftToCart(t.id,1)},t))):SECOMAPP.jQuery("#sca-btn-{{productID}}").html("<span>{{UnavailableButton}}</span>").addClass("disabled").attr("disabled","disabled").fadeTo(200,.5),t.compare_at_price>t.price?SECOMAPP.jQuery("#price-field-{{productID}}").html("<span class='sca-old-price'>"+SECOMAPP.formatMoney(t.compare_at_price)+"</span>&nbsp;<s class='sca-special-price'>"+SECOMAPP.formatMoney(t.price)+"</s>"):SECOMAPP.jQuery("#price-field-{{productID}}").html("<span class='sca-special-price'>"+SECOMAPP.formatMoney(t.price)+"</span>")):SECOMAPP.jQuery("#sca-btn-{{productID}}").html("<span>{{UnavailableButton}}</span>").addClass("disabled").attr("disabled","disabled").fadeTo(200,.5),t&&t.featured_image){var e=SECOMAPP.jQuery("#sca-freegift-{{productID}} img"),_=t.featured_image,c=e[0];Shopify.Image.switchImage(_,c,function(t,a,e){SECOMAPP.jQuery(e).parents("a").attr("href",t),SECOMAPP.jQuery(e).attr("src",t)})}},onclickSelect_{{productID}}=function(t){SECOMAPP.jQuery.getJSON("/products/{{productHandle}}.js",{_:(new Date).getTime()},function(t){SECOMAPP.jQuery(".owl-item #sca-freegift-{{productID}} span.sca-product-title").html(t.title);var e=[];SECOMAPP.jQuery.each(t.options,function(t,a){e[t]=a.name}),t.options=e;for(var a={{variantsGiftList}},_={{mainVariantsList}},c=t.variants.length-1;-1<c;c--)a.indexOf(t.variants[c].id)<0&&_.indexOf(t.variants[c].id)<0&&t.variants.splice(c,1);for(var o=_.length-1;-1<o;o--){var i=a[o],r=_[o],n=-1,s=-1;for(c=t.variants.length-1;-1<c;c--)t.variants[c].id==i?n=c:t.variants[c].id==r&&(s=c);-1<n&&-1<s&n!==s?("undefined"!=typeof SECOMAPP&&void 0!==SECOMAPP.fgsettings&&!0===SECOMAPP.fgsettings.sca_sync_gift&&void 0!==SECOMAPP.fgsettings.sca_fg_gift_variant_quantity_format&&"equal_original_inventory"===SECOMAPP.fgsettings.sca_fg_gift_variant_quantity_format&&(t.variants[n].available=t.variants[s].available,t.variants[n].inventory_management=t.variants[s].inventory_management),t.variants[n].option1=t.variants[s].option1,t.variants[n].options[0].name=t.variants[s].options[0].name,t.variants[n].options[1]&&(t.variants[n].options[1].name=t.variants[s].options[1].name,t.variants[n].option2=t.variants[s].option2),t.variants[n].options[2]&&(t.variants[n].options[2].name=t.variants[s].options[2].name,t.variants[n].option3=t.variants[s].option3),t.variants[n].title=t.variants[s].title,t.variants[n].name=t.variants[s].name,t.variants[n].public_title=t.variants[s].public_title,t.variants.splice(s,1)):(t.variants[s].id=i,t.variants[s].compare_at_price||(t.variants[s].compare_at_price=t.variants[s].price),t.variants[s].price=SECOMAPP.fgdata.giftid_price_mapping[i])}SECOMAPP.jQuery("#sca-btn-select-{{productID}}").hide(),SECOMAPP.jQuery("#product-select-{{productID}}").show(),SECOMAPP.jQuery("#sca-btn-{{productID}}").show(),SECOMAPP.jQuery("#stay-content-sca-freegift-{{productID}} .close_box").show(),SECOMAPP.jQuery("#stay-content-sca-freegift-{{productID}} .close_box").click(function(){SECOMAPP.jQuery("#stay-content-sca-freegift-{{productID}}").hide(),SECOMAPP.jQuery("#sca-btn-{{productID}}").hide(),SECOMAPP.jQuery("#sca-btn-select-{{productID}}").show()}),onclickSelect_{{productID}}=function(){SECOMAPP.jQuery("#stay-content-sca-freegift-{{productID}}").show(),SECOMAPP.jQuery("#sca-btn-{{productID}}").show(),SECOMAPP.jQuery("#sca-btn-select-{{productID}}").hide()},1==t.variants.length?(-1!==t.variants[0].title.indexOf("Default")&&SECOMAPP.jQuery("#sca-freegift-{{productID}} .selector-wrapper").hide(),1==t.variants[0].available&&(SECOMAPP.jQuery("#sca-btn-{{productID}}").show(),SECOMAPP.jQuery("#sca-btn-select-{{productID}}").hide(),SECOMAPP.jQuery("#sca-btn-{{productID}}").removeClass("disabled").removeAttr("disabled").html("<span>{{AddToCartButton}}</span>").fadeTo(200,1),SECOMAPP.jQuery("#sca-btn-{{productID}}").unbind("click"),SECOMAPP.jQuery("#sca-btn-{{productID}}").click(SECOMAPP.jQuery.proxy(function(){SECOMAPP.addGiftToCart(t.variants[0].id,1)},t)))):(new Shopify.OptionSelectors("product-select-{{productID}}",{product:t,onVariantSelected:selectCallback_{{productID}},enableHistoryState:!0}),SECOMAPP.jQuery("#stay-content-sca-freegift-{{productID}}").show(),SECOMAPP.jQuery("#stay-content-sca-freegift-{{productID}}").focus())})};1=={{variantsGiftList}}.length&&onclickSelect_{{productID}}();
  
</script>

    <script id="sca_fg_cart_ShowGiftAsVariantTemplate" type="text/template">

  <div class="item not-sca-qv" id="sca-freegift-{{variantID}}">
    <a href="/products/{{productHandle}}?variant={{originalVariantID}}" target="_blank"><img style="margin-left: auto; margin-right: auto; width: 50%;" class="lazyOwl" data-src="{{variantImageURL}}"></a>
    <div class="sca-product-shop">
      <div class="review-summary3">
        <div class="yotpo bottomLine" style="text-align:center"
          data-product-id="{{productID}}"
          data-product-models="{{productID}}"
          data-name="{{productTitle}}"
          data-url="/products/{{productHandle}}">
        </div>
      </div>
      <div class="f-fix">
        <span class="sca-product-title" style="white-space: nowrap;color:#000;">{{variantTitle}}</span>
        <div class="sca-price">
          <span class="sca-old-price">{{variant_compare_at_price}}</span>
          <span class="sca-special-price">{{variant_price}}</span>
        </div>
        <button type="button" id="sca-btn{{variantID}}" class="sca-button" onclick="SECOMAPP.addGiftToCart({{variantID}},1);">
          <span>{{AddToCartButton}}</span>
        </button>
      </div>
    </div>
  </div>
  
</script>

    <script id="sca_fg_prod_GiftList" type="text/template">

  <a style="text-decoration: none !important" id ="{{giftShowID}}" class="product-image freegif-product-image freegift-info-{{giftShowID}}"
     title="{{giftTitle}}" href="/products/{{productsHandle}}">
    <img class="not-sca-qv" src="{{giftImgUrl}}" alt="{{giftTitle}}" />
  </a>
  
</script>

    <script id="sca_fg_prod_Gift_PopupDetail" type="text/template">

  <div class="sca-fg-item fg-info-{{giftShowID}}" style="display:none;z-index:2147483647;">
    <div class="sca-fg-item-options">
      <div class="sca-fg-item-option-title">
        <em>{{freegiftRuleName}}</em>
      </div>
      <div class="sca-fg-item-option-ct">
        <!--        <div class="sca-fg-image-item">
                        <img src="{{giftImgUrl}}" /> -->
        <div class="sca-fg-item-name">
          <a href="#">{{giftTitle}}</a>
        </div>
        <!--        </div> -->
      </div>
    </div>
  </div>
  
</script>

    <script id="sca_fg_ajax_GiftListPopup" type="text/template">

  <div id="freegift_popup" class="mfp-hide">
    <div id="sca-fg-owl-carousel">
      <div id="freegift_cart_container" class="sca-fg-cart-container" style="display: none;">
        <div id="freegift_message" class="owl-carousel"></div>
      </div>
      <div id="sca-fg-slider-cart" style="display: none;">
        <div class="sca-fg-cart-title">
          <strong>{{popupTitle}}</strong>
        </div>
        <div id="sca_freegift_list" class="owl-carousel"></div>
      </div>
    </div>
  </div>
  
</script>

    <script id="sca_fg_checkout_confirm_popup" type="text/template">

         <div class='sca-fg-checkout-confirm-popup' style='font-family: "Myriad","Cardo","Big Caslon","Bodoni MT",Georgia,serif; position: relative;background: #FFF;padding: 20px 20px 50px 20px;width: auto;max-width: 500px;margin: 20px auto;'>
             <h1 style='font-family: "Oswald","Cardo","Big Caslon","Bodoni MT",Georgia,serif;'>YOU CAN STILL ADD MORE!</h1>
             <p>You get 1 free item with every product purchased. It looks like you can still add more free item(s) to your cart. What would you like to do?</p>
             <p class='sca-fg-checkout-confirm-buttons' style='float: right;'>
                 <a class='btn popup-modal-dismiss action_button add_to_cart' href='#' style='width: 200px !important;margin-right: 20px;'>ADD MORE</a>
                 <a class='btn checkout__button continue-checkout action_button add_to_cart' href='/checkout' style='width: 200px !important;'>CHECKOUT</a>
             </p>
         </div>
    
</script>



    <link href="//cdn.shopify.com/s/files/1/0250/8511/6462/t/102/assets/sca.freegift.css?v=16515673766982385540"
        rel="stylesheet" type="text/css" media="all" />
    <script
        src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"
        type="text/javascript"></script>
    <script data-cfasync="false">
        Shopify.money_format = "${{amount}}";
        //enable checking free gifts condition when checkout clicked
        if ((typeof SECOMAPP) === 'undefined') { window.SECOMAPP = {}; };
        SECOMAPP.enableOverrideCheckout = true;
    //    SECOMAPP.preStopAppCallback = function(cart){
    //        if(typeof yotpo!=='undefined' && typeof yotpo.initWidgets==='function'){
    //            yotpo.initWidgets();
    //        }
    //    }
    </script>
    <script data-cfasync="false" type="text/javascript">
        /* Smart Ecommerce App (SEA Inc)
        * http://www.secomapp.com
        * Do not reuse those source codes if don't have permission of us.
        * */


        !function () { Array.isArray || (Array.isArray = function (e) { return "[object Array]" === Object.prototype.toString.call(e) }), "function" != typeof Object.create && (Object.create = function (e) { function t() { } return t.prototype = e, new t }), Object.keys || (Object.keys = function (e) { var t, o = []; for (t in e) Object.prototype.hasOwnProperty.call(e, t) && o.push(t); return o }), String.prototype.endsWith || Object.defineProperty(String.prototype, "endsWith", { value: function (e, t) { var o = this.toString(); (void 0 === t || t > o.length) && (t = o.length), t -= e.length; var r = o.indexOf(e, t); return -1 !== r && r === t }, writable: !0, enumerable: !0, configurable: !0 }), Array.prototype.indexOf || (Array.prototype.indexOf = function (e, t) { var o; if (null == this) throw new TypeError('"this" is null or not defined'); var r = Object(this), i = r.length >>> 0; if (0 === i) return -1; var n = +t || 0; if (Math.abs(n) === 1 / 0 && (n = 0), n >= i) return -1; for (o = Math.max(n >= 0 ? n : i - Math.abs(n), 0); o < i;) { if (o in r && r[o] === e) return o; o++ } return -1 }), Array.prototype.forEach || (Array.prototype.forEach = function (e, t) { var o, r; if (null == this) throw new TypeError(" this is null or not defined"); var i = Object(this), n = i.length >>> 0; if ("function" != typeof e) throw new TypeError(e + " is not a function"); for (arguments.length > 1 && (o = t), r = 0; r < n;) { var a; r in i && (a = i[r], e.call(o, a, r, i)), r++ } }), console = console || {}, console.log = console.log || function () { }, "undefined" == typeof Shopify && (Shopify = {}), "function" != typeof Shopify.onError && (Shopify.onError = function () { }), "undefined" == typeof SECOMAPP && (SECOMAPP = {}), SECOMAPP.removeGiftsVariant = function (e) { setTimeout(function () { try { e("select option").not(".sca-fg-cart-item select option").filter(function () { var t = e(this).val(), o = e(this).text(); -1 !== o.indexOf(" - ") && (o = o.slice(0, o.indexOf(" - "))); var r = []; return -1 !== o.indexOf(" / ") && (r = o.split(" / "), o = r[r.length - 1]), !!(void 0 !== SECOMAPP.gifts_list_avai && void 0 !== SECOMAPP.gifts_list_avai[t] || o.endsWith("% off)")) && (e(this).parent("select").find("option").not(".sca-fg-cart-item select option").filter(function () { var r = e(this).val(); return e(this).text().endsWith(o) || r == t }).remove(), e(".dropdown *,ul li,label,div").filter(function () { var r = e(this).html(), i = e(this).data("value"); return r && r.endsWith(o) || i == t }).remove(), !0) }) } catch (e) { console.log(e) } }, 500) }, SECOMAPP.formatMoney = function (e, t) { "string" == typeof e && (e = e.replace(".", "")); var o = "", r = "undefined" != typeof Shopify && void 0 !== Shopify.money_format ? Shopify.money_format : "{{amount}}", i = /\{\{\s*(\w+)\s*\}\}/, n = t || (void 0 !== this.fgsettings && "string" == typeof this.fgsettings.sca_currency_format && this.fgsettings.sca_currency_format.indexOf("amount") > -1 ? this.fgsettings.sca_currency_format : null) || r; if (n.indexOf("amount_no_decimals_no_comma_separator") < 0 && n.indexOf("amount_no_comma_separator_up_cents") < 0 && n.indexOf("amount_up_cents") < 0 && "function" == typeof Shopify.formatMoney) return Shopify.formatMoney(e, n); function a(e, t) { return void 0 === e ? t : e } function s(e, t, o, r, i, n) { if (t = a(t, 2), o = a(o, ","), r = a(r, "."), isNaN(e) || null == e) return 0; var s = (e = (e / 100).toFixed(t)).split("."); return s[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + o) + (s[1] ? i && n ? i + s[1] + n : r + s[1] : "") } switch (n.match(i)[1]) { case "amount": o = s(e, 2); break; case "amount_no_decimals": o = s(e, 0); break; case "amount_with_comma_separator": o = s(e, 2, ",", "."); break; case "amount_no_decimals_with_comma_separator": o = s(e, 0, ",", "."); break; case "amount_no_decimals_no_comma_separator": o = s(e, 0, "", ""); break; case "amount_up_cents": o = s(e, 2, ",", "", "<sup>", "</sup>"); break; case "amount_no_comma_separator_up_cents": o = s(e, 2, "", "", "<sup>", "</sup>") }return n.replace(i, o) }, SECOMAPP.setCookie = function (e, t, o, r, i) { var n = new Date; n.setTime(n.getTime() + 24 * o * 60 * 60 * 1e3 + 60 * r * 1e3); var a = "expires=" + n.toUTCString(); document.cookie = e + "=" + t + ";" + a + (i ? ";path=" + i : ";path=/") }, SECOMAPP.deleteCookie = function (e, t) { document.cookie = e + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; " + (t ? ";path=" + t : ";path=/") }, SECOMAPP.getCookie = function (e) { for (var t = e + "=", o = document.cookie.split(";"), r = 0; r < o.length; r++) { for (var i = o[r]; " " == i.charAt(0);)i = i.substring(1); if (0 == i.indexOf(t)) return i.substring(t.length, i.length) } return "" }, SECOMAPP.getQueryString = function () { for (var e = {}, t = window.location.search.substring(1).split("&"), o = 0; o < t.length; o++) { var r = t[o].split("="); if (void 0 === e[r[0]]) e[r[0]] = decodeURIComponent(r[1]); else if ("string" == typeof e[r[0]]) { var i = [e[r[0]], decodeURIComponent(r[1])]; e[r[0]] = i } else e[r[0]].push(decodeURIComponent(r[1])) } return e }, SECOMAPP.freegifts_product_json = function (e) { if (Array.isArray || (Array.isArray = function (e) { return "[object Array]" === Object.prototype.toString.call(e) }), String.prototype.endsWith || Object.defineProperty(String.prototype, "endsWith", { value: function (e, t) { var o = this.toString(); (void 0 === t || t > o.length) && (t = o.length), t -= e.length; var r = o.indexOf(e, t); return -1 !== r && r === t } }), e) { if (e.options && Array.isArray(e.options)) for (var t = 0; t < e.options.length; t++) { if (void 0 !== e.options[t] && void 0 !== e.options[t].values) if ((r = e.options[t]).values && Array.isArray(r.values)) for (var o = 0; o < r.values.length; o++)(r.values[o].endsWith("(Freegifts)") || r.values[o].endsWith("% off)")) && (r.values.splice(o, 1), o--) } if (e.options_with_values && Array.isArray(e.options_with_values)) for (t = 0; t < e.options_with_values.length; t++) { var r; if (void 0 !== e.options_with_values[t] && void 0 !== e.options_with_values[t].values) if ((r = e.options_with_values[t]).values && Array.isArray(r.values)) for (o = 0; o < r.values.length; o++)(r.values[o].title.endsWith("(Freegifts)") || r.values[o].title.endsWith("% off)")) && (r.values.splice(o, 1), o--) } var i = e.price, n = e.price_max, a = e.price_min, s = e.compare_at_price, c = e.compare_at_price_max, f = e.compare_at_price_min; if (e.variants && Array.isArray(e.variants)) for (var p = 0; e.variants.length, void 0 !== e.variants[p]; p++) { var l = e.variants[p], u = l.option3 ? l.option3 : l.option2 ? l.option2 : l.option1 ? l.option1 : l.title ? l.title : ""; "undefined" != typeof SECOMAPP && void 0 !== SECOMAPP.gifts_list_avai && void 0 !== SECOMAPP.gifts_list_avai[l.id] || u.endsWith("(Freegifts)") || u.endsWith("% off)") ? (e.variants.splice(p, 1), p -= 1) : ((!n || n >= l.price) && (n = l.price, i = l.price), (!a || a <= l.price) && (a = l.price), l.compare_at_price && ((!c || c >= l.compare_at_price) && (c = l.compare_at_price, s = l.compare_at_price), (!f || f <= l.compare_at_price) && (f = l.compare_at_price)), void 0 !== l.available && 1 == l.available && (e.available = !0)) } e.price = i, e.price_max = a == n ? null : a, e.price_min = n == a ? null : n, e.compare_at_price = s, e.compare_at_price_max = f, e.compare_at_price_min = c, e.price_varies = n < a, e.compare_at_price_varies = c < f } return e }, SECOMAPP.fg_codes = [], "" !== SECOMAPP.getCookie("sca_fg_codes") && (SECOMAPP.fg_codes = JSON.parse(SECOMAPP.getCookie("sca_fg_codes"))); var e = SECOMAPP.getQueryString(); e.freegifts_code && -1 === SECOMAPP.fg_codes.indexOf(e.freegifts_code) && (void 0 !== SECOMAPP.activateOnlyOnePromoCode && !0 === SECOMAPP.activateOnlyOnePromoCode && (SECOMAPP.fg_codes = []), SECOMAPP.fg_codes.push(e.freegifts_code), SECOMAPP.setCookie("sca_fg_codes", JSON.stringify(SECOMAPP.fg_codes))) }();

        ; SECOMAPP.customer = {}; SECOMAPP.customer.orders = []; SECOMAPP.customer.freegifts = [];; SECOMAPP.customer.email = null; SECOMAPP.customer.first_name = null; SECOMAPP.customer.last_name = null; SECOMAPP.customer.tags = null; SECOMAPP.customer.orders_count = null; SECOMAPP.customer.total_spent = null;
    </script>

    <meta property="og:image"
        content="https://cdn.shopify.com/s/files/1/0250/8511/6462/files/indigo.png?height=628&pad_color=fff&v=1577746367&width=1200" />
    <meta property="og:image:secure_url"
        content="https://cdn.shopify.com/s/files/1/0250/8511/6462/files/indigo.png?height=628&pad_color=fff&v=1577746367&width=1200" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
    <script>(function () { if ("sendBeacon" in navigator && "performance" in window) { var session_token = document.cookie.match(/_shopify_s=([^;]*)/); function handle_abandonment_event(e) { var entries = performance.getEntries().filter(function (entry) { return /monorail-edge.shopifysvc.com/.test(entry.name); }); if (!window.abandonment_tracked && entries.length === 0) { window.abandonment_tracked = true; var currentMs = Date.now(); var navigation_start = performance.timing.navigationStart; var payload = { shop_id: 25085116462, url: window.location.href, navigation_start, duration: currentMs - navigation_start, session_token: session_token && session_token.length === 2 ? session_token[1] : "", page_type: "policy" }; window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({ schema_id: "online_store_buyer_site_abandonment/1.1", payload: payload, metadata: { event_created_at_ms: currentMs, event_sent_at_ms: currentMs } })); } } window.addEventListener('pagehide', handle_abandonment_event); } }());</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'USD';
        var meta = { "page": {} };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }</script>
    <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

        };
    </script>
    <script class="analytics">(window.gaDevIds = window.gaDevIds || []).push('BwiEti');


        (function () {
            var customDocumentWrite = function (content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var hasLoggedConversion = function (token) {
                if (token) {
                    return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                }
                return false;
            }

            var setCookieIfConversion = function (token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function (method) {
                return function () {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function (config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName('script')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function (e) {
                    var scriptFallback = document.createElement('script');
                    scriptFallback.type = 'text/javascript';
                    scriptFallback.onerror = function (error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs
                                    }
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: 'text/plain'
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful

                                } // XHR beacon   

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open('POST', endpointUrl);
                                    xhr.setRequestHeader('Content-Type', 'text/plain');
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                            }
                        };
                        Monorail.produce('monorail-edge.shopifysvc.com',
                            'trekkie_storefront_load_errors/1.1',
                            {
                                shop_id: 25085116462,
                                theme_id: 127169724589,
                                app_name: "storefront",
                                context_url: window.location.href,
                                source_url: "https://cdn.shopify.com/s/trekkie.storefront.6967fb130a629a5a38a7939e6f3366da4c6e3e41.min.js"
                            });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.6967fb130a629a5a38a7939e6f3366da4c6e3e41.min.js';
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = 'https://cdn.shopify.com/s/trekkie.storefront.6967fb130a629a5a38a7939e6f3366da4c6e3e41.min.js';
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                { "Trekkie": { "appName": "storefront", "development": false, "defaultAttributes": { "shopId": 25085116462, "isMerchantRequest": null, "themeId": 127169724589, "themeCityHash": "13644560400766465243", "contentLanguage": "en", "currency": "USD" }, "isServerSideCookieWritingEnabled": true }, "Google Analytics": { "trackingId": "UA-35442905-11", "domain": "auto", "siteSpeedSampleRate": "10", "enhancedEcommerce": true, "doubleClick": true, "includeSearch": true }, "Facebook Pixel": { "pixelIds": ["651912312324853"], "agent": "plshopify1.2", "conversionsAPIEnabled": true }, "Google Gtag Pixel": { "conversionId": "AW-440680690", "eventLabels": [{ "type": "page_view", "action_label": "AW-440680690\/uqiTCKKZ0fwBEPKBkdIB" }, { "type": "purchase", "action_label": "AW-440680690\/7VzLCKWZ0fwBEPKBkdIB" }, { "type": "view_item", "action_label": "AW-440680690\/yVMaCKiZ0fwBEPKBkdIB" }, { "type": "add_to_cart", "action_label": "AW-440680690\/L5i7CKuZ0fwBEPKBkdIB" }, { "type": "begin_checkout", "action_label": "AW-440680690\/VKsRCK6Z0fwBEPKBkdIB" }, { "type": "search", "action_label": "AW-440680690\/lA1XCLGZ0fwBEPKBkdIB" }, { "type": "add_payment_info", "action_label": "AW-440680690\/s-XdCLSZ0fwBEPKBkdIB" }], "targetCountry": "US" }, "Session Attribution": {}, "S2S": { "facebookCapiEnabled": true, "facebookAppPixelId": "651912312324853", "source": "trekkie-storefront-renderer" } }
            );

            var loaded = false;
            trekkie.ready(function () {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;

                ga('require', 'linker');
                function addListener(element, type, callback) {
                    if (element.addEventListener) {
                        element.addEventListener(type, callback);
                    }
                    else if (element.attachEvent) {
                        element.attachEvent('on' + type, callback);
                    }
                }
                function decorate(event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement;
                    if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
                        ga(function (tracker) {
                            var linkerParam = tracker.get('linkerParam');
                            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
                        });
                    }
                }
                addListener(window, 'load', function () {
                    for (var i = 0; i < document.forms.length; i++) {
                        var action = document.forms[i].getAttribute('action');
                        if (action && action.indexOf('/cart') >= 0) {
                            addListener(document.forms[i], 'submit', decorate);
                        }
                    }
                    for (var i = 0; i < document.links.length; i++) {
                        var href = document.links[i].getAttribute('href');
                        if (href && href.indexOf('/checkout') >= 0) {
                            addListener(document.links[i], 'click', decorate);
                        }
                    }
                });


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch (error) { };
                document.write = originalDocumentWrite;
                (function () {
                    if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                        return;
                    }
                    window.BOOMR = window.BOOMR || {};
                    window.BOOMR.snippetStart = new Date().getTime();
                    window.BOOMR.snippetExecuted = true;
                    window.BOOMR.snippetVersion = 12;
                    window.BOOMR.application = "storefront-renderer";
                    window.BOOMR.themeName = "Debut";
                    window.BOOMR.themeVersion = "14.2.0";
                    window.BOOMR.shopId = 25085116462;
                    window.BOOMR.themeId = 127169724589;
                    window.BOOMR.url =
                        "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
                    var where = document.currentScript || document.getElementsByTagName("script")[0];
                    var parentNode = where.parentNode;
                    var promoted = false;
                    var LOADER_TIMEOUT = 3000;
                    function promote() {
                        if (promoted) {
                            return;
                        }
                        var script = document.createElement("script");
                        script.id = "boomr-scr-as";
                        script.src = window.BOOMR.url;
                        script.async = true;
                        parentNode.appendChild(script);
                        promoted = true;
                    }
                    function iframeLoader(wasFallback) {
                        promoted = true;
                        var dom, bootstrap, iframe, iframeStyle;
                        var doc = document;
                        var win = window;
                        window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                        bootstrap = function (parent, scriptId) {
                            var script = doc.createElement("script");
                            script.id = scriptId || "boomr-if-as";
                            script.src = window.BOOMR.url;
                            BOOMR_lstart = new Date().getTime();
                            parent = parent || doc.body;
                            parent.appendChild(script);
                        };
                        if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                            window.BOOMR.snippetMethod = "s";
                            bootstrap(parentNode, "boomr-async");
                            return;
                        }
                        iframe = document.createElement("IFRAME");
                        iframe.src = "about:blank";
                        iframe.title = "";
                        iframe.role = "presentation";
                        iframe.loading = "eager";
                        iframeStyle = (iframe.frameElement || iframe).style;
                        iframeStyle.width = 0;
                        iframeStyle.height = 0;
                        iframeStyle.border = 0;
                        iframeStyle.display = "none";
                        parentNode.appendChild(iframe);
                        try {
                            win = iframe.contentWindow;
                            doc = win.document.open();
                        } catch (e) {
                            dom = document.domain;
                            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                            win = iframe.contentWindow;
                            doc = win.document.open();
                        }
                        if (dom) {
                            doc._boomrl = function () {
                                this.domain = dom;
                                bootstrap();
                            };
                            doc.write("<body onload='document._boomrl();'>");
                        } else {
                            win._boomrl = function () {
                                bootstrap();
                            };
                            if (win.addEventListener) {
                                win.addEventListener("load", win._boomrl, false);
                            } else if (win.attachEvent) {
                                win.attachEvent("onload", win._boomrl);
                            }
                        }
                        doc.close();
                    }
                    var link = document.createElement("link");
                    if (link.relList &&
                        typeof link.relList.supports === "function" &&
                        link.relList.supports("preload") &&
                        ("as" in link)) {
                        window.BOOMR.snippetMethod = "p";
                        link.href = window.BOOMR.url;
                        link.rel = "preload";
                        link.as = "script";
                        link.addEventListener("load", promote);
                        link.addEventListener("error", function () {
                            iframeLoader(true);
                        });
                        setTimeout(function () {
                            if (!promoted) {
                                iframeLoader(true);
                            }
                        }, LOADER_TIMEOUT);
                        BOOMR_lstart = new Date().getTime();
                        parentNode.appendChild(link);
                    } else {
                        iframeLoader(false);
                    }
                    function boomerangSaveLoadTime(e) {
                        window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
                    }
                    if (window.addEventListener) {
                        window.addEventListener("load", boomerangSaveLoadTime, false);
                    } else if (window.attachEvent) {
                        window.attachEvent("onload", boomerangSaveLoadTime);
                    }
                    if (document.addEventListener) {
                        document.addEventListener("onBoomerangLoaded", function (e) {
                            e.detail.BOOMR.init({
                                producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                                ResourceTiming: {
                                    enabled: true,
                                    trackedResourceTypes: ["script", "img", "css"]
                                },
                            });
                            e.detail.BOOMR.t_end = new Date().getTime();
                        });
                    } else if (document.attachEvent) {
                        document.attachEvent("onpropertychange", function (e) {
                            if (!e) e = event;
                            if (e.propertyName === "onBoomerangLoaded") {
                                e.detail.BOOMR.init({
                                    producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                                    ResourceTiming: {
                                        enabled: true,
                                        trackedResourceTypes: ["script", "img", "css"]
                                    },
                                });
                                e.detail.BOOMR.t_end = new Date().getTime();
                            }
                        });
                    }
                })();


                window.ShopifyAnalytics.lib.page(null, {});

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);

                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-53e1c676e346080489adfcb36af1739b2d334a9e308c6ff2d84d3de1bc4e6ce0.js";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();</script>
</head>



<body class="template-policy">

    <a class="in-page-link visually-hidden skip-link" href="#MainContent">Skip to content</a>




    <div id="shopify-section-promo-popup" class="shopify-section">
        <div class="promo-popup promo-popup__container" data-indigo-module="PromoPopup" data-indigo-event="true"
            data-indigo-args='{"enable": false, "delay": 1000}'>
            <div class="promo-popup__dialog"
                style="background-image: url(//cdn.shopify.com/s/files/1/0250/8511/6462/files/promo-popup-image-1_974x.jpg?v=1589312227);"
                data-success-image="//cdn.shopify.com/s/files/1/0250/8511/6462/files/promo-popup-image-2_974x.jpg?v=1589316486">
                <div class="promo-popup__dialog-toolbar">
                    <button class="promo-popup__dialog-close">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                            viewBox="0 0 40 40">
                            <path
                                d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z"
                                class="layer" />
                        </svg>
                    </button>
                </div>
                <div class="promo-popup__wrapper">
                    <div class="promo-popup__dialog-text step-one">
                        <div class="promo-popup__dialog-text-eyebrow">
                            <h3 class="desktop">Save 10% on<br>your first order<br></h3>
                            <h3 class="mobile">Save 10% on your first order</h3>
                        </div>
                        <div class="promo-popup__dialog-text-heading">
                            <h4>When you join our insiders list.</h4>
                        </div>
                    </div>
                    <div class="promo-popup__dialog-text step-two">
                        <div class="promo-popup__dialog-text-eyebrow">
                            <h3 class="desktop">Welcome<br>Aboard.</h3>
                            <h3 class="mobile">Welcome Aboard.</h3>
                        </div>
                        <div class="promo-popup__dialog-text-heading">
                            <h4>Check inbox for<br>your promo code.</h4>
                            <button class="success-close">
                                <h5>Continue Shopping</h5>
                            </button>
                        </div>
                    </div>
                    <div class="promo-popup__dialog-form">
                        <form id="promo-popup-modal-email-signup" class="newsletter-signup__form"
                            action="//manage.kmail-lists.com/subscriptions/subscribe"
                            data-ajax-submit="//manage.kmail-lists.com/ajax/subscriptions/subscribe" method="GET"
                            novalidate="novalidate" data-indigo-module="NewsletterSignup">
                            <input type="hidden" name="g" value="VDPTrL">

                            <input class="newsletter-signup__email" type="email" name="email"
                                id="promo-popup-modal-email-signup-input" placeholder="YOUR EMAIL"
                                aria-label="YOUR EMAIL" aria-required="true" autocorrect="off" autocapitalize="off"
                                required>
                            <div class="klaviyo_messages">
                                <div class="success_message" style="display:none;">
                                    <h5 class="newsletter-signup__response success" data-form-status>Thank you! We’ll
                                        only email when we have something important to say.</h5>
                                </div>
                                <div class="error_message" style="display:none;">
                                    <!-- This gets generated by Klaviyo. We override the styling in our scss. -->
                                </div>
                            </div>
                            <button type="submit" class="newsletter__submit--arrow">Sign Up</button>
                        </form>

                        <script type="text/javascript"
                            src="//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"></script>
                        <script type="text/javascript">
                            var imcEmailForms = document.querySelectorAll('form.newsletter-signup__form');
                            if (imcEmailForms.length > 0) {
                                for (var i = 0; i < imcEmailForms.length; i++) {
                                    var klavFormId = '#' + imcEmailForms[i].id;
                                    KlaviyoSubscribe.attachToForms(klavFormId, {
                                        hide_form_on_success: false,
                                        custom_success_message: true,
                                        extra_properties: {
                                            $source: 'Shopify',
                                            $consent: 'email'
                                        }
                                    });
                                }
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="SearchDrawer" class="search-bar drawer drawer--top" role="dialog" aria-modal="true" aria-label="Search">
        <div class="search-bar__table">
            <div class="search-bar__table-cell search-bar__form-wrapper">
                <form class="search search-bar__form" action="/search" method="get" role="search">
                    <input class="search__input search-bar__input" type="search" name="q" value="" placeholder="Search"
                        aria-label="Search">
                    <button class="search-bar__submit search__submit btn--link" type="submit">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                            viewBox="0 0 37 40">
                            <path
                                d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z" />
                        </svg>
                        <span class="icon__fallback-text">Submit</span>
                    </button>
                </form>
            </div>
            <div class="search-bar__table-cell text-right">
                <button type="button" class="btn--link search-bar__close js-drawer-close">
                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                        viewBox="0 0 40 40">
                        <path
                            d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z"
                            class="layer" />
                    </svg>
                    <span class="icon__fallback-text">Close search</span>
                </button>
            </div>
        </div>
    </div>
    <style data-shopify>
        .cart-popup {
            box-shadow: 1px 1px 10px 2px rgba(232, 233, 235, 0.5);
        }
    </style>
    <div class="cart-popup-wrapper cart-popup-wrapper--hidden" role="dialog" aria-modal="true"
        aria-labelledby="CartPopupHeading" data-cart-popup-wrapper>
        <div class="cart-popup" data-cart-popup tabindex="-1">
            <h2 id="CartPopupHeading" class="cart-popup__heading">Just added to your cart</h2>
            <button class="cart-popup__close" aria-label="Close" data-cart-popup-close><svg aria-hidden="true"
                    focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 40 40">
                    <path
                        d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z"
                        class="layer" />
                </svg></button>

            <div class="cart-popup-item">
                <div class="cart-popup-item__image-wrapper hide" data-cart-popup-image-wrapper>
                    <div class="cart-popup-item__image cart-popup-item__image--placeholder"
                        data-cart-popup-image-placeholder>
                        <div data-placeholder-size></div>
                        <div class="placeholder-background placeholder-background--animation"></div>
                    </div>
                </div>
                <div class="cart-popup-item__description">
                    <div>
                        <div class="cart-popup-item__title" data-cart-popup-title></div>
                        <ul class="product-details" aria-label="Product details" data-cart-popup-product-details></ul>
                    </div>
                    <div class="cart-popup-item__quantity">
                        <span class="visually-hidden" data-cart-popup-quantity-label></span>
                        <span aria-hidden="true">Qty:</span>
                        <span aria-hidden="true" data-cart-popup-quantity></span>
                    </div>
                </div>
            </div>

            <a href="/cart" class="cart-popup__cta-link btn btn--secondary-accent">
                View cart (<span data-cart-popup-cart-quantity></span>)
            </a>

            <div class="cart-popup__dismiss">
                <button class="cart-popup__dismiss-button text-link text-link--accent" data-cart-popup-dismiss>
                    Continue shopping
                </button>
            </div>
        </div>
    </div>

    <div id="shopify-section-header-envoy" class="shopify-section">



        <div class="header-envoy" data-indigo-module="HeaderEnvoy" data-indigo-args='{"test": "1"}' data-hover-menu-top>
        <header class="header-envoy__container">



<div class="header-envoy__content" data-hover-menu-top-links>
  <div class="header-envoy__block header-envoy__block--left">
    <nav class="header-envoy__nav--desktop">

      <ul class="site-nav list--inline" id="SiteNav">
        <li class=" megamenu"><a href="" class="site-nav__link site-nav__link--main"
          data-hover-menu-shop>
          <span class="site-nav__label"><img class="logoN" src="img/logoN2.png" alt=""></span>
        </a>
      </li>
        <li class=" megamenu"><a href="#blockThirdNew" class="site-nav__link site-nav__link--main"
            data-hover-menu-shop>
            <span class="site-nav__label"><?php echo $ml['shop'];?></span>
          </a>
        </li>
        <li class=" megamenu"><a href="#shopify-section-1591139703577" class="site-nav__link site-nav__link--main">
            <span class="site-nav__label"><?php echo $ml['why'];?> Bio Structure Lab Collagen+
            </span>
          </a></li>
        <li class=" megamenu"><a href="#footer" class="site-nav__link site-nav__link--main">
            <span class="site-nav__label"><?php echo $ml['our_mission'];?></span>
          </a></li>

      </ul>

    </nav>
    <div class="header-envoy__icons--mobile mobile-icons">

      <button type="button" class="header-envoy__mobile-menu-btn" aria-controls="MobileNav"
        aria-expanded="false" aria-label="Menu">
        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger"
          viewBox="0 0 37 40">
          <path
            d="M33.5 25h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2zm0-11.5h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2zm0 23h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2z" />
        </svg>
        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
          viewBox="0 0 40 40">
          <path
            d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z"
            class="layer" />
        </svg>
      </button>

    </div>
  </div>
  <div class="header-envoy__block  header-envoy__block--right header-envoy__icons">
    <div class="header-envoy__icons--desktop">


      <!-- <a href="/account/login" class="header-envoy__account">
        <span class="header-envoy__account-text">Log in</span>
      </a>
     -->


      <!-- <a href="/cart" class="header-envoy__cart">
        <span class="header-envoy__cart-text">Cart</span>
        <div id="CartCount" class="header-envoy__cart-count hide" data-cart-count-bubble>
          <span data-cart-count>0</span>
          <span class="icon__fallback-text medium-up--hide">items</span>
        </div>
      </a> -->

    </div>
    <!-- <div class="header-envoy__icons--mobile mobile-icons">
  
  
  <a href="/account/login" class="__account mobile-account-icon">
    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-login" viewBox="0 0 28.33 37.68"><path d="M14.17 14.9a7.45 7.45 0 1 0-7.5-7.45 7.46 7.46 0 0 0 7.5 7.45zm0-10.91a3.45 3.45 0 1 1-3.5 3.46A3.46 3.46 0 0 1 14.17 4zM14.17 16.47A14.18 14.18 0 0 0 0 30.68c0 1.41.66 4 5.11 5.66a27.17 27.17 0 0 0 9.06 1.34c6.54 0 14.17-1.84 14.17-7a14.18 14.18 0 0 0-14.17-14.21zm0 17.21c-6.3 0-10.17-1.77-10.17-3a10.17 10.17 0 1 1 20.33 0c.01 1.23-3.86 3-10.16 3z"/></svg>
  </a>
  
  
  <a href="/cart" class="header-envoy__cart mobile-cart-icon">
    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart" viewBox="0 0 37 40"><path d="M36.5 34.8L33.3 8h-5.9C26.7 3.9 23 .8 18.5.8S10.3 3.9 9.6 8H3.7L.5 34.8c-.2 1.5.4 2.4.9 3 .5.5 1.4 1.2 3.1 1.2h28c1.3 0 2.4-.4 3.1-1.3.7-.7 1-1.8.9-2.9zm-18-30c2.2 0 4.1 1.4 4.7 3.2h-9.5c.7-1.9 2.6-3.2 4.8-3.2zM4.5 35l2.8-23h2.2v3c0 1.1.9 2 2 2s2-.9 2-2v-3h10v3c0 1.1.9 2 2 2s2-.9 2-2v-3h2.2l2.8 23h-28z"/></svg>
  </a>
  
</div> -->
  </div>
</div>


<nav class="header-envoy__nav--mobile mobile_nav_outer" role="navigation">
  <div class="header-envoy__nav--mobile-top-section">
    <ul>
      <li class="header-envoy__nav--mobile-link maganav_links_mob">
        <a href="#blockThirdNew" class="">
          <span class=""><?php echo $ml['shop'];?></span><span class="child_mobile_link">
            <img
              src="//cdn.shopify.com/s/files/1/0250/8511/6462/t/102/assets/nav-arrow_small.png?v=9514800572455352616" />
          </span></a>
      </li>

      <li class="header-envoy__nav--mobile-link maganav_links_mob">
        <a href="#shopify-section-1591139703577" class="">
          <span class=""><?php echo $ml['why'];?> Bio Structure Lab Collagen+
          </span></a>
      </li>

      <li class="header-envoy__nav--mobile-link maganav_links_mob">
        <a href="#footer" class="">
          <span class=""><?php echo $ml['our_mission'];?></span></a>
      </li>

    </ul>
  </div>
</nav>


</header>
        </div>

    </div>

    <main class="page-container" id="PageContainer">

        <div class="shopify-policy__container">
            <div class="shopify-policy__title">
                <h1><?php echo $ml['terms-conditions-title'];?></h1>
            </div>

            <div class="shopify-policy__body">
            <?php echo $ml['terms-conditions'];?>
            </div>
        </div>


        <div id="shopify-section-footer" class="shopify-section">


            <!-- footer -->
            <section class="footer">
             
            </section>
            <!-- footer -->
        </div>

        <div id="slideshow-info" class="visually-hidden" aria-hidden="true">Use left/right arrows to navigate the
            slideshow or swipe left/right if using a mobile device</div>

    </main>

    <ul hidden>
        <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
        <li id="a11y-selection-message">Press the space key then arrow keys to make a selection.</li>
    </ul>

    <!-- Swiper Slider -->
    <!-- <script src="https://unpkg.com/swiper/js/swiper.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Subscriptions Powered by ReCharge Payments: Begin Liquid Code -->
    <!--
	Subscription Theme Footer
	http://rechargepayments.com: v2
	Updated: 2017/09/12
-->

    <!-- Subscriptions Powered by ReCharge Payments: End Liquid Code -->

    <div class="cart-drawer-container">
        <div class="cart-drtawer-overlay"></div>
        <div class="cartDrawerWrapper">
            <div class="cart-content-here">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', 'button.checkout.cart__submit.btn.product-sticky-form__add-cart', function (e) {

                var paramCart = '&cart_token=' + (document.cookie.match('(^|; )cart=([^;]*)') || 0)[2];
                $.ajax({
                    type: 'GET',
                    url: '/cart.js',
                    dataType: 'text',
                    success: function (data) {
                        if (data.indexOf("shipping_interval_frequency") > -1) {
                            var paramDomain = 'myshopify_domain=indigocollagen.myshopify.com';
                            try {
                                var paramLinker = "&" + ga.getAll()[0].get('linkerParam');
                            } catch (err) {
                                var paramLinker = '';
                            }
                            var paramCustomer = '';
                            window.location = "https://checkout.rechargeapps.com/r/checkout?" + paramDomain + paramCart + paramLinker + paramCustomer;
                        } else {
                            window.location = '/checkout';
                        }
                    }
                });
            });
        })
    </script>
    <script src="https://cdn.attn.tv/indigocollagen/dtag.js"></script>



    <div id='stamped-rewards-init' class='stamped-rewards-init' data-key-public='pubkey-15vkcqh4c9A4n274S3u4fJyN13824Y'>
    </div>
    <meta id="th_shop_url" content="indigocollagen.myshopify.com">
    <meta id="th_shop_money" content="${{amount}}">
    <link href="css/th-pb-style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://bundle.thimatic-apps.com/theme_files/th-pb-script.js?v=259" defer></script>

    <!-- "snippets/special-offers.liquid" was not rendered, the associated app was uninstalled -->
<style>
    .shopify-policy__container{
        max-width: 1200px!important;
    }
    .footer{
        min-height: 60px!important;
    }

    .shopify-policy__title{
        font-size: 90px;
    }

    @media only screen and (max-width: 574px) {
    .shopify-policy__title h1{
        font-size: 60px!important;
    }
}
</style>

</body>

</html>