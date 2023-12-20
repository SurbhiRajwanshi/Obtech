<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Spartan' rel='stylesheet'>
    <link rel="stylesheet" href="./css/responisve.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php 
      include 'common/header.php';
    ?>
    <div id="blog">

        <div class="blogWrapper">

            <!-- hero section -->
            <section class="blogHeroSec">
                <h1>BLOG</h1>
            </section>

            <section class="contentWrapper">

                <!-- left side  -->

                <div class="leftSideContainer">
                    <div class="inner_blog_container">
                        <img src="image/kamizLeft.png" alt="kamizLeft" class="newimgwidth">

                        <div class="content">
                            <h2>Driving Success with Software Solutions: Maximizing Synergy in the Digital Business Landscape</h2>

                            <div class="postedData">

                                <!-- first  -->
                                <div class="firstPosted">
                                    <p>Posted On:</p> <span>June 28, 2022</span>
                                </div>
                                <!-- second  -->
                                <div class="firstPosted">
                                    <p>Posted by:</p> <span>Andrew Le</span>
                                </div>
                                <!-- third  -->
                                <div class="firstPosted">
                                    <p>Comments:</p> <span>02</span>
                                </div>

                            </div>

                            <h3>In today's rapidly evolving digital business landscape, software solutions have become essential tools for driving success. With the increasing reliance on technology, businesses need to adapt and leverage software solutions to stay competitive. These solutions encompass a wide range of applications, from enterprise resource planning (ERP) systems to customer relationship management (CRM) tools. By integrating these software solutions into their operations, businesses can streamline processes, enhance collaboration, and make informed decisions based on data analytics.</h3>

                            <a href="blogDetails.php"><button class="bookAppointBtn readmorenew">
                                    <span class="sideItem">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16"
                                            viewBox="0 0 19 16" fill="none">
                                            <path
                                                d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                                fill="#F1EB77" />
                                        </svg>
                                    </span>
                                    <p>Read More</p> <span><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="14" viewBox="0 0 14 14" fill="none">
                                            <path
                                                d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                                fill="white" />
                                        </svg></span>
                                </button></a>

                        </div>
                    </div>


                    <div class="youMayContent">

                        <h2>You may like it</h2>


                        <div class="firstRow">

                            <div class="sigleItem">

                                <img src="./assets/blogf1.png" alt="">

                                <p>June 28, 2022</p>

                                <h2>User-Centric Design:Creating Intuitive Software Solutions for Small Business Success.</h2>

                                <h3>SIn today's digital age, small businesses have the opportunity to leverage technology to streamline their 
                        operations and enhance their overall success.</h3>
                                <a href="blog1.php">
                                <button class="bookAppointBtn">
                                    <span class="sideItem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16"
                                            viewBox="0 0 19 16" fill="none">
                                            <path
                                                d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                                fill="#F1EB77" />
                                        </svg>
                                    </span>
                                    Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 14 14" fill="none">
                                            <path
                                                d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                                fill="white" />
                                        </svg></span>
                                </button>
                                </a>

                            </div>

                            <div class="sigleItem">

                                <img src="./assets/blogf3.png" alt="">

                                <p>June 28, 2022</p>

                                <h2>Exploring the potential of AI-powered virtual assistants in digital intelligence in the education sector.</h2>

                                <h3>In today's digital age, the education sector is continuously seeking innovative solutions to enhance learning </h3>
                                    <a href="blog2.php">
                                <button class="bookAppointBtn">
                                    <span class="sideItem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16"
                                            viewBox="0 0 19 16" fill="none">
                                            <path
                                                d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                                fill="#F1EB77" />
                                        </svg>
                                    </span>
                                    Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 14 14" fill="none">
                                            <path
                                                d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                                fill="white" />
                                        </svg></span>
                                </button>
