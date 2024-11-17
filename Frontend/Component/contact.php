<?php include '../Functionality/Mailer.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- --------------------------------Icon Adder------------------------------ -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ----------------------------CSS Adder----------------------------------- -->

    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/Contact.css">
    <title>Contact | TubeAcademy</title>
</head>

<body>
    <?php include "../SubComponent/Navbar.php"; ?>
    <div class="C-contact">

        <!-- --------------------Icon and dashcontent--------------------------- -->

        <div class="C-button">
            <div onclick="handleA()" class="C-contacting">
                <span class="material-symbols-outlined" id="C-elu">
                    connect_without_contact
                </span>
                <div class="C-textContact">Contact Us</div>
            </div>
            <div onclick="handleB()" class="C-reachUs">
                <span class="material-symbols-outlined" id="C-elu">
                    rocket_launch
                </span>
                <div class="C-textReach">Reach Us</div>
            </div>
        </div>

        <!-- --------------------------Contact Us Form-------------------------- -->

        <div class="C-formBox">
            <div class="C-a1">Contact Us</div>
            <div class="C-a2">Customer Care: <span class="C-a11">022-69856666</span></div>
            <form method='post' class="C-form">
                <div class="C-a3">
                    <div class="C-a4">
                        <label for="name" class="C-label">Name</label>
                        <input type="text" required name="name" class="C-input" />
                    </div>
                    <div class="C-a4">
                        <label for="email" class="C-label">Email</label>
                        <input type="email" required name="email" class="C-input" />
                    </div>
                </div>
                <label for="message" class="C-label">Message</label>
                <textarea name="message" required class="C-textArea"></textarea>
                <button name="send" class="C-sendButton">Send</button>
                <div id="z"><?php echo $suc ?></div>
                <div id="y"><?php echo $unsuc ?></div>
            </form>
        </div>

        <!-- -----------------------------Reach us Box-------------------------- -->

        <div class="C-reachBox">
            <a href="#" class="C-b1 C-instaa">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="C-b1 C-facee">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a href="#" class="C-b1 C-emaa">
                <i class="fa-regular fa-envelope"></i>
            </a>
            <a href="#" class="C-b1 C-phoo" id="pp">
                <i class="fa-solid fa-phone"></i>
            </a>
        </div>
    </div>

    <!-- ----------------------------Script----------------------------------- -->

    <script src="../Functionality/ContactFunc.js"></script>
    <script src="../Functionality/Home.js"></script>
</body>

</html>