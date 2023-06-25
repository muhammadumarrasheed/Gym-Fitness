<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        font-family: Poppins, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        gap: 30px;
        position: relative;
        flex-wrap: wrap;
    }

    .box {
        width: 300px;
        height: 500px;
        background-color: #f5f8fa;
        color: #14171a;
        margin: 5px;
        display: none;
        border-radius: 10px;
        opacity: 0;
        animation: fadeIn 0.5s ease-in forwards;
        padding: 10px;
    }

    .visible {
        display: block;
    }

    .box img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        float: left;
        margin-right: 10px;
    }

    .box .content {
        overflow: hidden;
    }

    .box strong {
        font-size: 18px;
        margin-top: 0;
    }

    .box .username {
        font-size: 14px;
        color: #657786;
    }

    .box .location {
        font-size: 14px;
        color: #657786;
    }

    .box p {
        margin-top: 10px;
        font-size: 14px;
    }

    .controls {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 10px;
        width: 100% auto;
    }

    .controls button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 24px;
        color: #3498db;
    }

    .controls button:focus {
        outline: none;
    }

    .controls button.disabled {
        cursor: default;
        color: #ccc;
    }

    .controls button.disabled:hover {
        color: #ccc;
    }

    .controls .prev {
        margin-right: 10px;
    }

    .controls .next {
        margin-left: 1200px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Media Queries */

    /* For screens with a maximum width of 768px */
    @media only screen and (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: stretch;
            gap: 20px;
        }

        .box {
            width: 100%;
        }

        .controls {
            position: static;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .controls button {
            font-size: 20px;
        }
    }

    /* For screens with a maximum width of 480px */
    @media only screen and (max-width: 480px) {
        .box {
            height: auto;
        }

        .box img {
            width: 100%;
            height: auto;
            margin: 0;
            margin-bottom: 10px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="prev">
            <button class="prev" onclick="showPrev()">&#8249;</button>
        </div>

        <div class="box visible">
            <img src="trainer-images/dar.jpg" alt="">
            <div class="content">
                <strong>Muhammad Umar</strong>
                <div class="username">@muhammadumar</div>
                <div class="location">London, UK</div>
                <p>A lot of people have fancy things to say about but it’s just a day-in, day-out, ongoing,
                    never-ending, persevering, compassionate kind of activity.</p>
            </div>
        </div>
        <div class="box visible">
            <img src="trainer-images/dar.jpg" alt="">
            <div class="content">
                <strong>Muhammad Umar</strong>
                <div class="username">@muhammadumar</div>
                <div class="location">London, UK</div>
                <p>A lot of people have fancy things to say about but it’s just a day-in, day-out, ongoing,
                    never-ending,
                    persevering, compassionate kind of activity.</p>
            </div>
        </div>
        <div class="box">
            <img src="trainer-images/dar.jpg" alt="">
            <div class="content">
                <strong>Muhammad Umar</strong>
                <div class="username">@muhammadumar</div>
                <div class="location">London, UK</div>
                <p>A lot of people have fancy things to say about but it’s just a day-in, day-out, ongoing,
                    never-ending,
                    persevering, compassionate kind of activity.</p>
            </div>
        </div>
        <div class="box">
            <img src="trainer-images/dar.jpg" alt="">
            <div class="content">
                <strong>Muhammad Umar</strong>
                <div class="username">@muhammadumar</div>
                <div class="location">London, UK</div>
                <p>A lot of people have fancy things to say about but it’s just a day-in, day-out, ongoing,
                    never-ending,
                    persevering, compassionate kind of activity.</p>
            </div>
        </div>
        <div class="box">
            <img src="trainer-images/dar.jpg" alt="">
            <div class="content">
                <strong>Muhammad Umar</strong>
                <div class="username">@muhammadumar</div>
                <div class="location">London, UK</div>
                <p>A lot of people have fancy things to say about but it’s just a day-in, day-out, ongoing,
                    never-ending,
                    persevering, compassionate kind of activity.</p>
            </div>
        </div>
        <div class="box">
            <img src="trainer-images/dar.jpg" alt="">
            <div class="content">
                <strong>Muhammad Umar</strong>
                <div class="username">@muhammadumar</div>
                <div class="location">London, UK</div>
                <p>A lot of people have fancy things to say about but it’s just a day-in, day-out, ongoing,
                    never-ending,
                    persevering, compassionate kind of activity.</p>
            </div>
        </div>
        <div class="next">
            <button class="next" onclick="showNext()">&#8250;</button>
        </div>

    </div>

    <script>
    var currentDivIndex = 0;
    var divs = document.querySelectorAll('.box');
    var prevButton = document.querySelector('.prev');
    var nextButton = document.querySelector('.next');

    function showDivs() {
        for (var i = 0; i < divs.length; i++) {
            divs[i].classList.remove('visible');
        }

        for (var i = currentDivIndex; i < currentDivIndex + 2; i++) {
            if (divs[i]) {
                divs[i].classList.add('visible');
            }
        }

        // Enable/disable prev and next buttons based on the current index
        if (currentDivIndex === 0) {
            prevButton.disabled = true;
        } else {
            prevButton.disabled = false;
        }

        if (currentDivIndex + 2 >= divs.length) {
            nextButton.disabled = true;
        } else {
            nextButton.disabled = false;
        }
    }

    function showNext() {
        if (currentDivIndex + 2 < divs.length) {
            currentDivIndex++;
            showDivs();
        }
    }

    function showPrev() {
        if (currentDivIndex > 0) {
            currentDivIndex--;
            showDivs();
        }
    }

    showDivs();
    </script>
</body>

</html>