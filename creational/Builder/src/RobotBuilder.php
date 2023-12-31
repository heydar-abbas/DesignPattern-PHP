<?php

namespace src;

class RobotBuilder {

    public function __construct(private Robot $robot) {
        $this->buildRobotHead();
        $this->buildRobotTorso();
        $this->buildRobotArms();
        $this->buildRobotLegs();
    }

    public function buildRobotHead(): void {
        $this->robot->setRobotHead("Tin Head!\n");
    }

    public function buildRobotTorso(): void {
        $this->robot->setRobotTorso("Tin Torso!\n");
    }

    public function buildRobotArms(): void {
        $this->robot->setRobotArms("Blowtorch Arms!\n");
    }

    public function buildRobotLegs(): void {
        $this->robot->setRobotLegs("Roller Skates!\n");
    }

    public function getRobot(): Robot {
        return $this->robot;
    }
}
