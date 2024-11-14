
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="profile-card">
    <?php
        #Variables & Array:
        $name = "Dave";
        $age = 18;
        $city = "Stockholm";
        $hobbies = [
            "Videogames",
            "Movies",
            "Boardgames",
            "Music",
            "Anime",
        ];
    ?>
    <h1><!-- PHP: Place the user name here -->
        <?php 
            echo $name;
        ?>
    </h1>
    <p class="greeting"><!-- PHP: Display the personalized greeting here -->
        <?php
            $greeting = "Greetings " . $name . "!";
            echo $greeting;
        ?>
    </p>
    <p>Age: 
        <?php
            echo $age;
        ?><!-- PHP: Display the user age here -->
    </p>
    <p>City: <!-- PHP: Display the user city here -->
        <?php
            echo $city;
        ?>
    </p>
    <p class="status"><!-- PHP: Display status based on age (Adult or Minor) -->
        <?php
            if ($age >= 18){
                $adult = " " . $name . " is an adult.";
                echo $adult;
            }
            else{
                $minor = " " . $name . " is a minor.";
                echo $minor;
            }
        ?>
    </p>

    <h2>Hobbies</h2>
    <ul><!-- PHP: Loop through hobbies and display each hobby as a list item -->
        <?php
            foreach ($hobbies as $hobby){
                $hobbyList = "<li> $hobby </li>";
                echo $hobbyList;
            }
        ?>
    </ul>
</div>

</body>
</html>
