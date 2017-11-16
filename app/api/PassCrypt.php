<?php

final class PassCrypt
{
    /**
     * Metoda sprawdza, czy podane haslo jest prawidlowe
     *
     * @access public
     * @param string sPassCompare zakodowane haslo
     * @param string sPass podane haslo
     * @param string sSalt sĂłl zakodowanego hasla
     * @return boolean
     */
    public static function compare($sPassCompare, $sPass, $sSalt)
    {
        return ($sPassCompare == self::encode($sPass, $sSalt));
    }

    /**
     * Metoda hashuje haslo używając podanej soli
     *
     * @access public
     * @param string sPass
     * @param string sSalt
     * @return string
     */
    public static function encode($sPass, $sSalt)
    {
        return md5($sSalt . md5($sPass . $sSalt));
    }

    /**
     * Metoda tworzy salt podanego hasla
     *
     * @access public
     * @param string sPass
     * @return string
     */
    public static function salt($sPass)
    {
        return substr(md5(microtime() . substr($sPass, 0, 3)), 0, 5);
    }
}
