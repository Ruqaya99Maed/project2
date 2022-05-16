<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>registering form</title>


</head>

<body>
    <script>
        document.querySelector('.img__btn').addEventListener('click', function () {
            document.querySelector('.cont').classList.toggle('s--signup');
        });




    </script>

    <div class="showcase">
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">

                <form action="form_handle.php">
                <form action="connect.php" method="post">

                    <label style="color: blanchedalmond;" for="chk" aria-hidden="true">Sign up</label>
                    
                    <input type="text" name="txt" placeholder="firstName" required="" name="firstName"/>
                    <input type="text" name="txt" placeholder="lastName" required="" name="lastName"/>
                    <input type="text" name="txt" placeholder="gender" required="" name="gender"/>
                    <input type="email" name="txt" placeholder="Email" required="" name="Email" />
                    <input type="Password" name="Password" placeholder="Password" required="" name="Password"/>
                    <input type="Phone Number" name="phn" placeholder="Phone Number" required="" name="Phone Number"/>


                    <button>Sign up</button>
                </form>
            </div>
            <br><br>

           
            <div class="terms-and-conditions">


                <label class="trms" for="chk" aria-hidden="true">terms and conditions</label>
                <p class="terms">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla consequatur a tenetur vero eveniet
                    dolor aliq itaque eveniet id omnis, in delectus asperiores, dolore iure inventore at.
                </p>


            </div>
        </div><br><br><br>

        <div class="photos">
            <p class="para">
                <h2 style="color: white;  font-weight: lighter;">
                    WORRIED ABOUT ORGANIZING YOUR PARTY?
                    </h2><br>
                    <H1 style="color: white;  font-weight: lighter;">
                        ENJOY YOUR CELEBRATION AND LEAVE EVERYTHING TO US!
                    </H1><br>
                    <H4 style="color: white;  font-weight: lighter;">
                        book your online event consulation today.
                    </H4>
            </p>
           
           
        </div>

</body>

</html>
