<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------------------------------Icon Adder------------------------------ -->

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- ----------------------------CSS Adder----------------------------------- -->

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/Heading.css">
    <link rel="stylesheet" href="../CSS/SubHome.css">
    <title>TubeAcademy</title>
</head>

<body>
    <?php include '../SubComponent/Navbar.php';
    include '../SubComponent/Heading.php'; ?>

    <!-- ----------------------------------Slider------------------------------ -->

    <div class="slider">


        <div class="list">

            <div class="item">
                <img src="https://i.ytimg.com/vi/bmzDsWMSCTk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLClOmCpbzXugBWoK73fzhIpwlFqxg" alt="">

                <div class="content">
                    <div class="title">Matter in Our Surroundings Complete Chapter🔥| CLASS 9th Science| NCERT covered| Prashant Kirad</div>
                    <div class="type">CHEMISTRY</div>

                    <div class="button">
                        <button>Video Link</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/1o7IuDldhRQ/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDuT3Fu1X9e9_9sZ9KtFQmx2dj2Mg" alt="">

                <div class="content">
                    <div class="title">Control And Coordination Complete Chapter🔥| CLASS 10 Science | NCERT Covered| Prashant Kirad</div>
                    <div class="type">BIOLOGY</div>
                    <div class="button">
                        <button>Video Link</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/doVx4CNy9pQ/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAdE9AYdvWEFBzlDwjNmlSHmjLEXg" alt="">

                <div class="content">
                    <div class="title">Thermodynamics - Playlist | Class 11 | Unacademy NEET</div>
                    <div class="type">PHYSICS</div>
                    <div class="button">
                        <button>Video Link</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="https://i.ytimg.com/vi/tQxk5IX9S_8/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDvCYjOHuY_O3g1UOYrg6ejDKOV5A" alt="">

                <div class="content">
                    <div class="title">Limits, Continuity & Differentiability - Playlist | Class 12</div>
                    <div class="type">MATHS</div>
                    <div class="button">
                        <button>VIDEO LINK</button>
                    </div>
                </div>
            </div>

        </div>


        <div class="thumbnail">

            <div class="item">
                <img src="https://i.ytimg.com/vi/bmzDsWMSCTk/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLClOmCpbzXugBWoK73fzhIpwlFqxg" alt="">
            </div>
            <div class="item">
                <img src="https://i.ytimg.com/vi/1o7IuDldhRQ/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDuT3Fu1X9e9_9sZ9KtFQmx2dj2Mg" alt="">
            </div>
            <div class="item">
                <img src="https://i.ytimg.com/vi/doVx4CNy9pQ/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAdE9AYdvWEFBzlDwjNmlSHmjLEXg" alt="">
            </div>
            <div class="item">
                <img src="https://i.ytimg.com/vi/tQxk5IX9S_8/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDvCYjOHuY_O3g1UOYrg6ejDKOV5A" alt="">
            </div>

        </div>


        <div class="nextPrevArrows">
            <button class="prev">
                < </button>
                    <button class="next"> > </button>
        </div>


    </div>

    <div class="SH-HomeContainer">
        <?php include "../SubComponent/SubHome.php" ?>
    </div>

    <script src="../Functionality/Home.js"></script>
</body>

</html>