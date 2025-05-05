<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">

        <meta name="robots" content="@yield('seo_noindex_tag')">
        <meta name="description" content="@yield('seo_description')" />
        <meta name="keywords" content="@yield('seo_keyword')" />
        <link rel="canonical" href="@yield('seo_canonical')" />

        <meta name="googlebot" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
        <meta name="bingbot" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
        <link rel="alternate" type="application/rss+xml" href="sitemap.xml" />

        <meta property="og:url" content="" />
        <meta property="og:title" content="Web Development Company in India &#124; Website Development Services in" />
        <meta property="og:description" content="The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038;" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Inbox Infotech" />
        <meta property="og:locale" content="en_US" />

        <meta property="twitter:url" content="" />
        <meta property="twitter:title" content="Web Development Company in India &#124; Website Development Services in" />
        <meta property="twitter:description" content="The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &#038; more." />
        <meta property="twitter:domain" content="Inbox Infotech" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:creator" content="@twitter" />
        <meta property="twitter:site" content="@twitter" />

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [{
                    "@type": "Organization",
                    "@id": "https://inboxtechs.com#Organization",
                    "url": "https://inboxtechs.com",
                    "name": "Inbox Infotech",
                    "sameAs": ["https://twitter.com/twitter"]
                }, {
                    "@type": "WebSite",
                    "@id": "https://inboxtechs.com#website",
                    "url": "https://inboxtechs.com",
                    "name": "Web Development Company in India | Website Development Services in Vadodara",
                    "headline": "The best Web Development Company in Vadodara, India for web development services, custom software development, web application development, android app development, web design, graphic design &amp; more.",
                    "mainEntityOfPage": {
                        "@type": "WebPage",
                        "url": "https://inboxtechs.com"
                    },
                    "datePublished": "2019-06-29T16:35:21+00:00",
                    "dateModified": "2022-09-08T12:46:04+00:00",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "https://inboxtechs.com/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    },
                    "author": {
                        "@type": "Person",
                        "@id": "https://inboxtechs.com/author/inbox_admin/#person",
                        "url": "https://inboxtechs.com/author/inbox_admin/",
                        "name": "inbox-admin"
                    },
                    "publisher": {
                        "@type": "Organization",
                        "@id": "https://inboxtechs.com#Organization",
                        "url": "https://inboxtechs.com",
                        "name": "Inbox Infotech",
                        "sameAs": ["https://twitter.com/twitter"]
                    },
                    "keywords": "web development company,web design company,web application development,best web development company,web development company india,web development company vadodara"
                }]
            }

        </script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="keyword" content="Best IT company in Vadodara / Baroda, App development, web development, Android/ios app developer, IT consulting firms, IoT, Artificial Intelligence, Machine Learning" />

        <meta name="google-site-verification" content="OVH3g58FzaA1CVsuWB9NEGbovrO15CHP8U2r83cW1hQ" />
        <link rel="profile" href="">

        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>@yield('page_title')</title>

        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon-1.png.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-1.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-1.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon-1.png')}}">
        <link rel="manifest" href="{{asset('favicon-1.png')}}">
        <meta name="msapplication-TileImage" content="{{asset('favicon-1.png')}}">
        <meta name="theme-color" content="#ffffff">
        <script src="{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>

        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="{{asset('vendors/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/hamburgers/hamburgers.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendors/loaders.css/loaders.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/user.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/aos.css')}}" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=sans+serif:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6QZQHT5PRT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-6QZQHT5PRT');
        </script>

        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-W35PSKXV');
        </script>
        <!-- End Google Tag Manager -->

    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W35PSKXV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('afrontend.includes.header')
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        @section('container')
        @show
        <!-- ===============================================-->

        <!--===============================================-->
        <!--    Footer-->
        <!--===============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <!-- ============================================-->
        @include('afrontend.includes.footer1')
        @include('afrontend.includes.footer')

        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendors/is/is.min.js')}}"></script>
        <script src="{{asset('vendors/bigpicture/BigPicture.js')}}"> </script>
        <script src="{{asset('vendors/countup/countUp.umd.js')}}"> </script>
        <script src="{{asset('vendors/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('vendors/aos/aos.js')}}"></script>
        <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
        <script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('vendors/gsap/gsap.js')}}"></script>
        <script src="{{asset('vendors/gsap/customEase.js')}}"></script>
        <script src="{{asset('assets/js/theme.js')}}"></script>
        <script src="https://www.gptbots.ai/widget/wejx8m4ws8arow6w4xkbnle/chat.js"></script>  {{-- chatbot --}}
        <script type='application/ld+json'>
            {
                "@context": "http://www.schema.org",
                "@type": "LocalBusiness",
                "name": "Inbox Infotech",
                "url": "https://inboxtechs.com/",
                "logo": "https://inboxtechs.com/inbox_new/public/inbox-logo.png",
                "image": "https://inboxtechs.com/inbox_new/public/inbox-logo.png",
                "description": "A managed cloud services provider manages partial or complete cloud platforms of their clients, including the migration, maintenance and optimization",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "402- 4 floor A, B, C, C Square Building Sarabhai Campus, nr. Genda Circle",
                    "addressLocality": "Vadodara",
                    "addressRegion": "Gujarat",
                    "postalCode": "390007",
                    "addressCountry": "India"
                },
                "hasMap": "https://goo.gl/maps/RmvzhADjEqo86uab7",
                "openingHours": "Mo, Tu, We, Th, Fr, 09:00-19:00",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+91 9662398895",
                    "contactType": "Sales"
                }
            }
        </script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2BZVQVR6BW"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-2BZVQVR6BW');
        </script>
    </body>
</html>
