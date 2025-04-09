<?php
class Session
{
    private static $instance = null;
    private $sessionOuverte = false;

    private function __construct()
    {
        if (!$this->sessionOuverte) {
            session_start();
            $this->sessionOuverte = true;
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Session();
        }
        return self::$instance;
    }


    public function setNbVisites(int $valeur)
    {
        $_SESSION['visites'] = $valeur;
    }

    public function getNbVisites(): int
    {
        return (int)$_SESSION['visites'];
    }



    public function destroy()
    {
        session_destroy();
        $_SESSION = [];
        $this->sessionOuverte = false;
    }

    public function incrementerVisites()
    {
        if (!isset($_SESSION['visites'])) {
            $this->setNbVisites(1);
        } else {
            $this->setNbVisites($this->getNbVisites() + 1);
        }
    }
}
