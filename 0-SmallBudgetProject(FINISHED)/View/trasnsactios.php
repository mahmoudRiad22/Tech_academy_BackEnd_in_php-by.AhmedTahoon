<!DOCTYPE html>
<html>



<head>
    <title>Transactions</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    table tr th,
    table tr td {
        padding: 5px;
        border: 1px solid black;
    }

    tfoot tr th,
    tfoot tr td {
        font-size: 18px;
    }

    tfoot tr th {
        text-align: right;
    }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr bgcolor = black>    
                <th><p><font color = white> Date</th>
                <th><p><font color = white>Check #</th>
                <th><p><font color = white>Description</th>
                <th><p><font color = white>Amount</th>
            </tr>
        </thead>
        <tbody>

            <?php if(!empty($ALLTransactiosnArray)) :?>
                <?php foreach($ALLTransactiosnArray as $element):?>
                
                <tr>
                        <?php if(str_replace(['$',','] , '', $element[3]) <0 ):?> 
                                <td bgcolor=#F27a8a >
                                    <p> <font color=black size='4pt'>
                                        <?php echo $element[0] ?> 
                            <?php else:?>
                                <td bgcolor=#A5d3a1 >
                                    <p> <font color=black size='4pt'>
                                        <?php echo $element[0] ?> 
                        <?php endif?>    
                     
                            
                    
                        <?php if(str_replace(['$',','] , '', $element[3]) <0 ):?> 
                            <td bgcolor=#F27a8a >
                                <p> <font color=black size='4pt'>
                                    <?php echo $element[1] ?> 
                            <?php elseif(str_replace(['$',','] , '', $element[3]) >0) :?>
                                <td bgcolor=#A5d3a1 >
                                    <p> <font color=black size='4pt'>
                                        <?php echo $element[1] ?> 
                        <?php endif?>   

                        <?php if(str_replace(['$',','] , '', $element[3]) <0 ):?> 
                                <td bgcolor=#F27a8a >
                                    <p> <font color=black size='4pt'>
                                        <?php echo $element[2] ?> 
                            <?php elseif(str_replace(['$',','] , '', $element[3]) >0) :?>
                                <td bgcolor=#A5d3a1 >
                                    <p> <font color=black size='4pt'>
                                        <?php echo $element[2] ?> 
                        <?php endif?>    
                    
                        <?php if(str_replace(['$',','] , '', $element[3]) <0 ):?> 
                            <td bgcolor=#F27a8a >
                                <p> <font color=black size='4pt'>
                                    <?php echo $element[3] ?> 
                            <?php elseif(str_replace(['$',','] , '', $element[3]) >0) :?>
                                <td bgcolor=#A5d3a1 >
                                    <p> <font color=black size='4pt'>
                                        <?php echo $element[3] ?> 
                        <?php endif?>    
                    
                </tr>
                
                <?php endforeach ?>
             <?php endif?>   

        </tbody>

        <tfoot>
            <tr bgcolor = black>
                <th  colspan="3"> <p><font color = white size = 5px>Total Income:</th>
                <td>
                    <p><font color = Green size = 5px >
                    <?php echo $Totals['TotalIncome'] ?>
                </td>
            </tr>
            <tr bgcolor = black>
                <th colspan="3"> <p><font color = white size =5px >Total Expense:</th>
                <td>
                    <p><font color =Red size =5px>
                    <?= $Totals['TotalExpense'] ?>
                </td>
            </tr>
            <tr bgcolor = black>
                <th colspan="3"> <p><font color = white size= 5px>Net Total:</th>
                <td>
                    <p><font color = white size =5px>
                    <?= $Totals['TotalNet'] ?>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>