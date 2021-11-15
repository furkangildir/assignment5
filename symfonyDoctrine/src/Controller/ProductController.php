<?php
// src/Controller/ProductController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;
use App\Form\Type\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ProductController extends AbstractController
{
    /**
     * @Route("/product/new", name="create_product")
     */
    public function new(Request $request): Response
    {
        
        $product = new Product();

        $form=$this->createForm(ProductType::class,$product);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
             $entityManager = $this->getDoctrine()->getManager();

             $entityManager->persist($product);

             $entityManager->flush();
            
            echo "success"; exit;
        }

        return $this->render('product/new.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }
    /**
     * @Route("/product/{id}", name="getProduct")
     */
    public function getProduct($id):Response
    {
        
        $product = $this->getDoctrine()
        ->getRepository(Product::class)
        ->find($id);

        if(!$product)
        {
         echo "No product found for id:".$id;
         exit;
        }
        return new Response("Ürün Adı:".$product->getName()."<br>Ürün Fiyatı:".$product->getPrice()."<br>Ürün Açıklaması:".$product->getDescription());
        
    }
}