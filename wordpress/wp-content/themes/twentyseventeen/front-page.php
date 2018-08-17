<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/png" href="http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/images/favicon.ico" />
    <link rel="icon" type="image/png" href="http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/images/favicon-16x16.png" sizes="16x16" />

    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,500,600,700,800" rel="stylesheet" />
    <link href="http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/css/main.min.css" rel="stylesheet" type="text/css" />

    <title>Garth's Brew Bar | Madison, WI</title>

</head>

<body>

    <main class="bg">

        <section class="content-box__outer">

            <div class="content-box">

                <picture class="logo__box">
                    <img class="logo" 
                        srcset="http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/images/gbb_full-logo.png, http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/images/gbb_full-logo_hr.png 2x" 
                        src="http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/images/gbb_full-logo_hr.png" 
                        alt="Garth's Brew Bar | Madison, WI" 
                    />
                </picture>

                <header class="title-copy__container">
                    <h1 class="title-copy__title"><span>Garth's</span><span> </span><span>Brew Bar</span><span> </span><span>is Coming</span></h1>
                    <h2 class="title-copy__subtitle"><span>A bar that respects</span><span> </span><span>the beer and experience</span></h2>
                </header>

                <form method="post" class="e-form__capture-form" id="emailCaptureForm">
                    <!-- Initial Form -->
                    <input class="e-form__input" id="fieldEmail" name="email" placeholder="email@address.com" type="email" required />
                    <button class="e-form__button" id="emailBtn" type="submit"><span>Be the First to Know</span><span>Be the First to Know</span></button>
                    <!-- Loading Form -->
                    <button class="e-form__btn-loading e-form__button" id="emailBtnLoading" disabled>
                        <svg class="e-form__loading-circle" width="28px" height="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 192 192" style="enable-background:new 0 0 192 192;"
                            xml:space="preserve">
                            <style type="text/css">
                                .stcirc {
                                    fill: #3a3a3c;
                                }
                            </style>
                            <path class="stcirc" d="M99.7,62h-7.3c-2.8,0-5-2.2-5-5V17c0-2.7,2.2-5,5-5h7.3c2.8,0,5,2.2,5,5v40C104.7,59.8,102.4,62,99.7,62z"
                            />
                            <path class="stcirc" d="M99.7,180h-7.3c-2.8,0-5-2.2-5-5v-40c0-2.8,2.2-5,5-5h7.3c2.8,0,5,2.2,5,5v40C104.7,177.8,102.4,180,99.7,180z"
                            />
                            <path class="stcirc" d="M116.2,68.4l-6.4-3.7c-2.4-1.4-3.2-4.4-1.8-6.8l20-34.6c1.4-2.4,4.4-3.2,6.8-1.8l6.4,3.7
                            c2.4,1.4,3.2,4.4,1.8,6.8l-20,34.6C121.6,68.9,118.6,69.8,116.2,68.4z" />
                            <path class="stcirc" d="M57.2,170.6l-6.4-3.7c-2.4-1.4-3.2-4.4-1.8-6.8l20-34.6c1.4-2.4,4.4-3.2,6.8-1.8l6.4,3.7
                            c2.4,1.4,3.2,4.4,1.8,6.8l-20,34.6C62.6,171.1,59.6,172,57.2,170.6z" />
                            <path class="stcirc" d="M127.3,82.2l-3.7-6.4c-1.4-2.4-0.6-5.5,1.8-6.8l34.6-20c2.4-1.4,5.5-0.6,6.8,1.8l3.7,6.4
                            c1.4,2.4,0.6,5.5-1.8,6.8l-34.6,20C131.7,85.4,128.7,84.6,127.3,82.2z" />
                            <path class="stcirc" d="M25.1,141.2l-3.7-6.4c-1.4-2.4-0.6-5.5,1.8-6.8l34.6-20c2.4-1.4,5.5-0.6,6.8,1.8l3.7,6.4
                            c1.4,2.4,0.6,5.5-1.8,6.8l-34.6,20C29.5,144.4,26.5,143.5,25.1,141.2z" />
                            <path class="stcirc" d="M130,99.7v-7.3c0-2.8,2.2-5,5-5h40c2.8,0,5,2.2,5,5v7.3c0,2.8-2.2,5-5,5h-40C132.2,104.7,130,102.4,130,99.7z"
                            />
                            <path class="stcirc" d="M12,99.7v-7.3c0-2.8,2.2-5,5-5h40c2.8,0,5,2.2,5,5v7.3c0,2.8-2.2,5-5,5H17C14.2,104.7,12,102.4,12,99.7z"
                            />
                            <path class="stcirc" d="M123.6,116.2l3.7-6.4c1.4-2.4,4.4-3.2,6.8-1.8l34.6,20c2.4,1.4,3.2,4.4,1.8,6.8l-3.7,6.4
                            c-1.4,2.4-4.4,3.2-6.8,1.8l-34.6-20C123.1,121.6,122.2,118.6,123.6,116.2z" />
                            <path class="stcirc" d="M21.4,57.2l3.7-6.4c1.4-2.4,4.4-3.2,6.8-1.8l34.6,20c2.4,1.4,3.2,4.4,1.8,6.8l-3.7,6.4
                            c-1.4,2.4-4.4,3.2-6.8,1.8L23.3,64C20.9,62.6,20,59.6,21.4,57.2z" />
                            <path class="stcirc" d="M109.8,127.3l6.4-3.7c2.4-1.4,5.5-0.6,6.8,1.8l20,34.6c1.4,2.4,0.6,5.5-1.8,6.8l-6.4,3.7
                            c-2.4,1.4-5.5,0.6-6.8-1.8l-20-34.6C106.6,131.7,107.4,128.7,109.8,127.3z" />
                            <path class="stcirc" d="M50.8,25.1l6.4-3.7c2.4-1.4,5.5-0.6,6.8,1.8l20,34.6c1.4,2.4,0.6,5.5-1.8,6.8l-6.4,3.7
                            c-2.4,1.4-5.5,0.6-6.8-1.8L49,31.9C47.6,29.5,48.5,26.5,50.8,25.1z" />
                        </svg>
                    </button>
                    <!-- Success Form -->
                    <button class="e-form__btn-success e-form__button" id="emailFormSuccess" disabled><span>You&#39;re in, Cheers!</span><span>You&#39;re in, Cheers!</span></button>
                </form>

            </div>

        </section>

    </main>

    <script>
        (function () {
            function subscribeSubmitHandler(e) {
                e.stopPropagation();
                e.preventDefault();

                document.getElementById('emailBtn').style.display = 'none';
                document.getElementById('emailBtnLoading').style.display = 'flex';

                var request = new XMLHttpRequest();
                request.open('POST', 'http://www.garthsbrewbar.com/wp-content/themes/twentyseventeen/form/subscribe.php', true);
                request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
                request.onreadystatechange = function () {

                    if (this.readyState === 4) {

                        if (this.status >= 200 && this.status < 400) {
                            // Success!
                            document.getElementById('emailBtnLoading').style.display = 'none';
                            document.getElementById('emailFormSuccess').style.display = 'flex';
                            document.getElementById('fieldEmail').style.opacity = '0';
                            try {} catch (err) {}
                        } else {
                            // Error :(
                            console.log("Hammertime!");
                            document.getElementById('emailBtnLoading').style.display = 'none';
                            document.getElementById('emailBtn').style.display = 'block';
                        }

                    }
                };
                request.send("email=" + document.getElementById('fieldEmail').value);
            }

            var frm = document.getElementById('emailCaptureForm');

            if (frm.addEventListener) {
                frm.addEventListener("submit", subscribeSubmitHandler, false);
            } else if (ele.attachEvent) {
                frm.attachEvent('onsubmit', subscribeSubmitHandler);
            }
        })();
    </script>

</body>

</html>
