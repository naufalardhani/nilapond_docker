<!-- app/Helpers/helpers.php -->

<?php

if (!function_exists('formatRupiah')) {
    /**
     * Format number to Rupiah currency
     *
     * @param  int|float  $number
     * @return string
     */
    function formatRupiah($number)
    {
        return 'Rp' . number_format($number, 0, ',', '.');
    }
}
