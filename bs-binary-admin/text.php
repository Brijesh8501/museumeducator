<html>
<head>
<title>Repeating Table Headers on Each Page</title>
<style type="text/css">
    thead tr , tbody tr{
		display:block;
	}
	tbody tr.head {
		page-break-before: always;
		page-break-inside: avoid;
	}
	
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
		var head = $('table thead tr');
		$( "tbody tr:nth-child(16n+16)" ).after(head.clone());
	});
</script>
</head>
<body onLoad="window.print() ">
<table width="990" border="0" align="center" cellpadding="5" cellspacing="5" >
  <tr  style="font-size:24px"><?php date_default_timezone_set("Asia/Calcutta"); ?>
    <td width="25"></td>
    <td><table>
      <tr>
        <td width="140" align="right"><strong>Beam Stock</strong></td>
        <td width="70" bgcolor="#000000" style="color:#FFF">Report</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y/m/d h:i:s A'); ?></td>
      </tr>
    </table></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"   style="color:#06F; font-size:24px"><span style="color:#000; font-size:24px"><strong>!! Shree Ganeshayan Namaha !!</strong><br/>
    <strong>SHINGORI TEXTILE</strong></span></td>
    <td></td>
  </tr>
</table>
	<table width="100%" border="1" cellspacing="2" cellpadding="2" >
        <thead >
          <tr bgcolor="#FFFFFF" class="head">
      
                                             <th width="8%">Sr No.</th>
                                             <th width="7%">Beam No</th>
                                             <th width="7%">Taar</th>
                                             <th width="10%">Beam_Meter</th>
                                             <th width="17%">Weight</th>
                                            <th width="20%">Quality</th>
                                            <th width="10%">Challan Date</th>
                                            
      </tr> 
      </thead>
       
    <?php $i=0;
	  $i++;?>
                                    <tbody>                                   
                                      
  <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    <tr class="start"> 
  
    <td width="8%"><?php echo $i++; ?></td>
    <td width="7%">brijesh</td>
    <td width="7%">545454</td>
    <td width="10%">5454</td>
    <td width="17%">5454</td>
    <td width="20%">8787</td>
    <td width="10%">tafeta ahirr bbbbbbbbbbbb</td>
    </tr>
    
    </tbody>
        </table>
</body>
</html>