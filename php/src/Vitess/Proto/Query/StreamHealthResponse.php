<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto
//   Date: 2016-01-22 01:34:42

namespace Vitess\Proto\Query {

  class StreamHealthResponse extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Query\Target */
    public $target = null;
    
    /**  @var boolean */
    public $serving = null;
    
    /**  @var int */
    public $tablet_externally_reparented_timestamp = null;
    
    /**  @var \Vitess\Proto\Query\RealtimeStats */
    public $realtime_stats = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.StreamHealthResponse');

      // OPTIONAL MESSAGE target = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "target";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\Target';
      $descriptor->addField($f);

      // OPTIONAL BOOL serving = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "serving";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 tablet_externally_reparented_timestamp = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "tablet_externally_reparented_timestamp";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE realtime_stats = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "realtime_stats";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\RealtimeStats';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <target> has a value
     *
     * @return boolean
     */
    public function hasTarget(){
      return $this->_has(1);
    }
    
    /**
     * Clear <target> value
     *
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function clearTarget(){
      return $this->_clear(1);
    }
    
    /**
     * Get <target> value
     *
     * @return \Vitess\Proto\Query\Target
     */
    public function getTarget(){
      return $this->_get(1);
    }
    
    /**
     * Set <target> value
     *
     * @param \Vitess\Proto\Query\Target $value
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function setTarget(\Vitess\Proto\Query\Target $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <serving> has a value
     *
     * @return boolean
     */
    public function hasServing(){
      return $this->_has(2);
    }
    
    /**
     * Clear <serving> value
     *
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function clearServing(){
      return $this->_clear(2);
    }
    
    /**
     * Get <serving> value
     *
     * @return boolean
     */
    public function getServing(){
      return $this->_get(2);
    }
    
    /**
     * Set <serving> value
     *
     * @param boolean $value
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function setServing( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <tablet_externally_reparented_timestamp> has a value
     *
     * @return boolean
     */
    public function hasTabletExternallyReparentedTimestamp(){
      return $this->_has(3);
    }
    
    /**
     * Clear <tablet_externally_reparented_timestamp> value
     *
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function clearTabletExternallyReparentedTimestamp(){
      return $this->_clear(3);
    }
    
    /**
     * Get <tablet_externally_reparented_timestamp> value
     *
     * @return int
     */
    public function getTabletExternallyReparentedTimestamp(){
      return $this->_get(3);
    }
    
    /**
     * Set <tablet_externally_reparented_timestamp> value
     *
     * @param int $value
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function setTabletExternallyReparentedTimestamp( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <realtime_stats> has a value
     *
     * @return boolean
     */
    public function hasRealtimeStats(){
      return $this->_has(4);
    }
    
    /**
     * Clear <realtime_stats> value
     *
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function clearRealtimeStats(){
      return $this->_clear(4);
    }
    
    /**
     * Get <realtime_stats> value
     *
     * @return \Vitess\Proto\Query\RealtimeStats
     */
    public function getRealtimeStats(){
      return $this->_get(4);
    }
    
    /**
     * Set <realtime_stats> value
     *
     * @param \Vitess\Proto\Query\RealtimeStats $value
     * @return \Vitess\Proto\Query\StreamHealthResponse
     */
    public function setRealtimeStats(\Vitess\Proto\Query\RealtimeStats $value){
      return $this->_set(4, $value);
    }
  }
}
