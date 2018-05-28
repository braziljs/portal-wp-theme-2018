<style>
    .wrapper--anim {
        top: -30px;
        left: -3px;
        width: 100%;
        height: 135px;
        position: absolute;
    }
</style>
<style>
    .logo-container {
        height: 100%;
        color: var(--color-primary);
        font-size: 5px;
        fill: var(--color-primary);
        transition: all ease-in-out .5s;
    }
    .logo-container>* * {
        pointer-events: none;
    }
    .logo-container * {
        /* background-color: inherit; */
        background-color: var(--color-primary);
        color: inherit;
        fill: inherit;
        position: relative;
        transition: all ease-in-out .5s;
    }
    .logo-brazil {
        position: absolute;
        background-color: var(--transparent);
        width: 7em;
        height: 7em;
        top: 0;
        left: 50%;
        transform: translate(0, 1em);
    }
    .logo-j,
    .logo-s {
        position: absolute;
        background-color: var(--transparent);
        width: 8em;
        height: 8em;
        left: 50%;
    }
    .logo-j {
        top: 7em;
    }
    .logo-j-j {
        position: absolute;
        left: 0;
        bottom: 3em;
        width: 100%;
        height: 2em;
        transition: all ease-in-out .5s;
    }
    .logo-j-j:before,
    .logo-j-j:after {
        content: '';
        position: absolute;
        background: inherit;
        bottom: 0;
        width: 2em;
        height: 0;
        transition: all ease-in-out .5s;
    }
    .logo-j-j:before {
        left: 0;
        height: 3em;
        transition: all ease-in-out .5s;
    }
    .logo-j-j:after {
        right: 0;
        height: 6em;
        transition: all ease-in-out .5s;
    }
    .logo-dash {
        background-color: var(--color-secondary);
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2em;
    }
    .logo-s {
        top: 16em;
    }
    .logo-j .logo-fx,
    .logo-j .logo-fx:before,
    .logo-j .logo-fx:after {
        position: absolute;
        width: 2em;
        height: 0;
        bottom: 0;
        left: 2em;
        transition: all ease-in-out .5s;
    }

    .theme-1 {}
    .theme-2 {
        /* transform: translateX(-50%); */
    }
    
    .theme-2 .logo-brazil {
        width: 11em;
        height: 11em;
        left: 0;
    }
    .theme-2 .logo-j {
        left: 9em;
        top: 6.3em;
    }
    .theme-2 .logo-j-j:after {
        height: 5em;
        transition: all ease-in-out .5s;
    }
    .theme-2 .logo-s {
        left: 18em;
        top: 6.3em;
    }
    .theme-3 .logo-brazil{
        width: 8em;
        transform: rotate(-90deg) translate(-20em, -8em);
    }
    .theme-4 .logo-j .logo-fx {
        position: absolute;
        bottom: 0;
        left: -2em;
        height: 2em;
        width: 10em;
    }
    .theme-4 .logo-j .logo-fx:before,
    .theme-4 .logo-j .logo-fx:after {
        content: '';
        position: absolute;
        bottom: 1em;
        width: 1.7em;
    }
    .theme-4 .logo-j .logo-fx:before {
        background: inherit;
        height: 3em;
        left: 4.2em;
    }
    .theme-4 .logo-j .logo-fx:after {
        background: inherit;
        height: 3em;
        left: 6.1em;
    }
    .theme-4 .logo-j-j {
        bottom: 0;
        transition: all ease-in-out .5s;
    }
    .theme-4 .logo-j-j:before {
        height: 6em;
        transition: all ease-in-out .5s;
    }
    .theme-4 .logo-j-j:after {
        height: 5em;
        transition: all ease-in-out .5s;
    }
    .theme-4 .logo-s {
        height: 0;
    }
</style>