</a>


                            </div>

                        </div>



                    </div>

                </div>


                <!-- right side  -->
                <div class="rightSideContainer">

                    <div class="inputTag">
                        <input type="text" placeholder="Search here">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <g opacity="0.8" clip-path="url(#clip0_96_116)">
                                    <path
                                        d="M10.97 11.7837C7.59505 14.3445 3.42505 13.2641 1.41005 10.6883C-0.729954 7.95248 -0.369954 4.15129 2.05505 1.85557C4.63505 -0.575185 8.54005 -0.570183 11.12 1.6005C13.715 3.78618 14.465 7.96749 11.73 11.0685C11.79 11.1285 11.85 11.1985 11.91 11.2585C13.18 12.5089 14.45 13.7593 15.72 15.0097C15.775 15.0647 15.83 15.1147 15.875 15.1747C16.045 15.3948 16.025 15.6649 15.83 15.8499C15.64 16.035 15.36 16.05 15.15 15.885C15.085 15.8349 15.03 15.7699 14.97 15.7149C13.7 14.4645 12.43 13.2141 11.16 11.9637C11.105 11.9037 11.04 11.8487 10.97 11.7837ZM6.72505 1.01531C3.48505 1.03532 1.02005 3.63113 1.03505 6.65207C1.05005 9.68302 3.54505 12.2288 6.73005 12.2238C9.86505 12.2188 12.425 9.76305 12.42 6.61706C12.415 3.43107 9.82505 1.03032 6.72505 1.01531Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_96_116">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></span>

                    </div>

                    <!-- first -->
                    <div class="firstNews">
                        <h2>Demystifying Business Process Automation: A Guide for Small Enterprises</h2>
                        <h3>15 June 2023</h3>
                    </div>

                    <hr>
                    <!-- seccond -->
                    <div class="firstNews">
                        <h2>The Power of Data: Leveraging Business Intelligence for Informed Decision-Making"</h2>
                        <h3>15 Sep 2023</h3>
                    </div>

                    <hr>
                    <!-- third -->
                    <div class="firstNews">
                        <h2>Digital Transformation 101: Navigating the Path to Modernizing Your Business</h2>
                        <h3>15 Sep 2023</h3>
                    </div>

                    <hr>
                    <!-- fourth -->
                    <div class="firstNews">
                        <h2>Mastering Customer Relationship Management (CRM) for Small Businesses</h2>
                        <h3>15 Oct 2023</h3>
                    </div>

                    <hr>

                    <!-- fivth -->
                    <div class="firstNews">
                        <h2>User-Centric Design: Creating Intuitive Software Solutions for Small Business Success</h2>
                        <h3>15 Oct 2023</h3>
                    </div>

                    <div class="imgSocialLink">

                        <img src="image/blogRight.png" alt="">

                        <span class="socialLink">
                        <a target="_blank" href="https://www.facebook.com/obtechenterprise"><svg
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M12.7676 19.6011C12.7676 17.1598 12.7676 14.7186 12.7676 12.2335C13.4864 12.2335 14.1989 12.2335 14.9176 12.2335C15.0301 11.3759 15.1364 10.5684 15.2426 9.72336C14.4176 9.72336 13.6051 9.72336 12.8176 9.72336C12.8176 8.99723 12.7801 8.30241 12.8301 7.61385C12.8614 7.21323 13.1926 6.96284 13.6176 6.94406C14.1676 6.91902 14.7176 6.9378 15.3114 6.9378C15.3114 6.18664 15.3176 5.49182 15.3051 4.797C15.3051 4.74692 15.2114 4.64676 15.1614 4.64676C14.1801 4.60921 13.1926 4.42768 12.2176 4.74066C11.0989 5.10372 10.4301 5.89244 10.2676 7.0317C10.1551 7.8392 10.1989 8.67173 10.1739 9.49175C10.1739 9.55435 10.1676 9.61068 10.1551 9.7171C9.5739 9.7171 9.00515 9.7171 8.4364 9.7171C8.01765 9.7171 8.01765 9.7171 8.01765 10.1428C8.01765 10.8188 8.01765 11.4948 8.01765 12.221C8.74265 12.221 9.44265 12.221 10.1614 12.221C10.1614 14.8438 10.1614 17.4165 10.1614 19.983C6.33015 20.2459 1.15515 17.4666 0.155148 11.7327C-0.832352 6.09901 3.0114 1.02242 8.3489 0.139804C14.0739 -0.805406 19.0364 3.16322 19.8676 8.39005C20.7989 14.2679 16.6739 18.6622 12.7676 19.6011Z"
                            fill="white" />
                    </svg></a>

                <a target="_blank" href="https://www.linkedin.com/company/obtechenterprise"><svg
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M15.8516 19.9687C15.8516 18.9284 15.8594 17.9116 15.8516 16.8948C15.8359 15.307 15.8594 13.7113 15.7734 12.1235C15.6641 10.0039 14.1016 9.65189 12.6641 10.129C11.9609 10.3637 11.5938 10.9346 11.4141 11.623C11.3203 11.9984 11.25 12.3895 11.25 12.7806C11.2344 15.0254 11.2344 17.2624 11.2344 19.5072C11.2344 19.6636 11.2344 19.8122 11.2344 19.9921C9.84375 19.9921 8.48438 19.9921 7.10156 19.9921C7.10156 15.5494 7.10156 11.1302 7.10156 6.67184C8.40625 6.67184 9.70312 6.67184 11.0469 6.67184C11.0469 7.25064 11.0469 7.8138 11.0469 8.40825C11.3984 8.03281 11.6875 7.65737 12.0391 7.36014C13.1328 6.43719 14.4297 6.18689 15.8047 6.37461C16.4766 6.46847 17.1562 6.64837 17.7656 6.93777C18.8672 7.454 19.4219 8.45518 19.6719 9.60496C19.8438 10.4028 19.9609 11.224 19.9766 12.0375C20.0156 14.603 19.9922 17.1763 19.9922 19.7418C19.9922 19.8044 19.9844 19.8748 19.9766 19.9687C18.6172 19.9687 17.2578 19.9687 15.8516 19.9687Z"
                            fill="white" />
                        <path
                            d="M0.34375 6.66406C1.71875 6.66406 3.05469 6.66406 4.42969 6.66406C4.42969 11.1068 4.42969 15.5417 4.42969 20C3.07031 20 1.72656 20 0.34375 20C0.34375 15.5651 0.34375 11.1302 0.34375 6.66406Z"
                            fill="white" />
                        <path
                            d="M4.78129 2.40907C4.77348 3.73876 3.69535 4.84161 2.39848 4.84943C1.08598 4.84161 -0.0077709 3.71529 4.15953e-05 2.36996C0.0078541 1.06375 1.08598 0 2.39067 0C3.73442 0 4.7891 1.06375 4.78129 2.40907Z"
                            fill="white" />
                    </svg></a>
                <a target="_blank" href="https://twitter.com/account/access"><svg xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M5.82374 15.1258C4.79883 14.8023 3.84267 14.4069 2.99275 13.7383C2.63653 13.4579 2.29282 13.1344 1.98034 12.7894C1.57413 12.3436 1.71162 11.7685 2.25532 11.5816C2.42405 11.5241 2.59279 11.4738 2.82402 11.3947C2.69278 11.294 2.60529 11.2221 2.51779 11.1574C1.11793 10.2372 0.299252 8.85694 0.0117789 7.04529C-0.0694635 6.54206 0.280504 6.15385 0.724212 6.2473C0.936692 6.29044 1.13667 6.36952 1.3929 6.4486C1.30541 6.17541 1.22417 5.95255 1.16167 5.71531C0.780457 4.32063 0.880448 2.98346 1.57413 1.73257C1.93035 1.08555 2.4303 1.09274 2.76152 1.76132C3.83017 3.91804 5.32378 5.50683 7.35484 6.39827C8.05478 6.7074 8.77346 6.9087 9.49839 6.9734C9.56713 6.32638 9.57963 5.70093 9.71087 5.10424C10.1483 3.16319 11.1295 1.74694 12.8481 1.13587C13.8292 0.783609 14.7979 0.869878 15.7353 1.34436C15.9415 1.45219 16.0978 1.43063 16.2853 1.32279C16.9789 0.920201 17.6851 0.53918 18.3788 0.136592C18.66 -0.0287563 18.935 -0.0790798 19.185 0.186916C19.4037 0.409777 19.4162 0.726096 19.2412 1.14306C18.96 1.80446 18.6725 2.46585 18.3663 3.18476C18.7038 3.156 18.985 3.12725 19.2725 3.09849C19.5412 3.06973 19.7787 3.14881 19.9162 3.42919C20.0662 3.72394 19.9974 3.99712 19.8474 4.27031C19.6099 4.69446 19.36 5.11143 19.16 5.54996C19.06 5.76564 19.0038 6.0532 19.0288 6.28325C19.4537 9.84184 18.685 13.005 16.7352 15.8088C15.1604 18.0661 13.1168 19.3314 10.6545 19.7843C9.02969 20.0791 7.40484 20.0647 5.77999 19.7843C4.36762 19.5399 2.99275 19.1589 1.69912 18.4472C1.36165 18.2674 1.04918 18.023 0.74921 17.7642C0.442989 17.5054 0.349247 17.1675 0.461737 16.8584C0.599224 16.4989 0.874198 16.4342 1.18667 16.4198C2.00534 16.3767 2.83027 16.3623 3.64269 16.2473C4.43012 16.1395 5.14255 15.7441 5.82374 15.1258ZM3.5052 17.7786C3.49895 17.7786 3.5677 17.8145 3.63019 17.8361C4.82383 18.2674 6.04871 18.5119 7.2986 18.5909C9.06093 18.7132 10.7858 18.5406 12.4544 17.8217C14.2229 17.0597 15.5041 15.6219 16.4977 13.8246C17.6539 11.7469 18.1288 9.4752 17.8851 7.01653C17.8039 6.20417 17.6351 5.37743 18.1976 4.6729C18.2038 4.65852 18.1976 4.62976 18.1913 4.57944C17.9976 4.60101 17.7976 4.61538 17.6039 4.64414C17.3227 4.69446 17.0602 4.6729 16.8727 4.38533C16.679 4.09058 16.7477 3.81021 16.879 3.51546C17.0602 3.10568 17.2352 2.68871 17.4476 2.19267C17.0539 2.41553 16.7227 2.57369 16.4102 2.77498C16.0978 2.97628 15.8291 2.93314 15.5041 2.7606C15.0854 2.54493 14.6292 2.34364 14.1792 2.31488C12.4856 2.19986 11.2732 3.63048 10.8795 5.29116C10.7108 5.99569 10.717 6.7074 10.8045 7.42631C10.892 8.13803 10.6545 8.43997 10.0546 8.39684C9.61713 8.36808 9.17967 8.33213 8.75471 8.24586C6.12371 7.69231 4.0114 6.1826 2.4303 3.70956C2.37406 3.62329 2.31156 3.54421 2.20532 3.40762C2.01159 4.6729 2.27407 5.71531 2.949 6.62114C3.13649 6.87275 3.26147 7.13156 3.13024 7.46945C2.999 7.79295 2.75527 7.90079 2.4678 7.90798C2.14908 7.91517 1.83036 7.90798 1.4054 7.90798C1.67412 8.34651 1.86786 8.72753 2.11783 9.05104C2.70528 9.82027 3.46771 10.266 4.31138 10.5536C4.6176 10.6542 4.88632 10.7908 4.93007 11.2006C4.97381 11.6175 4.73009 11.826 4.45511 11.9986C4.17389 12.1783 3.89267 12.3508 3.59269 12.5377C3.66769 12.6024 3.73018 12.66 3.79892 12.7103C4.82383 13.4364 5.95497 13.803 7.13611 14.0115C7.38609 14.0546 7.57357 14.1984 7.64856 14.4644C7.72356 14.7304 7.67981 14.982 7.50483 15.1977C6.92988 15.9022 6.31744 16.5564 5.54251 16.9446C4.87382 17.2825 4.16139 17.5198 3.5052 17.7786Z"
                            fill="white" />
                    </svg></a>
                           </span>

                        <h2 class="stayText">Stay Tuned</h2>

                        <div class="inputTag">
                            <input type="text" placeholder="Your Email Here">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                                    fill="none">
                                    <g clip-path="url(#clip0_98_276)">
                                        <path
                                            d="M8.55625 14.2401C11.5047 10.711 14.4268 7.21462 17.3424 3.71821C17.3292 3.70516 17.3161 3.69211 17.2964 3.67907C16.4756 4.37705 15.6547 5.0685 14.8339 5.76648C11.9249 8.23875 9.01591 10.711 6.10034 13.1768C6.00184 13.2616 5.79171 13.2942 5.66694 13.2551C3.97276 12.6941 2.28514 12.1135 0.590958 11.546C0.269194 11.4351 0.0065303 11.2785 -0.00660291 10.9067C-0.0263027 10.5545 0.196962 10.3653 0.492459 10.2153C6.9737 6.85584 13.4418 3.49642 19.9099 0.136993C20.1923 -0.00651619 20.4615 -0.0782709 20.7373 0.123947C21.0065 0.326165 21.0262 0.600137 20.9737 0.913249C20.7307 2.47881 20.514 4.04436 20.2776 5.60992C20.0018 7.42988 19.7129 9.24984 19.4437 11.0698C19.1679 12.9028 18.8986 14.7358 18.6426 16.5688C18.5441 17.2733 18.1566 17.5016 17.5131 17.2799C14.5516 16.2688 11.5835 15.2642 8.55625 14.2401Z"
                                            fill="#F1EB77" />
                                        <path
                                            d="M11.2157 16.5232C10.5853 17.3712 9.97457 18.2061 9.36388 19.0346C9.18001 19.2759 9.00928 19.5304 8.81885 19.7652C8.63498 19.987 8.39202 20.0587 8.11622 19.9674C7.83386 19.8761 7.67626 19.6804 7.67626 19.3868C7.66969 18.0561 7.67626 16.7189 7.67626 15.3294C8.86481 15.7273 10.0271 16.1187 11.2157 16.5232Z"
                                            fill="#F1EB77" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_98_276">
                                            <rect width="21" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></span>
                        </div>

                        <div class="firstNews">
                            <h2>Future-Proofing Your Business: Adapting to Technological Shifts with Software</h2>
                            <h3>15 Oct 2023</h3>
                        </div>

                        <hr>

                        <div class="firstNews">
                            <h2>The Digital Ecosystem: How Software Solutions Create Synergy in Business</h2>
                            <h3>15 Oct 2023</h3>
                        </div>

                    </div>





                </div>

            </section>
            <div class="secondRow">

                <div class="sigleItem">

                    <img src="./image/blogf4.png" alt="">

                    <p>June 28, 2022</p>

                    <h2>

                    Digital Transformation 101:Navigating the Path to Modernizing Your Business.</h2>

                    <h3>Digital transformation has become a buzzword in today's business world, and for good reason. In order to stay competitive and relevant, businesses must embrace the rapid
                    </h3>
                    <a href="blog3.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>
