<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="genus_note")
 */
class GenusNote {
  
  /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
  private $id;
  
  /**
    * @ORM\Column(type="string")
    */
  private $username;
  
  /**
   * @ORM\Column(type="string")
   */
  private $userAvatarFilename;
  
  /**
     * @ORM\Column(type="text")
     */
  private $note;
  
  /**
     * @ORM\Column(type="datetime")
     */
  private $createdAt;
  
  /**
   * @ORM\ManyToOne(targetEntity="Genus", inversedBy="notes")
   * @ORM\JoinColumn(nullable=false)
   */
  private $genus;
  

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return GenusNote
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userAvatarFilename
     *
     * @param string $userAvatarFilename
     *
     * @return GenusNote
     */
    public function setUserAvatarFilename($userAvatarFilename)
    {
        $this->userAvatarFilename = $userAvatarFilename;

        return $this;
    }

    /**
     * Get userAvatarFilename
     *
     * @return string
     */
    public function getUserAvatarFilename()
    {
        return $this->userAvatarFilename;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return GenusNote
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return GenusNote
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set genus
     *
     * @param \AppBundle\Entity\Genus $genus
     *
     * @return GenusNote
     */
    public function setGenus(\AppBundle\Entity\Genus $genus = null)
    {
        $this->genus = $genus;

        return $this;
    }

    /**
     * Get genus
     *
     * @return \AppBundle\Entity\Genus
     */
    public function getGenus()
    {
        return $this->genus;
    }
}
