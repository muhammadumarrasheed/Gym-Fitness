<?php
// Include the necessary libraries
require_once('tcpdf/tcpdf.php'); // Replace with the path to your TCPDF or FPDF library file
include "dbconn.php"; // Include your database connection code

// Get the user email from the query string
$userEmail = $_GET['userEmail'];

// Retrieve user payment details from the database
$sql = "SELECT * FROM userpayment WHERE userEmail = '" . mysqli_real_escape_string($con, $userEmail) . "'";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Create a new TCPDF or FPDF instance
    $pdf = new TCPDF(); // Replace with 'new FPDF()' if you're using FPDF library

    // Set document information
    $pdf->SetCreator('Gym Fitness');
    $pdf->SetAuthor('Gym Fitness');
    $pdf->SetTitle('User Payment Details');
    $pdf->SetSubject('User Payment Details');
    $pdf->SetKeywords('user, payment, details');

    // Add a page
    $pdf->AddPage();

    // Set the font
    $pdf->SetFont('times', '', 12);

    // Output the user payment details
    $pdf->Cell(0, 10, 'User Email: ' . $row['userEmail'], 0, 1);
    $pdf->Cell(0, 10, 'Payment Status: ' . $row['status'], 0, 1);
    $pdf->Cell(0, 10, 'Date: ' . $row['date'], 0, 1);

    // Output the PDF as a download
    $pdf->Output('user_payment_details.pdf', 'D');
    header("Location: userPaymentData.php");
} else {
    echo "No payment details found for the provided email.";
}
?>