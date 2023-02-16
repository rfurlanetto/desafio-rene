    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">
                <?= $_SESSION['oConfig']->getConfig()->info->title; ?> -
                <?= $_SESSION['oConfig']->getConfig()->info->phone; ?>
                <?= $_SESSION['oConfig']->getConfig()->info->phone; ?>
                Version: <?= $_SESSION['oConfig']->getConfig()->version; ?>
            </p>
        </div>
    </footer>

    <script src="/public/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/public/js/main.js"></script>
    <?= $aViewJs; ?>
</body>
</html>