<?php
/**
 * Copyright (c)
 * 作    者: 步迎飞.
 * 修改日期: 2018/4/25 10:27
 */

/**
 * 获取用户ip
 * @return array|false|string
 */
function getIP()
{
    if (isset($_SERVER))
    {
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        else
        {
            if (isset($_SERVER["HTTP_CLIENT_IP"]))
            {
                $realip = $_SERVER["HTTP_CLIENT_IP"];
            }
            else
            {
                $realip = $_SERVER["REMOTE_ADDR"];
            }
        }
    }
    else
    {
        if (getenv("HTTP_X_FORWARDED_FOR"))
        {
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        }
        else
        {
            if (getenv("HTTP_CLIENT_IP"))
            {
                $realip = getenv("HTTP_CLIENT_IP");
            }
            else
            {
                $realip = getenv("REMOTE_ADDR");
            }
        }
    }

    return $realip;
}