</a>

                </div>

                <div class="sigleItem">

                    <img src="./image/blogf5.png" alt="">

                    <p>June 28, 2022</p>

                    <h2>The Integration of IoT in Business Operations:A Business Management Perspective
                    </h2>

                    <h3>The integration of IoT (Internet of Things) in business operations has become increasingly important in today's technology-driven world. IoT refers to the network of physical devices,</h3>
                        <a href="blog4.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>
</a>


                </div>

                <div class="sigleItem">

                    <img src="./assets/blogf6.png" alt="">

                    <p>June 28, 2022</p>

                    <h2>The Integration of IoT in Business Operations:Evolving Trends in Employee Performance and Engagement Software.</h2>

                    <h3>In today's rapidly changing business landscape, organizations are constantly seeking ways to improve employee performance and </h3>
                        <a href="blog5.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>
</a>
                </div>

                <div class="sigleItem">

                    <img src="./image/blogf4.png" alt="">

                    <p>June 28, 2022</p>

                    <h2>Cybersecurity in Business Management Software:Safeguarding Digital Operations</h2>

                    <h3>In today's digital age, cybersecurity has become a critical concern for businesses of all sizes. With the increasing reliance on technology and the internet, companies are constant
                    </h3>
                    <a href="blog6.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>
</a>
                </div>

                <div class="sigleItem">

                    <img src="./image/blogf8.png" alt="">

                    <p>June 28, 2022</p>

                    <h2>

                    Cloud-Based Business Management:Navigating the Future of Enterprise Solutions
                    </h2>

                    <h3>Cloud-based business management has emerged as a transformative solution for enterprises across industries. With the increasing reliance on digital technologies and   </h3>
                        <a href="blog7.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>
