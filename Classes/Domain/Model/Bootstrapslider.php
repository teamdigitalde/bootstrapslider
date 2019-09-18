<?php
namespace TeamDigital\Bootstrapslider\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Tim Büschken <bueschken@team-digital.de>, team digital GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Machinery
 */
class Bootstrapslider extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * headerFormat
     *
     * @var string
     */
    protected $headerformat = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * Image
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $image = NULL;

    /**
     * Imagemedium
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $imagemedium = NULL;

    /**
     * Imagesmall
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $imagesmall = NULL;

    /**
     * hidetitle
     *
     * @var string
     */
    protected $hidetitle = '';

    /**
     * hidedescription
     *
     * @var string
     */
    protected $hidedescription = '';

    /**
     * __construct
     */
    public function __construct() {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects() {
        $this->image = new ObjectStorage();
        $this->imagemedium = new ObjectStorage();
        $this->imagesmall = new ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Returns the headerformat
     *
     * @return string $headerformat
     */
    public function getHeaderformat() {
        return $this->headerformat;
    }

    /**
     * Sets the headerformat
     *
     * @param string $headerformat
     * @return void
     */
    public function setHeaderformat($headerformat) {
        $this->headerformat = $headerformat;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
        $this->image->attach($image);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove) {
        $this->image->detach($imageToRemove);
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $image) {
        $this->image = $image;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imagemedium
     * @return void
     */
    public function addImagemedium(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imagemedium) {
        $this->imagemedium->attach($imagemedium);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imagemediumToRemove The FileReference to be removed
     * @return void
     */
    public function removeImagemedium(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imagemediumToRemove) {
        $this->imagemedium->detach($imagemediumToRemove);
    }

    /**
     * Returns the imagemedium
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $imagemedium
     */
    public function getImagemedium() {
        return $this->imagemedium;
    }

    /**
     * Sets the imagemedium
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $imagemedium
     * @return void
     */
    public function setImagemedium(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $imagemedium) {
        $this->imagemedium = $imagemedium;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imagesmall
     * @return void
     */
    public function addImagesmall(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imagesmall) {
        $this->imagesmall->attach($imagesmall);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imagesmallToRemove The FileReference to be removed
     * @return void
     */
    public function removeImagesmall(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imagesmallToRemove) {
        $this->imagesmall->detach($imagesmallToRemove);
    }

    /**
     * Returns the imagesmall
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $imagesmall
     */
    public function getImagesmall() {
        return $this->imagesmall;
    }

    /**
     * Sets the imagesmall
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $imagesmall
     * @return void
     */
    public function setImagesmall(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $imagesmall) {
        $this->imagesmall = $imagesmall;
    }

    /**
    * Returns the hidetitle
    *
    * @return string $hidetitle
    */
    public function getHidetitle() {
    	return $this->hidetitle;
    }

    /**
    * Sets the hidetitle
    *
    * @param string $hidetitle
    * @return void
    */
    public function setHidetitle($hidetitle) {
    	$this->hidetitle = $hidetitle;
    }

    /**
    * Returns the hidedescription
    *
    * @return string $hidedescription
    */
    public function getHidedescription() {
    	return $this->hidedescription;
    }

    /**
    * Sets the hidedescription
    *
    * @param string $hidedescription
    * @return void
    */
    public function setHidedescription($hidedescription) {
    	$this->hidedescription = $hidedescription;
    }
}
