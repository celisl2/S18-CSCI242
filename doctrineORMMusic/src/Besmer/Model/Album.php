<?php

namespace Besmer\Model;

use Besmer\Model\Track;
use Doctrine\Common\Collections\ArrayCollection;

/** @Entity */
class Album {

    /**
     *
     * @Column(type="integer")
     * @GeneratedValue
     * @Id
     */
    protected $id;
    
    /**
     *
     * @Column(type="string")
     */
    protected $artist = "";
    
    
    /**
     *
     * @Column(type="string")
     */
    protected $title = "";
    
    /**
     *
     * @OneToMany(targetEntity="Track", mappedBy="album", cascade={"all"})
     */
    protected $tracks;
    
    public function __construct() {
        $this->tracks = new ArrayCollection();
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getId() {
        return $this->id;
    }

    public function getTracks() {
        return $this->tracks;
    }

    public function addTrack(Track $track) {
        $this->tracks[] = $track;
        $track->setAlbum($this);
    }
    
    public function removeTrack(Track $track) {
        $this->tracks->removeElement($track);
    }


    
    

}
