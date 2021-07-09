<?php

namespace App\Controller;

//use http\Client\Request;
use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("shop")
 */
class ShopController extends AbstractController{

    const PRODUCTS = [
        ['id' => 1, 'name' => 'laravel 6'],
        ['id' => 2, 'name' => 'reactJs'],
        ['id' => 3, 'name' => 'angular']
    ];

    /**
     * @Route("/add", name="add-product", methods={"POST"})
     */
    public function add(Request $request){

        $serializer = $this->get('serializer');
        $product = $serializer->deserialize($request->getContent(), Products::class, 'json');

        /*$encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $product = $serializer->deserialize($request->getContent(), Products::class, 'json');*/

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return $this->json($product);
    }

    /**
     * @Route("/{page}", defaults={"page" : 10}, name="get-all")
     */
    public function index($page, Request $request){
        return $this->json([
            'page' => $page,
            'name' => $request->get('name'),
            'data' => array_map(function ($product){
                return $this->generateUrl('get-product-by-id', ['id' => $product['id']]);
            }, self::PRODUCTS)
        ]);
    }

    /**
     * @Route("/products/{id}", requirements={"id": "\d+"}, name="get-product-by-id")
     */
    public function productById($id){
        $i = array_search($id, \array_column(self::PRODUCTS, 'id'));
        return $this->json(self::PRODUCTS[$i]);
    }

    /**
     * @Route("/products/{name}", name="get-product-by-name")
     */
    public function productByName($name){
        $i = array_search($name, \array_column(self::PRODUCTS, 'name'));
        return $this->json(self::PRODUCTS[$i]);
    }
}