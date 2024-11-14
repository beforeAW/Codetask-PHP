
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
    <h1>
        <?php 
            echo $name;
        ?><!-- PHP: Place the user name here -->
    </h1>
    <p class="greeting">
        <?php
            $greeting = "Greetings " . $name . "!";
            echo $greeting;
        ?><!-- PHP: Display the personalized greeting here --></p>
    <p>Age: 
        <?php
            echo $age;
        ?><!-- PHP: Display the user age here -->
    </p>
    <p>City: 
        <?php
            echo $city;
        ?><!-- PHP: Display the user city here -->
    </p>
    <p class="status">
        <?php
            if ($age >= 18){
                $adult = " " . $name . " is an adult.";
                echo $adult;
            }
            else{
                $minor = " " . $name . " is a minor.";
                echo $minor;
            }
        ?><!-- PHP: Display status based on age (Adult or Minor) --></p>

    <h2>Hobbies</h2>
    <ul>
        <?php
            foreach ($hobbies as $hobby){
                $hobbyList = "<li> $hobby </li>";
                echo $hobbyList;
            }
        ?><!-- PHP: Loop through hobbies and display each hobby as a list item -->
    </ul>
</div>

</body>
</html>
