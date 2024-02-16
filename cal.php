<form method="post">
    Enter First Number:
    <input type="number" name="first"><br><br>
    Enter Second Number:
    <input type="number" name="second"><br><br>
    <input type="submit" name="add" value="sum">
    <input type="submit" name="sub" value="diff">
    <input type="submit" name="pro" value="product">
    <input type="submit" name="div" value="division">
    <input type="submit" name="sqr1" value="square of first ">
    <input type="submit" name="sqr2" value="square of second">
</form>
<?php 
function add($a,$b){
    $sum=$a + $b;
    echo"sum=$sum";
}function sub($a,$b){
     $sub=$a - $b;
    echo"diff=$sub";
 }
 function pro($a,$b){
    $pro=$a * $b;
        echo"product=$pro";}
    function div($a,$b){
        $div=$a / $b;
                echo"division=$div";}
                function sqr1($a){
                    $sqr1=$a * $a;
                        echo"Square of first=$sqr1";}
                        function sqr2($b){
                            $sqr2=$b * $b;
                                echo"Square of second=$sqr2";}

 if(isset($_POST['add'])){
 add($_POST['first'],$_POST['second']);
 }
 if(isset($_POST['sub'])){
 sub($_POST['first'],$_POST['second']);
 }
 if(isset($_POST['pro'])){
    pro($_POST['first'],$_POST['second']);
    }
    if(isset($_POST['div'])){
        div($_POST['first'],$_POST['second']);
    }
    if(isset($_POST['sqr1'])){
        sqr1($_POST['first']);
    }
    if(isset($_POST['sqr2'])){
        sqr2($_POST['second']);
    }
                                   
?>
