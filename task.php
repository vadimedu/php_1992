<?php
    class Task {
        private string $description;
        private DateTime $dateCreated;
        private DateTime $dateUpdated;
        private DateTime $dateDone;
        private int $priority;
        private bool $isDone = false;
        private string $user;

        public function __construct(string $user, string $description, int $priority){
            $this->user        = $user;
            $this->description = $description;
            $this->priority    = $priority;
            $this->dateCreated = new DateTime();
        }

        public function setDescription($decsription): void {
            $this->description = $decsription;
            $this->dateUpdated = new DateTime();
        }
        public function markAsDone(): void {
            $this->isDone = true;
            $this->dateUpdated = new DateTime();
            $this->dateDone = new DateTime();
        }
    }

    $mega = new Task('mega', "walk", 1);
    print_r($mega);
?>

