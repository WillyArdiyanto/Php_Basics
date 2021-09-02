<html>

<head>
    <title>Variable</title>
</head>

<body>
    <?php
    function printClub($ClubName)
    {
        print("The soccer club is $ClubName<BR>\n");
    }
    function Barcelona()
    {
        // local variable
        $ClubName = "Barcelona";
        printClub($ClubName);
    }
    function RealMadrid()
    {
        // local variable
        $ClubName = "RealMadrid";
        printClub($ClubName);
    }
    function Forever()
    {
        // global variable
        global $ClubName;
        printClub($ClubName);
    }
    //global variable
    $ClubName = "Manchester City";
    Forever();
    Barcelona();
    RealMadrid();
    Forever();

    ?>

</body>

</html>