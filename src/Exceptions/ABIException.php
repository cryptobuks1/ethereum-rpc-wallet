<?php


namespace Skopa\Ethereum\Exceptions;


use Exception;

/**
 * Class ABIException
 * @package Skopa\Ethereum\Exceptions
 */
class ABIException extends EthereumClientException
{
    /**
     * @param $functionName
     * @return ABIException
     */
    public static function functionNotExist($functionName)
    {
        return new static("Provided function: $functionName not exists in ABI.");
    }

    /**
     * @param Exception $exception
     * @return ABIException
     */
    public static function parseException(Exception $exception)
    {
        return new static(
            'ABI parsing exception: ' . $exception->getMessage(),
            $exception->getCode(),
            $exception
        );
    }
}