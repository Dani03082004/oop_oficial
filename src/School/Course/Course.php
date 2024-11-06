<?php 

    namespace App\School\Course;
    use App\School\Subject\Subject;

    class Course{
        protected $name;
        protected $subjects=[];

        function __construct(string $name){
            $this->name=$name;
        }

        function addSubject(Subject $subject){
            $this->subjects[]=$subject;
            return $this;
        }

    }