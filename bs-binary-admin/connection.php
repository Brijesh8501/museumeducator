<style type="text/css">
td {
   border-collapse:collapse;
    border: 1px black solid;
}
tr:nth-of-type(5) td:nth-of-type(1) {
    visibility: hidden;
}
.rotate {
     -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
       -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
  -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
}
</style>
<script type="text/javascript">
 $("#text").keyup(function()//Detect keypress in the textarea
    {
        var text_area_box =$(this).val();//Get the values in the textarea
        var max_numb_of_words = 200;//Set the Maximum Number of chars
        var main = text_area_box.length*100;//Multiply the lenght on words x 100

        var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared

        if(text_area_box.length >= max_numb_of_words) {
            //add break
        }
        return false;
        });
</script>
<textarea id="text" rows="3" cols="100"></textarea>
<table cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td><div class='rotate'>10kg</div></td>
        <td></td>
        <td><div class='rotate'>Chirag patel</div></td>
        <td><div class='rotate'>Dhiren patel</div></td>
        <td><div class='rotate'>Entire style</div></td>
    </tr>
    <tr>
        <td><div class='rotate'>20kg</div></td>
        <td>G</td>
        <td>H</td>
        <td>I</td>
        <td>J</td>
    </tr>
    <tr>
        <td><div class='rotate'>30kg</div></td>
        <td>L</td>
        <td>M</td>
        <td>N</td>
        <td>O</td>
    </tr>


</table>