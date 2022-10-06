<?php

namespace App\Controller;

use App\Entity\Products;
use App\Entity\Categories;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'create_product')]
    public function createProduct(ManagerRegistry $doctrine): Response
    {		
		$id = 1;
        $category = $doctrine->getRepository(Categories::class)->find($id);
        if (!$category) {
            throw $this->createNotFoundException('The category does not exist');
        } 
		
        $product = new Products();
		$product->setcID($category);
        $product->setpName('Keyboard');
        $product->setpPrice(1999);
        $product->setpUTID('Ergonomic and stylish!');
		$product->setpImageLink(null);
		$product->setpFileUploadDate(null);
		$product->setpFileSize(null);
		$product->setpFileLink(null);

        $entityManager = $doctrine->getManager();
		
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getpId());
    }
	
	
	#[Route('/category', name: 'create_category')]
    public function createCategory(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $category = new Categories();
        $category->setcName('Keyboard');
		
        // tell Doctrine you want to (eventually) save the category (no queries yet)
        $entityManager->persist($category);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new category with id '.$category->getCid());
    }
}

