<?php

namespace App\Controller;

use App\Entity\Classroom;
use App\Entity\Student;
use App\Form\SearchStudentByClassType;
use App\Form\SearchStudentType;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class StudentController extends AbstractController
{
    /**
     * @Route("/student", name="student")
     */
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
    /**
     * @Route("/listStudent", name="listStudent")
     */
    public function listStudent()
    {
        $students = $this->getDoctrine()->getRepository(Student::class)->findAll();
        return $this->render('student/list.html.twig', ["students" => $students]);
    }

    ////Question1&question2
    /**
     * @Route("/listStudentWithSearch", name="listStudentWithSearch")
     */
    public function listStudentWithSearch(Request $request, StudentRepository $repository)
    {
        //All of Student
        $students = $repository->findAll();
        //list of students order By Mail
        $studentsByMail = $repository->orderByMail();
        //search
        $searchForm = $this->createForm(SearchStudentType::class);
        $searchForm->add("Recherche",SubmitType::class);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted()) {
            $nsc = $searchForm['nsc']->getData();
            $resultOfSearch = $repository->searchStudent($nsc);
            return $this->render('student/searchStudent.html.twig', array(
                "resultOfSearch" => $resultOfSearch,
                "searchStudent" => $searchForm->createView()));
        }
        return $this->render('student/listWithSearch.html.twig', array(
            "students" => $students,
            "studentsByMail" => $studentsByMail,
            "searchStudent" => $searchForm->createView()));
    }
    /////Question4
    /**
     * @Route("/listStudentByDate", name="listStudentByDate")
     */
    public function listStudentByDate()
    {

        $studentsByDate= $this->getDoctrine()->getRepository(Student::class)->orderByDate();
        return $this->render('student/listByDate.html.twig', [
            "studentByDate"=>$studentsByDate,
           ]);
    }

    /**
     * @Route("/listStudentEnabled", name="listStudentEnabled")
     */
    public function listStudentEnabled()
    {

        $studentsByEnabled= $this->getDoctrine()->getRepository(Student::class)->findEnabledStudent();
        return $this->render('student/listStudentsEnabled.html.twig', [
            "studentsByEnabled"=>$studentsByEnabled,
        ]);
    }
    /**
     * @Route("/addStudent", name="addStudent")
     */
    public function addStudent(Request $request)
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student);
        $form->add("Ajouter",SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();
            return $this->redirectToRoute('listStudent');
        }
        return $this->render("student/add.html.twig", array('form' => $form->createView()));
    }

    /**
     * @Route("/delete/{nsc}", name="deleteStudent")
     */
    public function deleteStudent($nsc)
    {
        $student = $this->getDoctrine()->getRepository(Student::class)->find($nsc);
        $em = $this->getDoctrine()->getManager();
        $em->remove($student);
        $em->flush();
        return $this->redirectToRoute("listStudent");
    }

    /**
     * @Route("/show/{nsc}", name="showStudent")
     */
    public function showStudent($nsc)
    {
        $student = $this->getDoctrine()->getRepository(Student::class)->find($nsc);
        return $this->render('student/show.html.twig', array("student" => $student));
    }

    /**
     * @Route("/update/{nsc}", name="updateStudent")
     */
    public function updateStudent(Request $request, $nsc)
    {
        $student = $this->getDoctrine()->getRepository(Student::class)->find($nsc);
        $form = $this->createForm(StudentType::class, $student);
        $form->add("Modifier",SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listStudent');
        }
        return $this->render("student/update.html.twig", array('form' => $form->createView()));
    }

    ////Question1 -DQL
    /**
     * @Route("/listStudentWithSearchDate", name="listStudentWithSearchDate")
     */
    public function listStudentWithSearchDate()
    {
        $repository = $this->getDoctrine()->getRepository(Student::class);
        //Show all students
        $students = $repository->studentsPerDateofBirth(new DateTime('2000-11-02'),new DateTime('2002-11-02'));
        return $this->render('student/listWithSearchDate.html.twig', ['students' => $students]);
    }

    //Question 3 -DQL
    /**
     * @Route("/searchStudentByAVG", name="searchStudentByAVG")
     */
    public function searchStudentByAVG(Request $request){
        $repository = $this->getDoctrine()->getRepository(Student::class);
        //Show all students
        $students = $repository->findAll();
        //Formulaire de recherche
        $searchForm = $this->createForm(SearchStudentByClassType::class);
        $searchForm->add('Search',SubmitType::class);
        $searchForm->handleRequest($request);
        if ($searchForm->isSubmitted()) {
            $minMoy=$searchForm['minMoy']->getData();
            $maxMoy=$searchForm['maxMoy']->getData();
            $resultOfSearch = $repository->findStudentByAVG($minMoy,$maxMoy);
            return $this->render('student/searchStudentByAVG.html.twig', [
                'students' => $resultOfSearch,
                'searchStudent' => $searchForm->createView()]);
        }
        return $this->render('student/searchStudentByAVG.html.twig', ['students' => $students,'searchStudent'=>$searchForm->createView()]);

    }

    //Question 4-DQL
    /**
     * @Route("/listStudentDontAdmitted", name="listStudentDontAdmitted")
     */
    public function listStudentDontAdmitted()
    {
        $students= $this->getDoctrine()->getRepository(Student::class)->findStudentDontAdmitted();
        return $this->render('student/list.html.twig', [
            "students"=>$students,
        ]);
    }

}
