<?php
    session_start();

    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['de', 'en'];

    if($_COOKIE['lang'] != null){
      $lang = $_SESSION['lang'];
    }

    $lang = in_array($lang, $acceptLang) ? $lang : 'de';
    require_once "languages/{$lang}.php"; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <style>
        @font-face {
            font-family: 'Gilroy';
            /* Имя шрифта */
            src: url(../fonts/Gilroy-Regular.woff2);
            /* Путь к файлу со шрифтом */
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Gilroy';
            /* Имя шрифта */
            src: url(../fonts/Gilroy-Light.woff2);
            /* Путь к файлу со шрифтом */
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Gilroy';
            /* Имя шрифта */
            src: url(../fonts/Gilroy-Medium.woff2);
            /* Путь к файлу со шрифтом */
            font-weight: 900;
            font-style: normal;
        }

        @font-face {
            font-family: 'Gilroy';
            /* Имя шрифта */
            src: url(../fonts/Gilroy-Bold.woff2);
            /* Путь к файлу со шрифтом */
            font-weight: bold;
            font-style: normal;
        }

        body {
            background-image: url(img/Group807.png);
            margin: 0;
            padding: 0;
            font-family: 'Gilroy';
        }

        .okokshko {
            background: #FFFFFF;
            border: 1px solid #000000;
            box-sizing: border-box;
            border-radius: 2px;
            max-width: 600px;
            padding: 100px 78px 63px;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            top: 30vh;
        }

        h3 {
            font-style: normal;
            font-weight: bold;
            font-size: 35px;
            line-height: 45px;
            text-align: center;
            color: #000000;
            margin: 0 0 40px;
        }

        .link{
            text-decoration: none;
        }

        .link {
            font-style: normal;
            font-weight: bold;
            font-size: 21px;
            line-height: 26px;
            /* identical to box height */

            letter-spacing: 0.1em;
            text-transform: uppercase;

            color: #000000;
        }

        @media screen and (max-width: 1200px) {
            .okokshko {
                padding: 40px 30px 40px;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <?php
                if($lang == 'de'){
                    echo '<div class="okokshko">
                    <h3>Ihre Bestellung wird angenommen. <br>
                        Vielen Dank, dass Sie sich für uns entschieden haben!</h3>
                    <a class="link" href="/">HAUPTSEITE <svg width="54" height="16" viewBox="0 0 54 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <Pfad
                                14.9705C46.2421 15.361 46.8752 15.361 47.2657 14.9705L53.6297 8.60652ZM0.970703 8.89941H52.9226V6.89941H0.970703V8.89941Z
                                fill="schwarz" />
                        </svg>
                    </a>
                </div>';
                }else{
                    echo '<div class="okokshko">
                    <h3>Your order is accepted. <br>
                        Thank you for choosing us!</h3>
                    <a class="link" href="/">MAIN PAGE <svg width="54" height="16" viewBox="0 0 54 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M53.6297 8.60652C54.0202 8.216 54.0202 7.58283 53.6297 7.19231L47.2657 0.828346C46.8752 0.437822 46.2421 0.437822 45.8515 0.828346C45.461 1.21887 45.461 1.85204 45.8515 2.24256L51.5084 7.89941L45.8515 13.5563C45.461 13.9468 45.461 14.58 45.8515 14.9705C46.2421 15.361 46.8752 15.361 47.2657 14.9705L53.6297 8.60652ZM0.970703 8.89941H52.9226V6.89941H0.970703V8.89941Z"
                                fill="black" />
                        </svg>
                    </a>
                </div>';
                }

            ?>
        </div>
    </section>
</body>

</html>