<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/Profile.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js">
    </script>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="../view/Dashboard.php">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title"><h2>PropertyHub</h2></span>
                    </a>
                </li>

                <li>
                    <a href="../view/Dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li class="active">
                    <a href="../view/Profile.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="../view/listing.php">
                        <span class="icon">
                            <ion-icon name="card-outline"></ion-icon>
                        </span>
                        <span class="title">Rental and Listing</span>
                    </a>
                </li>

                <li>
                    <a href="../view/Bookings.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Booking</span>
                    </a>
                </li>

                <li>
                    <a href="../view/Help.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="../login/Logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

            

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
            
            <div class="outer-profile">

                <div id="profile-page">
                    <div class="profile-info">
                        <img src="../images/3.jpg" alt="Profile Picture">
                        <div class="user-details">
                            <p><strong>Name:</strong> John Doe</p>
                            <p><strong>Email:</strong> johndoe@example.com</p>
                            <p><strong>Date of Birth:</strong> January 1, 1990</p>
                        </div>
                    </div>
                    <div class="profile-actions">
                        <button class="Edit" id="Edit">Edit Username</button>
                        <button class="Editemail" id="Editemail">Change Email</button>
                        <button class = "ChangePassword" id="ChangePassword">Change Password</button>
                    </div>
                </div>



            </div>

            
    

 


    
    <script>
            
        let list = document.querySelectorAll(".navigation li");

        function addHover() {
            list.forEach((item) => {
                item.classList.remove("hovered");
            });
            this.classList.add("hovered");
        }

        function removeHover() {
            this.classList.remove("hovered");
        }

        list.forEach((item) => {
            item.addEventListener("mouseover", addHover);
            item.addEventListener("mouseout", removeHover);
        });

        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function () {
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        };


    </script>



    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>