</a>
                </div>

                <div class="sigleItem">
                    <img src="./assets/blogf9.png" alt="">

                    <p>June 28, 2022</p>

                    <h2>Digital Health Tech: Innovations Shaping the Future of Healthcare IT</h2>
<h3>The landscape of the health industry is being completely transformed by digital health tech, as it introduces innovative solutions that are shaping the future of healthcare IT.</h3>
                        <a href="blog8.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>
</a>
                </div>
            </div>




            <div class="secondRow nonedisplay" id="displayadd">


                <div class="sigleItem">

                    <img src="./image/blogf10.png" alt="">

                    <p>June 28, 2022</p>

                    <h2>User Experience Revolution: Designing Intuitive Interfaces for Business Management Software</h2>

                    <h3>In today's competitive business landscape, user experience (UX) has become a crucial factor in the success of any software product, particularly business management software.
                    </h3>
                    <a href="blog9.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>

                    </button>
</a>


                </div>
                <div class="sigleItem">


                    <img src="./image/blogf11.png" alt="">


                    <p>June 28, 2022</p>

                    <h2>Data-Driven Decision-Making:Leveraging Analytics in Business Management
                    </h2>

                    <h3>In the contemporary business world, data-driven decision-making has emerged as an indispensable practice for organizations seeking to maintain their competitive edge and achieve
                    </h3>
                    <a href="blog10.php">
                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>

