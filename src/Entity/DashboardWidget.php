<?php

namespace App\Entity;

use App\Repository\DashboardWidgetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DashboardWidgetRepository::class)
 * @ORM\Table(name="dashboard_widgets")
 * @ORM\HasLifecycleCallbacks
 */
class DashboardWidget
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Dashboard::class, inversedBy="dashboardWidgets")
     */
    private $dashboard;

    /**
     * @ORM\ManyToOne(targetEntity=Widget::class, inversedBy="dashboardWidgets")
     */
    private $widget;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $x;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $y;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $width;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $height;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $minWidth;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $minHeight;

    /**
     * @ORM\Column(type="boolean", options={"default" : 0})
     */
    private $fixed;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDashboard(): ?Dashboard
    {
        return $this->dashboard;
    }

    public function setDashboard(?Dashboard $dashboard): self
    {
        $this->dashboard = $dashboard;

        return $this;
    }

    public function getWidget(): ?Widget
    {
        return $this->widget;
    }

    public function setWidget(?Widget $widget): self
    {
        $this->widget = $widget;

        return $this;
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getMinWidth(): ?int
    {
        return $this->minWidth;
    }

    public function setMinWidth(int $minWidth): self
    {
        $this->minWidth = $minWidth;

        return $this;
    }

    public function getMinHeight(): ?int
    {
        return $this->minHeight;
    }

    public function setMinHeight(int $minHeight): self
    {
        $this->minHeight = $minHeight;

        return $this;
    }

    public function getFixed(): ?bool
    {
        return $this->fixed;
    }

    public function setFixed(bool $fixed): self
    {
        $this->fixed = $fixed;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAt(): self
    {
        $this->createdAt = new \DateTime();

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAt(): self
    {
        $this->updatedAt = new \DateTime();

        return $this;
    }
}
