<?php
declare(strict_types=1);
namespace ZimCodes\Tests;
use Exception;
trait RandomTrait{
    /**
     * @throws Exception
     */
    private static function getRandomArray(int $amount = 10,int $min = -999, int $max = 999):array{
        $arr = [];
        for($i = 0;$i<$amount;$i++){
            $arr[] = random_int($min,$max);
        }
        return $arr;
    }

    /**
     * @throws Exception
     */
    private static function getRandomSortedArray(int $amount = 10, int $min = -999, int $max = 999):array{
        $arr = self::getRandomArray($amount,$min,$max);
        sort($arr);
        return $arr;
    }
    /**
     * @throws Exception
     */
    private static function getRandomWord(int $length, int $minCodePoint, int $maxCodePoint):string{
        $word = "";
        for($j =0;$j<$length;$j++){
            $word .= chr(random_int($minCodePoint,$maxCodePoint));
        }
        return $word;
    }
    /**
     * @throws Exception
     */
    private static function getRandomWordsArray(int $amount,int $wordLength,int $minCodePoint=97,int $maxCodePoint=122):array{
        $arr = [];
        for($i=0;$i<$amount;$i++){
            $arr[] = self::getRandomWord($wordLength,$minCodePoint,$maxCodePoint);
        }
        return $arr;
    }
}