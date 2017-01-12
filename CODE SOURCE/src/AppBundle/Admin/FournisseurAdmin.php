<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 25/11/2016
 * Time: 16:34
 */
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class FournisseurAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('nom', 'text',array('label' => 'Nom du fournisseur'))
            ->add('description', 'textarea',array('label' => 'Description'))
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idfournisseur',null,array('label' => 'ID'))
            ->addIdentifier('nom',null,array('label' => 'Nom'))
            ->addIdentifier('description',null,array('label' => 'Description'))
        ;
    }


    public function toString($object)
    {
        return $object instanceof Fournisseur
            ? $object->getTitle()
            : 'Fournisseur'; // shown in the breadcrumb on the create view
    }


}