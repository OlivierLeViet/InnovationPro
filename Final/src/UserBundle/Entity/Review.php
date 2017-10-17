<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
      * @ORM\Column(name="rating", type="integer")
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 1,
     *      max = 10,
     *      minMessage = "La note doit être comprise entre 1 et 10",
     *      maxMessage = "La note doit être comprise entre 1 et 10"
     * )
     */
    private $note;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="UserrBundle\Entity\User", inversedBy="review")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Device
     *
     * @ORM\ManyToOne(targetEntity="DeviceBundle\Entity\Player", inversedBy="review")
     * @ORM\JoinColumn(name="device_id", referencedColumnName="id")
     */
    private $device;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Review
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Review
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set device
     *
     * @param Device $device
     *
     * @return Review
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return Device
     */
    public function getDevice()
    {
        return $this->device;
    }
}

