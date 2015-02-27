<?php

/**
 * @Entity @Table(name="shares")
 **/
class Share {
    
    /**
     * @var int
     * 
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;
    
    /**
     * @var string
     * 
     * @Column(type="string")
     */
    private $name;
    
    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
}