<?php

/**
* Mux PHP - Copyright 2019 Mux Inc.
* NOTE: This file is auto generated. Do not edit this file manually.
*/

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * AbridgedVideoView Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class AbridgedVideoView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AbridgedVideoView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'viewer_os_family' => 'string',
        'viewer_application_name' => 'string',
        'video_title' => 'string',
        'total_row_count' => 'int',
        'player_error_message' => 'string',
        'player_error_code' => 'string',
        'error_type_id' => 'int',
        'country_code' => 'string',
        'view_start' => 'string',
        'view_end' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'viewer_os_family' => null,
        'viewer_application_name' => null,
        'video_title' => null,
        'total_row_count' => 'int64',
        'player_error_message' => null,
        'player_error_code' => null,
        'error_type_id' => 'int32',
        'country_code' => null,
        'view_start' => null,
        'view_end' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'viewer_os_family' => 'viewer_os_family',
        'viewer_application_name' => 'viewer_application_name',
        'video_title' => 'video_title',
        'total_row_count' => 'total_row_count',
        'player_error_message' => 'player_error_message',
        'player_error_code' => 'player_error_code',
        'error_type_id' => 'error_type_id',
        'country_code' => 'country_code',
        'view_start' => 'view_start',
        'view_end' => 'view_end'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'viewer_os_family' => 'setViewerOsFamily',
        'viewer_application_name' => 'setViewerApplicationName',
        'video_title' => 'setVideoTitle',
        'total_row_count' => 'setTotalRowCount',
        'player_error_message' => 'setPlayerErrorMessage',
        'player_error_code' => 'setPlayerErrorCode',
        'error_type_id' => 'setErrorTypeId',
        'country_code' => 'setCountryCode',
        'view_start' => 'setViewStart',
        'view_end' => 'setViewEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'viewer_os_family' => 'getViewerOsFamily',
        'viewer_application_name' => 'getViewerApplicationName',
        'video_title' => 'getVideoTitle',
        'total_row_count' => 'getTotalRowCount',
        'player_error_message' => 'getPlayerErrorMessage',
        'player_error_code' => 'getPlayerErrorCode',
        'error_type_id' => 'getErrorTypeId',
        'country_code' => 'getCountryCode',
        'view_start' => 'getViewStart',
        'view_end' => 'getViewEnd'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['viewer_os_family'] = isset($data['viewer_os_family']) ? $data['viewer_os_family'] : null;
        $this->container['viewer_application_name'] = isset($data['viewer_application_name']) ? $data['viewer_application_name'] : null;
        $this->container['video_title'] = isset($data['video_title']) ? $data['video_title'] : null;
        $this->container['total_row_count'] = isset($data['total_row_count']) ? $data['total_row_count'] : null;
        $this->container['player_error_message'] = isset($data['player_error_message']) ? $data['player_error_message'] : null;
        $this->container['player_error_code'] = isset($data['player_error_code']) ? $data['player_error_code'] : null;
        $this->container['error_type_id'] = isset($data['error_type_id']) ? $data['error_type_id'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['view_start'] = isset($data['view_start']) ? $data['view_start'] : null;
        $this->container['view_end'] = isset($data['view_end']) ? $data['view_end'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets viewer_os_family
     *
     * @return string|null
     */
    public function getViewerOsFamily()
    {
        return $this->container['viewer_os_family'];
    }

    /**
     * Sets viewer_os_family
     *
     * @param string|null $viewer_os_family viewer_os_family
     *
     * @return $this
     */
    public function setViewerOsFamily($viewer_os_family)
    {
        $this->container['viewer_os_family'] = $viewer_os_family;

        return $this;
    }

    /**
     * Gets viewer_application_name
     *
     * @return string|null
     */
    public function getViewerApplicationName()
    {
        return $this->container['viewer_application_name'];
    }

    /**
     * Sets viewer_application_name
     *
     * @param string|null $viewer_application_name viewer_application_name
     *
     * @return $this
     */
    public function setViewerApplicationName($viewer_application_name)
    {
        $this->container['viewer_application_name'] = $viewer_application_name;

        return $this;
    }

    /**
     * Gets video_title
     *
     * @return string|null
     */
    public function getVideoTitle()
    {
        return $this->container['video_title'];
    }

    /**
     * Sets video_title
     *
     * @param string|null $video_title video_title
     *
     * @return $this
     */
    public function setVideoTitle($video_title)
    {
        $this->container['video_title'] = $video_title;

        return $this;
    }

    /**
     * Gets total_row_count
     *
     * @return int|null
     */
    public function getTotalRowCount()
    {
        return $this->container['total_row_count'];
    }

    /**
     * Sets total_row_count
     *
     * @param int|null $total_row_count total_row_count
     *
     * @return $this
     */
    public function setTotalRowCount($total_row_count)
    {
        $this->container['total_row_count'] = $total_row_count;

        return $this;
    }

    /**
     * Gets player_error_message
     *
     * @return string|null
     */
    public function getPlayerErrorMessage()
    {
        return $this->container['player_error_message'];
    }

    /**
     * Sets player_error_message
     *
     * @param string|null $player_error_message player_error_message
     *
     * @return $this
     */
    public function setPlayerErrorMessage($player_error_message)
    {
        $this->container['player_error_message'] = $player_error_message;

        return $this;
    }

    /**
     * Gets player_error_code
     *
     * @return string|null
     */
    public function getPlayerErrorCode()
    {
        return $this->container['player_error_code'];
    }

    /**
     * Sets player_error_code
     *
     * @param string|null $player_error_code player_error_code
     *
     * @return $this
     */
    public function setPlayerErrorCode($player_error_code)
    {
        $this->container['player_error_code'] = $player_error_code;

        return $this;
    }

    /**
     * Gets error_type_id
     *
     * @return int|null
     */
    public function getErrorTypeId()
    {
        return $this->container['error_type_id'];
    }

    /**
     * Sets error_type_id
     *
     * @param int|null $error_type_id error_type_id
     *
     * @return $this
     */
    public function setErrorTypeId($error_type_id)
    {
        $this->container['error_type_id'] = $error_type_id;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets view_start
     *
     * @return string|null
     */
    public function getViewStart()
    {
        return $this->container['view_start'];
    }

    /**
     * Sets view_start
     *
     * @param string|null $view_start view_start
     *
     * @return $this
     */
    public function setViewStart($view_start)
    {
        $this->container['view_start'] = $view_start;

        return $this;
    }

    /**
     * Gets view_end
     *
     * @return string|null
     */
    public function getViewEnd()
    {
        return $this->container['view_end'];
    }

    /**
     * Sets view_end
     *
     * @param string|null $view_end view_end
     *
     * @return $this
     */
    public function setViewEnd($view_end)
    {
        $this->container['view_end'] = $view_end;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


