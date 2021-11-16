<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $sum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity=Account::class, inversedBy="debitTransactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $debitAccount;

    /**
     * @ORM\ManyToOne(targetEntity=Account::class, inversedBy="creditTransactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creditAccount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSum(): ?int
    {
        return $this->sum;
    }

    public function setSum(int $sum): self
    {
        $this->sum = $sum;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getDebitAccount(): ?Account
    {
        return $this->debitAccount;
    }

    public function setDebitAccount(?Account $debitAccount): self
    {
        $this->debitAccount = $debitAccount;

        return $this;
    }

    public function getCreditAccount(): ?Account
    {
        return $this->creditAccount;
    }

    public function setCreditAccount(?Account $creditAccount): self
    {
        $this->creditAccount = $creditAccount;

        return $this;
    }
}
