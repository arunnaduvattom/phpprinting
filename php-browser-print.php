<!-- JS-PRINT-SETUP IN MOZILLA FIREFOX FOR SILENT PRINTING. PRINT ONLINE SUPPORT ALL BROWSERS. BUT SILENT PRINTING WITH MOZILLA ONLY USING JsPrintSetup Plugin Installed -->
<div id="printdiv">
    <?php
    $printer = 'Printer Name Here';

    $message1 = "<table  style='width:100%; font-size:12px;font-family:'Courier New', Arial, Helvetica, sans-serif;' border='0' cellpadding='0' cellspacing='0'>
                                        <tr height='25px'>
                                        <td align='center' style='font-size:14px;letter-spacing:3px'><strong>Header Text</strong></td>
                                        </tr>
                                        <tr style='font-size:12px;letter-spacing:3px' height='15px'><td align='center'><strong>Sub Header Text</strong></td>
                                        </tr>
                                        <tr style='font-size:12px;letter-spacing:3px' height='15px'><td align='center'><strong>Sub Header Text</strong></td>
                                        </tr>
                                        </table>
                                        <table  style='width:100%; font-size:12px;font-family:'Courier New', Arial, Helvetica, sans-serif;letter-spacing:3px;' border='0' cellpadding='0' cellspacing='0'>
										<tr><td align='center' width='' style='letter-spacing:3px'>Test Print</td></tr>
										<tr height='25px'>
                                        <td align='left' style='letter-spacing:3px'>Hello</td>
                                        </tr>
										<tr>
                                        <td align='left' style='letter-spacing:3px'>Date: 01/01/15 09:00:00 AM</td>
                                        </tr>
                                        </table>
                                        <table  style='width:100%; font-size:12px;font-family:'Courier New', Arial, Helvetica, sans-serif;letter-spacing:3px' border='0' cellpadding='0' cellspacing='0'>
										<tr height='25px'>
                                        <td align='center' style='width:10%;border-right:1px dashed #000;border-top:1px dashed #000;border-bottom:1px dashed #000;letter-spacing:3px'>No.</td>
										<td align='center' style='width:40%;border-right:1px dashed #000;border-top:1px dashed #000;border-bottom:1px dashed #000;letter-spacing:3px'>Item(s)</td>
                                        <td align='center' style='width:15%;border-right:1px dashed #000;border-top:1px dashed #000;border-bottom:1px dashed #000;letter-spacing:3px'>Qty</td>
                                        <td align='center' style='width:15%;border-right:1px dashed #000;border-top:1px dashed #000;border-bottom:1px dashed #000;letter-spacing:3px'>Rate</td>
                                        <td align='center' style='width:20%;border-top:1px dashed #000;border-bottom:1px dashed #000;letter-spacing:3px'>Amount</td>
                                        </tr>
                                        </table>";

                                        echo $message1;

    ?>
</div>

<script type="text/javascript">
    // JS-PRINT-SETUP IN MOZILLA FOR SILENT PRINTING; DOCUMENT WILL OPEN UP IN A POPUP WINDOW
    function print_bill(popupWin) {

        //jsPrintSetup.setPrinter('Zonerich AB-T88');
        jsPrintSetup.setPrinter('<?php echo $printer; ?>');
        //jsPrintSetup.setPrinter('EPSON');
        jsPrintSetup.setSilentPrint(1);

        jsPrintSetup.setOption('headerStrCenter', '');
        jsPrintSetup.setOption('headerStrRight', '');
        jsPrintSetup.setOption('headerStrLeft', '');

        jsPrintSetup.setOption('footerStrCenter', '');
        jsPrintSetup.setOption('footerStrLeft', '');
        jsPrintSetup.setOption('footerStrRight', '');
        jsPrintSetup.setOption('marginTop', 0);
        jsPrintSetup.setOption('marginBottom', 0);
        jsPrintSetup.setOption('marginLeft', 0);
        jsPrintSetup.setOption('marginRight', 0);
        jsPrintSetup.setOption('shrinkToFit', 0);
        jsPrintSetup.setOption('footerStrLeft', '');
        jsPrintSetup.setOption('footerStrRight', '');


        jsPrintSetup.printWindow(popupWin);
        //popupWin.close();

    }

    var divToPrint = document.getElementById('printdiv');
    var popupWin = window.open('', '_blank', 'width=300,height=350');
    popupWin.document.open();
    //alert(divToPrint.innerHTML);
    popupWin.document.write('<html><body>' + divToPrint.innerHTML + '</html>');
    print_bill(popupWin);
    window.open('home.php', '_self');
    //window.history.back(-1);
</script>