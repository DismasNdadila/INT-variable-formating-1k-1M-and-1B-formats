<?php
/*****
 * This is an open source project should not be sold or misused
 * Author:Dismas Ndadila
 * Author Email: ndadilladismas@gmail.com
 * Created Date: 1/11/2022
 * Feel free to donate @paypal email:ndadilladismas@gmail.com
 * version:0.1
 * 
 */

///Round Off number 1k 1M format function begin

$twoM = 2000000;

function format($int) {
    $int = (int) preg_replace('/[^0-9]/', '', $int);
    if ($int >= 1000) {
        $rn = round($int);
        $format_number = number_format($rn);
        $ar_nbr = explode(',', $format_number);
        $x_parts = array('K', 'M', 'B', 'T', 'Q');
        $x_count_parts = count($ar_nbr) - 1;
        $dn = $ar_nbr[0] . ((int) $ar_nbr[1][0] !== 0 ? '.' . $ar_nbr[1][0] : '');
        $dn .= $x_parts[$x_count_parts - 1];

        return $dn;
    }
    return $int;
}


///Round Off number 1k 1M format function finish

echo ''.format($twoM).''; 


 ?>