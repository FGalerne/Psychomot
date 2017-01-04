<?php

namespace PsychoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Psycho
 */
class Psycho
{
    public $file1;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }
    public function preUpload1()
    {
        if (null !== $this->file1) {
            // do whatever you want to generate a unique name
            $this->image1 = uniqid().'.'.$this->file1->guessExtension();
        }
    }

    public function upload1()
    {
        if (null === $this->file1) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file1->move($this->getUploadRootDir(), $this->image1);

        unset($this->file1);
    }

    public function removeUpload1()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    public $file2;

    public function preUpload2()
    {
        if (null !== $this->file2) {
            // do whatever you want to generate a unique name
            $this->image2 = uniqid().'.'.$this->file2->guessExtension();
        }
    }

    public function upload2()
    {
        if (null === $this->file2) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file2->move($this->getUploadRootDir(), $this->image2);

        unset($this->file2);
    }

    public function removeUpload2()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    public $file3;

    public function preUpload3()
    {
        if (null !== $this->file3) {
            // do whatever you want to generate a unique name
            $this->image3 = uniqid().'.'.$this->file3->guessExtension();
        }
    }

    public function upload3()
    {
        if (null === $this->file3) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file3->move($this->getUploadRootDir(), $this->image3);

        unset($this->file3);
    }

    public function removeUpload3()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    public $file4;

    public function preUpload4()
    {
        if (null !== $this->file4) {
            // do whatever you want to generate a unique name
            $this->image4 = uniqid().'.'.$this->file4->guessExtension();
        }
    }

    public function upload4()
    {
        if (null === $this->file4) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file4->move($this->getUploadRootDir(), $this->image4);

        unset($this->file4);
    }

    public function removeUpload4()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    public $file5;

    public function preUpload5()
    {
        if (null !== $this->file5) {
            // do whatever you want to generate a unique name
            $this->image5 = uniqid().'.'.$this->file5->guessExtension();
        }
    }

    public function upload5()
    {
        if (null === $this->file5) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file5->move($this->getUploadRootDir(), $this->image5);

        unset($this->file5);
    }

    public function removeUpload5()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    public $file6;

    public function preUpload6()
    {
        if (null !== $this->file6) {
            // do whatever you want to generate a unique name
            $this->image6 = uniqid().'.'.$this->file6->guessExtension();
        }
    }

    public function upload6()
    {
        if (null === $this->file6) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file6->move($this->getUploadRootDir(), $this->image6);

        unset($this->file6);
    }

    public function removeUpload6()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    public $file7;

    public function preUpload7()
    {
        if (null !== $this->file7) {
            // do whatever you want to generate a unique name
            $this->image7 = uniqid().'.'.$this->file7->guessExtension();
        }
    }

    public function upload7()
    {
        if (null === $this->file7) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file7->move($this->getUploadRootDir(), $this->image7);

        unset($this->file7);
    }

    public function removeUpload7()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    public $file8;

    public function preUpload8()
    {
        if (null !== $this->file8) {
            // do whatever you want to generate a unique name
            $this->image8 = uniqid().'.'.$this->file8->guessExtension();
        }
    }

    public function upload8()
    {
        if (null === $this->file8) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file8->move($this->getUploadRootDir(), $this->image8);

        unset($this->file8);
    }

    public function removeUpload8()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    //** CODE GENERE **/
    /**
     * @var int
     */
    private $id;

    /**
     * @Assert\Regex(pattern="/(\d\d ){4}\d\d/")
     */
    private $tel;

    /**
     * @var string
     */
    private $titledef;

    /**
     * @var string
     */
    private $txtdef;

    /**
     * @var string
     */
    private $titleWho;

    /**
     * @var string
     */
    private $txtWho;

    /**
     * @var string
     */
    private $titleWhy;

    /**
     * @var string
     */
    private $txtWhy;

    /**
     * @var string
     */
    private $titlePsy;

    /**
     * @var string
     */
    private $txtPsy1;

    /**
     * @var string
     */
    private $txtPsy2;

    /**
     * @var string
     */
    private $titleConsult;

    /**
     * @var string
     */
    private $txtConsult;

    /**
     * @var string
     */
    private $titleInterv;

    /**
     * @var string
     */
    private $txtInterv;

    /**
     * @var string
     */
    private $titleBilan;

    /**
     * @var string
     */
    private $txtBilan;

    /**
     * @var string
     */
    private $namePsy1;

    /**
     * @var string
     */
    private $namePsy2;

    /**
     * @var string
     */
    private $contactAddress;

    /**
     * @var string
     */
    private $contactMail;

    /**
     * @Assert\Regex(pattern="/^(0|(\\+33)|(0033))[1-9][0-9]{8}$/")
     */
    private $contactTel;

    /**
     * @var string
     */
    private $contactName;


    /** Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Psycho
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set titledef
     *
     * @param string $titledef
     * @return Psycho
     */
    public function setTitledef($titledef)
    {
        $this->titledef = $titledef;

        return $this;
    }

    /**
     * Get titledef
     *
     * @return string 
     */
    public function getTitledef()
    {
        return $this->titledef;
    }

    /**
     * Set txtdef
     *
     * @param string $txtdef
     * @return Psycho
     */
    public function setTxtdef($txtdef)
    {
        $this->txtdef = $txtdef;

        return $this;
    }

    /**
     * Get txtdef
     *
     * @return string 
     */
    public function getTxtdef()
    {
        return $this->txtdef;
    }

    /**
     * Set titleWho
     *
     * @param string $titleWho
     * @return Psycho
     */
    public function setTitleWho($titleWho)
    {
        $this->titleWho = $titleWho;

        return $this;
    }

    /**
     * Get titleWho
     *
     * @return string 
     */
    public function getTitleWho()
    {
        return $this->titleWho;
    }

    /**
     * Set txtWho
     *
     * @param string $txtWho
     * @return Psycho
     */
    public function setTxtWho($txtWho)
    {
        $this->txtWho = $txtWho;

        return $this;
    }

    /**
     * Get txtWho
     *
     * @return string 
     */
    public function getTxtWho()
    {
        return $this->txtWho;
    }

    /**
     * Set titleWhy
     *
     * @param string $titleWhy
     * @return Psycho
     */
    public function setTitleWhy($titleWhy)
    {
        $this->titleWhy = $titleWhy;

        return $this;
    }

    /**
     * Get titleWhy
     *
     * @return string 
     */
    public function getTitleWhy()
    {
        return $this->titleWhy;
    }

    /**
     * Set txtWhy
     *
     * @param string $txtWhy
     * @return Psycho
     */
    public function setTxtWhy($txtWhy)
    {
        $this->txtWhy = $txtWhy;

        return $this;
    }

    /**
     * Get txtWhy
     *
     * @return string 
     */
    public function getTxtWhy()
    {
        return $this->txtWhy;
    }

    /**
     * Set titlePsy
     *
     * @param string $titlePsy
     * @return Psycho
     */
    public function setTitlePsy($titlePsy)
    {
        $this->titlePsy = $titlePsy;

        return $this;
    }

    /**
     * Get titlePsy
     *
     * @return string 
     */
    public function getTitlePsy()
    {
        return $this->titlePsy;
    }

    /**
     * Set txtPsy1
     *
     * @param string $txtPsy1
     * @return Psycho
     */
    public function setTxtPsy1($txtPsy1)
    {
        $this->txtPsy1 = $txtPsy1;

        return $this;
    }

    /**
     * Get txtPsy1
     *
     * @return string 
     */
    public function getTxtPsy1()
    {
        return $this->txtPsy1;
    }

    /**
     * Set txtPsy2
     *
     * @param string $txtPsy2
     * @return Psycho
     */
    public function setTxtPsy2($txtPsy2)
    {
        $this->txtPsy2 = $txtPsy2;

        return $this;
    }

    /**
     * Get txtPsy2
     *
     * @return string 
     */
    public function getTxtPsy2()
    {
        return $this->txtPsy2;
    }

    /**
     * Set titleConsult
     *
     * @param string $titleConsult
     * @return Psycho
     */
    public function setTitleConsult($titleConsult)
    {
        $this->titleConsult = $titleConsult;

        return $this;
    }

    /**
     * Get titleConsult
     *
     * @return string 
     */
    public function getTitleConsult()
    {
        return $this->titleConsult;
    }

    /**
     * Set txtConsult
     *
     * @param string $txtConsult
     * @return Psycho
     */
    public function setTxtConsult($txtConsult)
    {
        $this->txtConsult = $txtConsult;

        return $this;
    }

    /**
     * Get txtConsult
     *
     * @return string 
     */
    public function getTxtConsult()
    {
        return $this->txtConsult;
    }

    /**
     * Set titleInterv
     *
     * @param string $titleInterv
     * @return Psycho
     */
    public function setTitleInterv($titleInterv)
    {
        $this->titleInterv = $titleInterv;

        return $this;
    }

    /**
     * Get titleInterv
     *
     * @return string 
     */
    public function getTitleInterv()
    {
        return $this->titleInterv;
    }

    /**
     * Set txtInterv
     *
     * @param string $txtInterv
     * @return Psycho
     */
    public function setTxtInterv($txtInterv)
    {
        $this->txtInterv = $txtInterv;

        return $this;
    }

    /**
     * Get txtInterv
     *
     * @return string 
     */
    public function getTxtInterv()
    {
        return $this->txtInterv;
    }

    /**
     * Set titleBilan
     *
     * @param string $titleBilan
     * @return Psycho
     */
    public function setTitleBilan($titleBilan)
    {
        $this->titleBilan = $titleBilan;

        return $this;
    }

    /**
     * Get titleBilan
     *
     * @return string 
     */
    public function getTitleBilan()
    {
        return $this->titleBilan;
    }

    /**
     * Set txtBilan
     *
     * @param string $txtBilan
     * @return Psycho
     */
    public function setTxtBilan($txtBilan)
    {
        $this->txtBilan = $txtBilan;

        return $this;
    }

    /**
     * Get txtBilan
     *
     * @return string 
     */
    public function getTxtBilan()
    {
        return $this->txtBilan;
    }

    /**
     * Set namePsy1
     *
     * @param string $namePsy1
     * @return Psycho
     */
    public function setNamePsy1($namePsy1)
    {
        $this->namePsy1 = $namePsy1;

        return $this;
    }

    /**
     * Get namePsy1
     *
     * @return string 
     */
    public function getNamePsy1()
    {
        return $this->namePsy1;
    }

    /**
     * Set namePsy2
     *
     * @param string $namePsy2
     * @return Psycho
     */
    public function setNamePsy2($namePsy2)
    {
        $this->namePsy2 = $namePsy2;

        return $this;
    }

    /**
     * Get namePsy2
     *
     * @return string 
     */
    public function getNamePsy2()
    {
        return $this->namePsy2;
    }
    

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     * @return Psycho
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string 
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set contactMail
     *
     * @param string $contactMail
     * @return Psycho
     */
    public function setContactMail($contactMail)
    {
        $this->contactMail = $contactMail;

        return $this;
    }

    /**
     * Get contactMail
     *
     * @return string 
     */
    public function getContactMail()
    {
        return $this->contactMail;
    }

    /**
     * Set contactTel
     *
     * @param string $contactTel
     * @return Psycho
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel = $contactTel;

        return $this;
    }

    /**
     * Get contactTel
     *
     * @return string 
     */
    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return Psycho
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }
    /**
     * @var string
     */
    private $image;


    /**
     * Set image
     *
     * @param string $image
     * @return Psychomot
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @var string
     */
    private $image1;

    /**
     * @var string
     */
    private $image2;

    /**
     * @var string
     */
    private $image3;

    /**
     * @var string
     */
    private $image4;

    /**
     * @var string
     */
    private $image5;

    /**
     * @var string
     */
    private $image6;

    /**
     * @var string
     */
    private $image7;

    /**
     * @var string
     */
    private $image8;



    /**
     * Set image1
     *
     * @param string $image1
     * @return Psycho
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string 
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param string $image2
     * @return Psycho
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string 
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set image3
     *
     * @param string $image3
     * @return Psycho
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string 
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set image4
     *
     * @param string $image4
     * @return Psycho
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return string 
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * Set image5
     *
     * @param string $image5
     * @return Psycho
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;

        return $this;
    }

    /**
     * Get image5
     *
     * @return string 
     */
    public function getImage5()
    {
        return $this->image5;
    }

    /**
     * Set image6
     *
     * @param string $image6
     * @return Psycho
     */
    public function setImage6($image6)
    {
        $this->image6 = $image6;

        return $this;
    }

    /**
     * Get image6
     *
     * @return string 
     */
    public function getImage6()
    {
        return $this->image6;
    }

    /**
     * Set image7
     *
     * @param string $image7
     * @return Psycho
     */
    public function setImage7($image7)
    {
        $this->image7 = $image7;

        return $this;
    }

    /**
     * Get image7
     *
     * @return string
     */
    public function getImage7()
    {
        return $this->image7;
    }
    /**
     * Set image8
     *
     * @param string $image8
     * @return Psycho
     */
    public function setImage8($image8)
    {
        $this->image8 = $image8;

        return $this;
    }

    /**
     * Get image8
     *
     * @return string
     */
    public function getImage8()
    {
        return $this->image8;
    }

    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        // Add your code here
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        // Add your code here
    }
    /**
     * @var string
     */
    private $txtdef1;


    /**
     * Set txtdef1
     *
     * @param string $txtdef1
     * @return Psycho
     */
    public function setTxtdef1($txtdef1)
    {
        $this->txtdef1 = $txtdef1;

        return $this;
    }

    /**
     * Get txtdef1
     *
     * @return string 
     */
    public function getTxtdef1()
    {
        return $this->txtdef1;
    }
}
