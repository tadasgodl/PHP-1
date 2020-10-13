<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php print 'As, ' . date('l') . ' ir PHP'?></title>
    <meta charset="UTF-8">
</head>
<body>
    <main>
        <h1>
            Vardas
            <span style="font-weight: normal">
                - HTML <?php print 'ir PHP'; ?> asas jau nuo
                <?php print date('Y') . ' metu'; ?>
            </span>
        </h1>
        <p>
            Viskas prasidejo
            <?php print date('m') . ' menesio ' . date('d') . ' diena!'; ?>
        </p>
    </main>
</body>
</html>