<!-- navigation.php -->
<nav>
    <ul>
        <?php
        // Array of page titles and their corresponding filenames
        $pages = array(
            'Acasa' => 'index.php',
            'Competitii' => 'competitii.php',
            'Campioni' => 'campioni.php',
            '2026' => '2026.php',
        );

        // Get the current page filename
        $currentPage = basename($_SERVER['PHP_SELF']);

        // Generate dynamic navigation links
        foreach ($pages as $pageTitle => $pageFile) {
            $isActive = ($currentPage == $pageFile) ? 'class="active"' : '';
            echo "<li><a href=\"{$pageFile}\" {$isActive}>{$pageTitle}</a></li>";
        }
        ?>
    </ul>
</nav>

<?php
// Check if the current page is competitii.php
if ($currentPage == 'competitii.php') {
    // Display the secondary navigation for years
    ?>
    <nav class="nav-secundar">
        <ul>
            <?php
            // Array of secondary page titles and their corresponding filenames
            $secondaryPages = array(
                'Jocurile olimpice de iarna 2014' => '2014.php',
                'Jocurile olimpice de iarna 2018' => '2018.php',
                'Jocurile olimpice de iarna 2022' => '2022.php',
            );

            // Generate dynamic secondary navigation links
            foreach ($secondaryPages as $pageTitle => $pageFile) {
                $isActive = ($currentPage == $pageFile) ? 'class="active"' : '';
                echo "<li><a href=\"{$pageFile}\" {$isActive}>{$pageTitle}</a></li>";
            }
            ?>
        </ul>
    </nav>
    <?php
}

// Check if the current page is one of 2014.php, 2018.php, or 2022.php
if (in_array($currentPage, array('2014.php', '2018.php', '2022.php'))) {
    // Display the secondary navigation for competitiiPagini
    ?>
    <nav class="categorii-competitii">
        <ul>
            <?php
            // Array of secondary page titles and their corresponding filenames
            $competitiiPagini = array(
                'Individual masculin' => 'individual-m.php',
                'Individual feminin' => 'individual-f.php',
                'Perechi' => 'perechi.php',
                'Dans' => 'dans.php',
            );

            // Generate dynamic secondary navigation links
            foreach ($competitiiPagini as $pageTitle => $pageFile) {
                $isActive = ($currentPage == $pageFile) ? 'class="active"' : '';
                echo "<li><a href=\"{$pageFile}\" {$isActive}>{$pageTitle}</a></li>";
            }
            ?>
        </ul>
    </nav>
    <?php
}
?>
