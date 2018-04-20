<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 16/04/18
 * Time: 17.01
 */

class article
{
    public $id;
    public $titolo;
    public $contenuto;
    public $autore;
    public $data;
    public $thumbnail;
    public $summary;

    /**
     * article constructor.
     * @param $titolo
     * @param $contenuto
     * @param $autore
     * @param $data
     * @param $thumbnail
     */
    public function __construct($id, $titolo, $contenuto,$summary , $autore, $data, $thumbnail)
    {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->contenuto = $contenuto;
        $this->autore = $autore;
        $this->data = $data;
        $this->thumbnail = $thumbnail;
        $this->summary = $summary;
    }


    public function toString()
    {
        return $this->id . ";" . $this->titolo . ";" . $this->contenuto . ";" . $this->autore . ";" . $this->data . ";" . $this->thumbnail;
    }


}