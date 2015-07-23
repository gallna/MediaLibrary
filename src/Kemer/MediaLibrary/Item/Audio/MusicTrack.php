<?php
namespace Kemer\MediaLibrary\Item\Audio;

use Kemer\MediaLibrary\Item as BaseItem;
use Kemer\MediaLibrary\Traits;
use Kemer\MediaLibrary\UpnpElement;
use Kemer\MediaLibrary\DcElement;

class MusicTrack extends AudioItem implements MusicTrackInterface
{
    /**
     * {@inheritDoc}
     */
    public function addArtist($artist)
    {
        $this->elements['artist'][] = new UpnpElement("artist", $artist);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getArtists()
    {
        return isset($this->elements['artist']) ? $this->elements['artist'] : [];
    }

    /**
     * {@inheritDoc}
     */
    public function setAlbum($album)
    {
        $this->album = new UpnpElement("album", $album);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalTrackNumber($originalTrackNumber)
    {
        $this->originalTrackNumber = new UpnpElement("originalTrackNumber", $originalTrackNumber);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalTrackNumber()
    {
        return $this->originalTrackNumber;
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaylist($playlist)
    {
        $this->playlist = new UpnpElement("playlist", $playlist);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaylist()
    {
        return $this->playlist;
    }

    /**
     * {@inheritDoc}
     */
    public function setStorageMedium($storageMedium)
    {
        $this->storageMedium = new UpnpElement("storageMedium", $storageMedium);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getStorageMedium()
    {
        return $this->storageMedium;
    }

    /**
     * {@inheritDoc}
     */
    public function setContributor($contributor)
    {
        $this->contributor = new DcElement("contributor", $contributor);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {
        $this->date = new DcElement("date", $date);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {
        return $this->date;
    }
}
