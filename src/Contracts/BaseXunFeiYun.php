<?php

namespace hoga\la5xunfei\Contracts;

use hoga\la5xunfei\Tools\ArrayTools;
use hoga\la5xunfei\Tools\CacheTools;
use hoga\la5xunfei\Tools\HttpTools;
use WebSocket\Client;
use hoga\la5xunfei\Exceptions\InvalidArgumentException;
use hoga\la5xunfei\Exceptions\InvalidResponseException;
use hoga\la5xunfei\Exceptions\LocalCacheException;

class BaseXunFeiYun
{

  /**
   * @var
   */
  public $config;

  public $authorization = '';

  /**
   * BaseWeWork constructor.
   * @param array $options
   */
  public function __construct(array $options)
  {
    if (empty($options['api_key'])) {
      throw new InvalidArgumentException("Missing Config -- [api_key]");
    }
    if (empty($options['api_secret'])) {
      throw new InvalidArgumentException("Missing Config -- [api_secret]");
    }
    if (empty($options['app_id'])) {
      throw new InvalidArgumentException("Missing Config -- [app_id]");
    }
    $this->config = new ArrayTools($options);
  }
}
