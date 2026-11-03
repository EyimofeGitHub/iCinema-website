<?php
// Keep these page names aligned with routes/web.php.
$bookingSteps = [
    1 => ['label' => 'Showtimes & Tickets', 'page' => 'showtimes'],
    2 => ['label' => 'Seats & Extras',      'page' => 'seats'],
    3 => ['label' => 'Checkout',            'page' => 'checkout'],
    4 => ['label' => 'Confirmation',        'page' => 'booking-confirmation'],
];

$currentPage = $_GET['page'] ?? $_POST['page'] ?? 'home';
$currentStep = isset($currentStep) ? (int) $currentStep : 0;
foreach ($bookingSteps as $stepNumber => $stepData) {
    if ($stepData['page'] === $currentPage) {
        $currentStep = $stepNumber;
        break;
    }
}
?>
<nav class="steps card band p-3 mb-4" aria-label="Booking progress">
    <div class="steps-inner d-flex justify-content-between">
        <?php foreach ($bookingSteps as $stepNumber => $stepData): ?>
            <?php $isCurrentStep = $stepNumber === $currentStep; ?>
            <div class="step<?php echo $isCurrentStep ? ' active' : ''; ?>">
                <a href="<?php echo htmlspecialchars($publicPath . '/Index.PHP?page=' . rawurlencode($stepData['page']), ENT_QUOTES, 'UTF-8'); ?>"
                   <?php echo $isCurrentStep ? ' aria-current="step"' : ''; ?>>
                    <span class="step-number"><?php echo $stepNumber; ?></span>
                    <span class="step-label"><?php echo htmlspecialchars($stepData['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                </a>
            </div>
        <?php endforeach; ?>
        </div>
</nav>