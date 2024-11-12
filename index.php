<?php
    ini_set('display_errors','On');
    
    require __DIR__.'/vendor/autoload.php';

    use App\Infrastructure\Routing\Router;

    use App\School\Entities\Student;
    use App\School\Entities\Teacher;
    use App\School\Entities\Course;
    use App\School\Entities\Subject;
    use App\School\Entities\Department;
    use App\Controllers\HomeController;

    $router = new Router();
    $router->addRoute('GET','/',[new HomeController(),'index'])
           ->addRoute('GET','/teachers',[new HomeController(),'teachers']);
    
    //$router->dispatch('GET','/');
    $router->run();
    dd($router);
     
    $student=new Student("test@test.com","Alberto");
    $teacher=new Teacher("profe@test.com","Jordi");
    $teacher->addToDepartment(new Department("Informatica"));
    
    
    $daw_2=new Course("2DAW");
    $daw_2->addSubject(new Subject("M7"))
            ->addSubject(new Subject("M8"))
            ->addSubject(new Subject("M6"));

            
    //dd($daw_2,$teacher);
   
