<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

class ProductController extends AbstractController
{
	#[Route('/api/products/{id<\d+>}', methods: ['GET'])]
    public function getProduct(int $id = null, LoggerInterface $logger): Response
    {
        $product = [
			[
				'id' => 5,
				'name' => 'Waterfalls',
				'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
			],
			[
				'id' => 8,
				'name' => 'Hello',
				'url' => 'https://symfonycasts.s3.amazonaws.com/sample2.mp3',
			],
			[
				'id' => 5,
				'name' => 'Hello',
				'url' => 'https://symfonycasts.s3.amazonaws.com/sample2.mp3',
			],
        ];	

		$product_filtered = array_filter($product, function($_array) use ($id){ return isset($_array['id']) && $_array['id'] == $id; });
		$json = $id ? $product_filtered : $product;
        $logger->info('Returning API response for products in category {id}', [
            'id' => $id,
        ]);
		return $this->json($json);
    }
	
}