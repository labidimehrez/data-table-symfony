<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    private function datatable()
    {
        return $this->get('datatable')
            ->setSearch(true)
            ->setEntity("AppBundle:Produit", "x")
            ->setFields(
                array(
                    "label of field 1" => 'x.id',
                    "label of field 2" => 'x.nom',
                    "Group" => 'g.nom',
                    "_identifier_" => 'x.id')
            )
            ->addJoin('x.category', 'g', \Doctrine\ORM\Query\Expr\Join::LEFT_JOIN)
            ->setSearch(true)
            ->setSearchFields(array(0, 2))
            ->setMultiple(
                array(
                    'delete' => array(
                        'title' => 'Delete',
                        'route' => 'multiple_delete_route' // path to multiple delete route action
                    ),

                )
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
        $em = $this->getDoctrine()->getManager();
        foreach ($ids as $id) {
            $produit = $em->getRepository('AppBundle:Produit')->find((int)$id);
            $em->remove($produit);
        }
        $em->flush();
        $this->datatable();
        return $this->render('AppBundle:Default:index.html.twig');

    }
}