<div class="wrapper--anim">
    <div class="logo-container theme-2">
        <svg class="logo-brazil" version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="618.000000pt" height="436.000000pt" viewBox="0 0 618.000000 436.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,436.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M293 3773 c-43 -2 -76 -9 -82 -17 -8 -9 -10 -231 -9 -762 l3 -749
                370 -7 c204 -4 393 -12 420 -17 28 -6 197 -16 377 -23 256 -9 330 -9 341 1 33
                26 50 112 55 274 4 135 2 160 -11 175 -15 16 -17 79 -19 560 -2 427 -6 544
                -16 554 -10 10 -148 13 -685 14 -370 0 -704 -1 -744 -3z m955 -540 l3 -63
                -270 0 c-148 0 -276 3 -285 6 -12 5 -16 20 -16 58 0 29 3 56 7 59 4 4 131 6
                282 5 l276 -3 3 -62z m0 -521 l3 -132 -286 0 -286 0 3 128 3 127 265 5 c146 3
                272 5 280 5 12 0 15 -23 18 -133z"/>
                <path d="M4555 3770 c-262 -5 -281 -6 -301 -25 -11 -11 -29 -25 -40 -31 -18
                -11 -19 -32 -18 -727 1 -559 4 -720 14 -732 18 -21 326 -22 356 -1 17 13 19
                30 22 175 l4 161 331 -2 332 -3 5 -135 c8 -207 11 -210 211 -210 145 0 183 6
                201 34 4 6 8 77 8 158 0 146 0 147 27 172 l26 25 -6 178 c-5 142 -10 180 -22
                189 -13 10 -15 56 -15 325 0 355 -3 387 -35 399 -12 5 -25 17 -27 28 -3 12
                -18 21 -38 25 -35 8 -584 6 -1035 -3z m690 -540 l0 -155 -270 -6 c-149 -3
                -296 -9 -328 -13 l-57 -7 0 170 0 171 328 -2 327 -3 0 -155z"/>
                <path d="M2220 3738 c-20 -22 -20 -27 -18 -736 l3 -714 28 -24 c27 -23 33 -24
                201 -24 149 0 175 2 187 17 11 12 15 62 17 200 l3 183 97 0 c53 0 115 -5 137
                -11 22 -6 63 -14 90 -19 69 -11 85 -19 85 -41 0 -10 9 -24 20 -31 11 -7 25
                -30 30 -50 7 -22 18 -39 30 -43 11 -4 20 -15 20 -25 0 -10 11 -32 25 -48 14
                -17 25 -35 25 -42 0 -7 17 -30 39 -51 l39 -39 195 0 c161 0 197 3 207 15 18
                22 6 95 -18 114 -11 9 -23 27 -27 41 -4 14 -18 38 -31 53 -13 16 -24 35 -24
                42 0 8 -9 16 -19 20 -19 6 -38 66 -26 85 3 6 30 10 59 10 39 0 62 6 87 23 l34
                23 8 139 c4 77 6 308 4 514 -4 366 -5 375 -25 392 -16 13 -51 18 -154 23 -258
                13 -786 26 -1045 26 -258 0 -263 0 -283 -22z m1076 -406 c20 -14 56 -226 47
                -277 l-5 -25 -286 0 c-163 0 -313 5 -349 11 l-63 11 0 144 0 144 323 0 c177 0
                327 -4 333 -8z"/>
                <path d="M235 1673 c-11 -3 -23 -10 -27 -17 -4 -6 -8 -88 -8 -183 0 -165 1
                -173 23 -198 l23 -27 304 -7 c248 -6 300 -9 277 -19 -15 -6 -27 -18 -27 -27 0
                -9 -11 -20 -25 -25 -14 -5 -25 -16 -25 -25 0 -9 -11 -20 -25 -25 -14 -5 -25
                -16 -25 -25 0 -9 -11 -20 -25 -25 -14 -5 -25 -16 -25 -25 0 -9 -11 -20 -25
                -25 -14 -5 -25 -16 -25 -25 0 -9 -11 -20 -25 -25 -14 -5 -25 -16 -25 -25 0 -9
                -11 -20 -25 -25 -14 -5 -25 -16 -25 -25 0 -9 -11 -20 -25 -25 -14 -5 -25 -16
                -25 -25 0 -9 -11 -20 -25 -25 -14 -5 -25 -16 -25 -25 0 -9 -11 -20 -25 -25
                -14 -5 -25 -16 -25 -25 0 -9 -11 -20 -25 -25 -14 -5 -25 -16 -25 -25 0 -9 -11
                -20 -25 -25 -14 -5 -25 -16 -25 -24 0 -7 -11 -21 -25 -30 l-25 -17 2 -201 3
                -202 30 -6 c47 -9 1421 1 1436 11 11 7 14 47 14 195 0 183 0 186 -24 205 -22
                18 -44 19 -417 19 -351 0 -449 6 -383 23 11 3 23 15 26 26 3 12 12 21 19 21 8
                0 14 9 14 20 0 15 8 22 29 26 17 4 33 16 40 30 6 13 17 24 24 24 8 0 19 11 25
                25 6 14 18 25 25 25 8 0 19 11 25 25 6 14 18 25 26 25 8 0 17 9 21 19 3 11 15
                23 25 26 10 3 22 14 25 24 3 10 17 23 30 29 14 6 25 18 25 25 0 8 11 19 25 25
                14 6 25 18 25 25 0 8 11 19 25 25 14 6 25 18 25 25 0 8 11 19 25 25 14 6 25
                18 25 25 0 8 11 19 25 25 14 6 25 18 25 26 0 18 31 26 112 26 132 0 141 17
                136 261 -2 129 -6 162 -18 169 -15 10 -1397 12 -1435 3z"/>
                <path d="M2172 1670 l-22 -9 2 -733 3 -733 214 -3 c179 -2 218 0 237 13 l24
                15 0 714 c0 651 -1 715 -17 727 -19 17 -404 24 -441 9z"/>
                <path d="M3083 1668 c-12 -6 -24 -20 -27 -32 -3 -11 -6 -334 -6 -717 0 -662 1
                -697 18 -712 17 -16 84 -17 754 -17 672 0 737 1 749 17 19 23 20 336 1 355
                -10 10 -116 14 -497 16 l-485 3 0 530 c0 346 -4 537 -10 550 -10 18 -23 19
                -243 18 -140 0 -241 -5 -254 -11z"/>
                </g>
                </svg>
        
        <div class="logo-j">
            <div class="logo-j-j"></div>
            <div class="logo-dash"></div>
            <div class="logo-fx"></div>
        </div>
        <svg class="logo-s" version="1.0" xmlns="http://www.w3.org/2000/svg"
            width="369.000000pt" height="359.000000pt" viewBox="0 0 369.000000 359.000000"
            preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,359.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M47 3575 c-4 -9 -7 -218 -7 -463 l0 -447 41 -35 c22 -19 51 -45 64
            -57 12 -13 27 -23 33 -23 6 0 15 -6 19 -13 4 -8 22 -22 38 -32 17 -10 40 -28
            52 -39 13 -12 37 -32 53 -46 17 -14 41 -35 54 -47 13 -13 28 -23 34 -23 6 0
            15 -6 19 -13 4 -7 24 -24 43 -37 19 -14 43 -32 52 -40 10 -8 31 -26 48 -40 17
            -14 43 -36 60 -50 38 -33 49 -41 90 -70 19 -14 43 -32 52 -40 10 -8 31 -26 48
            -40 39 -32 89 -75 117 -100 12 -11 26 -20 30 -20 5 0 24 -13 43 -30 19 -16 47
            -40 63 -52 35 -29 86 -73 114 -98 12 -11 26 -20 30 -20 5 0 24 -13 43 -30 19
            -16 46 -39 60 -50 34 -28 90 -76 117 -100 12 -11 26 -20 30 -20 5 0 24 -13 43
            -30 19 -16 46 -39 60 -50 44 -37 94 -81 115 -101 12 -10 25 -19 31 -19 5 0 25
            -13 44 -30 19 -16 46 -39 60 -50 44 -37 94 -81 115 -101 12 -10 25 -19 31 -19
            5 0 25 -13 44 -30 19 -16 46 -39 60 -50 26 -22 80 -68 115 -98 11 -10 32 -24
            48 -32 15 -7 27 -17 27 -21 0 -5 14 -15 30 -24 34 -17 38 -36 13 -56 -12 -11
            -77 -16 -267 -21 -138 -4 -303 -11 -366 -17 -133 -11 -770 -14 -785 -3 -6 4
            -21 21 -33 38 -21 31 -22 38 -24 460 l-3 429 -400 0 -400 0 -7 -395 c-3 -230
            -11 -424 -18 -465 -7 -40 -14 -216 -17 -413 l-5 -343 33 -30 33 -29 1705 0
            c1466 0 1720 2 1806 15 54 8 102 18 106 23 4 4 3 180 -3 391 l-10 385 -30 28
            c-17 15 -34 28 -38 28 -4 0 -14 7 -21 17 -8 9 -26 24 -41 33 -27 16 -107 82
            -155 128 -13 12 -28 22 -32 22 -5 0 -15 7 -22 17 -8 9 -26 24 -41 33 -27 16
            -107 82 -155 128 -13 12 -27 22 -31 22 -4 0 -18 10 -32 23 -14 13 -33 27 -42
            33 -16 9 -102 81 -145 122 -13 12 -27 22 -31 22 -4 0 -22 14 -41 30 -18 17
            -37 30 -41 30 -4 0 -20 12 -37 28 -63 58 -126 112 -132 112 -3 0 -21 14 -40
            30 -18 17 -37 30 -41 30 -4 0 -20 12 -37 28 -63 58 -126 112 -132 112 -3 0
            -21 14 -40 30 -18 17 -37 30 -41 30 -4 0 -20 12 -37 28 -64 59 -126 112 -132
            112 -11 0 -162 123 -219 178 -12 12 -26 22 -30 22 -12 0 -160 120 -220 178
            -12 12 -26 22 -29 22 -11 0 -93 65 -139 110 -82 81 -80 78 -61 98 16 16 67 17
            717 17 560 0 702 -3 712 -13 10 -10 14 -104 16 -427 l3 -413 112 -6 c62 -3
            236 -8 387 -12 270 -5 276 -5 294 15 11 13 20 40 22 68 8 116 11 1602 3 1614
            -6 11 -57 15 -236 20 -125 4 -271 12 -323 17 -59 7 -583 13 -1395 17 -715 3
            -1381 8 -1481 11 -164 6 -182 5 -187 -11z"/>
            </g>
        </svg>
    </div>
</div>

<!-- <script>
    $(function () {
        setTimeout(function () {
            var elm = $('.nav-logo');

            const defaultTheme = 'theme-2';
            const primaryTheme = 'theme-3';

            var elm = $('.logo-container');

            if (elm.hasClass(defaultTheme)) {
                elm.removeClass(defaultTheme);
                elm.addClass(primaryTheme);
            } else {
                elm.addClass(defaultTheme);
                elm.removeClass(primaryTheme);
            }
        }, 1000)
    });
</script> -->