<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    private function datatable()
    {   $controller_instance = $this;
        return $this->get('datatable')
            ->setSearch(true)
            ->setEntity("AppBundle:Produit", "x")
            ->setFields(
                array(
                    "label of field 1" => 'x.id',
                    "label of field 2" => 'x.nom',
                    "Group" => 'g.nom',
                    "Action" => 'x.id',
                    "_identifier_" => 'x.id')
            )
            ->addJoin('x.category', 'g', \Doctrine\ORM\Query\Expr\Join::LEFT_JOIN)
            ->setSearch(true)
            ->setSearchFields(array(0, 1, 2))
           /* ->setMultiple(
                array(
                    'delete' => array(
                        'title' => 'Delete',
                        'route' => 'multiple_delete_route' // path to multiple delete route action
                    ),

                )
            );*/

            ->setRenderers(
                array(
                   3 => array(
                        'view' => 'AppBundle:Renderers:_actions.html.twig', // Path to the template
                        'params' => array( // All the parameters you need (same as a twig template)
                            'edit_route' => 'route_edit',
                            'detail_route' => 'route_detail'
                        ),
                    ),
                )
            )
            ->setRenderer(
                function(&$data) use ($controller_instance) {
                    foreach ($data as $key => $value) {
                        if ($key == 1) {            // 1 => address field
                            $data[$key] = $controller_instance
                                ->get('templating')
                                ->render(
                                    'AppBundle:Module:_grid_entity.html.twig',
                                    array('data' => $value)
                                );
                        }
                    }
                }
            );


    }

    public function gridAction()
    {

        return $this->datatable()->execute();
    }

    public function indexAction()
    {
        $this->datatable();
        return $this->render('AppBundle:Default:index.html.twig');
    }

    public function deleteAction(Request $request)
    {
        $data = $this->getRequest()->get('dataTables');
        $ids = $data['actions'];
        /*$em = $this->getDoctrine()->getManager();
        foreach ($ids as $id) {
            $produit = $em->getRepository('AppBundle:Produit')->find((int)$id);
            $em->remove($produit);
        }
        $em->flush();*/

        $this->datatable()->execute();
        return $this->render('AppBundle:Default:index.html.twig');
//        return $this->redirect($this->generateUrl('datatable_list'));
    }

    public function editAction($id, Request $request)
    {
        $this->datatable()->execute();
        return $this->render('AppBundle:Default:index.html.twig');
    }
    public function detailAction($id, Request $request)
    {
        $this->datatable()->execute();
        return $this->render('AppBundle:Default:index.html.twig');
    }
}
