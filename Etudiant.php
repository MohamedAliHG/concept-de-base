<?php
class Etudiant
{
    private string $nom;
    private array $notes = [];
    public function __construct(string $nom, float ...$notes)
    {
        $this->nom = $nom;
        for ($i = 0; $i < count($notes); $i++) {
            $this->notes[$i] = $notes[$i];
        }
    }
    public function afficheNotes(): void
    {
        foreach ($this->notes as $note) {
            echo $note . "\n";
        }
    }
    public function calculeMoyenne(): float
    {
        return array_sum($this->notes) / count($this->notes);
    }
    public function adminOuNon(): void
    {
        echo $this->calculeMoyenne() >= 10 ? "Admis" : "Non Admis";
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getNotes(): array
    {
        return $this->notes;
    }
}
$etudiants = [];
$etudiant1 = new Etudiant("Aymen", 11, 13, 18, 7, 10, 13, 2, 5, 1);
array_push($etudiants, $etudiant1);
$etudiant2 = new Etudiant("Skander", 15, 9, 8, 16, 15, 9, 8, 16);
array_push($etudiants, $etudiant2);