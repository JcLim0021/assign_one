<html>
<body>
    <form method="get">
        <br>
            CALCULATOR<br>
            <br>
            Choose your First number<br>
            <input name="n1"><br><br>
            Choose your Second number<br>
            <input name="n2"><br><br>
        
                <button type="+" name="+" value="+"> + </button>
                <button type="-" name="-" value="-"> - </button>
                <button type="*" name="*" value="*"> * </button>
                <button type="/" name="/" value="/"> / </button>
    </form>

    <?php

    if(isset($_GET["+"]))
    {
        $a = $_GET['n1'];
        $b = $_GET['n2'];
        echo $a + $b;
    }
    else if(isset($_GET["-"]))
    {
        $a = $_GET['n1'];
        $b = $_GET['n2'];
        echo $a - $b;
    }
    else if(isset($_GET["*"]))
    {
        $a = $_GET['n1'];
        $b = $_GET['n2'];
        echo $a * $b;
    }
    else if(isset($_GET["/"]))
    {
        $a = $_GET['n1'];
        $b = $_GET['n2'];
        echo $a - $b;
    }
    ?>

</body>
</html>