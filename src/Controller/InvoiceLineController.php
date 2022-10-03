<?php

namespace App\Controller;

use App\Entity\InvoiceLines;
use App\Form\InvoiceLineType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceLineController extends AbstractController
{
    #[Route('/invoice/line', name: 'app_invoice_line')]
    public function index(): Response
    {
        $invoiceLines = new InvoiceLines();
        $form = $this->createForm(InvoiceLineType::class, $invoiceLines);
        return $this->render('invoice_line/index.html.twig', [
            'line' =>  $form->createView(),
        ]);
    }
}
