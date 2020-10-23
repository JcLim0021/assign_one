<html>
<body>
<form action ="GCD" method="get">
    <br>
    GCD of the two numbers<br><br>
    Enter 1st number:<br>
    <input name="n1"><br>
    Enter 2nd number:<br>
    <input name="n2"><br><br>

        <button type="submt"> submit</button><br><br>
<?php

if(isset($_GET['n1']) || isset($_GET['n2']))
{
    $a = $_GET['n1'];
    $b = $_GET['n2'];
    echo "GCD of $a and $b = ", gcd($a,$b);
}
    function gcd($a,$b)
    {
        if($b == 0)
            return $a;
        return gcd($b,$a%$b);
    }
?>

</form>
</body>
</html>

