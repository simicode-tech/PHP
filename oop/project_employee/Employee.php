<?php

// Calculate the Employee Salary

class Employee{
    public $id;
    public $name;
    public $WorkingHoursPerDay =8;
    public $hourlyRate =15;
    public $totalLeaveTaken;
    public $workingDays;

    function getSalaryAmount($totalDays):int{
        $this->workingDays =$totalDays -$this->totalLeaveTaken;
        $salary =$this->workingDays * $this->WorkingHoursPerDay*$this->hourlyRate;
        return $salary;
    }

}

$emp1 = new Employee();
$emp1->id =101;
$emp1->name ="janet Ayomikun";
$emp1->totalLeaveTaken = 4;
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worke for $emp1->workingDays and taken $emp1->totalLeaveTaken leave".PHP_EOL;
echo "$emp1->name salary is $salary".PHP_EOL;