</a>

                </div>
                <div class="sigleItem">


                    <img src="./image/blogf12.png" alt="">


                    <p>June 28, 2022</p>

                    <h2>Implementing software solutions for seamless integration</h2>

                    <h3>Implementing software solutions requires careful planning and execution to ensure seamless
                        integration into existing systems and processes.</h3>

                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>


                </div>
                <div class="sigleItem">


                    <img src="./image/blogf13.png" alt="">


                    <p>June 28, 2022</p>

                    <h2>Overcoming challenges in adopting and integrating software solutions</h2>

                    <h3>Adopting and integrating software solutions can present challenges for businesses. Resistance to
                        change, lack of technical expertise.
                    </h3>

                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>


                </div>
                <div class="sigleItem">
                    <img src="./image/blogf14.png" alt="">


                    <p>June 28, 2022</p>

                    <h2>The future of software solutions in the digital business landscape
                    </h2>

                    <h3>As technology continues to evolve, software solutions will play an increasingly critical role in
                        driving business success.</h3>

                    <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>


                </div>
                <div class="sigleItem">


                    <img src="./image/blogf15.png" alt="">


                    <p>June 28, 2022</p>

                    <h2>Conclusion: Embracing software solutions for long-term success</h2>

                    <h3>In conclusion, software solutions are fundamental to driving success in the digital business
                        landscape..</h3>

                   <button class="bookAppointBtn">
                        <span class="sideItem">

                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16"
                                fill="none">
                                <path d="M18.0556 0.66248C0.377044 -2.99242 -1.05013 9.36462 0.4461 16H18.0556V0.66248Z"
                                    fill="#F1EB77" />
                            </svg>
                        </span>
                        Learn More <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 14 14" fill="none">
                                <path
                                    d="M7 14L5.75313 12.775L10.6531 7.875H0V6.125H10.6531L5.75313 1.225L7 0L14 7L7 14Z"
                                    fill="white" />
                            </svg></span>
                    </button>

                </div>
            </div>
            <div class="see_more_btn">
                <button id="See">See All</button>
            </div>


            <section id="blog_page_banner_new">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Discover how our software solutions <br>can drive your business success.</p>

                        </div>
                        <div class="col-lg-6 d-flex justify-content-end tree45 ">
                            <a href="contact.php"><button><span class="tree46">Contact Us</span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path d="M8 16L6.575 14.6L12.175 9H0V7H12.175L6.575 1.4L8 0L16 8L8 16Z"
                                            fill="#060E12" />
                                    </svg>
                                    <span class="sideImg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24"
                                            viewBox="0 0 28 24" fill="none">
                                            <path
                                                d="M27.0833 0.99372C0.565566 -4.48863 -1.57519 14.0469 0.669151 24H27.0833V0.99372Z"
                                                fill="white" />
                                        </svg>
                                    </span></button></a>
                        </div>
                    </div>
                </div>



            </section>

        </div>


    </div>
    <section id="contact_from" class="addd23">
        <div class="container contact_from_container">
            <div class="row row999">
                <div class="col-lg-5 col_1">
                    <div>
                        <h2>Contact Information</h2>
                        <p class="para1">Say somthing to start to live chat</p>
                    </div>
                    <div class="contnet_container d-flex flex-column">
                        <div class="d-flex doo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <path
                                    d="M15 15.2276C15.3438 15.2276 15.638 15.0986 15.8828 14.8404C16.1276 14.5823 16.25 14.2719 16.25 13.9094C16.25 13.5469 16.1276 13.2366 15.8828 12.9785C15.638 12.7203 15.3438 12.5913 15 12.5913C14.6562 12.5913 14.362 12.7203 14.1172 12.9785C13.8724 13.2366 13.75 13.5469 13.75 13.9094C13.75 14.2719 13.8724 14.5823 14.1172 14.8404C14.362 15.0986 14.6562 15.2276 15 15.2276ZM15 21.8185C13.3229 20.3136 12.0703 18.9158 11.2422 17.6251C10.4141 16.3344 10 15.1397 10 14.0413C10 12.3935 10.5026 11.0808 11.5078 10.1032C12.513 9.12554 13.6771 8.63672 15 8.63672C16.3229 8.63672 17.487 9.12554 18.4922 10.1032C19.4974 11.0808 20 12.3935 20 14.0413C20 15.1397 19.5859 16.3344 18.7578 17.6251C17.9297 18.9158 16.6771 20.3136 15 21.8185Z"
                                    fill="#F1EB77" />
                                <circle cx="15" cy="15" r="14.5" stroke="#F1EB77" />
                            </svg>
                            <p class="para2">539 W. Commerce Street, Suite 4542, Dallas, TX, United States, Texas</p>
                        </div>
                        <div class="d-flex doo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <circle cx="15" cy="15" r="14.5" stroke="#F1EB77" />
                                <path
                                    d="M9.9 19.7992C9.66 19.7992 9.45 19.7092 9.27 19.5292C9.09 19.3492 9 19.1392 9 18.8992V11.0992C9 10.8592 9.09 10.6492 9.27 10.4692C9.45 10.2892 9.66 10.1992 9.9 10.1992H20.1C20.34 10.1992 20.55 10.2892 20.73 10.4692C20.91 10.6492 21 10.8592 21 11.0992V18.8992C21 19.1392 20.91 19.3492 20.73 19.5292C20.55 19.7092 20.34 19.7992 20.1 19.7992H9.9ZM15 15.2692L20.1 11.9242V11.0992L15 14.3692L9.9 11.0992V11.9242L15 15.2692Z"
                                    fill="#F1EB77" />
                            </svg>
                            <p class="para2">admin@obtechenterprise.com</p>
                        </div>
                        <div class="d-flex doo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <circle cx="15" cy="15" r="14.5" stroke="#F1EB77" />
                                <path
                                    d="M19.2031 19.7992C18.1187 19.7992 17.0409 19.5326 15.9698 18.9992C14.8987 18.4659 13.9365 17.7726 13.0831 16.9192C12.2298 16.0659 11.5365 15.1037 11.0031 14.0326C10.4698 12.9614 10.2031 11.8837 10.2031 10.7992C10.2031 10.6303 10.2609 10.4881 10.3765 10.3726C10.492 10.257 10.6342 10.1992 10.8031 10.1992H12.6698C12.7942 10.1992 12.9031 10.2414 12.9965 10.3259C13.0898 10.4103 13.1498 10.5237 13.1765 10.6659L13.5365 12.3459C13.5542 12.4703 13.552 12.5837 13.5298 12.6859C13.5076 12.7881 13.4609 12.8748 13.3898 12.9459L12.0565 14.2926C12.5542 15.1192 13.112 15.8392 13.7298 16.4526C14.3476 17.0659 15.0476 17.5859 15.8298 18.0126L17.0965 16.7059C17.1853 16.6081 17.2876 16.5392 17.4031 16.4992C17.5187 16.4592 17.6342 16.4526 17.7498 16.4792L19.3365 16.8259C19.4698 16.8526 19.5809 16.9192 19.6698 17.0259C19.7587 17.1326 19.8031 17.257 19.8031 17.3992V19.1992C19.8031 19.3681 19.7453 19.5103 19.6298 19.6259C19.5142 19.7414 19.372 19.7992 19.2031 19.7992Z"
                                    fill="#F1EB77" />
                            </svg>
                            <p class="para2">813-847-5021</p>
                        </div>
                    </div>
                    <div class="d-flex icon_group">
                        <a target="_blank" href="https://www.facebook.com/obtechenterprise"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M12.7676 19.6011C12.7676 17.1598 12.7676 14.7186 12.7676 12.2335C13.4864 12.2335 14.1989 12.2335 14.9176 12.2335C15.0301 11.3759 15.1364 10.5684 15.2426 9.72336C14.4176 9.72336 13.6051 9.72336 12.8176 9.72336C12.8176 8.99723 12.7801 8.30241 12.8301 7.61385C12.8614 7.21323 13.1926 6.96284 13.6176 6.94406C14.1676 6.91902 14.7176 6.9378 15.3114 6.9378C15.3114 6.18664 15.3176 5.49182 15.3051 4.797C15.3051 4.74692 15.2114 4.64676 15.1614 4.64676C14.1801 4.60921 13.1926 4.42768 12.2176 4.74066C11.0989 5.10372 10.4301 5.89244 10.2676 7.0317C10.1551 7.8392 10.1989 8.67173 10.1739 9.49175C10.1739 9.55435 10.1676 9.61068 10.1551 9.7171C9.5739 9.7171 9.00515 9.7171 8.4364 9.7171C8.01765 9.7171 8.01765 9.7171 8.01765 10.1428C8.01765 10.8188 8.01765 11.4948 8.01765 12.221C8.74265 12.221 9.44265 12.221 10.1614 12.221C10.1614 14.8438 10.1614 17.4165 10.1614 19.983C6.33015 20.2459 1.15515 17.4666 0.155148 11.7327C-0.832352 6.09901 3.0114 1.02242 8.3489 0.139804C14.0739 -0.805406 19.0364 3.16322 19.8676 8.39005C20.7989 14.2679 16.6739 18.6622 12.7676 19.6011Z"
                                    fill="white" />
                            </svg></a>
                        <a target="_blank" href="https://www.linkedin.com/company/obtechenterprise"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M15.8516 19.9687C15.8516 18.9284 15.8594 17.9116 15.8516 16.8948C15.8359 15.307 15.8594 13.7113 15.7734 12.1235C15.6641 10.0039 14.1016 9.65189 12.6641 10.129C11.9609 10.3637 11.5938 10.9346 11.4141 11.623C11.3203 11.9984 11.25 12.3895 11.25 12.7806C11.2344 15.0254 11.2344 17.2624 11.2344 19.5072C11.2344 19.6636 11.2344 19.8122 11.2344 19.9921C9.84375 19.9921 8.48438 19.9921 7.10156 19.9921C7.10156 15.5494 7.10156 11.1302 7.10156 6.67184C8.40625 6.67184 9.70312 6.67184 11.0469 6.67184C11.0469 7.25064 11.0469 7.8138 11.0469 8.40825C11.3984 8.03281 11.6875 7.65737 12.0391 7.36014C13.1328 6.43719 14.4297 6.18689 15.8047 6.37461C16.4766 6.46847 17.1562 6.64837 17.7656 6.93777C18.8672 7.454 19.4219 8.45518 19.6719 9.60496C19.8438 10.4028 19.9609 11.224 19.9766 12.0375C20.0156 14.603 19.9922 17.1763 19.9922 19.7418C19.9922 19.8044 19.9844 19.8748 19.9766 19.9687C18.6172 19.9687 17.2578 19.9687 15.8516 19.9687Z"
                                    fill="white" />
                                <path
                                    d="M0.34375 6.66406C1.71875 6.66406 3.05469 6.66406 4.42969 6.66406C4.42969 11.1068 4.42969 15.5417 4.42969 20C3.07031 20 1.72656 20 0.34375 20C0.34375 15.5651 0.34375 11.1302 0.34375 6.66406Z"
                                    fill="white" />
                                <path
                                    d="M4.78129 2.40907C4.77348 3.73876 3.69535 4.84161 2.39848 4.84943C1.08598 4.84161 -0.0077709 3.71529 4.15953e-05 2.36996C0.0078541 1.06375 1.08598 0 2.39067 0C3.73442 0 4.7891 1.06375 4.78129 2.40907Z"
                                    fill="white" />
                            </svg></a>
                        <a target="_blank" href="https://twitter.com/account/access"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M5.82374 15.1258C4.79883 14.8023 3.84267 14.4069 2.99275 13.7383C2.63653 13.4579 2.29282 13.1344 1.98034 12.7894C1.57413 12.3436 1.71162 11.7685 2.25532 11.5816C2.42405 11.5241 2.59279 11.4738 2.82402 11.3947C2.69278 11.294 2.60529 11.2221 2.51779 11.1574C1.11793 10.2372 0.299252 8.85694 0.0117789 7.04529C-0.0694635 6.54206 0.280504 6.15385 0.724212 6.2473C0.936692 6.29044 1.13667 6.36952 1.3929 6.4486C1.30541 6.17541 1.22417 5.95255 1.16167 5.71531C0.780457 4.32063 0.880448 2.98346 1.57413 1.73257C1.93035 1.08555 2.4303 1.09274 2.76152 1.76132C3.83017 3.91804 5.32378 5.50683 7.35484 6.39827C8.05478 6.7074 8.77346 6.9087 9.49839 6.9734C9.56713 6.32638 9.57963 5.70093 9.71087 5.10424C10.1483 3.16319 11.1295 1.74694 12.8481 1.13587C13.8292 0.783609 14.7979 0.869878 15.7353 1.34436C15.9415 1.45219 16.0978 1.43063 16.2853 1.32279C16.9789 0.920201 17.6851 0.53918 18.3788 0.136592C18.66 -0.0287563 18.935 -0.0790798 19.185 0.186916C19.4037 0.409777 19.4162 0.726096 19.2412 1.14306C18.96 1.80446 18.6725 2.46585 18.3663 3.18476C18.7038 3.156 18.985 3.12725 19.2725 3.09849C19.5412 3.06973 19.7787 3.14881 19.9162 3.42919C20.0662 3.72394 19.9974 3.99712 19.8474 4.27031C19.6099 4.69446 19.36 5.11143 19.16 5.54996C19.06 5.76564 19.0038 6.0532 19.0288 6.28325C19.4537 9.84184 18.685 13.005 16.7352 15.8088C15.1604 18.0661 13.1168 19.3314 10.6545 19.7843C9.02969 20.0791 7.40484 20.0647 5.77999 19.7843C4.36762 19.5399 2.99275 19.1589 1.69912 18.4472C1.36165 18.2674 1.04918 18.023 0.74921 17.7642C0.442989 17.5054 0.349247 17.1675 0.461737 16.8584C0.599224 16.4989 0.874198 16.4342 1.18667 16.4198C2.00534 16.3767 2.83027 16.3623 3.64269 16.2473C4.43012 16.1395 5.14255 15.7441 5.82374 15.1258ZM3.5052 17.7786C3.49895 17.7786 3.5677 17.8145 3.63019 17.8361C4.82383 18.2674 6.04871 18.5119 7.2986 18.5909C9.06093 18.7132 10.7858 18.5406 12.4544 17.8217C14.2229 17.0597 15.5041 15.6219 16.4977 13.8246C17.6539 11.7469 18.1288 9.4752 17.8851 7.01653C17.8039 6.20417 17.6351 5.37743 18.1976 4.6729C18.2038 4.65852 18.1976 4.62976 18.1913 4.57944C17.9976 4.60101 17.7976 4.61538 17.6039 4.64414C17.3227 4.69446 17.0602 4.6729 16.8727 4.38533C16.679 4.09058 16.7477 3.81021 16.879 3.51546C17.0602 3.10568 17.2352 2.68871 17.4476 2.19267C17.0539 2.41553 16.7227 2.57369 16.4102 2.77498C16.0978 2.97628 15.8291 2.93314 15.5041 2.7606C15.0854 2.54493 14.6292 2.34364 14.1792 2.31488C12.4856 2.19986 11.2732 3.63048 10.8795 5.29116C10.7108 5.99569 10.717 6.7074 10.8045 7.42631C10.892 8.13803 10.6545 8.43997 10.0546 8.39684C9.61713 8.36808 9.17967 8.33213 8.75471 8.24586C6.12371 7.69231 4.0114 6.1826 2.4303 3.70956C2.37406 3.62329 2.31156 3.54421 2.20532 3.40762C2.01159 4.6729 2.27407 5.71531 2.949 6.62114C3.13649 6.87275 3.26147 7.13156 3.13024 7.46945C2.999 7.79295 2.75527 7.90079 2.4678 7.90798C2.14908 7.91517 1.83036 7.90798 1.4054 7.90798C1.67412 8.34651 1.86786 8.72753 2.11783 9.05104C2.70528 9.82027 3.46771 10.266 4.31138 10.5536C4.6176 10.6542 4.88632 10.7908 4.93007 11.2006C4.97381 11.6175 4.73009 11.826 4.45511 11.9986C4.17389 12.1783 3.89267 12.3508 3.59269 12.5377C3.66769 12.6024 3.73018 12.66 3.79892 12.7103C4.82383 13.4364 5.95497 13.803 7.13611 14.0115C7.38609 14.0546 7.57357 14.1984 7.64856 14.4644C7.72356 14.7304 7.67981 14.982 7.50483 15.1977C6.92988 15.9022 6.31744 16.5564 5.54251 16.9446C4.87382 17.2825 4.16139 17.5198 3.5052 17.7786Z"
                                    fill="white" />
                            </svg></a>
                    </div>

                </div>
                <div class="col-lg-7 col_2">
                    <div class="col-lg-12">
                        <h2>Feel free to get in touch contact with us.</h2>
                    </div>
                    <div class="col-lg-12 d-flex flex-column form_section">
                        <form action="" class="d-flex">
                            <div class="col-lg-6 col-md-6">
                                <label htmlFor="First_Name" class="single_label">
                                    <div>
                                        <span>First Name*</span>

                                    </div>
                                </label>
                                <div class="boo">
                                    <input type="text" name="" id="First_Name" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 ">
                                <label htmlFor="Last_Name" class="single_label">
                                    <div>
                                        <span>Last Name*</span>

                                    </div>
                                </label>
                                <div class="boo">
                                    <input type="text" id="Last_Name" />
                                </div>

                            </div>
                        </form>
                        <form action="" class="d-flex">
                            <div class="col-lg-6 col-md-6 ">
                                <label htmlFor="Email" class="single_label">
                                    <div>
                                        <span>Email</span>

                                    </div>
                                </label>
                                <div class="boo">
                                    <input type="email" name="" id="Email" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label htmlFor="Phone_Number" class="single_label">
                                    <div>
                                        <span>Phone Number*</span>

                                    </div>
                                </label>
                                <div class="boo">
                                    <input type="number" id="Phone_Number" />
                                </div>

                            </div>
                        </form>
                        <form action="" class="d-flex">
                            <div class="col-lg-12 ">
                                <label htmlFor="Message" class="single_label">
                                    <div>
                                        <span>Message</span>

                                    </div>
                                </label>
                                <div class="boo1">
                                    <input type="text" id="Message" placeholder="Write your message.." />
                                </div>

                            </div>
                        </form>
                    </div>
                    <div>
                        <button>
                            <span>Sumbit</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <path d="M8 16L6.575 14.6L12.175 9H0V7H12.175L6.575 1.4L8 0L16 8L8 16Z" fill="white" />
                            </svg>
                            <span class="sideImg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 28 24"
                                    fill="none">
                                    <path
                                        d="M27.0833 0.99372C0.565566 -4.48863 -1.57519 14.0469 0.669151 24H27.0833V0.99372Z"
                                        fill="#F3EF79" />
                                </svg>
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php 
      include 'common/footer.php';
    ?>
    <script>
    let barming = document.getElementById("barming");
    let nani = document.getElementById("nani");
    barming.addEventListener("click", () => {
        console.log("hi");
        nani.classList.toggle("nani1");
    });

    document.getElementById("blo").classList.add("ind1");


    document.getElementById("See").addEventListener("click", () => {
        document.getElementById("displayadd").classList.add("surbhi");
        document.getElementById("See").style.display = "none";
    })
    </script>

</body>

</html>